<?php 

$route = empty($_GET["route"]) ? "index" : $_GET["route"];

$file = "";
$exist = searchFile($route, $file);

if($exist) require_once $file;
else echo "Error 404 - Page not Found";

/**
 * File search function according to URL
 * @access public
 * @param String $route: complete URL
 * @return boolean
 */
function searchFile($route, &$file){
    $route_without_bar = rtrim($route, "/");  // Remove / (only if have)
    $file = "views/" . $route_without_bar . ".php";
  
    if(file_exists($file)){
        return true;
    }
    return false;
};