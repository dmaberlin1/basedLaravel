<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        dump(route('admin.products.index'));
        return 'admin products list';
    }

    public function create()
    {
        return 'admin products create';
    }

    public function store()
    {
        return 'Admin product store';
    }

    public function show($product)
    {
        return "Admin product show: $product";
    }

    public function edit($product)
    {
        return "Admin product edit: $product";
    }

    public function update($product)
    {
        return "Admin product update: $product";
    }

    public function destroy($product)
    {
        return "Admin product destroy: $product";
    }
}
