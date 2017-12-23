<?php
/**
 * Created by PhpStorm.
 * User: 29925
 * Date: 2017/12/22
 * Time: 15:53
 */

namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use think\Url;

class TextController extends HomeBaseController
{
    public function index()
    {
        echo Url::build('User/Login/Login');
        return $this->fetch();
    }
}