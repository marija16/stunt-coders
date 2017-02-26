<?php

/**
 * Created by PhpStorm.
 * User: Marija16
 * Date: 02/26/2017
 * Time: 3:22 PM
 */
class Polica
{
    public $nizKnjiga;

    public function __construct()
    {
        $this->nizKnjiga = array();
    }

    //add to array
    function dodajKnjigu(Knjiga $knjiga)
    {
        array_push($this->nizKnjiga, $knjiga);
    }

    // read from array
    function prikazElemenataNiza()
    {
        foreach ($this->nizKnjiga as $item) {
            echo $item['nazivKnjige'];
        }
    }


    // sort array by name of book
    function sortiranjePoNazivu()
    {
        usort($this->nizKnjiga, "cmp");
    }

    function cmp($a, $b)
    {
        return strcmp($a["nazivKnjige"], $b["nazivKnjige"]);
    }
}