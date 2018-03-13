<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){

        $section = ['Dashboard', 'Home'];

        return view('admin.index', compact('section'));
    }
}
