<?php
namespace NimDevelopment\PythonDomotics\Classes;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class PythonDomotics
{
    public function relay($action, $sid){
        switch ($action) {
            case 'switch':
                return $this->relay_switch($sid);
                break;

            case 'test':
                $this->relay_test($sid);
                break;
            
            default:
                die;
                break;
        }
    }

    private function relay_switch($sid){

        $python_script = new Process('python '.dirname(__DIR__, 1).'/PythonScripts/Relay/switch.py '.$sid);

        // Run script and 
        if($response = $this->run_process($python_script)){
            // Handle response
            return($response);
        }else{
            //Handle error
            return(null);
        }
    }

    private function relay_test($sid){

        $python_script = new Process('python '.dirname(__DIR__, 1).'/PythonScripts/Relay/test.py '.$sid);
        if($response = $this->run_process($python_script)){
            // Handle response
            return($response);
        }else{
            //Handle error
            return(null);
        }
    }

    // returns successfull python response or null
    private function run_process($python_script){
        $python_script->run();

        // executes after the command finishes
        if (!$python_script->isSuccessful()) {
            throw new ProcessFailedException($python_script);
        }

        $output = json_decode($python_script->getOutput());

        if($output->status  == 1){
            // Handle python response
            return $output;
        }elseif ($output->status == 0) {
            // Handle python error
            return null;
        }
    }

}
