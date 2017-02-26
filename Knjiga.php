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
    public $autor;

    public function __construct($nazivKnjige, $autor)
    {
        $this->nazivKnjige = $nazivKnjige;
        $this->autor = $autor;
    }

    public function getNazivKnjige()
    {
        return $this->nazivKnjige;
    }

    public function setNazivKnjige($nazivKnjige)
    {
        $this->nazivKnjige = $nazivKnjige;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
}