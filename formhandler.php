<?php
//formhandler.php

if(isset($_POST))
{
   echo '<pre>';
   var_dump($_POST);    
   echo '</pre>';
}else{
    echo 'No data submitted';
}