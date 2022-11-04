<?php
class Images
{
    private  $id;
    private  $plants;
    private  $image1;
    private  $image2;
    private  $image3;
    private  $image4;
    private  $image5;


    function __construct($id, $plants, $image1, $image2, $image3, $image4, $image5)
    {
        $this->id = $id;
        $this->plants = $plants;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->image4 = $image4;
        $this->image5 = $image5;
    }

    public function getid(): int
    {
        return $this->id;
    }

    public function getPlants(): int
    {
        return $this->plants;
    }

    public function getImage1(): string
    {
        return $this->image1;
    }

    public function getImage2(): string
    {
        return $this->image2;
    }

    public function getImage3(): string
    {
        return $this->image3;
    }

    public function getImage4(): string
    {
        return $this->image4;
    }

    public function getImage5(): string
    {
        return $this->image5;
    }
}
