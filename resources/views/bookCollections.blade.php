<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>booksApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="d-flex flex-column vh-100">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">booksApp |</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/booksApp">Home</a>
                    <a class="nav-link active" href="/booksApp/collections">Collections</a>
                    <a class="nav-link" href="/booksApp/new">New</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        @foreach($data as $data)

        <form action="{{ url('/booksApp/update_book',$data->id) }}" method="get">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card" style="width: 22rem">
                        <img src="{{ $data->img_url }}" class="card-img-top" alt="No Available Picture" height="430" />
                        <input class="form-control" type="hidden" id="img_url" name="book[img_url]" value="{{ $data->img_url }}" required />


                        <div class="card-body">
                            <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-text">{{ $data->author }}</p>
                            <p class="card-text">{{ $data->first_publish_year }}</p>

                            <input class="form-control" type="hidden" id="title" name="book[title]" value="{{ $data->title }}" required />

                            <input class="form-control" type="hidden" id="author_name" name="book[author_name]" value="{{ $data->author }}" required />

                            <input class="form-control" type="hidden" id="title" name="book[first_publish_year]" value="{{ $data->first_publish_year }}" required />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <u>
                        <h1>{{ $data->title }}</h1>
                    </u>
                    <input name="book[id]" type="hidden" value="{{ $data->id }}" />
                    <small>
                        <p class="fw-light">DATE READ : {{ $data->read_date }}.</p>

                        <p class="fw-light">
                            HOW I STRONGLY RECOMMEND IT: {{ $data->rating }}/10
                        </p>
                    </small>
                    <br />

                    <p>{{ $data->notes }}</p>

                    <input class="form-control" type="hidden" id="read_date" name="book[read_date]" value="{{ $data->read_date }}" required />

                    <input class="form-control" type="hidden" id="rating" name="book[rating]" value="{{ $data->rating }}" required />

                    <input class="form-control" type="hidden" id="notes" name="book[notes]" value="{{ $data->notes }}" required />
                    <div class="mb-3 d-flex justify-content-left gap-2">
                        <button class="btn btn-warning" type="submit">Update</button>
        </form>
        <form action="/books/delete" method="post">
            <input name="book[id]" type="hidden" value="{{ $data->id }}" />
            <button class="btn btn-outline-secondary" type="submit">Remove</button>
        </form>
        </div>
        </div>
        </div>


        <br />

        @endforeach

    </main>

    <footer class="footer bg-dark py-3 mt-auto">
        <div class="container d-flex justify-content-center">
            <span style="color: grey">&copy;booksApp 2024 - Jerome Dauz</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            "use strict";

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll(".validated-form");

            // Loop over them and prevent submission
            Array.from(forms).forEach((form) => {
                form.addEventListener(
                    "submit",
                    (event) => {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add("was-validated");
                    },
                    false
                );
            });
        })();
    </script>
</body>

</html>