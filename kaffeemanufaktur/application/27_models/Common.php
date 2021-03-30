<?php

Class Common extends CI_Model{

    function allposts_count()
    {   
        $query = $this
                ->db
                ->get('offers');
    
        return $query->num_rows();  

    }
    
    function allposts($limit,$start,$col,$dir)
    {   
       $query = $this
                ->db
                ->limit($limit,$start)
                ->order_by($col,$dir)
                ->get('offers');
        
        if($query->num_rows()>0)
        {
            return $query->result(); 
        }
        else
        {
            return null;
        }
        
    }
   
    function posts_search($limit,$start,$search,$col,$dir)
    {
        $query = $this
                ->db
                ->like('offerID',$search)
                ->or_like('offer_code',$search)
                ->limit($limit,$start)
                ->order_by($col,$dir)
                ->get('offers');
        
       
        if($query->num_rows()>0)
        {
            return $query->result();  
        }
        else
        {
            return null;
        }
    }

    function posts_search_count($search)
    {
        $query = $this
                ->db
                ->like('offerID',$search)
                ->or_like('offer_code',$search)
                ->get('offers');
    
        return $query->num_rows();
    }
    public function select($tablename, $projection='*', $condition=[], $order= [], $limit='', $offset=''){
        $this->db->select($projection);
        $this->db->from($tablename);
        if(!empty($condition)){
            foreach($condition as $key => $data){
                $this->db->where($key,$data);
            }      
        }
        if(!empty($order)){
            $this->db->order_by($order['key'], $order['order']);
        }        
        if (isset($limit) && !empty($limit)) {
            $this->db->limit($limit, $offset);
        }
        $query=$this->db->get();
        $result = $query->result();
        if(sizeof($result)==1){
            $result =  $result[0];
        }
        return $result;
    }

    public function insert($tablename, $data){
        $insert = $this->db->insert($tablename, $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }  

    public function update($tablename, $data, $condition){
        if(!empty($condition)){
            foreach($condition as $key => $val){
                $this->db->where($key,$val);
            }      
        }
        $status =  $this->db->update($tablename, $data);
        return $status;
    }	

    public function delete($tablename, $condition){ 
        if(!empty($condition)){
            foreach($condition as $key => $data){
                $this->db->where($key,$data);
            }      
        }
        if ($this->db->delete($tablename)){ 
            return true; 
        } 
        
    }

    public function validateUser($table,$email,$pr="*")
    {
        $this->db->select($pr);
        $this->db->from($table);
        $this->db->where('email',$email);
        $this->db->where('is_active','1');

        $query = $this->db->get();
        $result = $query->row_array();

        return $result;
    }


    public function join_mult_table($table1, $table = [], $joinCondition = [], $condition = [], $projection = '*', $distinct = '', $limit = '', $offset = 0,$join_type='inner')
    {

        $this->db->select($projection);
        $this->db->from($table1);
        for ($i = 0, $j = 0; $i < count($table), $j < count($joinCondition); $i++, $j++) {
            $this->db->join($table[$i], $joinCondition[$j],$join_type);
        }
        if (!empty($distinct)) {
            $this->db->group_by($distinct);
        }

        if (!empty($condition)) {
            foreach ($condition as $key => $data) {
                $this->db->where($key, $data);
            }
        }
        if (isset($limit) && !empty($limit)) {
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function selectwherein($table, $proj = '*', $wherein = [], $where = [],$limit='',$offset='')
    {
        $this->db->select($proj);
        $this->db->from($table);
        if (isset($wherein) && !empty($wherein)) {
            foreach ($wherein as $key => $value) {
                $this->db->where_in($key, $value);
            }
        }
        if (isset($where) && !empty($where)) {
            $this->db->where($where);
        }
        if(isset($limit) && !empty($limit))
        {
            $this->db->limit($limit,$offset);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    // public function direct_sql_query($sql){
    //     $servername = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "mindely_new";
    //     $conn = new mysqli($servername, $username, $password, $dbname);
    //     $data=array();
    //     if ($conn->connect_error) {
    //         die("Connection failed: " . $conn->connect_error);
    //     }
        
    //     $result = $conn->query($sql);
    //     if ($result->num_rows > 0) {
    //         while($row = $result->fetch_assoc()) {
    //             $data[] = $row;
    //         }
    //     }
    //     return $data;
    // }

    public function direct_sql_query($sql){
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    public function getLastId($table) {
        $this->db->select('id');
        $this->db->from($table);
        $this->db->order_by('id','DESC');
        $this->db->limit('1');

        $query = $this->db->get();
        $result = $query->row_array();
        
        if(is_array($result) && count($result) > 0)
        {
            $result = $result['id'];
        }else{
            $result = 0;
        }

        return $result;
    }
    
    public function insert_data($table_name,$data)
    {
            return $this->db->insert($table_name,$data);
    }
    public function select_data($table_name,$field,$warr='',$limit = '',$start = '',$order_by = '')
    {
        if($warr!=''){
                $this->db->where($warr);
        }
        // if($order_by!=''){
                // $this->db->order_by('id','desc');
        // }
        if($limit!='' && $start != ''){
            $this->db->limit($limit, $start);
        }
        $resp=$this->db->select($field)->from($table_name)->get();
        return $resp->result_array();
    }
    public function select_product_data($table_name,$field,$warr='',$limit,$page,$sortby="std")
    {

        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->limit($limit,$page);
        if($sortby=='std')
        {
            $this->db->order_by("name", "asc");
        }
        else if($sortby=='asc')
        {
            $this->db->order_by("price1", "asc");
        }
        else if($sortby=='desc')
        {
            $this->db->order_by("price1", "desc");
        }
        else if($sortby=='date')
        {
            $this->db->order_by("created_at", "desc");
        }

        if($warr!='')
        {
                $this->db->where($warr);
        }
        $this->db->order_by("name", $sortby);
        $query = $this->db->get();
        return $query->result_array();
        
        // $this->db->limit($limit,$page);
        // $resp=$this->db->select($field)->from($table_name)->get();
        // return $resp->result_array();
    }

    public function select_product_searchdata($table_name,$field,$warr='',$limit,$page, $key,$sortby="std")
    {
        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->limit($limit,$page);
        $this->db->like('name', $key);
        $this->db->or_like('category', $key);
        $this->db->or_like('subcategory', $key);
        $this->db->or_like('description', $key);

        if($sortby=='std')
        {
            $this->db->order_by("name", "asc");
        }
        else if($sortby=='asc')
        {
            $this->db->order_by("price1", "asc");
        }
        else if($sortby=='desc')
        {
            $this->db->order_by("price1", "desc");
        }
        else if($sortby=='date')
        {
            $this->db->order_by("DATE(created_at)", "desc");
        }
        if($warr!='')
        {
                $this->db->where($warr);
        }
        // $this->db->order_by("name", $sortby);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function record_count() {
        return $this->db->count_all("products");
     }

    public function get_totaldata($table_name,$field)
    {
        // $resp=$this->db->select($field)->from($table_name)->get();
        // return $resp->result_array();

        $this->db->select('count(*) AS num_row');
        $this->db->from($table_name);
        // $this->db->limit(3);
        $query = $this->db->get();
        return $query->row()->num_row;
    }
    public function delete_data($table_name,$warr)
    {
            $this->db->where($warr);
            return $this->db->delete($table_name);
    }
    public function update_data($table_name,$data,$wdata)
    {
            $this->db->where($wdata);
            return $this->db->update($table_name,$data);
    }
    public function product($id){
        
        $product_details =$this->Common->select_data('availability','*',array('product_id'=>$id));
        return $product_details;
    }
}
