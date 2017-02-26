<?php

/**
 * Created by PhpStorm.
 * User: Marija16
 * Date: 02/26/2017
 * Time: 3:22 PM
 */
class Knjiga
{
    public $nazivKnjige;

    public function __construct($nazivKnjige)
    {
        $this->nazivKnjige = $nazivKnjige;
    }

    public function getNazivKnjige()
    {
        return $this->nazivKnjige;
    }

    public function setNazivKnjige($nazivKnjige)
    {
        $this->nazivKnjige = $nazivKnjige;
    }


}