<?php

class User{
    private $name;
    private $sur;
    private $item;
    private $creditCard;
    protected $discount;


//constructor
    function __construct($_name, $_sur)
    {
        $this->firstname = $_name;
        $this->sur = $_sur;
    }

//constructor-end

//set properties
    public function setName($_name) 
    {
        $this->name = $_name;
    }
    public function setSur($_sur) 
    {
        $this->sur = $_sur;
    }
    public function gotItem($_item) 
    {
        $this->item = $_item;
    }
    public function setCreditCard($_creditCard) 
    {
        $this->creditCard = $_creditCard;
    }
    public function setDiscount($_discount) 
    {
        $this->discount = $_discount;
    }
//set properties
}
?>