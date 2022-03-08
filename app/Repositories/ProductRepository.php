<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{

    /**
     * @var
     * @model
     */
    protected $model;

    /**
     *
     */
    public function __construct()
    {
        $this->model = new Product();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllProduct()
    {

        return $this->model->all();
    }

    /**
     * @param $product
     * @return mixed
     */
    public function insertProduct($product)
    {

        return $this->model->create($product);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function updateProduct($id, $data)
    {

        $product = $this->model->findOrfail($id);

        return tap($product)->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteProduct($id)
    {

        $product = $this->model->findOrfail($id);

        return $product->delete();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getOneProduct($id)
    {

        return $this->model->findOrfail($id);
    }

}
