<?php
spl_autoload_register(function ($class) {
    include $class . '.class.php';
});
class DVD extends Product {

    protected float $LengthInMinutes;
    protected int $ReleaseYear;
    protected string $MovieStudio;

public function __toString()
{
    return 
    "<div style='font-size: 18px;font-family: poppins;width: max-content;border: 2px solid grey;padding: 10px; background: #FFFF88;'>".

    "Product id: ". Product::$ItemNr. "<br>".
    "Product name: ". $this->ProductName. "<br>".
    "Amount of stock: ". $this->AmountOfStock. "<br>".
    "Minimum stock: ". $this->MinStock. "<br>".
    "Price: €". $this->Price. "<br>".
    "Active: ". $this->Active. "<br>".
    "Runtime: ". $this->convertLengthInMinutes($this->LengthInMinutes). " Hours". "<br>".
    "Release year: ". $this->ReleaseYear. "<br>".
    "Movie studio: ". $this->MovieStudio. "<br>".
    "Value: €". $this->totalValueDVD(). "<br>".
    "</div>";
}

    public function totalValueDVD(){
        $Value = $this->AmountOfStock * $this->Price;
        $Value = $Value * 1.05;
        return $Value;
    }
    /**
     * Get the value of LengthInMinutes
     */ 
    public function getLengthInMinutes()
    {
        return $this->LengthInMinutes;
    }

    /**
     * Set the value of LengthInMinutes
     *
     * @return  self
     */ 
    public function setLengthInMinutes($LengthInMinutes)
    {
        $this->LengthInMinutes = $LengthInMinutes;

        return $this;
    }

    /**
     * Get the value of ReleaseYear
     */ 
    public function getReleaseYear()
    {
        return $this->ReleaseYear;
    }

    /**
     * Set the value of ReleaseYear
     *
     * @return  self
     */ 
    public function setReleaseYear($ReleaseYear)
    {
        $this->ReleaseYear = $ReleaseYear;

        return $this;
    }

    /**
     * Get the value of MovieStudio
     */ 
    public function getMovieStudio()
    {
        return $this->MovieStudio;
    }

    /**
     * Set the value of MovieStudio
     *
     * @return  self
     */ 
    public function setMovieStudio($MovieStudio)
    {
        $this->MovieStudio = $MovieStudio;

        return $this;
    }
}

?>