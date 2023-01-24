<?php
spl_autoload_register(function($classe)
{
    require 'src/' .$classe. '.class.php';
});
