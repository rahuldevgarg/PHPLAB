<?php

function hello() {
    echo "<H1>Hello world!</H1>";
}
function bye() {
    echo "<H1>Good Bye</H1>";
}

    extract($_POST);
    if(isset($submit)){
        $a=$hello;

        if($a=='hello'){
            hello();
        }
        if($a=='bye'){
            bye();
        }
    } 

?>