<?php
require "controller.php";
    class ShopController extends controller{

        public function __construct(){
            parent:: __construct();
        }
        public function single($id)
        {
            
            $itemHome = $this->itemsModel->listenerItem($id);
            if(sizeof($itemHome) != 1)
            {
                header("Location: ".HOST.FOLDER."404");
            }
            else
            {
                $itemsHome = $this->itemsModel->listenerItems();
                require("shop-single.php");
                echo "<script>let idItem = ".$itemHome[0]["iditems"].";let typePage = 1;</script>";
            }
        }


    }