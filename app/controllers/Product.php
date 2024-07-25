<?php
class Product extends BaseController
{
    // metode default
    public function index()
    {
        // pembacaan data dari tabel
        // $data['products'] = $this->model('ProductModel')->getAll();
        $products = $this->model('ProductModel')->getAll();
        return parent::view('product/index', ['products' => $products]);
    }
    // metode lain letakkan disini..
    public function create()
    {
        // $this->view('layout/header');
        $this->view('product/create');
        // $this->view('layout/footer');
    }
    // metode store
    public function store()
    {
        $this->model('ProductModel')->storeProduct($_POST);
        return parent::redirect('product', 'index');
    }
}
