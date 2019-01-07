<?php

namespace Classes;


class MyClass
{

    private $myvar = 'cryptoneum';

    function __construct()
    {
        echo "<div>A new class constructed here!</div>";
    }

    public function say_var(){
        echo "<div class=\"uname blue\">".$this->myvar."</div>";
    }

}

