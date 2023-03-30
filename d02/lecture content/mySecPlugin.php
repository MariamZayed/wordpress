<?php 
    /*
        Plugin Name: My Sec Plugin 
        Description: new plugin for check words1
        Author: ITI - OS track
    */ 

    add_action("the_title", "checkWords");

    function checkWords($title){
        $arr = ["iti", "wordpress", 1, "hello"];
        $arr2 = ["ITI", "WordPress", "one", "welcome HELLO"];
        return str_replace($arr, $arr2, $title );
    }