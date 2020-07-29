<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\Request;
use Session;

class SubcategoryController extends Controller
{
    /**
     * view sub category list
     * @return Factory|View
     */
    public function index()
    {
        $data = [
            'sub_categories' => SubCategory::with(['category'])
                ->get()
        ];

        return view('admin.sub-category.index')->with($data);
    }


    /**
     * show category save form
     * @return Factory|View
     */
    public function create()
    {
        $data = [
            'categories' => Category::orderBy('category_name')->get()
        ];
        return view('admin.sub-category.create')->with($data);
    }


    /**
     * save category data in database
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $subcategoryData = $this->validateRequest();
        if (SubCategory::create($subcategoryData)) {
            Session::flash('success', 'SubCategory Added successfully!');
            return redirect(route('admin.sub-category.index'));
        } else {
            Session::flash('error', 'Failed to save sub category!');
            return redirect(route('admin.sub-category.create'));
        }

    }

    /**
     * validation data
     * @return array
     */
    private function validateRequest()
    {
        return request()->validate([
            'sub_category_name' => 'required|unique:sub_categories|min:3',
            'category_id' => 'required',
        ]);

    }

    /**
     * edit individual sub category
     * @param SubCategory $sub_category
     * @return Restaurant
     */
    public function edit(SubCategory $sub_category)
    {
        $data = [
            'sub_category' => $sub_category,
            'categories' => Category::orderBy('category_name')->get()
        ];

        return view('admin.sub-category.edit')->with($data);
    }

    /**
     * update sub category
     * @param Request $request
     * @param SubCategory $sub_category
     * @return RedirectResponse|Redirector
     */
    public
    function update(Request $request, SubCategory $sub_category)
    {
        $validatedData = $this->updateValidateRequest();

        if ($sub_category->update($validatedData)) {
            Session::flash('success', 'SubCategory Updated successfully!');
            return redirect(route('admin.sub-category.index'));
        } else {
            Session::flash('error', 'Failed to update sub category!');
            return redirect(route('admin.sub-category.create'));
        }
    }

    /**
     * update validation data
     * @return array
     */
    private function updateValidateRequest()
    {
        return request()->validate([
            'sub_category_name' => 'min:3|max:100',
            'category_id' => 'required'
        ]);
    }

    /**
     * delete restaurant individually
     * @param SubCategory $sub_category
     * @return RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(SubCategory $sub_category)
    {
        if ($sub_category->delete()) {

            Session::flash('success', 'SubCategory deleted successfully!');
            return redirect(route('admin.sub-category.index'));
        } else {
            Session::flash('error', 'Failed to delete food!');
            return redirect(route('admin.food.index'));
        }
    }
}
