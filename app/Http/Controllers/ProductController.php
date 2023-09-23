<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use App\Models\Product;
use Flash;

class ProductController extends AppBaseController
{
    /** @var ProductRepository $productRepository*/
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->paginate(10);

        return view('products.index')
            ->with('products', $products);

    }
    /**
     * Show the form for creating a new Product.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     */
    public function store(CreateProductRequest $request)
    {
           // Check if a product already exists
    $existingProduct = Product::first();

    // If a product exists, update it; otherwise, create a new one
    if ($existingProduct) {
        // Update the existing product
        $product = $existingProduct;
    } else {
        // Create a new Product instance
        $product = new Product();
    }
        $file = $request->file('photo');
        $ext = $file->getClientOriginalExtension();
        $filename = time().".".$ext;
        $file->move('img/',$filename);
        $product->photo="/img/".$filename;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->save();

        Flash::success('Product saved successfully.');
        return redirect(route('products.index'));
    }


    /**
     * Display the specified Product.
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = Product::find($id);
    
        // Check if a new file was uploaded
        $file = $request->file('photo');
        $ext = $file->getClientOriginalExtension();
        $filename = time().".".$ext;
        $file->move('img/',$filename);
        $product->photo="/img/".$filename;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->update();

        Flash::success('Product saved successfully.');
        return redirect(route('products.index'));
    }
    

    /**
     * Remove the specified Product from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }
}
