<?php 
session_start();

$adminRouter = new AdminController();

switch ($adminRouter->getUrl()) {
    case "admin":
        $adminRouter->Home();
        break;
    default:
        # code...
        break;
}

