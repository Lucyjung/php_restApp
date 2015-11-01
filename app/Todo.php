<?php

namespace App;

use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

/*
class Todo extends Model
{
    public function getAll()
    {
            $users = User::all();
            return Response::json($users);
    }

    public function deleteAll()
    {
            $dbs = new MemberDBS();
            if(DB::collection($dbs->getTable())->delete()){
                    $productDbs = new ProductDBS();
                    if(DB::collection($productDbs->getTable())->delete()){
                            return Response::json(array('message'=>'success'));
                    }else{
                            return Response::json(array('message'=>'error'));
                    }
            }else{
                    return Response::json(array('message'=>'error'));
            }
    }
}
*/
class Todo extends Eloquent{
    protected $connection = 'mongodb';
    protected $collection = 'restaurant';
}