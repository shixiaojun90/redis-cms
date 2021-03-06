<?php
/**
 * Created by PhpStorm.
 * User: hezhi
 * Date: 2017/10/23
 * Time: 上午9:48
 */
class M_Sendmsg extends Model {
    function __construct() {
        $this->table = TB_PREFIX.'sendmsg';
		$this->primary='id';
        parent::__construct();
    }
	
    public function getArtListByPage($pageSize=10,$current=1,$sort,$like,$where){
        $field = array('id','c_time','creater','title','info','language_id');
        return $this->Field($field)->tabPage($pageSize,$current,$sort,$like,$where);
    }

    public function getArticlebyId($id){
        $where=array('id'=>$id);
        return $this->where($where)->SelectOne();
    }
	
	public function getwtype($wtype){
        $where=array('wtype'=>$wtype);
        return $this->where($where)->Select();
    }
}