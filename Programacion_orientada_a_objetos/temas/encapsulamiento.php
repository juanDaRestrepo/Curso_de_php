<?php

class MyClass{
    public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";

    function printHello(){
        echo $this->public."<br>";
        echo $this->protected."<br>";
        echo $this->private."<br>";
    }
}

class MyClass2 extends MyClass{
    function printHello(){
        parent::printHello();
    }
}