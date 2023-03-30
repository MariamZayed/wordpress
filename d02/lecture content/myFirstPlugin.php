<?php 
/*
    Plugin Name: My First Plugin 
    Description: plugin for check words
    Author: ITI - OS track
*/ 

// hooks --> add_action  
// after each post --> thank you for reading 
// post --> the_content 
// title --> the_title
// menu --> the_menu 
add_action("the_content", "thankyou");

function thankyou($content){
    return $content.="<h3 style='color: red'> thank you for reading </h3>";
}

