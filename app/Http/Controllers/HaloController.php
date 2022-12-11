<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HaloController extends Controller
{
    public function index(){

        //mengambil data dari table pengguna
        $user = User::get();

        //mengirim data pengguna ke view db
        return view('db', ['pengguna' => $user]);
    }
}
