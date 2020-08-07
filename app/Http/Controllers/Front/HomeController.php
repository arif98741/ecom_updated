<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Auth;
use Illuminate\Contracts\Support\Renderable;

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
        $data = [
            'new_products' => Product::with(['category', 'shop', 'brand', 'color'])
                ->orderBy('id', 'desc')
                ->limit(8)
                ->get()
        ];

        return view('front.home')->with($data);
    }
}
