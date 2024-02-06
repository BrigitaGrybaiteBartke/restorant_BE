<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Rating;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(Request $request) // get all dishes
    {
        if ($request)
            // return Dish::all();
            return Dish::with('rating')->get();
        }

    public function store(Request $request) // create new dish
    {
        $request->validate([
            'title' => 'bail|required|unique:dishes,title|max:255',
            'price' => 'required|max:255',
            'image' => 'required',
            'restaurants_id' => 'required'
        ]);
        return Dish::create($request->all())
        ? response()->json(['success' => 'Created successfully'], 201)
            : response()->json(['error' => 'Creation failed'], 500);
    }

    public function show($id, Request $request) // show single dish
    {
        if ($request)
            // return Dish::find($id);
            return Dish::with('rating')->find($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'bail|required|unique:dishes,title,' . $id . ',id|max:255',
            'price' => 'required|max:255',
            'image' => 'required',
            'restaurants_id' => 'required'
        ]);

        $dish = Dish::find($id);
        $dish->update($request->all());
        return $dish
        // return ($dish->save())
        ? response()->json(['success' => 'Updated successfully'], 200)
        : response()->json(['error' => 'Update failed'], 500);
    }

    public function destroy($id)
    {
        return Dish::destroy($id) === 0
            ? response(["status" => "failure"], 404)
            : response(["status" => "success"], 200);
    }
}
