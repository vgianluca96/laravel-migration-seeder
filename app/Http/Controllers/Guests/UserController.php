<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class UserController extends Controller
{
    public function index()
    {

        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
