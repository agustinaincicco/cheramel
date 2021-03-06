<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = [];
        if (Auth::check()){
            $count = Cart::where('user_id', Auth::user()->id)->count();
        }
        $categories = Category::all();
        return view ('products.create')
        ->with('categories', $categories)
        ->with('count', $count);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'photopath' => 'required',
            'ranking' => 'required',
            'category_id' => 'required'
        ];

        $messages = [
            'required' => 'el campo :attribute es obligatorio'
        ];
        
        $this->validate($request, $rules, $messages);
        $photopath = $request->file('photopath')->store('products', 'public');
        $product = new Product([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'amount' => $request->input('amount'),
            'ranking' => $request->input('ranking'),
            'category_id' => $request->input('category_id'),
        ]);
        
        $product->photopath = $photopath;

        $product->save();

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = Product::all();
        $products = Product::all();
        $count = [];
        if (Auth::check()){
            $count = Cart::where('user_id', Auth::user()->id)->count();
        }
        return view ('products.show')
            ->with('products', $products)
            ->with('categories', $categories)
            ->with('count', $count);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $count = [];
        if (Auth::check()){
            $count = Cart::where('user_id', Auth::user()->id)->count();
        }
        return view('products.edit')
            ->with('product', $product)
            ->with('categories', $categories)
            ->with('count', $count);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'photopath' => '',
            'ranking' => 'required',
            'category_id' => 'required'
        ];

        $messages = [
            'required' => 'el campo :attribute es obligatorio'
        ];
        
        $this->validate($request, $rules, $messages);
        $product = Product::find($id);
        $product->name = $request->input('name') !== $product->name ? $request->input('name') : $product->name;
        $product->description = $request->input('description') !== $product->description ? $request->input('description') : $product->description;
        $product->amount = $request->input('amount') !== $product->amount ? $request->input('amount') : $product->amount;
        
        $product->photopath = $request->hasFile('photopath') ? $request->file('photopath')->store('posters', 'public') : $product->photopath;
        
        $product->ranking = $request->input('ranking') !== $product->ranking ? $request->input('ranking') : $product->ranking;
        $product->category_id = $request->input('category_id') !== $product->category_id ? $request->input('category_id') : $product->category_id;
        $product->save();

        return redirect('/products/edit/' . $product->id);
    }


    public function specs($id){
        $count = [];
        if (Auth::check()){
            $count = Cart::where('user_id', Auth::user()->id)->count();
        }
        $categories = Category::all();
        $product = Product::find($id);
        return view('products.specs')
            ->with('product', $product)
            ->with('categories', $categories)
            ->with('count', $count);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        $message = 'Eliminado';
        return redirect('/products/edit')->with('message', $message);
    }
}
