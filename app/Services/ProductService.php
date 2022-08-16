<?php

use App\Models\payment;
use Illuminate\http\Request;
use App\Models\product;

class productService {

    public function findAllProducts() {

        return request()->$this->json(product::all());
    }


    public function findAllPayments() {

        return request()->$this->json(payment::all());
    }

    
}