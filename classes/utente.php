<?php  
class utente{
    private $name;
    private $surname;
    private $age;
    private $creditCard;

    public function __construct($_name, $_surname, $_age, $_creditCard)
    {
        $this->addName($_name);
        $this->addSurname($_surname);
        $this->addAge($_age);
        $this->addCreditCard($_creditCard);
    }

    public function getName()
    {
        return $this->name;
    }

    public function addName($_name)
    {
        $this->name = $_name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function addSurname($_surname)
    {
        $this->surname = $_surname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function addAge($_age)
    {
        $this->eta = $_age;
    }

    public function addCreditCard($_creditCard)
    {
        $this->creditCard[] = $_creditCard;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }
}
?>