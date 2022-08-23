<?php

namespace App\Http\Controllers;

use App\Query\Query;
use Illuminate\Http\Request;

class QueryTestingController extends Controller
{
    public function index(){
        // return Query::getAll('users');
        // return Query::findItem('users',1);
        // return Query::firstItem('users');
    }
}
