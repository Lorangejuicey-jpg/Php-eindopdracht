<?php
class CD extends Product{
    protected string $Artist;
    protected int $AmountOfSongs;
    protected string $Label;

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
    "Artiest: ". $this->Artist. "<br>".
    "Songs: ". $this->AmountOfSongs. "<br>".
    "Label: ". $this->Label. "<br>".
    "Value: €". $this->totalValue(). "<br>".
    "</div>";
}


    /**
     * Get the value of Artist
     */ 
    public function getArtist()
    {
        return $this->Artist;
    }

    /**
     * Set the value of Artist
     *
     * @return  self
     */ 
    public function setArtist($Artist)
    {
        $this->Artist = $Artist;

        return $this;
    }

    /**
     * Get the value of AmountOfSongs
     */ 
    public function getAmountOfSongs()
    {
        return $this->AmountOfSongs;
    }

    /**
     * Set the value of AmountOfSongs
     *
     * @return  self
     */ 
    public function setAmountOfSongs($AmountOfSongs)
    {
        $this->AmountOfSongs = $AmountOfSongs;

        return $this;
    }

    /**
     * Get the value of Label
     */ 
    public function getLabel()
    {
        return $this->Label;
    }

    /**
     * Set the value of Label
     *
     * @return  self
     */ 
    public function setLabel($Label)
    {
        $this->Label = $Label;

        return $this;
    }
}

?>