<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('index', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $number = mt_rand(1000000000, 9999999999);
        if ($this->productBarcodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',
        ]);

        $request['product_barcode'] = $number;
        Product::create($request->all());


        return redirect('/')->with('success', 'Product created successfully.');
    }

    public function productBarcodeExists($number)
    {
        return Product::where('product_barcode', $number)->exists();
    }

    public function showDataBarcode($barcode)
    {
        return view('show', [
            'product' => Product::where('product_barcode', $barcode)->firstOrFail()
        ]);
    }
}
