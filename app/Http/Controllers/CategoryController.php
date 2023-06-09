<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function submitAdd(Request $request)
    {
        $category = categories::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'icons' => $request['icon']
        ]);
        $category->save();
        return redirect('/')->with('success', 'Đã thêm ' . $category->name . ' thành công');
    }
}
