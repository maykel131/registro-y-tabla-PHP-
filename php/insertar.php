<?php

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$data=$_POST['data'];
$email=$_POST['email'];


require("conection.php");



$sql = "INSERT INTO pessoa(nome,cpf,data,email) VALUES('$nome','$cpf','$data','$email')";
if(mysqli_query($con,$sql)){
 echo "Pessoa inserida com sucesso!!!"; 
}else{
 echo "Erro: ".mysqli_error($con); 
}mysqli_close($con);



/*------ este es el mismo proceso solo que el hace la coneccion directa sin llamar el archivo externo conectio.php --*/
/*
$con = mysqli_connect("localhost","root","","proyecto");


if (mysqli_connect_errno($con)){
 echo "Erro: " . mysqli_connect_error(); }else{ $sql = "INSERT INTO pessoa(nome,cpf,data,email) VALUES('$nome','$cpf','$data','$email')";
if(mysqli_query($con,$sql)){
 echo "Pessoa inserida com sucesso!!!"; 
}else{
 echo "Erro: ".mysqli_error($con); 

} mysqli_close($con);
}
*/


?>