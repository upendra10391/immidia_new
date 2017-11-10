<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

error_reporting(1);

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
    public $yachtExtraTime;
    public $IMAGE_URL;
    public $yachtFilterParams;
    public $yachtDeliveryRate;
    public $yachtDropOffRate;
    public $yachtSubTotal;
    public $yachtFormula;
    public $yachtFormulaPrice;
    public $yachtFood;
    public $dashboardParams;
    public $villaCountry;
    public $villaState;
    public $villaCity;
    public $villaList;
    public $villaFilterParams;
    public $carClassification;
    public $carHours;
    public $allTime;
    public $arrJetType;
    public $arrCurrency;
    public $carCountry;

    function __construct() {
        parent::__construct();

        $this->load->database();
//        $this->getYachtCountry();
//        $this->getAllTime();
//        $this->getVillaCountry();
//        $this->getCarClassification();
//        $this->getCarHours();
//        //var_dump($this->carHours);exit;
//        //$this->getVillaState();
//        //$this->getVillaCity();
//        $this->daysArrayInit = array(
//            array('id' => 1, 'name' => 'Half Day (9am - 1pm)', 'Half Day (9am - 1pm)' => 1),
//            array('id' => 2, 'name' => 'Half Day (2pm - 6pm)', 'Half Day (2pm - 6pm)' => 2),
//            array('id' => 3, 'name' => '24 Hour (Noon - Noon)', '24 Hour (Noon - Noon)' => 3),
//            array('id' => 4, 'name' => '1 Day (09:00 - 19:00 Hrs)', '1 Day (09:00 - 19:00 Hrs)' => 4),
//            array('id' => 5, 'name' => 'More (----)', 'More (----)' => 5),
//            array('id' => 6, 'name' => '1 Week (----)', '1 Week (----)' => 6),
//            array('id' => 7, 'name' => '2 Week (----)', '2 Week (----)' => 7),
//            array('id' => 8, 'name' => '3 Week (----)', '3 Week (----)' => 8),
//            array('id' => 9, 'name' => '4 Week (----)', '4 Week (----)' => 9)
//        );
//
//        $this->arrJetType = array('Small Jet' => 'Small Jet', 'Medium Jet' => 'Medium Jet', 'Long Range Jet', 'Large Airliner' => 'Large Airliner', 'Helicopter' => 'Helicopter');
//        $this->arrCurrency = array('1' => '€', '2' => '$', '3' => 'AED');
//        $this->IMAGE_URL = $this->config->item('IMAGE_URL');
//        if (!isset($_SESSION['CURRENT_PAGE'])) {
//            $_SESSION['CURRENT_PAGE'] = 'dashboard';
//        }
        $this->getYachtCountry();
        $this->getAllTime();
        $this->getVillaCountry();
        $this->getCarClassification();
        $this->getCarHours();
        //var_dump($this->carHours);exit;
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

        $this->arrJetType = array('Small Jet' => 'Small Jet', 'Medium Jet' => 'Medium Jet', 'Long Range Jet', 'Large Airliner' => 'Large Airliner', 'Helicopter' => 'Helicopter');
        $this->arrCurrency = array('1' => '€', '2' => '$', '3' => 'AED');
        $this->IMAGE_URL = $this->config->item('IMAGE_URL');
        if (!isset($_SESSION['CURRENT_PAGE'])) {
            $_SESSION['CURRENT_PAGE'] = 'dashboard';
        }
    }

    // check whether login or not
    private function isLoggedIn(){
        if(empty($_SESSION['user_login'])){
            
            redirect(base_url('login'));
            exit;
        }
        return true;
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

        $request_made = $this->config->item('API_URL') . 'action=get_state_list_car&countryId=' . $countryId;

        $response = json_decode(Requests::get($request_made)->body);

        if ($response->status == true) {

            echo json_encode($response->data);
            exit;
        } else {

            echo json_encode(array());
            exit;
        }
    }

    public function getAllTime() {

        $this->load->library('PHPRequests');

        $request_made = $this->config->item('API_URL') . 'access=true&action=get_time_list';

        $response = json_decode(Requests::get($request_made)->body);

        if ($response->status == true) {
            $this->allTime = $response->data;
        } else {
            $this->allTime = null;
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


    public function submit_yacht_order(){

        // echo "<pre>";
        // echo "sessiondata";
        // print_r($_SESSION);
        // echo "request data";
        // print_r($_REQUEST);



            //prepare parameter for yacht submit order
        $payment = array(
          "id"            =>  $_SESSION['yachtDetails']->id,
          "name"          =>  $_SESSION['yachtDetails']->name,
          "bookingType"   =>  4,
          "departureDate" =>  date_format(date_create($_SESSION['yachtFilterParams']['departureDate']), 'Y-m-d'),
          "arrivalDate"   =>  ($_SESSION['yachtFilterParams']['arrivalDate'] != null) ? date_format(date_create($_SESSION['yachtFilterParams']['arrivalDate']), 'Y-m-d') : date_format(date_create($_SESSION['yachtFilterParams']['departureDate']), 'Y-m-d'),
          "ownerId"       =>  $_SESSION['yachtDetails']->ownerId,
          "routeType"     =>  $_SESSION['yachtFilterParams']['routeType'],
          "menuDetails"   =>  $_REQUEST['yachtMenu'],
          "fromArea"      =>  $_SESSION['yachtFilterParams']['departureCityName'],
          "type"          =>  "Add",
          "toArea"        =>  $_SESSION['yachtFilterParams']['arrivalCityName'],
          "currency"      =>  'AED',
          "userId"        =>  $_SESSION['user_login']->id,
          "guests"        =>  $_SESSION['yachtFilterParams']['guest'],
          "deliveryPrice" =>   floor($_SESSION['yachtFilterParams']['yachtDeliveryRate']),
          "dropOffRate"   =>   floor($_SESSION['yachtFilterParams']['yachtDropOff']),
          "formulaPrice"  =>   floor($_SESSION['yachtFilterParams']['yachtFormulaPrice']),
          "foodPrice"     =>   floor($_SESSION['yachtFilterParams']['yachtFoodPrice']),
          "productPrice"  =>   floor($_SESSION['yachtDetails']->price),
          "extraTime"     =>   floor($_SESSION['yachtFilterParams']['yachtExtraTime']),
          "subtotal"      =>   floor($_SESSION['yachtFilterParams']['yachtSubTotal']),
          "total"         =>   floor($_SESSION['yachtFilterParams']['yachtFoodPriceWithPrice']),
          "transactionFee"=>   0,
          "websiteId"     =>  0, // for whitelabel case either should be 0
          "departureHours"=>  $_SESSION['yachtFilterParams']['departureHour'],
          "arrivalHours"  =>  $_SESSION['yachtFilterParams']['arrivalHour'],
          "limoDetails"   =>  $_SESSION['yachtFilterParams']['limoDetails'],
          "stateId"       =>  $_SESSION['yachtFilterParams']['yachtState'],
          "days"          =>  $_SESSION['yachtFilterParams']['yachtDays']
      );

    $queryString =  http_build_query($payment);

    $this->load->library('PHPRequests');

    $request_made = $this->config->item('API_URL') . 'access=true&action=booking&'.$queryString;

    $response = json_decode(Requests::get($request_made)->body);

    if ($response->status == true) {

        echo '<script>window.open("http://www.immidia.co/immidia/api/ws/controller/?access=true&action=payment&bookingId='.$response->data.');</script>';
      
    } else {

      echo '<script>setTimeout(function(){ showAlert("Opps!!","No Record Listing","error"); },600);</script>';
    }



    }

    public function yachts() {

        if (isset($_SESSION['yachtFilterParams'])) {

            $_REQUEST = $_SESSION['yachtFilterParams'];
        }

        $days = $_REQUEST['yachtDays'];
        if ($_REQUEST['yachtType'] != 2) {

            if ($days == 5) {
                $departureDate = new DateTime($_REQUEST["departureDate"]);
                $arrivalDate = new DateTime($_REQUEST["arrivalDate"]);
                $diff = $arrivalDate->diff($departureDate);
                $days = $diff->days;
            } else {
                $days = 1;
            }
        } else {
            $days = $_REQUEST['yachtDays'];
        }


        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_yacht_booking_list&guests=' . $_REQUEST['guest'] . '&stateId=' . $_REQUEST['yachtState'] . '&startCity=' . $_REQUEST['departureCity'] . '&days=' . $days . '&bookingDate=' . date_format(date_create($_REQUEST['departureDate']), 'y-m-d') . '&yachtType=' . $_REQUEST['yachtType'] . '&routeType=' . $_REQUEST['routeType'] . '&arrivalPort=' . $_REQUEST['arrivalCity'];
        // echo  $request_made;

        $response = json_decode(Requests::get($request_made)->body);

        if ($response->status == true) {

            $this->yachtList = json_decode(json_encode($response->data));
            $_REQUEST['yachtDaysDiff'] = $days;
            $_SESSION['yachtFilterParams'] = $_REQUEST;
            //print_r($_SESSION['yachtFilterParams']);
            $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
            $this->load->view('home/yacht_list');
        } else {
            $this->load->view('home/home');
            echo '<script>setTimeout(function(){ showAlert("Opps!!","No Record Listing","error"); },600);</script>';
            //redirect('/', 'refresh');
        }
    }

    public function index() {
        unset($_SESSION['yachtFilterParams']);
        //  session_destroy();
        if ($this->input->post('firstname')) {
            $this->saveJetData($this->input->post(), $this->input->get());
        }
        // called car countries
        $this->getCarCountry();
        $this->load->view('home/home');
    }

    public function yachts_details($yachtId) {

        //current page for super yacht
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $this->CURRENT_PAGE = $actual_link;

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
        $_SESSION['yachtFilterParams']['departureHour'] = $_REQUEST['departureHour'];
        $_SESSION['yachtFilterParams']['arrivalHour'] = $_REQUEST['arrivalHour'];
        $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
        $this->yachtDetails = $_SESSION['yachtDetails'];
        $isSubmit = $this->getYachtMoreDetailsSubmitData($this->yachtDetails->id, $this->yachtFilterParams['departureCity'], $this->yachtFilterParams['departureCity'], $this->yachtFilterParams['yachtDays']);
        $this->getDeliveryRate($this->yachtFilterParams['departureCity'], $this->yachtDetails->portOfRegistryId);
        $this->getDropOff($this->yachtFilterParams['arrivalCity'], $this->yachtDetails->portOfRegistryId);
        $this->getYachtFormula();
        $this->getFormulaPrice($this->yachtFilterParams['arrivalCity'], $this->yachtFilterParams['departureCity']);
        $this->getExtraTime();

        if ($isSubmit) {
            $this->load->view('home/yacht_limo');
        } else {
            $this->load->view('home/yacht_details');
            echo '<script>setTimeout(function(){ showAlert("Opps!!","No Record Listing","error"); },600);</script>';
        }

        //update session
        $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
    }

    public function yacht_food() {
        $_SESSION['yachtFilterParams']['limoDetails'] = $_REQUEST;
        $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
        $this->yachtDetails = $_SESSION['yachtDetails'];
        $this->getYachtFood($this->yachtFilterParams['yachtState'], $this->yachtFilterParams['departureCity']);
        $this->load->view('home/yacht_food');
    }

    public function yacht_payment() {
        $_SESSION['yachtFilterParams']['yachtFoodPrice'] = $_REQUEST['yachtFoodPrice'];
        $_SESSION['yachtFilterParams']['yachtFoodPriceWithPrice'] = $_REQUEST['yachtFoodPriceWithPrice'];
        $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
        $this->yachtDetails = $_SESSION['yachtDetails'];
        $this->load->view('home/yacht_payment');
    }

    public function getYachtFood($stateId, $departureCity) {
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'access=true&action=get_categorylistby_city&stateId=' . $stateId . '&cityId=' . $departureCity;
        $response = json_decode(Requests::get($request_made)->body);
        if ($response->status == true) {

            $this->yachtFood = $response->data;
        } else {

            $this->yachtFood = null;
            $this->load->view('home/yacht_food');
            echo '<script>setTimeout(function(){ showAlert("Opps!!","No Record Listing","error"); },600);</script>';
        }
    }

    public function getDeliveryRate($departureCity, $portOfReg) {
        $this->load->library('PHPRequests');
        $this->yachtDetails = $_SESSION['yachtDetails'];
        $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
        $request_made = $this->config->item('API_URL') . 'access=true&action=get_deliverylime_ports&departurePort=' . $departureCity . '&portOfRegistryId=' . $portOfReg;
        $response = json_decode(Requests::get($request_made)->body);

        $timeDifference = 0;
        if ($response->status == true) {


            if ($this->yachtFilterParams['routeType'] == 1) {
                if ($this->yachtFilterParams['yachtType'] == 1) {
                    $timeDifference = $response->data->motorOneWayTime;
                } else {
                    $timeDifference = $response->data->sailOneWayTime;
                }
            } else {
                if ($this->yachtFilterParams['yachtType'] == 1) {
                    $timeDifference = $response->data->motorOneWayTime;
                } else {
                    $timeDifference = $response->data->sailOneWayTime;
                }
            }

            if ($this->yachtFilterParams['departureCityName'] != $this->yachtDetails->portOfRegistry) {
                $this->yachtDeliveryRate = ( $timeDifference / 60) * $this->yachtDetails->fuelConsumption * $this->yachtDetails->commercialFuelPrice;
            } else {
                $this->yachtDeliveryRate = 0;
            }
        } else {

            $this->yachtDeliveryRate = 0;
        }

        $_SESSION['yachtFilterParams']['yachtDeliveryRate'] = $this->yachtDeliveryRate;
    }

    public function getDropOff($arrivalCity, $portOfReg) {
        $this->load->library('PHPRequests');
        $this->yachtDetails = $_SESSION['yachtDetails'];
        $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
        $request_made = $this->config->item('API_URL') . 'access=true&action=get_dropOffTime_ports&arrivalPort=' . $arrivalCity . '&portOfRegistryId=' . $portOfReg;
        $response = json_decode(Requests::get($request_made)->body);

        $timeDifference = 0;
        if ($response->status == true) {

            if ($this->yachtFilterParams['routeType'] == 1) {
                if ($this->yachtFilterParams['yachtType'] == 1) {
                    $timeDifference = $response->data->motorOneWayTime;
                } else {
                    $timeDifference = $response->data->sailOneWayTotalTime;
                }
            } else {

                if ($this->yachtFilterParams['yachtType'] == 1) {
                    $timeDifference = $response->data->motorReturnTime;
                } else {
                    $timeDifference = $response->data->sailReturnTime;
                }
            }

            if ($this->yachtFilterParams['routeType'] == 1) {
                if ($this->yachtFilterParams['arrivalCityName'] !== $this->yachtDetails->portOfRegistry) {

                    $this->yachtDropOffRate = ($timeDifference / 60) * intval($this->yachtDetails->fuelConsumption) * intval($this->yachtDetails->commercialFuelPrice);
                } else {
                    $this->yachtDropOffRate = 0;
                }
            } else {
                if ($this->yachtFilterParams['departureCityName'] !== $this->yachtDetails->portOfRegistry) {

                    $this->yachtDropOffRate = ($timeDifference / 60) * intval($this->yachtDetails->fuelConsumption) * intval($this->yachtDetails->commercialFuelPrice);
                } else {
                    $this->yachtDropOffRate = 0;
                }
            }
        } else {
            $this->yachtDropOffRate = 0;
        }

        $_SESSION['yachtFilterParams']['yachtDropOff'] = $this->yachtDropOffRate;
    }

    public function getYachtFormula() {

        if ($this->yachtFilterParams['yachtDays'] != 5) {

            if ($this->yachtFilterParams['routeType'] == 0) {
                $this->yachtFormula = "Return";
            } else {
                $this->yachtFormula = "Regular";
            }
        } else {
            $this->yachtFormula = 'Customized';
        }

        $_SESSION['yachtFilterParams']['yachtFormula'] = $this->yachtFormula;
    }

    public function getFormulaPrice($arrivalCity, $departureCity) {

        $this->load->library('PHPRequests');
        $this->yachtDetails = $_SESSION['yachtDetails'];
        $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
        $request_made = $this->config->item('API_URL') . 'access=true&action=get_formula_price&arrivalPort=' . $arrivalCity . '&departurePort=' . $departureCity;
        $response = json_decode(Requests::get($request_made)->body);

        $timeDifference = 0;
        $regularPrice = 0;
        $dayDifference = 0;
        if ($response->status == true) {


            if ($this->yachtFilterParams['routeType'] == 1) {
                if ($this->yachtFilterParams['yachtType'] == 1) {

                    $timeDifference = $response->data->motorOneWayTotalTime;
                } else {

                    $timeDifference = $response->data->sailOneWayTotalTime;
                }
            } else {
                if ($this->yachtFilterParams['yachtType'] == 0) {

                    $timeDifference = $response->data->sailReturnTotalTime;
                } else {

                    $timeDifference = $response->data->motorReturnTotalTime;
                }
            }

            //end calulating time diff

            if ($this->yachtFilterParams['yachtDays'] != 5) {

                $regularPrice = ($timeDifference / 60) * intval($this->yachtDetails->fuelConsumption) * intval($this->yachtDetails->commercialFuelPrice);
            } else {

                $regularPrice = (intval($this->yachtFilterParams['yachtUpdatePrice']) * 35) / 100;
            }


            /*             * ****************get formula price************ */

            $arrivalDate = new DateTime($this->yachtFilterParams['arrivalDate']);
            $departureDate = new DateTime($this->yachtFilterParams['departureDate']);

            $timeDiff = abs($arrivalDate->getTimestamp() - $departureDate->getTimestamp());

            if ($this->yachtFilterParams['yachtDays'] == 3) {

                $dayDifference = (ceil($timeDiff / (1000 * 3600 * 24))) * 1.5;
            } else if ($this->yachtFilterParams['yachtDays'] == 5) {

                $dayDifference = ceil($timeDiff / (1000 * 3600 * 24));
            } else {
                $dayDifference = 1;
            }

            $this->yachtFormulaPrice = $regularPrice * $dayDifference;
        } else {
            $this->yachtFormulaPrice = 0;
        }


        $_SESSION['yachtFilterParams']['yachtFormulaPrice'] = $this->yachtFormulaPrice;
    }

    public function getExtraTime() {


        $departureHours = explode(':', $this->yachtFilterParams['departureHour']);
        $departureMins = (+$departureHours[0]) * 60 + (+$departureHours[1]);
        $arrivalHours = explode(':', $this->yachtFilterParams['arrivalHour']);
        $arrivalMins = (+$arrivalHours[0]) * 60 + (+$arrivalHours[1]);
        $this->yachtExtraTime = 0;

        if ($this->yachtFilterParams['yachtDays'] == 1 || $this->yachtFilterParams['yachtDays'] == 2) {
            if (($arrivalMins - $departureMins) == 300) {
                $this->yachtExtraTime = (0.1 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) < 360 && ($arrivalMins - $departureMins) > 300) {
                $this->yachtExtraTime = (0.2 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) < 420 && ($arrivalMins - $departureMins) > 360) {
                $this->yachtExtraTime = (0.3 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) < 480 && ($arrivalMins - $departureMins) > 420) {
                $this->yachtExtraTime = (0.4 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) > 480) {
                $this->yachtExtraTime = (0.4 * $this->yachtFilterParams['yachtUpdatePrice']);
            }
        }
        if ($this->yachtFilterParams['yachtDays'] == 4 || $this->yachtFilterParams['yachtDays'] == 5) {
            if (($arrivalMins - $departureMins) == 660) {
                $this->yachtExtraTime = (0.1 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) < 720 && ($arrivalMins - $departureMins) > 660) {
                $this->yachtExtraTime = (0.2 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) < 780 && ($arrivalMins - $departureMins) > 720) {
                $this->yachtExtraTime = (0.3 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) < 840 && ($arrivalMins - $departureMins) > 780) {
                $this->yachtExtraTime = (0.4 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) > 840) {
                $this->yachtExtraTime = (0.4 * $this->yachtFilterParams['yachtUpdatePrice']);
            }
        }
        if ($this->yachtFilterParams['yachtDays'] == 3) {
            if (($arrivalMins - $departureMins) == 1500) {
                $this->yachtExtraTime = (0.1 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) < 1560 && ($arrivalMins - $departureMins) > 1500) {
                $this->yachtExtraTime = (0.2 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) < 1620 && ($arrivalMins - $departureMins) > 1560) {
                $this->yachtExtraTime = (0.3 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) < 1680 && ($arrivalMins - $departureMins) > 1620) {
                $this->yachtExtraTime = (0.4 * $this->yachtFilterParams['yachtUpdatePrice']);
            } else if (($arrivalMins - $departureMins) > 1680) {
                $this->yachtExtraTime = (0.4 * $this->yachtFilterParams['yachtUpdatePrice']);
            }
        }





        $this->yachtSubTotal = $this->yachtFilterParams['yachtUpdatePrice'] + $this->yachtFilterParams['yachtDeliveryRate'] + $this->yachtFilterParams['yachtDropOff'] + $this->yachtFilterParams['yachtDropOff'] + $this->yachtFilterParams['yachtFormulaPrice'] + $this->yachtFilterParams['yachtExtraTime'];

        $_SESSION['yachtFilterParams']['yachtSubTotal'] = $this->yachtSubTotal;
        $_SESSION['yachtFilterParams']['yachtExtraTime'] = $this->yachtExtraTime;
    }

    public function getYachtMoreDetailsSubmitData($yachtId, $departureCity, $arrivalCity, $yachtDays) {
        $this->load->library('PHPRequests');
        $this->yachtDetails = $_SESSION['yachtDetails'];
        $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
        $request_made = $this->config->item('API_URL') . 'access=true&action=get_yacht_booking_list&yachtId=' . $yachtId . '&startPort=' . $departureCity . '&endCity=' . $arrivalCity . '&days=' . $yachtDays;
        $response = json_decode(Requests::get($request_made)->body);

        if ($response->status == true) {

            $this->yachtDetails = $response->data;
            $_SESSION['yachtDetails'] = $response->data;

            return true;
        } else {

            $this->yachtDetails = null;
            return false;
        }
    }

    public function superYachtDetails() {

        $this->load->library('PHPRequests');
        $this->yachtDetails = $_SESSION['yachtDetails'];
        $this->yachtFilterParams = $_SESSION['yachtFilterParams'];
        $request_made = $this->config->item('API_URL') . 'access=true&action=super_yacht_mail&mailId=' . $_SESSION['user_login']->mailId . '&name=' . $_SESSION['user_login']->firstName . '&country=' . $_SESSION['yachtFilterParams']['yachtCountry'] . '&message=' . $_REQUEST['msg'] . '&state=' . $_SESSION['yachtFilterParams']['yachtState'] . '&routeType=' . $_SESSION['yachtFilterParams']['routeType'] . '&days=' . $_SESSION['yachtFilterParams']['yachtDays'] . '&journeyDate=' . $_SESSION['yachtFilterParams']['departureDate'] . '&departurePort=' . $_SESSION['yachtFilterParams']['departureCity'] . '&arrivalPort=' . $_SESSION['yachtFilterParams']['arrivalCity'] . '&noOfGuests=' . $_SESSION['yachtFilterParams']['guest'];
        $response = json_decode(Requests::get($request_made)->body);


        if ($response->status == 1) {


            echo '<script>setTimeout(function(){ showAlert("Success!!","Thanks for using Immidia Luxury","Success"); },600);</script>';
            redirect('/', 'refresh');
        } else {

            echo '<script>setTimeout(function(){ showAlert("Opps!!","No Record Listing","error"); },600);</script>';
        }
    }

    public function booking() {

        $this->load->view('home/booking');
    }

    public function chauffeur_services() {

        $this->load->view('home/chauffeur_service');
    }

     public function login() {
        //if($this->isLoggedIn()){
        $post = $this->input->post();
        if (!empty($post)) {
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . 'action=user_login&mailId=' . $post['mailId'] . '&password=' . $post['password'];
            $response = json_decode(Requests::get($request_made)->body);
            var_dump($response);exit;
            //var_dump($response);exit;
           // $response->data=161;
            if ($response->data == NULL) {
                $return = array('message' => $response->displyMessage, 'code' => 201);
            } else {
                $_SESSION['user_login'] = $response->data;
                $url = base_url($_SESSION['CURRENT_PAGE']);
                $return = array('message' => $response->displyMessage, 'url' => $url, 'code' => 200);
            }
            echo json_encode($return);
            exit;

            //var_dump($post);exit;
       // }
      
        }
          $this->load->view('auth/login');
        /*else{
            redirect(base_url('dashboard'));
        }*/
    }

    public function product_for_sale() {
        $this->session->unset_userdata('all_p_villa_data');
        $arrGet = $this->input->get();
        $this->load->library('PHPRequests');
        $varExtra = "";
        $arrSaleaDetails = array();
        if (!empty($arrGet['p_s_c'])) {
            $varExtra .= "&country={$arrGet['p_s_c']}";
        } else {
            $varExtra .= "&country=29";
        }
        $request_made = $this->config->item('API_URL') . 'action=get_villa_sale_list' . $varExtra;
        $response = json_decode(Requests::get($request_made)->body);
        //echo "<pre>";
        //var_dump($response->data);exit;
        if ($response->status == true) {
            $arrSaleaDetails = $response->data;
        }
        $this->load->view('home/product_for_sale', array('arrSaleaDetails' => $arrSaleaDetails));
    }

    public function product_for_sale_detail($varId = "") {
        $arrSaleVillaDetails = $this->session->userdata('all_p_villa_data');
        //echo "<pre>";var_dump($arrSaleVillaDetails);exit;
        $this->load->view('home/product_for_sale_detail', array('objValue' => $arrSaleVillaDetails[$varId]));
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
        if($this->isLoggedIn()){
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . 'action=get_user_configuration&websiteUrl=immidialuxury.com';
            $response = json_decode(Requests::get($request_made)->body);
            $data['user']= $_SESSION['user_login'];
           // var_dump($data['user']);exit;
            $varUserId = $_SESSION['user_login']->id;
          //  var_dump($varUserId);exit;
            //$this->session->set_userdata('user_booking',$varUserId);
           // $session_user= $this -> session -> userdata('user_booking');
            $this->load->model('Jet_model');
            $data['blogs']=$this->Jet_model->yacht_booking_infoall($varUserId);
            if ($response->status == true) {
                $this->dashboardParams = $response->user;
            }
            $this->load->view('home/dashboard', $data);
        }
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
      $varUserId = $_SESSION['user_login']->id;
        $this->load->model('Jet_model');
        $result['blogs'] = $this->Jet_model->yacht_booking_infoall($varUserId);
        // var_dump($result['blogs']);exit;
        $this->load->view('home/yacht_booking', $result);
    }

    public function yacht_booking_info($id) {
       $varUserId = $_SESSION['user_login']->id;
      //  var_dump($session_user);exit;
         $this->load->model('Jet_model');
        $result['blogs']=$this->Jet_model->yacht_booking_info($id);
        $result['food']=$this->Jet_model->yacht_booking_info_food($id);
     //  var_dump($result['food']);exit;
        $this->load->view('home/yacht_booking_info',$result);
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
            $arrReturn = array();
            if (!empty($response->data)) {
                foreach ($response->data as $objData) {
                    if ($objData->countryId == $countryId) {
                        $arrReturn[] = $objData;
                    }
                }
            }
            echo json_encode($arrReturn);
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

    public function long_range_jet($jetType = "") {
        $this->load->model('Jet_model', '', true);
        $arrJetData = $this->Jet_model->getJetData(array('jet_type' => $jetType));
        $this->load->view('home/long_range_jet', array('arrJetData' => $arrJetData));
    }

    // call when some one click on home page jet
    public function charter_fleet_guide() {
        $this->load->model('Jet_model', '', true);
        $arrJetData1 = $this->Jet_model->getJetData(array('jet_type' => 'Large_Airliner', 'limit' => '3'));
        $arrJetData2 = $this->Jet_model->getJetData(array('jet_type' => 'Long_Range_Jets', 'limit' => '3'));
        $arrJetData3 = $this->Jet_model->getJetData(array('jet_type' => 'Medium_Jets', 'limit' => '3'));
        $arrJetData4 = $this->Jet_model->getJetData(array('jet_type' => 'Small_Jets', 'limit' => '3'));
        $this->load->view('home/charter_fleet_guide', array('arrJetData1' => $arrJetData1,
            'arrJetData2' => $arrJetData2,
            'arrJetData3' => $arrJetData3,
            'arrJetData4' => $arrJetData4));
    }

    public function challenger($varId = "") {
        $this->load->model('Jet_model', '', true);
        $arrJetData = $this->Jet_model->getJetData(array('id' => $varId));
        $this->load->view('home/challenger', array('arrJetData' => $arrJetData));
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

    /*
     * for car listing page cames after serch from home page
     */

    public function carListing() {
        $arrDetails = array();
        $this->load->library('PHPRequests');
        $arrPost = $this->input->get();
        $days = $arrPost['days'];
        $bookingDate = date('Y-m-d', strtotime($arrPost['bookingDate']));
        $varQueryString = "&days={$days}&noOfPasenger={$arrPost['noOfPasenger']}&stateId={$arrPost['carState']}&bookingDate={$bookingDate}&driver={$arrPost['driver']}&classification={$arrPost['classification']}";
        $request_made = $this->config->item('API_URL') . 'action=get_car_available_list' . $varQueryString;
        $response = json_decode(Requests::get($request_made)->body);
        if ($response->status == true) {
            $arrDetails = $response->data;
        }
        //echo "<pre>";var_dump($arrDetails);exit;
        $postData = $arrPost;
        $postData['bookingDate'] = $bookingDate;
        $this->load->view('home/car_search_result', array('arrCarDetails' => $arrDetails, 'postData' => $postData));
    }

    /*
     * for single car detail page comes after click on more info on car listing page
     */

    public function carDetails($varId = "") {
        if (!empty($varId)) {
            $arrPost = $this->input->get();
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . 'action=get_car_details&carId=' . $varId;
            $response = json_decode(Requests::get($request_made)->body);
            $arrCarDetail = array();
            if ($response->status == true) {
                $arrCarDetail = $response->data;
            }

            // get all city according to state
            $requestCity = $this->config->item('API_URL') . 'action=get_cities_details&stateId=' . $arrPost['carState'];
            $responseCity = json_decode(Requests::get($requestCity)->body);
            $arrCarCitiesDetail = array();
            if ($responseCity->status == true) {
                $arrCarCitiesDetail = $responseCity->data;
            }
            $bookingDate = date('Y-m-d', strtotime($arrPost['bookingDate']));
            $arrPost['bookingDate'] = $bookingDate;
            $this->load->view('home/car_search', array('objCarDetail' => $arrCarDetail, 'postData' => $arrPost, 'arrCarCitiesDetail' => $arrCarCitiesDetail));
        }
    }

    /*
     * Car Booking page comes after click on next from single car page
     */

    public function carBook($carId) {
        $arrGet = $this->input->get();
        $arrPost = $this->input->post();
        if (!empty($arrPost)) {
            $this->load->library('PHPRequests');
            $varQueryString = "&carId={$carId}&startCity={$arrPost['delAddr']}&endCity={$arrPost['dropAddr']}&days={$arrGet['days']}";
            $request_made = $this->config->item('API_URL') . 'action=get_individualcar_availability' . $varQueryString;
            $response = json_decode(Requests::get($request_made)->body);
            if ($response->status == true) {
                $dataDetails = $response->data;
            }
            //$dataDetails = array();
            $arrGet['depDate'] = date('Y-m-d', strtotime("{$arrGet['bookingDate']}"));
            $varDaysToAdd = ($arrGet['days'] >= 5) ? $arrGet['days'] - 4 : 0;
            $arrGet['arrvDate'] = date('Y-m-d', strtotime("+" . $varDaysToAdd . " days", strtotime($arrGet['bookingDate'])));
            $this->session->set_userdata(array('carDetails' => $dataDetails, 'arrGet' => $arrGet, 'arrPost' => $arrPost));
            $this->load->view('home/car_booking', array('objDetails' => $dataDetails, 'arrGet' => $arrGet));
        }
    }

    /*
     * check user if logged in or not comes after click on next of car-book page
     */

    public function carBookUserCheck() {
        $arrPost = $this->input->post();
        $arrNewPostData = array_merge($this->session->userdata('arrPost'), $arrPost);
        $this->session->set_userdata('arrPost', $arrNewPostData);
        if ($this->session->has_userdata('user_login')) {
            // redirect payment page
            redirect(base_url('car-payment'));
        } else {
            // redirect login or signup page
            redirect(base_url('login'));
        }
    }

    /*
     * car payment page
     */

    public function carPayment() {
        $this->load->view('home/car_payment', array('arrDetails' => $this->session->userdata()));
    }

    /*
     * for car contract page
     */

    public function carRentalAgreement() {
        $this->load->view('home/car_contract', array('arrDetails' => $this->session->userdata()));
    }

    public function getVillaLimousine($villaId, $checkIn, $checkOut) {
        // var_dump($villaId);exit;
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_villa_booking_list&villaId=' . $villaId . '&arrivalDateTime=' . $checkIn . '&departureDateTime=' . $checkOut;
        $response = json_decode(Requests::get($request_made)->body);
        //var_dump($response);exit;
        //exit;
        //var_dump($response);exit;
        if ($response->status == true) {
            $data['villalimousineDetails'] = json_decode(json_encode($response->data));
            $this->villaFilterParams = $_SESSION['villaFilterParams'];
            $data['checkIn'] = str_replace('%20', ' ', $checkIn);
            //var_dump($data['checkIn']);exit;
            $data['checkOut'] = str_replace('%20', ' ', $checkOut);
            if (!empty($data['checkIn'])) {
                $departureDate = new DateTime($data['checkIn']);
            } else {
                $departureDate = new DateTime($checkIn);
            }
            if (!empty($data['checkOut'])) {
                $arrivalDate = new DateTime($data['checkOut']);
            } else {
                $arrivalDate = new DateTime($checkOut);
            }
            $diff = $arrivalDate->diff($departureDate);
            $days = $diff->days;
            //var_dump($days);exit;
            $data['days'] = $days;
            $this->load->view('home/villa_limousine', $data);
        }
    }

    public function food_vill_lumousine() {
        $arrDetails = '';
        $arrDataget = $this->input->get();
        //var_dump($arrDataget);exit;
        $departureDate = new DateTime($arrDataget['checkIn']);
        $arrivalDate = new DateTime($arrDataget['checkOut']);
        $diff = $arrivalDate->diff($departureDate);
        $days = $diff->days;
        //var_dump($days);exit;
        if (!empty($days) && $days == 1) {
            $this->load->view('auth/login');
        } else {
            $data['getDetails'] = $arrDataget;
            $this->villaFilterParams = $_SESSION['villaFilterParams'];
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . "action=get_categoryVillalistby_city&stateId={$this->villaFilterParams['villaState']}&cityId=1";
            $response = json_decode(Requests::get($request_made)->body);
            //var_dump($response);exit;
            if ($response->status == true) {
                $arrDetails = $response->data;
            }
            $data['foodDetails'] = $arrDetails;
            $this->load->view('home/food_and_drinks', $data);
        }
    }

    private function saveJetData($arrPost, $arrGet) {
        $this->load->model('Jet_model', '', true);
        $this->Jet_model->saveJetData($arrPost, $arrGet);
        $this->session->set_userdata('save_msg', "Thanks for enqury get back to you soon.");
        redirect(base_url());
    }

    // get car countries
    private function getCarCountry() {
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_allcountry_list_car';
        $response = json_decode(Requests::get($request_made)->body);
        if ($response->status == true) {
            $this->carCountry = $response->data;
        }
    }

    // get car states based on car countries
    public function getCarState($countryId) {
        $this->load->library('PHPRequests');
        $request_made = $this->config->item('API_URL') . 'action=get_state_list_car&countryId=' . $countryId;
        $response = json_decode(Requests::get($request_made)->body);
        if ($response->status == true) {
            //var_dump($response->data);exit;
            $arrReturn = array();
            if (!empty($response->data)) {
                foreach ($response->data as $objData) {
                    if ($objData->countryId == $countryId) {
                        $arrReturn[] = $objData;
                    }
                }
            }
            echo json_encode($arrReturn);
            exit;
        } else {
            echo json_encode(array());
            exit;
        }
    }

    /* ---------change_password api------------------ */

    public function change_password() {
      $varUserId = $_SESSION['user_login']->id;

        $post = $this->input->post();
        if (!empty($post)) {
            $this->load->library('PHPRequests');
           $request_made = $this->config->item('API_URL') . 'action=change_password&oldpass=' . $post['oldpass'] . '&userId=' . $varUserId;
          // var_dump($request_made);exit;
           $response = json_decode(Requests::get($request_made)->body);

            if ($session_user == NULL) {
                $return = array('message' => $response->displyMessage, 'code' => 201);
            } else {
                //  $_SESSION['user_login'] = $response->data;
                // var_dump($request_made);exit;
                $url = base_url('dashboard');
                $return = array('message' => $response->displyMessage, 'url' => $url, 'code' => 200);
            }
            echo json_encode($return);
            exit;


            //var_dump($post);exit;
        }
    }

    /* ---------edit profile api------------------ */

    public function edit_profile() {
       $varUserId = $_SESSION['user_login']->id;
        $post = $this->input->post();
        if (!empty($post)) {
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . 'action=edit_profile&firstName=' . $post['first_name'] . '&editID=' .$varUserId. '&lastName=' . $post['lastname'] . '&email=' . $post['email'] . '&contactNumber=' . $post['phonenumber'] . '&address=' . $post['country'];
            VAR_DUMP($request_made);EXIT;
            $response = json_decode(Requests::get($request_made)->body);

            if ($session_user == NULL) {
                $return = array('message' => $response->displyMessage, 'code' => 201);
            } else {
                //  $_SESSION['user_login'] = $response->data;
                // var_dump($request_made);exit;
                $url = base_url('dashboard');
                $return = array('message' => $response->displyMessage, 'url' => $url, 'code' => 200);
            }
            echo json_encode($return);
            exit;

            //var_dump($post);exit;
        }
    }

    /* ---------forget_password api------------------ */

    public function forget_password() {
        $varUserId = $_SESSION['user_login']->id;
        $post = $this->input->post();
        if (!empty($post)) {
            $this->load->library('PHPRequests');
            $request_made = $this->config->item('API_URL') . 'action=forget_password&mailId=' . $post['mailid'];
            // VAR_DUMP($request_made);EXIT;
            $response = json_decode(Requests::get($request_made)->body);

            if ($session_user == NULL) {
                $return = array('message' => $response->displyMessage, 'code' => 201);
            } else {
                //  $_SESSION['user_login'] = $response->data;
                // var_dump($request_made);exit;
                $url = base_url('dashboard');
                $return = array('message' => $response->displyMessage, 'url' => $url, 'code' => 200);
            }
            echo json_encode($return);
            exit;

            //var_dump($post);exit;
        }
        $this->load->view('home/foreget_password');
    }

    public function contact() {
        $arrPost = $this->input->post();
        if (!empty($arrPost)) {
            $this->load->library('PHPRequests');
            $varExtra = "&mailId={$arrPost['email']}&name={$arrPost['name']}&phone=&subject={$arrPost['subject']}&message={$arrPost['body']}";
            $request_made = $this->config->item('API_URL') . 'action=contactus&type=Add&isContact=1' . $varExtra;
            $response = json_decode(Requests::get($request_made)->body);
            if ($response->status == true) {
                echo json_encode($response->data);
                exit;
            } else {
                echo json_encode(array());
                exit;
            }
        }
        $this->load->view('home/contact');
    }

}
