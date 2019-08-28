<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author Effendy
 */
class Auth extends CI_Controller {

    function Logout() {
        $this->session->sess_destroy();
        redirect(base_url('Login'), 'refresh');
    }

}
