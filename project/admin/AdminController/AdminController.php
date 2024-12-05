<?php 
 class AdminController extends ConnectDatabase{
    public function Home(){
    }

    public function getUrl()
    {
        $act = "";
        if (isset($_GET["AM"])) {
            $act = $_GET["AM"];
            return $act;
        }
    }

    // AM = Admin Manager
    public function getId()
    {
        $id = "";
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            return $id;
        }
    }
 }