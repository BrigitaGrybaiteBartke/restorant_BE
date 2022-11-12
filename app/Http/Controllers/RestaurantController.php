<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    public function index(Request $request) // get all restaurants
    {
        if ($request->embed === "dishes")
            return Restaurant::with('dishes')->get();
        return Restaurant::all();
    }


    public function store(Request $request) // create new
    {
        $request->validate([
            'title' => 'bail|required|unique:restaurants,title|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'workingTime' => 'required|max:255',
        ]);
        return Restaurant::create($request->all());
    }


    public function show($id, Request $request) // get single
    {
        if ($request)
            $singleRestaurant = Restaurant::find($id);
        return $singleRestaurant;
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'bail|required|unique:restaurants,title,' . $id . ',id|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'workingTime' => 'required'
        ]);
        $restaurant = Restaurant::find($id);
        $restaurant->update($request->all());
        return $restaurant;
    }


    public function destroy($id)
    {
        return Restaurant::destroy($id) === 0
            ? response(["status" => "failure"], 404)
            : response(["status" => "success"], 200);
    }
}
