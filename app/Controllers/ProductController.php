<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{

    protected $productModel;
    protected $db;
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('product/index', $data);
    }

    public function create()
    {
        return view('product/create');
    }

    public function store()
    {
        $validationRules = [
            'name' => 'required|min_length[3]',
            'description' => 'required|min_length[5]',
            'price' => 'required|numeric',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('error', 'Please check your inputs');
        }

        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        $price = $this->request->getPost('price');

        $productModel = new ProductModel();

        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price,
        ];

        $result = $this->db->table('products')->insert($data);
        if ($result) {
            return redirect()->redirect('/product_app/')->with('message', 'Product added successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to add the product');
        }
    }

    public function edit($id)
    {
        $productModel = new ProductModel();
        $product = $productModel->find($id);

        if (!$product) {
            return redirect()->to('/product/index')->with('error', 'Product not found');
        }

        return view('product/edit', ['product' => $product]);
    }

    public function update($id)
    {
        $productModel = new ProductModel();

        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        $price = $this->request->getPost('price');

        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price,
        ];
        //var_dump($data);
        //die();

        $result = $this->db->table('products')
            ->set($data)
            ->where('id', $id)
            ->update();
        if ($result) {
            return redirect()->redirect('/product_app/')->with('message', 'Product Updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update the product');
        }
    }

    public function delete($id)
    {
        $productModel = new ProductModel();

        $deleted = $productModel->delete($id);

        if ($deleted) {
            return redirect()->redirect('/product_app/')->with('message', 'Product deleted successfully!');
        } else {
            return redirect()->to('/product_app/')->with('error', 'Failed to delete product.');
        }
    }
}
