<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use Session;
use URL;
use Redirect;
use Route;
use DB;
use Datatables;
use Event;
use Input;
use App\Http\Model\MyadminPassword as Pass;


class StorePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }
    public function entry()
    {
        //
        return view('password/entrypass');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        // return $request->username;
        $title = Input::get('title');
        $u = Input::get('username');
        $p = Input::get('password');
        $ms = Input::get('secure_pass');


        $store = new Pass;
        $store->title = $title;
        $store->username = $u;
        $store->password= $p;
        // $store->pass_part_2 = $ms;
        $store->save();
    }

    public function view()
    {
        $data = Pass::all();
        return view('password.viewpass')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $data = Pass::whereId($id)->firstOrFail();
        return view('password.editpass')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $data = Pass::find($id);
        $data->delete();

        $status = "Deleted!";
        $msg = "Your data has been deleted";
        $class = "success";
        return view('password.deletepass')->with('status',$status)->with('msg',$msg)->with('class',$class);
    }
}
