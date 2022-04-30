<?php
// Print Current Status
function printStatus(){
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;

    echo "You are in: $location\n";
    if($wearing_glasses){
    echo "You are wearing_glasses\n";
    }
    if($wearing_contacts){
    echo "You are wearing_contacts\n";
    }
}
