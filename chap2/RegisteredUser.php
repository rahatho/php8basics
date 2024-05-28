<?php
class RegisteredUser extends UserClass{
    function setRegistrationNumber($number){
        $this->registrationNumber = $number;
    }


    function getRegistrationNumber(){
        return $this->registrationNumber;
    }
    
}