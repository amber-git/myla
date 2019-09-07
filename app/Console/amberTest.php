<?php
/**
 * Created by PhpStorm.
 * User: Amber
 * Date: 2019/9/7
 * Time: 23:42
 */

namespace App\Console;
use Illuminate\Console\Command;
/**
 * @property \Illuminate\Cache\Repository  $cache cacheObj
 */
class amberTest extends Command
{


    /**
     * 控制台命令 signature 的名称。
     *
     * @var string
     */
    protected $signature = 'lisi';

    /**
     * 控制台命令说明。
     *
     * @var string
     */
    protected $description = 'demo';

    /**
     * ordermodel
     * @var OrderModel
     */
    private $orderModel;

    /**
     * 创建一个新的命令实例。
     *
     * @param  DripEmailer $drip
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 执行控制台命令。
     *
     * @return mixed
     */
    public function handle()
    {
        shell_exec("echo date() >> amberTest.txt");
    }

}