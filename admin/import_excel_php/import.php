<?php
use SimpleExcel\SimpleExcel;

if(isset($_POST['import']))
{
    if(move_uploaded_file($_FILES['excel_file']['tmp_name'],$_FILES['excel_file']['name']))
    {

        require_once('SimpleExcel/SimpleExcel.php'); 

$excel = new SimpleExcel('csv');                   

$excel->parser->loadFile($_FILES['excel_file']['name']);            

$foo = $excel->parser->getField();  
$db = mysqli_connect('localhost','root','','result');

$count = 1;
while(count($foo)>$count){
    $roll=$foo[$count][0];
    $name=$foo[$count][1];
    $email=$foo[$count][2];
    $mobile=$foo[$count][3];
    $daa=$foo[$count][4];
    $os=$foo[$count][5];
    $bhr=$foo[$count][6];
    $mp=$foo[$count][7];
    $ptbr=$foo[$count][8];

    $query="INSERT INTO students(roll_no,name,email,mobile,daa,os,bhr,mp,ptbr)";
    $query.="VALUES('$roll','$name','$email','$mobile','$daa','$os','$bhr','$mp','$ptbr')";
    mysqli_query($db,$query);
    $count++;
}

header("Location:excel.php");


}
}
