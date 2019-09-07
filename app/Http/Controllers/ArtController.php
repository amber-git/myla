<?php

namespace App\Http\Controllers;

use DemeterChain\A;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Art;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'hello index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arts = new Art;
        $arts->name = '兔子';
        $arts->age = '21';
        $arts->sex = '女';
        //$arts->created_at = now()->timestamp;
        //$arts->updated_at = now()->timestamp;
        $arts->save();

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
        return 'hello store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$arts = Art::all();
        //return $arts;

        //foreach(Art::cursor() as $art){
         //   dump($art->id);
       // }

       // $arts = Art::where('id','=','5')->select('id','name')->get();
        //$arts = Art::where('id','>','6')->orderBy('id','desc')->offset(6)->limit(2)->get();
        //$arts = Art::where('id','1')->first();
        $arts = Art::find(1);
        return $arts;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$name)
    {
        //
        return 'id是'.$id."<br>name是".$name;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        /*$art = Art::find(19);
        $art->name = '熊猫';
        $art->save();*/

        Art::where('id','>','14')->update(['name'=>'syd']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = Art::find($id);
        $art->delete();
    }
}
