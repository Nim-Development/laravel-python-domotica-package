<?php
namespace NimDevelopment\PythonDomotics\Classes;

use NimDevelopment\PythonDomotics\Classes\Relay;
use NimDevelopment\PythonDomotics\Classes\Servo;

class PythonDomotics
{
    public function relay($action, $id){
        $relay = new Relay($id);
        return $relay->$action(); // returns response OR null
    }

    public function servo($action, $id, $rotate = null)
    {
        $servo = new Servo($id);
        return $servo->$action($rotate);
    }
}
