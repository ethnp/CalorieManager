<?php

class Site extends Emp{
    /*************************************************
     * 	Class Constructor
     **************************************************/
    function Construct(){
        parent::Construct();
        $this->Database->connect();
    }
    function index(){
        $this->home();
    }
    function home(){
        $this->load_view("header");
        $this->load_view("home");
        $this->load_view("footer");

    }
}
