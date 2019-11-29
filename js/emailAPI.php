<?php

    echo "<script type='javascript'>alert('Script chamado');";
    echo "javascript:window.location='index.php';</script>";
    $para = "dantas.tayla@gmail.com";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataNascimento = $_POST['nascimento'];
    $comentario = $_POST['comentario'];
    $idade = $_POST['idade'];
    $headers = "From:" .$email;


    $mensagem = "<strong>Nome:  </strong>".$nome;
    $mensagem .= "<br>  <strong>Mensagem: </strong>"
    .$_POST['mensagem'];

    $headers = get_headers($email);

    $success = mail($para, "Contato", $mensagem, $headers); 

    if (!$success) {
        echo "aaaaa";
    }
    echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
    echo "javascript:window.location='index.html';</script>";

?>

 