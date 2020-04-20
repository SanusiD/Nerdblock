<?php

namespace App\Http\Controllers;
use App\Block;
Use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //Resourse Gotten here: https://www.youtube.com/watch?v=oSU3VeWEK94
    public function index()
    {
        $Items= Cart::content();
        return view('cart.index', compact('Items'));
    }
    public function create()
    {
       
    }
    public function store()
    {

    }
    public function destroy($row)
    {
        $result = Cart::remove($row);
        $Items= Cart::content();
        return view('cart.index', compact('Items'));
    }
    public function edit($id)
    {
        $block = Block::find($id);
        Cart::add($block->blockID, $block->blockName, 1, $block->blockPrice);

        return back();
    }
}
