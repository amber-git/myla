<?php

namespace App\Http\Controllers\admin;

use App\models\UsersModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    return view('member\index');
}


    public function logon(Request $request)
    {
        $info = $request->input();
        unset($info['_token']);
        $users = DB::table('users')->orderBy('id','desc')->chunkById(2,function($user){
            foreach ($user as $itme) {
                if($itme->id == 2)
                {
                    continue;
                }else{
                    DB::update('update users set username = ? ,password = ? where id = ?',['112','wangwu',$itme->id]);
                }
            }
        });
        dd('成功');

        foreach ($users as $user) {
            echo $user->username.'<br >';
        }
        dd($users);
        $res = DB::select('insert into users (username,password) values (?,?)', [$info['username'],$info['password']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
