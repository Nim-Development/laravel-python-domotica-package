<?php 

namespace NimDevelopment\PythonDomotics\Classes;

use Symfony\Component\Process\Process;

class Relay extends HardwareUnit
{

    public $id;
    public $path = '/PythonScripts/Relay/';
    
    public function __construct($id){
        $this->id = $id;
    }

    public function switch(){

        $python_script = new Process('python '.dirname(__DIR__, 1).$this->path.'switch.py '.$this->id);



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
