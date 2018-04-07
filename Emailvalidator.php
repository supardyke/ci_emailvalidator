<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Codeigniter Library
 *
 * @package  CODEIGNITER
 * @author   SUPARDYKE <supardyke@gmail.com>
 */


class Emailvalidator {


    // bool value of the request status if it is valid or not
    public $valid;

    public function _construct(){
    }


    public function check($email){
        // get the registrar
        $registrar = explode("@", $email);
        //list of allowed registrars
        $allowed_reg = 'gmail.com,yahoo.com,yahoo.co.uk,rocketmail.com,outlook.com,aol.com,yandex.com,protonmail.com,protonmail.ch,zoho.com';
        $ex_all_reg = explode(",", $allowed_reg);
        $valid = false;
        if (count($registrar) > 1) {
            if (!empty($ex_all_reg)) {
                foreach ($ex_all_reg as $value) {
                    if (strtolower($registrar[1]) == $value) {
                        $valid = true;
                    }
                }
            }
        }
        return $valid;
    }
}