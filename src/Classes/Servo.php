<?php 

namespace NimDevelopment\PythonDomotics\Classes;

use Symfony\Component\Process\Process;

class Servo extends HardwareUnit
{

    public $id;
    public $path = '/PythonScripts/Servo/';
    
    public function __construct($id){
        $this->id = $id;
    }

    public function rotate($rotate){

        if(!$rotate){ return(null); };

        $python_script = new Process('python '.dirname(__DIR__, 1).$this->path.'rotate.py '.$this->id.' '.$rotate);

        // Run script and 
        if($response = $this->run_process($python_script)){
            // Handle response
            return($response);
        }else{
            //Handle error
            return(null);
        }
    }

    public function test(){

        $python_script = new Process('python '.dirname(__DIR__, 1).$this->path.'test.py '.$this->id);
        if($response = $this->run_process($python_script)){
            // Handle response
            return($response);
        }else{
            //Handle error
            return(null);
        }
    }

}
