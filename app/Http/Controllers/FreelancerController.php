<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelancerController extends ApiControllers
{
    public function __construct(Freelancer $freelancer)
    {
        $this->model = $freelancer;
    }
}
