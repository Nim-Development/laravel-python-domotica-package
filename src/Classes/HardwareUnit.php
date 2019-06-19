<?php 

namespace NimDevelopment\PythonDomotics\Classes;

use Symfony\Component\Process\Exception\ProcessFailedException;

class HardwareUnit
{
    // returns successfull python response or null
    public function run_process($python_script){
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

?>