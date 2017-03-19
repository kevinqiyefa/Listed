<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
// load the (optional) Composer auto-loader
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}
 
*/

// load application config (error reporting etc.)
require 'application/config/config.php';

// load application class
require 'application/libs/Application.php';
require 'application/libs/Controller.php';
//require 'application/libs/password_compatibility_library.php';

// start the application
$app = new Application();