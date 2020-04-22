<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/22 0022
 * Time: 14:49
 */

namespace huangweijie\queue\manage;

use huangweijie\queue\manage\command\Handle;

class Service extends \think\Service
{

    public function boot()
    {
        $this->commands([
            Handle::class,
        ]);
    }
}