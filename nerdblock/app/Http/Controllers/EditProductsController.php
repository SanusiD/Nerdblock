<?php

namespace App\Http\Controllers;

use App\Block;
use App\Repositories\Blocks;
use Illuminate\Http\Request;

use App;

class EditProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Blocks $product)
    {
        $products = $product->all();

        return view('employee.product.list', compact('products'));

        // dd($products);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $block = new \App\Block;

        $block->blockName = $request->get('blockName');
        $block->blockDescription = $request->get('blockDescription');
        $block->blockPrice = $request->get('blockPrice');
        $block->blockTheme = $request->get('blockTheme');
        $block->blockLaunchDate = \Carbon\Carbon::now();

        $block->save();

        $items= \App\Block::latest()->first();
        return view('employee.product.edit', compact('items'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($item_id)
    {

        $items= \App\Block::find($item_id);
        return view('employee.product.edit', compact('items'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items = Block::where('blockID', $id)->update(array(
            'blockName'=>$request->get('blockName'),
            'blockDescription'=>$request->get('blockDescription'),
            'blockPrice'=>$request->get('blockPrice')
        ));
        
        $items= \App\Block::find($id);
        //dd($items);
        return view('employee.product.edit', compact('items'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
