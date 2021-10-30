<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagePreparer_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function qBRow($sql)
	{
		$dbAns=$this->db->query($sql)->result_array();
		return $dbAns;
	}
	public function qBObj($sql)
	{
		$dbAns=$this->db->query($sql)->result();
		return $dbAns;
	}
	public function qBd($sql)
	{
		$dbAns=$this->db->query($sql);
		return $dbAns;
	}
	public function mInsert($tabloAdi,$in = array())
	{
		$dbAns=$this->db->insert_batch($tabloAdi, $in);
		return $dbAns;
	}
	public function qBcount($tableName,$where=false,$inner=false)
	{
		if ($inner) {
			$sql="SELECT COUNT(*) FROM  `".$tableName."` ". $inner ."  WHERE 1=1 ";
		}else{
			$sql="SELECT COUNT(*) FROM  `".$tableName."` WHERE 1=1 ";
		}
		if ($where!=false) {
			$sql.=" AND ".$where;
		}
			$dbAns=$this->db->query($sql)->result_array();
		return $dbAns[0]["COUNT(*)"];
	}
	public function addAcc($table,$datas)
	{
		$this->db->insert($table,$datas);
		$last_id = $this->db->insert_id();
    	return $last_id;
	}
	public function update($tableName,$upData,$where)
	{
		$dbAns=$this->db->update($tableName,$upData,$where);
		return $dbAns;
    }
    public function get($tableName,$where = array())
    {
        return $this->db->where($where)->get($tableName)->row();
    }

    /** Tüm Kayıtları bana getirecek olan metot.. */
    public function get_all($tableName,$join = [],$where = array(), $groupby = [], $order = "")
    {
        return $this->db->where($where)->group_by($groupby)->order_by($order)->get($tableName)->result();
    }
     /** Tüm Kayıtları bana getirecek olan metot.. */
     public function get_all_arr($tableName,$join = [],$where = array(), $groupby = [], $order = "")
     {
         return $this->db->where($where)->group_by($groupby)->order_by($order)->get($tableName)->result_array();
     }
}

