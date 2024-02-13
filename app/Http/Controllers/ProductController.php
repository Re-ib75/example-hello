<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::latest()->paginate(5);

        return view('products.indexs',compact('products'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

       $temp= Product::create($request->all());
       $isSaved = $temp->save();
        dd($isSaved);
        return redirect()->route('productss.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
      // $product =Product::all();

     $product =Product::where('id',$id)->get();

        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id ): View
    {
        // dd($id);

        $product =Product::where('id',$id)->first();

        // dd($product);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        dd($request);
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $product =Product::where('id',$id)->first();

        $product->update($request->all());

        return redirect()->route('productss.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('productss.index')
                        ->with('success','Product deleted successfully');
    }
}
