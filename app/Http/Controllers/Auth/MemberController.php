<?php
/**
 * Created by PhpStorm.
 * User: Amber
 * Date: 2019/9/6
 * Time: 17:15
 */
namespace App\Http\Controller;

use Illuminate\Route\Controller;

class MemberController extends Controller
{
    public function info()
    {
        return view('member/info', [
            'name' => 'WangZheng',
            'age' => 18
        ])
}
}
