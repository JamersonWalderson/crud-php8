<?php

namespace App\Scripts;
 
// rework

class Message
{
    public function message($type, $message)
    {
        if ($type == true) {
            return '
            <div class="alert alert-success" role="alert">
                '.$message.'
            </div>
            ';
        }
        if ($type == false) {
            return '
            <div class="alert alert-danger" role="alert">
                '.$message.'
            </div>
            ';
        }
    }
}    

?>