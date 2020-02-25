
<?php 
    extract($_POST);
    if(isset($submit)){
        $a=$age;
        if($a>=18){
            echo "<h1>You are Eligible</h1>";
        }else{
            echo "<h1>You are not Eligible</h1>";
        }
    } 
?>


