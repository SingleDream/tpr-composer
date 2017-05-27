<?php
// +----------------------------------------------------------------------
// | TPR [ Design For Api Develop ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2017 http://hanxv.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: axios <axioscros@aliyun.com>
// +----------------------------------------------------------------------

namespace axios\tpr\middleware;

use think\Controller;
use think\Request;

class BaseMiddleware extends Controller {
    protected $param ;

    protected $method ;

    function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->param = $this->request->param();
    }
}