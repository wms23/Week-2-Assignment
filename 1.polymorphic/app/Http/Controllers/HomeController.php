<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $toDoLists = \App\ToDoList::where('user_id',\Auth::guard('web')->user()->id)->get();

        return view('home', compact('toDoLists'));
//        return view('home');
    }
}
