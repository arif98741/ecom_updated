<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Session;

class ShopController extends Controller
{
    /**
     * Show Shop List
     */
    public function index()
    {
        $data = [
            'shops' => Shop::orderBy('name')->get()
        ];
        return view('admin.shop.index')->with($data);
    }

    public function destroy(Shop $shop)
    {
        if ($shop->delete()) {

            Session::flash('success', 'Shop deleted successfully!');
            return redirect(route('admin.shop.index'));
        } else {
            Session::flash('error', 'Failed to delete shop!');
            return redirect(route('admin.shop.index'));
        }
    }
}
