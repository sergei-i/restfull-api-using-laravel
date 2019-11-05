<?php

namespace App\Http\Controllers;

use App\Application;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends ApiControllers
{
    public function __construct(Application $model)
    {
        $this->model = $model;
    }

    public function createApplication(ApplicationRequest $request) {

        return $this->create($request);
    }

    public function updateApplication(int $id, ApplicationRequest $request) {

        return parent::update($id, $request);
    }
}
