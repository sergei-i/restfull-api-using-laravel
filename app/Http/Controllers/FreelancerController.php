<?php

namespace App\Http\Controllers;

use App\Freelancer;
use App\Http\Requests\FreelancerRequest;

class FreelancerController extends ApiControllers
{
    public function __construct(Freelancer $model)
    {
        $this->model = $model;
    }

    public function createFreelancer(FreelancerRequest $request) {

        return $this->create($request);
    }

    public function updateFreelancer(int $id, FreelancerRequest $request) {

        return $this->update($id, $request);
    }
}
