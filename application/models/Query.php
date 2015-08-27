<?php

class Query extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getUsers() {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function adduser($staff_data, $users_data, $logs_data) {
        
        $this->db->insert('staffdetail',$staff_data);
        $this->db->insert('users',$users_data);
        $this->db->query($logs_data);
        
    }
    public function login($query){
        $sql=  $this->db->query($query);
        return $sql->result();
    }
    public function setQuery($sql){
        $this->db->query($sql);
    }
    public function getid($sql,$column){
        $q=$this->db->query($sql);
        $res=$q->result();
       
        foreach ($res as $key => $value) {
            $id=$value->$column;
            
        }return $id;
    }
    public function add_info($into,$data){
        $this->db->insert($into,$data);
    }
    public function update_info($into,$data,$where)
    {
       $this->db->update($into,$data,$where);
    }
    public function get_total_desbursment($date_to_rlike='l')
    {   
        $sql="select sum(request_cash_amount) from request_amount_cash inner join request_remarks on request_amount_cash.request_id=request_remarks.request_id inner join date_requested on request_amount_cash.request_id=date_requested.request_id inner join requestor_locator on requestor_locator.request_id=request_remarks.request_id where date_marked rlike('".$date_to_rlike."') and request_remarks='approved'";
       $amount_cash_array=$this->login($sql);
      
        $sql="select sum(request_total_item_price) from request_items_inkind inner join request_remarks on request_items_inkind.request_id=request_remarks.request_id inner join date_requested on request_items_inkind.request_id=date_requested.request_id inner join requestor_locator on requestor_locator.request_id=request_remarks.request_id where date_marked rlike('".$date_to_rlike."') and request_remarks='approved'";
       $amount_inkind_array=$this->login($sql);

       $amount_inkind_calulated=0;
       $amount_cash_calulated=0;
         foreach ($amount_cash_array as $key => $value) {
            $getme="sum(request_cash_amount)";
             $amount_cash_calulated=$value->$getme;
             if($amount_cash_calulated==null){
                $amount_cash_calulated=0;
             }
         }
         foreach ($amount_inkind_array as $key => $value) {
            $getme="sum(request_total_item_price)";
             $amount_inkind_calulated=$value->$getme;
              if($amount_inkind_calulated==null){
                $amount_inkind_calulated=0;
             }
         }
         return $amount_inkind_calulated+$amount_cash_calulated;
    }
    public function get_annual_budget()
    {
        $res=$this->login('select * from anual_budget');
        $budget=0;
        foreach ($res as $key => $value) {
            $budget=$value->anual_amount;
        }
        return $budget;
    }
    public function get_theme()
    {
        $res=$this->login('select * from theme_color');
        
        return $res;
    }
}

?>
