<?php
namespace app\product\controller;
use cmf\controller\AdminBaseController;
use think\Db;
class IndexController extends AdminBaseController{
    public function _initialize(){
        parent::_initialize();
    }
    public function indexlist(){
        $categories = [];
        $this->assign("categories",$categories);
       return $this->fetch();
    }
    public function add(){
        return $this->fetch();
    }
}