<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;
use Session;

class BrandController extends Controller
{
    /**
     * view places list
     * @return Factory|View
     */
    public function index()
    {
        $data = [
            'brands' => Brand::orderBy('brand_name')->get()
        ];

        return view('admin.brand.index')->with($data);
    }


    /**
     * show category save form
     * @return Factory|View
     */
    public function create()
    {
        $data = [

        ];
        return view('admin.brand.create')->with($data);
    }


    /**
     * save category data in database
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $brandData = $this->validateRequest();

        if (Brand::create($brandData)) {
            Session::flash('success', 'Brand Added successfully!');
            return redirect(route('admin.brand.index'));
        } else {
            Session::flash('error', 'Failed to save place!');
            return redirect(route('admin.brand.create'));
        }

    }

    /**
     * validation data
     * @return array
     */
    private function validateRequest()
    {
        return request()->validate([
            'brand_name' => 'required|unique:brands|min:2',
            'address' => 'sometimes',
            'mobile' => 'sometimes',
        ]);

    }

    /**
     * edit individual place
     * @param Brand $brand
     * @return Restaurant
     */
    public function edit(Brand $brand)
    {
        $data = [
            'brand' => $brand,
        ];

        return view('admin.brand.edit')->with($data);
    }

    /**
     * update place
     * @param Request $request
     * @param Brand $brand
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Brand $brand)
    {
        $validatedData = $this->updateValidateRequest();

        if ($brand->update($validatedData)) {
            Session::flash('success', 'Brand Updated successfully!');
            return redirect(route('admin.brand.index'));
        } else {
            Session::flash('error', 'Failed to update place!');
            return redirect(route('admin.brand.create'));
        }
    }

    /**
     * update validation data
     * @return array
     */
    private function updateValidateRequest()
    {
        return request()->validate([
            'brand_name' => 'min:3|max:100',
            'address' => 'sometimes',
            'mobile' => 'sometimes',
        ]);
    }

    /**
     * delete restaurant individually
     * @param Brand $brand
     * @return RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(Brand $brand)
    {
        if ($brand->delete()) {

            Session::flash('success', 'Brand deleted successfully!');
            return redirect(route('admin.brand.index'));
        } else {
            Session::flash('error', 'Failed to delete food!');
            return redirect(route('admin.food.index'));
        }
    }
}
