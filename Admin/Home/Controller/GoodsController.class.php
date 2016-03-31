<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){
       $this->display();
    }
    public function showgoods(){
        $goods_model = M('Goods');
        $count      = $goods_model->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,25);

        $pageCurrent = I('post.pageCurrent');
        $list = $goods_model->order('goods_id')->page(I('post.pageCurrent').",25")->select();
        //$list = $goods_model->order('goods_id')->select();
        $list = json_encode($list);
        $copy = "{total:$count, pageCurrent:1, list:$list}";
        $this->ajaxReturn($copy,'JSON');
    }
}