<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use App\Restaurant;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$todos = Todo::where('user_id','=',Auth::user()->id)->get();
        //return View('HomeWebPages');
        //return 'Welcome Nick';
        //$users = User::all();5634b41297dbccf499f1f602
        //$restaurant = Restaurant::where('name', '=', '1')->get();
        //return $restaurant;
        /*
        $dbs = new Restaurant();
        $rd = DB::collection($dbs->getTable())->get();
        return response($rd);
         */
        $Restaurant = new Restaurant();
        
        $rd = DB::collection($Restaurant->getTable())->get();
        return response($rd);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $Restaurant = new Restaurant();
        //$post = Input::get();
        //$input = Request::all();
        //$Restaurant->insert($input);
        $post = $request->all();
        if (array_key_exists('_token',$post))
        {
            unset($post['_token']);
        }
        $Restaurant->insert($post);
        //$Restaurant->name = json_decode($request->input());
        //$Restaurant->save();
        return $post;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $todo = new Todo(Request::all());
        $todo->user_id = Auth::user()->id;
        $todo->save();
        return $todo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        $user = new Restaurant();
        if(DB::collection($user->getTable())->delete()){
            return Response(array('message'=>'success'));
        }else{
            return Response(array('message'=>'error'));
        }

    }
}
