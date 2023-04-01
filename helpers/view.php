<?php
$view_folder = './app/Views';

$mail_folder = './mail';

$pay_folder = './pay';

function ipView($path, array $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    return require($GLOBALS['view_folder'] . '/' . str_replace('.', '/', $path) . '.php');
}


function mailAuth($path, array $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    return require($GLOBALS['mail_folder'] . '/' . str_replace('.', '/', $path) . '.php');
}

function payCourse($path, array $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    return require($GLOBALS['pay_folder'] . '/' . str_replace('.', '/', $path) . '.php');
}