<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::get();
        $data = ['items' => $items];
        return view('admin.item.index',$data);
    }
    public function create()
    {
        return view('admin.item.create');
    }
    public function add(Request $reqest)
    {
        $posts = $reqest->all();
        //dd($posts);
        Item::create($posts);

        return redirect('admin/item/');
    }
    public function edit(Request $reqest,$id)
    {
        $item = Item::find($id);
        $data = ['item' => $item];
        return view('admin.item.edit');
    }
    public function update(Request $reqest,$id)
    {
        $posts = $reqest->all();
        Item::find($id) ->update($posts);
        return redirect()->route('admin.item.index');
    }
}
