<?php

namespace App\Http\Controllers;

use App\GroceryList;
use Illuminate\Http\Request;

class GroceryListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GroceryList::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'user_id' => 'required',
            'name' => 'bail|required|max:255',
            'for_store' => 'max:255'
        ]);
        
        GroceryList::create($request->all())->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GroceryList  $groceryList
     * @return \Illuminate\Http\Response
     */
    public function show(GroceryList $groceryList)
    {
        return $groceryList;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GroceryList  $groceryList
     * @return \Illuminate\Http\Response
     */
    public function edit(GroceryList $groceryList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GroceryList  $groceryList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroceryList $groceryList)
    {
        $validatedData = $this->validate($request, [
            'name' => 'sometimes|required|max:255',
            'for_store' => 'sometimes|max:255'
        ]);

        if ($request->has('name')) {
            $groceryList->name = $request->name;
        }

        if ($request->exists('for_store')) {
            $groceryList->for_store = $request->for_store;
        }

        $groceryList->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GroceryList  $groceryList
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroceryList $groceryList)
    {
        $groceryList->delete();
    }
}
