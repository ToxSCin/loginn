<?php
spl_autoload_register(function ($nome_da_classe) 
{
    $arquivo = BASEDIR . '/' . $nome_da_classe . '.php';

    if(file_exists($arquivo))
    {
        include $arquivo;
    } else
    exit('Not Found.  Try Again: ' . $arquivo . "<br />");
});