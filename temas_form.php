<?php
$nomehost='localhost';
$usuario='root';
$password='';
$bancodeDado='orientador_bd';



$conexao = new mysqli($nomehost, $usuario,$password,$bancodeDado);

    if (isset($_POST['send'])) {

        include_once('temas.php');

        $name= $_POST['nome'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $address= $_POST['address'];
        $curso= $_POST['curso'];
        $universidade= $_POST['universidade'];
        $inicio= $_POST['inicio'];
        $fim= $_POST['fim'];
  


// mysqli_query($conexao, $_request);
$result = mysqli_query($conexao," insert into tema-form(nome,email,phone,address,curso,universidade,inicio,fim) 
values( '$name','$email','$phone','$address','$curso', '$universidade','$inicio','$fim')");

echo'boa';
}else{
    echo'Algma coisa deu errado tenta novamente';
}
?>