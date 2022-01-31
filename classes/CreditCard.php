<?php
class CreditCard{
    private $cardNumber;
    private $cvv;
    private $exYear;
    private $exMonth;

//constructor
    function __construct($_cardNumber, $_cvv, $_exYear, $_exMonth)
    {
        $this->cardNumber = $_cardNumber;
        $this->cvv = $_cvv;
        $this->exYear = $_exYear;
        $this->exMonth = $_exMonth;    
    }
//constructor end

//set properties

//set properties end

//get properties 

//get properties end

}
?>