<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

class BankController extends Controller
{
    public function index()
    {
        return view('bank');
    }

    public function add_bank(Request $request)
    {
        $data = new Bank;

        $data->name = $request->bankName;
        $data->active = $request->active;

        $data->save();

        return redirect()->back();
    }
}
