<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth_oa2 extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url_helper');
        $this->load->library('oauth2/OAuth2');
        $this->load->config('oauth2', TRUE);
        //$this->load->model('frontend/User_Model');
    }

    public function session($provider_name) {
        $provider = $this->oauth2->provider($provider_name, array(
            'id' => $this->config->item($provider_name . '_id', 'oauth2'),
            'secret' => $this->config->item($provider_name . '_secret', 'oauth2'),
        ));
     //var_dump($provider);exit;
        if (!$this->input->get('code')) {
            // By sending no options it'll come back here
            $provider->authorize();
        } else {
            // Howzit?
            try {
                $token = $provider->access($this->input->get('code'));
               // var_dump($token);exit;
               
                $user = $provider->get_user_info($token);
                if($provider_name == 'google'){
                    //var_dump($provider);exit;
                    $dataGoogleSes = array('google_data' => $user);
                    $this->session->set_userdata($dataGoogleSes);
                    redirect(base_url('login'));
                }else{
                    //var_dump($provider);exit;
                    $dataFacebookSes = array('facebook_data' => $user);
                    $this->session->set_userdata($dataFacebookSes);
                    redirect(base_url('login'));
                }
                
            } catch (OAuth2_Exception $e) {
                redirect(base_url('login'));
            }
        }
    }


    /**
     * Send email message of given type (activate, forgot_password, etc.)
     *
     * @param	string
     * @param	string
     * @param	array
     * @return	void
     */
    function _send_email($type, $email, &$data) {
        $this->load->library('email');
        $this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
        $this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
        $this->email->to($email);
        $this->email->subject(sprintf($this->lang->line('auth_subject_' . $type), $this->config->item('website_name', 'tank_auth')));
        $this->email->message($this->load->view('email/' . $type . '-html', $data, TRUE));
        $this->email->set_alt_message($this->load->view('email/' . $type . '-txt', $data, TRUE));
        $this->email->send();
    }

}

/* End of file auth_oa2.php */
/* Location: ./application/controllers/auth_oa2.php */