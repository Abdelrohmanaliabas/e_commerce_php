<?php

namespace App\Http\Controllers;

use App\Models\Items as ModelsItems;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/itemsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $item = $request->validate([
    'ItemImage' => ['nullable', 'array'], // Allow null for ItemImage
    'ItemImage.*' => ['image', 'max:2048'], // Validate each file
    'ItemName' => ['required', 'string', 'max:255'],
    'ItemSalary' => ['required', 'numeric', 'min:0'],
    ]);

    $filePaths = [];
    if ($request->hasFile('ItemImage')) {
        foreach ($request->file('ItemImage') as $file) {
        $filePaths[] = $file->store('item-images', 'public');
        }
    }

    // Save item with ItemImage or default value (e.g., an empty JSON array)
    \App\Models\Items::create([
    'ItemName' => $item['ItemName'],
    'ItemSalary' => $item['ItemSalary'],
    'ItemImage' => !empty($filePaths) ? json_encode($filePaths) : json_encode([]),
    ]);


      return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
