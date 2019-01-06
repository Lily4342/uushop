<?php
namespace app\zone\controller;
use cmf\controller\AdminBaseController;
use think\Db;
class IndexController extends AdminBaseController{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){
        $zone = [];
        $this->assign("zone",$zone);
       return $this->fetch();
    }
    public function add(){
        if($this->request->isPost()){
            $data = $this->request->isPost();
            $name = trim($_POST['name']);
            $lang_code = trim($_POST['lang_code']);
            $currency_code = trim($_POST['currency_code']);
            if(empty($name)){
                $this->error("地区名不能为空");
            }
        }
        return $this->fetch();
    }
}