<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeASellerController extends Controller
{
    public function beSeller(){
        return view('site.beSeller.beSeller');
    }
    public function sellerRegistration(){
        return view('site.beSeller.seller_registration');
    }
}
