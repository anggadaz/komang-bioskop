<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
		$product = new ProductModel();
		echo $product->getData();
        //return view('product_page');
    }
	
	public function display()
    {
        return view('product/product_display');
    }
	
	public function page()
    {
        echo view('header');
        echo view('content');
        echo view('footer');
    }
	
	/*public function catalog()
    {
        $data = [
            'product' => 'Redmi Note 9 Pro'
        ];
        return view('product_catalog', $data);
    }*/
	public function catalog()
    {
        $data = [
            'title' => 'Product Catalog',
            'brand' => 'Smartphone Xiaomi',
            'product' => ['Redmi Note 9', 'Redmi Note 9 Pro', 'Mi Note 10', 'Mi Note 10 Pro']
        ];
        return view('product_catalog', $data);
    }
	
	public function insertdata()
    {
        $product = new ProductModel();
        $insert = $product->insert([
            'name' => 'Redmi Note 9 Pros',
            'price' => '34990000'
        ]);
        if ($insert) {
            echo "Data Berhasil diinsert";
        } else {
            echo "<pre>";
            echo print_r($product->errors());
            echo "</pre>";
        }
    }
	
	public function updatedata()
    {
        $product = new ProductModel();
        $id = 1;
        $update = $product->update($id, [
            'name' => 'Redmi Note 9',
            'price' => '3000000'
        ]);
        if ($update) {
            echo "Data Berhasil diupdate";
        } else {
            echo "<pre>";
            echo print_r($product->errors());
            echo "</pre>";
        }
    }
	
	public function saveupdate()
{
	$product = new ProductModel();
	$data = [
		'kd_product' => 1,
		'name' => 'Redmi 9',
		'price' => '2000000'
	];
	$product->save($data);
}

	public function saveinsert()
{
	$product = new ProductModel();
	$data = [
		'name' => 'Xiaomi Mi Note 10 Pro',
		'price' => '10999000'
	];
	$product->save($data);
}
	
	public function saveupdate2()
{
	$product = new ProductModel();
	$dataProduct = $product->find(1);
	$dataProduct->price = '2050000';
	$product->save($dataProduct);
}

	public function deletedata()
{
	$product = new ProductModel();
	$product->delete(1);
	//$product->delete([1,2,3]);//delete beberapa
	//$product->where('name', 'Redmi 9')->delete();//delete where
	//$product->purgeDeleted();//delete all
	//$product->delete(1, true);//delete permanen
}
	
	public function getdata()
    {
        $product = new ProductModel();
        $dataProduct = $product->find(2);
        echo "<pre>";
        echo print_r($dataProduct);
        echo "</pre>";
    }
	
	public function getdata2()
{
	$product = new ProductModel();
	$dataProduct = $product->findColumn('name');
	echo "<pre>";
	echo print_r($dataProduct);
	echo "</pre>";
}
	
	public function getdata3()
{
	$product = new ProductModel();
	$dataProduct = $product->findAll();
	//$dataProduct = $product->where('name','Xiaomi Mi Note 10 Pro')->findAll();//where
	//$users = $userModel->findAll($limit, $offset);//limit
	//$dataProduct = $product->withDeleted()->findAll();//all with soft deleted
	//$dataProduct = $product->onlyDeleted()->findAll();//only soft deleted
	//$dataProduct = $product->where('price','10999000')->first();//pertama sj
	echo "<pre>";
	echo print_r($dataProduct);
	echo "</pre>";
}
}