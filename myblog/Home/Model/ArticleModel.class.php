<?php
namespace Home\Model;

use Think\Model;
use Home\Model\TypeModel;

class ArticleModel extends Model
{   

    public $_auto =array(
        array('updated_at','time',2,'function'),//编辑的时候自动完成 
        array('created_at','time',1,'function'),//新增的时候自动完成 
    );
    
    
    public function getArticlelist($currentPage,$map=[]) 
    {
        //获取当前的分页
        $typeModel = new TypeModel;
        $list = $this->where($map)->page($currentPage,6)->order('id desc')->select();
       foreach($list as $key=>$value)
       {
            $list[$key]['typename'] = $typeModel->getNameById($value['typeid']);
       }  
        return $list;
    }

    //获取文章总数
    public function getArticleTotal($map=[])
    {
         return $this->where($map)->count();
    }
    
    //获取模糊查询条数
    public function getLikeTotal($map)
    {
        return $this->where($map)->count();
    }
    
    //获取模糊查询文章
    public function getLikeArticle($currentPage,$map)
    {
        return $this->where($map)->page($currentPage,6)->order('id desc')->select();
    }

}