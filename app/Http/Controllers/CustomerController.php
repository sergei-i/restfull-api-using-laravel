<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerRequest;

class CustomerController extends ApiControllers
{
    public function __construct(Customer $model)
    {
        $this->model = $model;
    }

    public function createCustomer(CustomerRequest $request) {

        return $this->create($request);
    }

    public function updateCustomer(int $id, CustomerRequest $request) {

        return parent::update($id, $request);
    }
}
