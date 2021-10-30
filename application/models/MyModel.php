<?php

class MyModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
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

    public function get_alls($tableName,$where = array(), $order = "")
    {
        return $this->db->where($where)->order_by($order)->get($tableName)->result();
    }

    public function add($tableName,$data = array())
    {
        $this->db->insert($tableName, $data);
        return $this->db->insert_id();
    }
    public function adds($tableName,$data = array())
    {
        return $this->db->insert($tableName, $data);
    }
    public function update($tableName,$where = array(), $data = array())
    {
        return $this->db->where($where)->update($tableName, $data);
    }

    public function delete($tableName,$where = array())
    {
        return $this->db->where($where)->delete($tableName);
    }

}
