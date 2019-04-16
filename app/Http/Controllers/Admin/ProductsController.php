<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('product_access'), 403);

        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('product_create'), 403);

        return view('admin.products.create');
    }

    public function store(StoreProductRequest $request)
    {
        abort_unless(\Gate::allows('product_create'), 403);

        $product = Product::create($request->all());

        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
    {
        abort_unless(\Gate::allows('product_edit'), 403);

        return view('admin.products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        abort_unless(\Gate::allows('product_edit'), 403);

        $product->update($request->all());

        return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        abort_unless(\Gate::allows('product_show'), 403);

        return view('admin.products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        abort_unless(\Gate::allows('product_delete'), 403);

        $product->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        Product::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
