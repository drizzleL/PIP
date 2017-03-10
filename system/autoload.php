<?php

function autoload($className)
{
    require str_replace("\\", "/", ROOT_DIR . $className . '.php');
    //require str_replace("\\", "/", ROOT_DIR . '/../' . $className . '.php');
}
spl_autoload_register('autoload');


