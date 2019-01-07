<?php
/**
 * Created by PhpStorm.
 * User: crypt
 * Date: 2019-01-06
 * Time: 6:08 PM
 */

namespace NewClasses;


class MyClass
{

    private $username = '"Cryptoneum11"';

    function __construct()
    {
        $this->br();
        $this->br();
        echo "<div>A div constructed via MyClass using the \NewClasses namespace</div>";
    }

    public function say_var(){
        echo "<div class=\"uname blue2\">".$this->username."</div>";
    }

    private function br(){
        echo "<br>";
    }

}
