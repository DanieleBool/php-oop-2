<?php  
class creditCard{
    private $number;
    private $expiry;
    private $holder;

    public function __construct($_number, $_expiry, $_holder)
    {
        try{
            $this->addNumber($_number);
            $this->addExpiry($_expiry);
            $this->addHolder($_holder);
        }catch (Exception $e) {
            echo "Eccezione: " . $e->getMessage();
        }
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function addNumber($_number)
    {
        $this->number = $_number;
    }

    public function getExpiry()
    {
        return $this->expiry;
    }

    public function addExpiry($_expiry)
    {
        $this->expiry = $_expiry;
    }

    public function getHolder()
    {
        return $this->holder;
    }

    public function addHolder($_holder)
    {
        $this->holder = $_holder;
    }
}
?>