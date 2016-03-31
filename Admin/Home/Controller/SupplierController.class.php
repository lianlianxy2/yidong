<?php
namespace Home\Controller;
use Think\Controller;
class SupplierController extends Controller {
    public function index(){
       $this->display();
    }
    public function showsupplier(){
        $goods_model = M('Goods');
        //$goods_model = $goods_model;
        $count      = $goods_model->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,25);


        $pageCurrent = I('post.pageCurrent');
        $list = $goods_model->join("LEFT JOIN ".C(DB_PREFIX)."supplier ON ".C(DB_PREFIX)."Goods.supplier_id = ".C(DB_PREFIX)."supplier.supplier_id")->order('goods_id')->page(I('post.pageCurrent').",25")->select();
        //$list = $goods_model->order('goods_id')->select();
        //echo $goods_model->getLastSql();
        $list = json_encode($list);
        $copy = "{total:$count, pageCurrent:1, list:$list}";
        $this->ajaxReturn($copy,'JSON');
    }
}