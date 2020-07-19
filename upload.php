<?php
$Names=$_FILES['files']['name'];
$Tmps=$_FILES['files']['tmp_name'];
$Sizes=$_FILES['files']['size'];
$Types=$_FILES['files']['type'];
$TypeArray=['image/png','image/gif'];
$data='';
for($i=0;$i<count($Names);$i++){

    for($i=0;$i<count($Sizes);$i++){
        if($Sizes[$i]<1000000 && in_array($Types[$i],$TypeArray) ){
            move_uploaded_file($Tmps[$i],$Names[$i]);
            echo "Ok</br>";
        }
        else{
            echo "We can\'t upload $Names[$i] files";
        }
    }
}

?>