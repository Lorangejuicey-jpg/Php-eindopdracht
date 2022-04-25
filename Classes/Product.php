<?php

class Product {

    protected string $ProductName;
    protected int $AmountOfStock;
    protected int $MinStock;
    protected float $Price;
    protected $Active;
    public static int $ItemNr = 0;
    
    public function __construct(array $args){
        
        foreach($args as  $key=>$val)
        {
            $this->$key = $val;
        }
        Product::$ItemNr++;
    }

    public function __toString()
    {
        return 
        "<div style='font-size: 18px;font-family: poppins;width: max-content;border: 2px solid grey;padding: 10px; background: #FFFF88;'".

        "Product id: ". Product::$ItemNr. "<br>".
        "Product name: ". $this->ProductName. "<br>".
        "Amount of stock: ". $this->AmountOfStock. "<br>".
        "Minimum stock: ". $this->MinStock. "<br>".
        "Price: €". $this->Price. "<br>".
        "Active: ". $this->Active. "<br>".
        "Value: €". $this->totalValue(). "<br>".
        "</div>";
    }

    public function convertLengthInMinutes($LengthInMinutes){
        $Minutes = $LengthInMinutes % 60;
        $Hours = $LengthInMinutes - $Minutes;
        $Hours = $Hours / 60;

        if($Hours <= 9){
            $Hours = "0". $Hours;
        }
        if($Minutes <= 9){
            $Minutes = "0". $Minutes;
        }
        $FullFormat = $Hours. ":". $Minutes;
        
        return $FullFormat;
    }

    public function totalValue(){
        $Value = $this->AmountOfStock * $this->Price;
        return $Value;

    }

    public function addStock($AmountRaise){
        if($this->Active == "true"){
            $this->AmountOfStock = $this->AmountOfStock + $AmountRaise;

            echo "<p style='font-size: 18px; font-family: poppins; position: absolute; bottom: 50px;'>";
            echo "Product '". $this->ProductName . "' stock raised by '". $AmountRaise. "'</p>";
        }
        else{
            echo "<p style='font-size: 18px; font-family: poppins; width: max-content; position: absolute; bottom: 75px;'>";
            echo "Product '". $this->ProductName . "' must be active to raise it's stock". "</p>";
        }
    }
    public function removeStock($AmountLower){
        if($this->Active == "true"){
            if($this->AmountOfStock - $AmountLower >= $this->MinStock){
                $this->AmountOfStock = $this->AmountOfStock - $AmountLower;

                echo "<p style='font-size: 18px; font-family: poppins; position: absolute; bottom: 0px;'>";
                echo "Product '". $this->ProductName . "' stock Lowered by '". $AmountLower. "'</p>";
            }
            else{
                echo "<p style='font-size: 18px; font-family: poppins; position: absolute; bottom: 25px;'>";
                echo "Product '". $this->ProductName . "' minimum stock is '". $this->MinStock. "'</p>";
            }
        }
        else{
            echo "<p style='font-size: 18px; font-family: poppins; width: max-content; position: absolute; bottom: 25px;'>";
            echo "Product '". $this->ProductName . "' must be active to raise it's stock". "</p>";
        }
    }
    /**
     * Get the value of ItemNr
     */ 
    public function getItemNr()
    {
        return $this->ItemNr;
    }

    /**
     * Set the value of ItemNr
     *
     * @return  self
     */ 
    public function setItemNr($ItemNr)
    {
        $this->ItemNr = $ItemNr;

        return $this;
    }

    /**
     * Get the value of ProductName
     */ 
    public function getProductName()
    {
        return $this->ProductName;
    }

    /**
     * Set the value of ProductName
     *
     * @return  self
     */ 
    public function setProductName($ProductName)
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    /**
     * Get the value of AmountOfStock
     */ 
    public function getAmountOfStock()
    {
        return $this->AmountOfStock;
    }

    /**
     * Set the value of AmountOfStock
     *
     * @return  self
     */ 
    public function setAmountOfStock($AmountOfStock)
    {
        $this->AmountOfStock = $AmountOfStock;

        return $this;
    }

    /**
     * Get the value of MinStock
     */ 
    public function getMinStock()
    {
        return $this->MinStock;
    }

    /**
     * Set the value of MinStock
     *
     * @return  self
     */ 
    public function setMinStock($MinStock)
    {
        $this->MinStock = $MinStock;

        return $this;
    }

    /**
     * Get the value of Price
     */ 
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Set the value of Price
     *
     * @return  self
     */ 
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * Get the value of Active
     */ 
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Set the value of Active
     *
     * @return  self
     */ 
    public function setActive($Active)
    {
        $this->Active = $Active;

        return $this;
    }
}

?>