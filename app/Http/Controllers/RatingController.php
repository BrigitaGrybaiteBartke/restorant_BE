<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Rating;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    // public function save(Request $request)
    // {
    //     $request->validate([
    //         'rating' => 'required|max:255',
    //         'dish_id' => 'required'
    //     ]);

    //     $result = Dish::find($request->post('dish_id'))
    //         ->rating()
    //         ->save(Rating::create($request->all()));

    //     return $result;
    // }


    public function index()
    {
        // return Rating::all();
        return Rating::with('dishes')->get();
    }



    public function store(Request $request)
    {
        $rating = new Rating();
        $rating->fill($request->all());
        return ($rating->save())
            ? response()->json(['success' => 'Created successfully'], 201)
            : response()->json(['error' => 'Creation failed'], 500);
    }


    public function show(Rating $rating)
    {
        // return Rating::find($rating);
        return $rating;
    }


    public function update(Request $request, Rating $rating)
    {
        $rating->fill($request->all());
        return ($rating->save())
            ? response()->json(['success' => 'Updated successfully'], 200)
            : response()->json(['error' => 'Update failed'], 500);
    }


    public function destroy(Rating $rating)
    {
        return ($rating->delete())
            ? response()->json(['success' => 'Deleted successfully'], 200)
            : response()->json(['error' => 'Failed'], 500);
    }

}
