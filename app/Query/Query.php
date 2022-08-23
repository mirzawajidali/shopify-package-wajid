<?php
namespace App\Query;

use Illuminate\Support\Facades\DB;

class Query{

    public static function getAll($table){
        return DB::table($table)->get();
    }

    public static function findItem($table,$id){
        return DB::table($table)->where('id',$id)->get();
    }

    public static function firstItem($table){
        return DB::table($table)->first();
    }
}
