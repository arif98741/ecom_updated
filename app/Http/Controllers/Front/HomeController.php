<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard
     * @return Renderable
     */
    public function index()
    {

        return view('front.home');
    }
}
