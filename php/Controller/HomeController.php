<?php
require "controller.php";
    class HomeController extends controller{

    	public function __construct(){
    		parent::__construct();
    	}

        public function home(){
            $itemsHome = $this->itemsModel->listenerItems();
            include("home.php");
        }
    }