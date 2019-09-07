<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    //指定表名
    protected $table= 'art';
//指定主键
    protected $primaryKey= 'id';
//关闭laravel自带更新created_at,updated_at,deleted_at的操作
    public $timestamps= false;
//录入字段名
   // protected $fillable= ['id','name'];
}
