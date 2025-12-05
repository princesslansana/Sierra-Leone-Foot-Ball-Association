<?php

$conn=mysqli_connect(
    'localhost', 
    'root', '', 'slfa_db'
);
if($conn){
    echo "successfull";
}else{
    echo "Not Connected"
}
?>