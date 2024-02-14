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
                    <a class="nav-link" href="/books">Collections</a>
                    <a class="nav-link active" href="/booksApp/new">New</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <!-- 
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 22rem">
                    <img src="" alt="" height="430" />
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div> -->
        <div class="row mb-3">
            <div class="col-6 offset-3">
                <h3 class="text-center">New Book</h3>

                <form action="/books" method="POST" novalidate class="validated-form">
                    <div class="mb-3">
                        <label class="form-label" for="title">Title</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Enter Title" required autofocus />
                        <div class="valid-feedback">Looks good!</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="author_name">Author</label>
                        <input class="form-control" type="text" id="author_name" name="author_name" placeholder="Enter Author" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="first_publish_year">Publish Year</label>
                        <input class="form-control" type="text" id="first_publish_year" name="first_publish_year" placeholder="Enter Publish Year" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="img_url">Image URL</label>
                        <input class="form-control" type="text" id="img_url" name="img_url" placeholder="Enter Image URL" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="readDate">Read Date</label>
                        <input id="readDate" class="form-control" type="date" name="readDate" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="price">Rating</label>
                        <div class="input-group">
                            <span class="input-group-text" id="rating"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                </svg></span>
                            <input id="rating" type="number" class="form-control" placeholder="1 to 10" min="1" max="10" aria-label="rating" aria-describedby="rating-label" name="book[rating]" required />
                        </div>
                        <div class="valid-feedback">Looks good!</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="notes">Notes</label>
                        <textarea class="form-control" name="book[notes]" id="notes" cols="30" rows="3" required></textarea>
                        <div class="valid-feedback">Looks good!</div>
                    </div>

                    <div class="mb-3 d-flex justify-content-center gap-2">
                        <button class="btn btn-success" type="submit">Add Book</button>
                    </div>
                </form>
            </div>

        </div>

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