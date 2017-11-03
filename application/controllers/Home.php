<?php

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Home extends CI_Controller {

    /**

     * Index Page for this controller.

     *

     * Maps to the following URL

     * 		http://example.com/index.php/welcome

     * 	- or -

     * 		http://example.com/index.php/welcome/index

     * 	- or -

     * Since this controller is set as the default controller in

     * config/routes.php, it's displayed at http://example.com/

     *

     * So any other public methods not prefixed with an underscore will

     * map to /index.php/welcome/<method_name>

     * @see https://codeigniter.com/user_guide/general/urls.html

     */
    public $yachtCountry;
    public $yachtState;
    public $daysArrayInit;
    public $yachtList;
    public $yachtDetails;
    public $IMAGE_URL;
    public $yachtFilterParams;
    public $dashboardParams;
    public $villaCountry;
    public $villaState;
    public $villaCity;
    public $villaList;
    public $villaFilterParams;
    public $carClassification;
    public $carHours;
                function __construct() {

        parent::__construct();

        $this->getYachtCountry();
        $this->getVillaCountry();
        $this->getCarClassification();
        $this->getCarHours();
        //$this->getVillaState();
        //$this->getVillaCity();
        $this->daysArrayInit = array(
            array('id' => 1, 'name' => 'Half Day (9am - 1pm)', 'Half Day (9am - 1pm)' => 1),
            array('id' => 2, 'name' => 'Half Day (2pm - 6pm)', 'Half Day (2pm - 6pm)' => 2),
            array('id' => 3, 'name' => '24 Hour (Noon - Noon)', '24 Hour (Noon - Noon)' => 3),
            array('id' => 4, 'name' => '1 Day (09:00 - 19:00 Hrs)', '1 Day (09:00 - 19:00 Hrs)' => 4),
            array('id' => 5, 'name' => 'More (----)', 'More (----)' => 5),
            array('id' => 6, 'name' => '1 Week (----)', '1 Week (----)' => 6),
            array('id' => 7, 'name' => '2 Week (----)', '2 Week (----)' => 7),
            array('id' => 8, 'name' => '3 Week (----)', '3 Week (----)' => 8),
            array('id' => 9, 'name' => '4 Week (----)', '4 Week (----)' => 9)
        );

        $this->IMAGE_URL = $this->config->item('IMAGE_URL');
    }

    function getYachtCountry() {

        $this->load->library('PHPRequests');

        $request_made = $this->config->item('API_URL') . 'action=get_yachtcountry_list';

        $response = json_decode(Requests::get($request_made)->body);
        //var_dump($response);exit;

        if ($response->status == true) {

            $this->yachtCountry = $response->data;
        } else {

            $this->yachtCountry = null;
        }
    }

    public function getYachtState($countryId) {

        $this->load->library('PHPRequests');

        $request_made = $this->config->item('API_URL') . 'action=get_yachtstate_list&countryId=' . $countryId;

        $response = json_decode(Requests::get($request_made)->body);

        if ($response->status == true) {

            echo json_encode($response->data);
        } else {

            echo json_encode(array());
        }
    }

    public function getYachtDepartureCity($country, $state, $days, $daysId, $yachtType, $routeType) {

        $this->load->library('PHPRequests');

        $request_made = $this->config->item('API_URL') . 'action=get_yachtdeparture_list&countryId=' . $country . '&stateId=' . $state . '&days=' . $days . '&daysId=' . $daysId . '&yachtType=' . $yachtType . '&routeType=' . $routeType;

        $response = json_decode(Requests::get($request_made)->body);

        if ($response->status == true) {

            echo json_encode($response->data);
        } else {

            echo json_encode(array());
        }
    }

    public function getYachtArrivalCity($country, $state, $days, $daysId, $departureCity, $yachtType, $routeType) {



        $this->load->library('PHPRequests');

        $request_made = $this->config->item('API_URL') . 'action=get_yacht_arrival_port&countryId=' . $country . '&stateId=' . $state . '&days=' . $days . '&daysId=' . $daysId . '&departureId=' . $departureCity . '&yachtType=' . $yachtType . '&routeType=' . $routeType;

        $response = json_decode(Requests::get($request_made)->body);

        if ($response->status == true) {

            echo json_encode($response->data);
        } else {

            echo json_encode(array());
        }
    }

    public function yachts() {

        $days = $_REQUEST['yachtDays'];
        if ($days == 5) {
            $departureDate = new DateTime($_REQUEST["departureDate"]);
            $arrivalDate = new DateTime($_REQUEST["arrivalDate"]);
            $diff = $arrivalDate->diff($departureDate);
            $days = $diff->days;
        } else {
            $days = 1;
        }

        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_yacht_booking_list&guests=' . $_REQUEST['guest'] . '&stateId=' . $_REQUEST['yachtState'] . '&startCity=' . $_REQUEST['departureCity'] . '&days=' . $days . '&bookingDate=' . date_format(date_create($_REQUEST['departureDate']), 'y-m-d') . '&yachtType=' . $_REQUEST['yachtType'] . '&routeType=' . $_REQUEST['routeType'] . '&arrivalPort=' . $_REQUEST['arrivalCity'];

        $response = json_decode(Requests::get($request_made)->body);

        if ($response->status == true) {

            $this->yachtList = json_decode(json_encode($response->data));
            $_SESSION['yachtFilterParams'] = $_REQUEST;
            //print_r($_SESSION['yachtFilterParams']);
            $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
            $this->load->view('home/yacht_list');
        } else {
            $this->load->view('home/home');
            echo '<script>setTimeout(function(){ showAlert("Opps!!","No Record Listing","error"); },600);</script>';
        }
    }

    public function index() {
        $this->load->view('home/home');
    }

    public function yachts_details($yachtId) {
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_yacht_details&yachtId=' . $yachtId;
        $response = json_decode(Requests::get($request_made)->body);
        if ($response->status == true) {
            $this->yachtDetails = json_decode(json_encode($response->data));
            $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
            $_SESSION['yachtDetails'] = $this->yachtDetails;
            $this->load->view('home/yacht_details');
        } else {

            $this->load->view('home/yacht_list');
            echo '<script>setTimeout(function(){ showAlert("Opps!!","No Record Listing","error"); },600);</script>';
        }
    }

    public function yacht_limo() {
        $this->load->view('home/yacht_limo');
    }

    public function booking() {

        $this->load->view('home/booking');
    }

    public function chauffeur_services() {

        $this->load->view('home/chauffeur_service');
    }

    public function login() {
        $post = $this->input->post();
        if (!empty($post)) {
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . 'action=user_login&mailId=' . $post['mailId'] . '&password=' . $post['password'];
            $response = json_decode(Requests::get($request_made)->body);
            //var_dump($response);exit;
            if ($response->data == NULL) {
                $return = array('message' => $response->displyMessage, 'code' => 201);
            } else {
                $_SESSION['user_login'] = $response->data;
                $url = base_url('dashboard');
                $return = array('message' => $response->displyMessage, 'url' => $url, 'code' => 200);
            }
            echo json_encode($return);
            exit;

            //var_dump($post);exit;
        }
        $this->load->view('auth/login');
    }

    public function product_for_sale() {

        $this->load->view('home/product_for_sale');
    }

    public function product_for_sale_detail() {

        $this->load->view('home/product_for_sale_detail');
    }

    public function car_booking() {

        $this->load->view('home/car_booking');
    }

    public function car_search() {

        $this->load->view('home/car_search');
    }

    public function car_search_result() {

        $this->load->view('home/car_search_result');
    }

    public function terms_and_condition() {
        $this->load->view('home/terms_and_condition');
    }

    public function privacy_policy() {
        $this->load->view('home/privacy_policy');
    }

    public function faq() {
        $this->load->view('home/faq');
    }

    public function charter_fleet_guide() {
        $this->load->view('home/charter_fleet_guide');
    }

    public function choose_vehicle() {
        $this->load->view('home/choose_vehicle');
    }

    public function contract() {
        $this->load->view('home/contract');
    }

    public function customer_information() {
        $this->load->view('home/customer_information');
    }

    public function dashboard() {
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_user_configuration&websiteUrl=immidialuxury.com';
        $response = json_decode(Requests::get($request_made)->body);
        //echo "<pre>";
        //var_dump($response->user);exit;
        if ($response->status == true) {
            $this->dashboardParams = $response->user;
        }
        $this->load->view('home/dashboard');
    }

    public function food_and_drinks() {
        $this->load->view('home/food_and_drinks');
    }

    public function limousine_services() {
        $this->load->view('home/limousine_services');
    }

    public function payment() {
        $this->load->view('home/payment');
    }

    public function search() {
        $this->load->view('home/search');
    }

    public function search_result() {
        $this->load->view('home/search_result');
    }

    public function yacht_booking() {
        $this->load->view('home/yacht_booking');
    }

    public function yacht_booking_info() {
        $this->load->view('home/yacht_booking_info');
    }

    public function signup() {
        $post = $this->input->post();

        if (!empty($post)) {
            //var_dump($post);exit;
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . 'action=manage_users&type=Add&firstName=' . $post['firstName'] . '&lastName=' . $post['lastName'] . '&mailId=' . $post['mailId'];
            $response = json_decode(Requests::get($request_made)->body);
            //var_dump($response);exit;
            if ($response->status == true) {
                $return = array('message' => $response->displyMessage, 'code' => 200);
            } else {
                $return = array('message' => $response->displyMessage, 'code' => 201);
            }
            echo json_encode($return);
            exit;
        }
    }

    function getVillaCountry() {
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_yachtcountry_list';
        $response = json_decode(Requests::get($request_made)->body);
        if ($response->status == true) {
            $this->villaCountry = $response->data;
        }
    }

    public function getVillaState($countryId) {
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_yachtstate_list&countryId=' . $countryId;
        $response = json_decode(Requests::get($request_made)->body);
        //var_dump($response);exit;
        if ($response->status == true) {
            echo json_encode($response->data);
        } else {
            echo json_encode(array());
        }
    }

//    function getVillaState() {
//        $this->load->library('PHPRequests');
//        $request_made = $this->config->item('API_URL') . 'action=get_yachtstate_list&countryId=' . $countryId;
//        $response = json_decode(Requests::get($request_made)->body);
//        if ($response->status == true) {
//            $this->villaState = $response->data;
//        } else {
//            $this->villaState = null;
//        }
//    }

    public function getVillaCity($stateId) {
        //var_dump($stateId);exit;
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_city_list&villaAreaId=' . $stateId;
        $response = json_decode(Requests::get($request_made)->body);
        var_dump($response->data);
        exit;
        if ($response->status == true) {
            echo json_encode($response->data);
        } else {
            echo json_encode(array());
        }
    }

    public function villas() {
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_villa_booking_list&destinationId=' . 1 . '&guests=' . $_REQUEST['villa_guest'] . '&arrivalDateTime=' . date('y-m-d', strtotime($_REQUEST['checkin'])) . '&departureDateTime=' . date('y-m-d', strtotime($_REQUEST['checkout']));
        $response = json_decode(Requests::get($request_made)->body);
        //var_dump($response);exit;
        if ($response->status == true) {
            $data['villaList'] = json_decode(json_encode($response->data));
            $data['villaFilterParams'] = $_REQUEST;
            $data['imageUrl'] = $this->config->item('IMAGE_URL');
            $_SESSION['villaFilterParams'] = $data['villaFilterParams'];
            $this->villaFilterParams = $_SESSION['villaFilterParams'];
            $this->load->view('home/villa_search_result', $data);
        } else {
            $this->load->view('home/home');
            echo '<script>setTimeout(function(){ showAlert("Opps!!","No Record Listing","error"); },600);</script>';
        }
    }

    public function villa_rental_agreement() {
        $this->load->view('home/villa_rental_agreement');
    }

    public function villa_search($villaId) {
        //var_dump($villaId);exit;
        if (!empty($villaId)) {
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . 'action=get_villa_booking_list&villaId=' . $villaId;
            $response = json_decode(Requests::get($request_made)->body);
            //var_dump($response);exit;
            if ($response->status == true) {
                $data['villDetails'] = json_decode(json_encode($response->data));
                $this->villaFilterParams = $_SESSION['villaFilterParams'];
                $this->load->view('home/villa_search', $data);
            } else {

                $this->load->view('home/villa_search_result');
                echo '<script>setTimeout(function(){ showAlert("Opps!!","No Record Listing","error"); },600);</script>';
            }
        }
    }

    public function villa_search_result() {
        $this->load->view('home/villa_search_result');
    }

    public function long_range_jet() {
        $this->load->view('home/long_range_jet');
    }

    public function challenger() {
        $this->load->view('home/challenger');
    }
    
    
    private function getCarClassification() {
        $this->load->library('PHPRequests');

        $request_made = $this->config->item('API_URL') . 'action=get_classification_list';

        $response = json_decode(Requests::get($request_made)->body);
        //var_dump($response);exit;

        if ($response->status == true) {

            $this->carClassification = $response->data;
        } else {

            $this->carClassification = null;
        }
    }
    private function getCarHours() {
        $this->load->library('PHPRequests');

        $request_made = $this->config->item('API_URL') . 'action=get_allhour_list';

        $response = json_decode(Requests::get($request_made)->body);
        //var_dump($response);exit;

        if ($response->status == true) {

            $this->carHours = $response->data;
        } else {

            $this->carHours = null;
        }
    }
    
    public function carListing(){
        $arrDetails = array();
        $this->load->library('PHPRequests');
        $arrPost = $this->input->get();
        $days = $arrPost['days'];
        $bookingDate = date('Y-m-d', strtotime($arrPost['bookingDate']));
        $varQueryString = "&days={$days}&noOfPasenger={$arrPost['noOfPasenger']}&stateId={$arrPost['carState']}&bookingDate={$bookingDate}&driver={$arrPost['driver']}&classification={$arrPost['classification']}";
        $request_made = $this->config->item('API_URL') . 'action=get_car_available_list'.$varQueryString;
        $response = json_decode(Requests::get($request_made)->body);
        if ($response->status == true) {
            $arrDetails = $response->data;
        }
        //vecho "<pre>";var_dump($arrPost);
        $postData = $arrPost;
        $postData['bookingDate'] = $bookingDate;
        $this->load->view('home/car_search_result',array('arrCarDetails'=>$arrDetails,'postData'=>$postData));
    }
    public function carDetails($varId=""){
        if(!empty($varId)){
            $arrPost = $this->input->get();
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . 'action=get_car_details&carId='.$varId;
            $response = json_decode(Requests::get($request_made)->body);
            $arrCarDetail = array();
            if ($response->status == true) {
                $arrCarDetail = $response->data;
            }
            
            // get all city according to state
            $requestCity = $this->config->item('API_URL') . 'action=get_cities_details&stateId='.$arrPost['carState'];
            $responseCity = json_decode(Requests::get($requestCity)->body);
            $arrCarCitiesDetail = array();
            if ($responseCity->status == true) {
                $arrCarCitiesDetail = $responseCity->data;
            }
            $bookingDate = date('Y-m-d', strtotime($arrPost['bookingDate']));
            $arrPost['bookingDate'] = $bookingDate;
            $this->load->view('home/car_search',array('objCarDetail'=>$arrCarDetail,'postData'=>$arrPost,'arrCarCitiesDetail'=>$arrCarCitiesDetail));
        }
    }
    
    public function carBook(){
        
    }
    
     
    public function getVillaLimousine($villaId,$checkIn,$checkOut){
       // var_dump($villaId);exit;
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_villa_booking_list&villaId=' . $villaId .'&arrivalDateTime='.$checkIn.'&departureDateTime='.$checkOut;
        $response = json_decode(Requests::get($request_made)->body);
        //var_dump($response);exit;
        //exit;
        //var_dump($response);exit;
        if ($response->status == true) {
            $data['villalimousineDetails'] = json_decode(json_encode($response->data));
            $this->villaFilterParams = $_SESSION['villaFilterParams'];
            $data['checkIn'] = str_replace('%20',' ',$checkIn);
            //var_dump($data['checkIn']);exit;
             $data['checkOut'] = str_replace('%20',' ',$checkOut);
             if(!empty($data['checkIn'])){
                 $departureDate = new DateTime($data['checkIn']);
             }else{
                 $departureDate = new DateTime($checkIn);
             }
             if(!empty($data['checkOut'])){   
                 $arrivalDate = new DateTime($data['checkOut']);
             }else{
                 $arrivalDate = new DateTime($checkOut);
             }
             $diff = $arrivalDate->diff($departureDate);
             $days = $diff->days;
             //var_dump($days);exit;
             $data['days'] = $days;
            $this->load->view('home/villa_limousine',$data);
        } 
    }
    public function save_vill_lumousine(){
         $arrDataget = $this->input->get(); 
         //var_dump($arrDataPost);exit;
         $this->load->view('auth/login');
    }
   

}
