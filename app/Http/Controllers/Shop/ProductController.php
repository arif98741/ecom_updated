<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Shop;
use App\Providers\AuthData;
use App\Providers\MyHelperProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Image;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource
     * @return void
     */
    public function index()
    {

        $data = [
            'products' => Product::with(['category', 'shop', 'brand', 'color'])
                ->where('shop_id', AuthData::userId('shop'))
                ->orderBy('product_name', 'asc')
                ->get()
        ];
        return view('shop.product.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data = [
            'categories' => Category::orderBy('category_name')->get(),
            'shops' => Shop::orderBy('name', 'asc')->get(),
            'brands' => Brand::orderBy('brand_name', 'asc')->get(),
            'colors' => Color::orderBy('color_name', 'asc')->get(),
        ];

        return view('shop.product.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $productData = $this->validateRequest();
        $productData['shop_id'] = AuthData::userId('shop');
        if (!empty($request->file('fea_image1'))) {
            $image = MyHelperProvider::imageUpload($request, 'fea_image1', 'product/');
            $productData['fea_image1'] = $image['file_name'];
        }

        if (Product::create($productData)) {
            Session::flash('success', 'Product Added successfully!');
            return redirect(route('shop.product.index'));
        } else {
            Session::flash('error', 'Failed to save place!');
            return redirect(route('shop.product.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return void
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return void
     */
    public function edit(Product $product)
    {
        $data = [
            'product' => $product,
            'categories' => Category::orderBy('category_name')->get(),
            'shops' => Shop::orderBy('name', 'asc')->get(),
            'brands' => Brand::orderBy('brand_name', 'asc')->get(),
            'colors' => Color::orderBy('color_name', 'asc')->get(),
        ];
        return view('shop.product.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $this->validateRequestUpdate();
        if (!empty($request->file('fea_image1'))) {
            //$status = Storage::disk('public')->exists(public_path('uploads/food/feature/' . $food->feature_photo));
            if (file_exists(public_path('uploads/product/feature/' . $food->feature_photo))) {
                File::delete(public_path('uploads/product/feature/' . $food->feature_photo));
            }
            if (file_exists(public_path('uploads/product/thumbnail/' . $food->feature_photo))) {
                File::delete(public_path('uploads/product/thumbnail/' . $food->feature_photo));
            }

            $image = HelperController::imageUpload($request, 'fea_image1', 'product/');
            $validatedData['fea_image1'] = $image['file_name'];
        } else {

            unset($validatedData['fea_image1']);
        }

        if ($product->update($validatedData)) {
            Session::flash('success', 'Product Updated successfully!');
            return redirect(route('shop.product.index'));
        } else {
            Session::flash('error', 'Failed to update product!');
            return redirect(route('shop.product.create'));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy(Product $product)
    {
        if ($product->delete()) {

            Session::flash('success', 'Product deleted successfully!');
            return redirect(route('shop.product.index'));
        } else {
            Session::flash('error', 'Failed to delete product!');
            return redirect(route('shop.product.index'));
        }
    }


    private function validateRequest()
    {
        return request()->validate([
            'product_name' => 'required|min:3',
            'category_id' => 'required',
            'brand_id' => 'required',
            'color_id' => 'required',
            'model' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'description' => 'sometimes'
        ]);
    }

    private function validateRequestUpdate()
    {
        return request()->validate([
            'product_name' => 'required|min:3',
            'category_id' => 'required',
            'brand_id' => 'required',
            'color_id' => 'required',
            'model' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'description' => 'sometimes'
        ]);
    }
}
