<?php 

$a=$_POST['pass1'];
$b=$_POST['pass2'];

if(!empty($a))
{
    if(!empty($b))
    {
        if($a==$b){
            echo "Password Matched";
        }
        else{
            echo "Password not Matched";
        }
    }
    else{
        echo "Second input is blank";
    }
}
else{
    echo "First input is blank";
}

?>