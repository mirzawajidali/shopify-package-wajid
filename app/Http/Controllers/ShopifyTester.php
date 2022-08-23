<?php

namespace App\Http\Controllers;

use App\Shopify\Shopify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ShopifyTester extends Controller
{
    public function index(){
        $url = Shopify::install();
        return redirect($url);
    }

    public function getAccessToken(){

        $token = Shopify::getToken($_GET);
        //Store to Database
        //Shopify::store(table,userid,shop,token);

        //To Get Token and Shop
        //Shopify::get(table,userid);

        //To Call Shopify Api
        //Shopify::call(token,shop,endpoint,array,action);

    }
}
