<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Exception;
use Illuminate\Http\Request;
use Session;

class ColorController extends Controller
{
    /**
     * view places list
     * @return Factory|View
     */
    public function index()
    {
        $data = [
            'colors' => Color::orderBy('color_name')->get()
        ];

        return view('admin.color.index')->with($data);
    }


    /**
     * show category save form
     * @return Factory|View
     */
    public function create()
    {
        $data = [

        ];
        return view('admin.color.create')->with($data);
    }


    /**
     * save category data in database
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $colorData = $this->validateRequest();
        if (Color::create($colorData)) {
            Session::flash('success', 'Color Added successfully!');
            return redirect(route('admin.color.index'));
        } else {
            Session::flash('error', 'Failed to save place!');
            return redirect(route('admin.color.create'));
        }

    }

    /**
     * validation data
     * @return array
     */
    private function validateRequest()
    {
        return request()->validate([
            'color_name' => 'required|unique:colors|min:3',
        ]);

    }

    /**
     * edit individual place
     * @param Color $color
     * @return Restaurant
     */
    public function edit(Color $color)
    {
        $data = [
            'color' => $color,
        ];

        return view('admin.color.edit')->with($data);
    }

    /**
     * update place
     * @param Request $request
     * @param Color $color
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Color $color)
    {
        $validatedData = $this->updateValidateRequest();

        if ($color->update($validatedData)) {
            Session::flash('success', 'Color Updated successfully!');
            return redirect(route('admin.color.index'));
        } else {
            Session::flash('error', 'Failed to update place!');
            return redirect(route('admin.color.create'));
        }
    }

    /**
     * update validation data
     * @return array
     */
    private function updateValidateRequest()
    {
        return request()->validate([
            'color_name' => 'min:3|max:100',
        ]);
    }

    /**
     * delete restaurant individually
     * @param Color $color
     * @return RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(Color $color)
    {
        if ($color->delete()) {

            Session::flash('success', 'Color deleted successfully!');
            return redirect(route('admin.color.index'));
        } else {
            Session::flash('error', 'Failed to delete food!');
            return redirect(route('admin.food.index'));
        }
    }
}
