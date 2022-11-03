<?php
class Images
{
    private  $id;
    private  $image2;
    private  $image3;
    private  $image4;
    private  $image5;
    private  $image6;



    function __construct($id, $image2, $image3, $image4, $image5, $image6)
    {
        $this->id = $id;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->image4 = $image4;
        $this->image5 = $image5;
        $this->image6 = $image6;
    }

    public function getid(): int
    {
        return $this->id;
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

    public function getImage6(): string
    {
        return $this->image6;
    }
}
