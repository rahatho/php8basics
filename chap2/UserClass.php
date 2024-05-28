<?php
class UserClass{
    /* User variables*/
    var $firstName;
    var $lastName;
    
    /* Member functions */
    function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    
    function getFirstname(){
        return $this->firstName;
    }
    
    function setLastName($lastName){
        $this->lastName = $lastName;
    }
    
    function getLastName(){
        return $this->lastName;
    }
}