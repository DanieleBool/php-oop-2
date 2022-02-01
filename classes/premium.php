<?php  
class premium extends utente{
    private $discount;

    public function __construct($_name, $_surname, $_age, $_creditCard, $_discount)
    {
        parent::__construct($_name, $_surname, $_age, $_creditCard);
        $this->addDiscount($_discount);
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function addDiscount($_discount)
    {
        $this->discount = $_discount;
    }
}
?>