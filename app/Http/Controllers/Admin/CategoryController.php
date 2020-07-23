<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    /**
     * view places list
     * @return Factory|View
     */
    public function index()
    {
        $data = [
            'categories' => Category::orderBy('category_name')->get()
        ];

        return view('admin.category.index')->with($data);
    }


    /**
     * show category save form
     * @return Factory|View
     */
    public function create()
    {
        $data = [

        ];
        return view('admin.category.create')->with($data);
    }


    /**
     * save category data in database
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $categoryData = $this->validateRequest();
        if (Category::create($categoryData)) {
            Session::flash('success', 'Category Added successfully!');
            return redirect(route('admin.category.index'));
        } else {
            Session::flash('error', 'Failed to save place!');
            return redirect(route('admin.category.create'));
        }

    }


    /**
     * edit individual place
     * @param Category $category
     * @return Restaurant
     */
    public function edit(Category $category)
    {
        $data = [
            'category' => $category,
        ];

        return view('admin.category.edit')->with($data);
    }


    /**
     * update place
     * @param Request $request
     * @param Category $category
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $this->updateValidateRequest();

        if ($category->update($validatedData)) {
            Session::flash('success', 'Category Updated successfully!');
            return redirect(route('admin.category.index'));
        } else {
            Session::flash('error', 'Failed to update place!');
            return redirect(route('admin.category.create'));
        }
    }


    /**
     * delete restaurant individually
     * @param Category $category
     * @return RedirectResponse|Redirector
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {

            Session::flash('success', 'Category deleted successfully!');
            return redirect(route('admin.category.index'));
        } else {
            Session::flash('error', 'Failed to delete food!');
            return redirect(route('admin.food.index'));
        }
    }

    /**
     * validation data
     * @return array
     */
    private function validateRequest()
    {
        return request()->validate([
            'category_name' => 'required|unique:categories|min:3',
        ]);

    }

    /**
     * update validation data
     * @return array
     */
    private function updateValidateRequest()
    {
        return request()->validate([
            'category_name' => 'min:3|max:100',
        ]);
    }
}
