<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class Jet_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * to save requested Data
     */
    public function saveJetData($arrPost,$arrGet){
        $varDepDate = date('Y-m-d', strtotime($arrGet['jetDepDate']));
        $varArrDate = "";
        if(!empty($arrGet['jetArrDate'])){
            $varArrDate = date('Y-m-d', strtotime($arrGet['jetArrDate']));
        }
        $arrDataToSave = array('city_from'=>$arrGet['jetCityFrom'],'city_to'=>$arrGet['jetCityTo'],
           'jet_type'=>$arrGet['jetType'],'jet_trip'=>$arrGet['jetRoundType'],'dep_date'=>$varDepDate
           ,'arr_date'=>$varArrDate,'dep_time'=>$arrGet['jetDepTime'],'arr_time'=>$arrGet['jetArrTime'],
           'no_of_passanger'=>$arrGet['no_of_passanger'],
           'first_name'=>$arrPost['firstname'],'last_name'=>$arrPost['lastname'],
           'email'=>$arrPost['email'],'phone'=>$arrPost['phone'],
           'comments'=>$arrPost['comments'],'jet_advertising'=>$arrPost['depPort']);
        $this->db->insert('tbl_user_jet_data',$arrDataToSave);
    }
    
    /*
     * get Jets
     */
    public function getJetData($argArrData = false){
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $objQuery = $this->db
                    ->select("j.*,jsi.banner")
                    ->from("tbl_jet j")->join('tbl_slider_image_jet jsi',"j.id = jsi.jetid","left");
        if(!empty($argArrData['jet_type'])){
            $objQuery->where("j.jetType = '{$argArrData['jet_type']}'");
        }
        if(!empty($argArrData['id'])){
            $objQuery->where("j.id = '{$argArrData['id']}'");
        }else{
            $objQuery->group_by('j.id'); 
        }
        if(!empty($argArrData['limit'])){
            $objQuery->limit($argArrData['limit']);
        }
        return $objQuery->get()->result();
    }
    public function yacht_booking_infoall($session_user)
    {
        $this->db->select('*');
       $this->db->from('tbl_users');
       $this->db->where('userId',$session_user);
       $this->db->join('tbl_booking','tbl_booking.userId = tbl_users.id');
       //$food= $this->db->join('tbl_food_order','tbl_booking.id = tbl_food_order.bookingId');
       $query=$this->db->get();
       return $query->result();
       //return $food->row();
    }
    public function yacht_booking_info($id)
    {
       $this->db->select('*');
       $this->db->from('tbl_booking');
       $this->db->where('id',$id);
      //$this->db->join('tbl_users','tbl_users.id= tbl_booking.userId');
     $query=$this->db->get();
       return $query->row();
    }
 
   
}
