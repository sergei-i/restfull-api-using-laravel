<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;

class OrderController extends ApiControllers
{
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function createOrder(OrderRequest $request) {

        return $this->create($request);
    }

    public function updateOrder(int $id, OrderRequest $request) {

        return parent::update($id, $request);
    }
}
