<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulário PHP de contato</title>
</head>

<body>

<?php

//Esse trecho pega os dados passados pelo formulário
$nome = utf8_decode( $_POST['nome'] );
$telefonefixo = $telefonefixo;
$telefonecelular = $telefonecelular;
$email = utf8_decode( $_POST['email'] );
$endereco = utf8_decode( $_POST['endereco'] );
$assunto = utf8_decode( $_POST['assunto'] );
$mensagem = utf8_decode( $_POST['mensagem'] );


// Escreve a mensagem em formato HTML
$mens = "<font face='Verdana, Arial, Helvetica, sans-serif' size='1'>";
$mens .= "<b>Brasil Construtora - Contato</b><br><br>";
$mens .= "---------------------------------------------<br>";
$mens .= "Nome: $nome <br>";
$mens .= "---------------------------------------------<br>";
$mens .= "Telefone Fixo: $telefonefixo <br>";
$mens .= "---------------------------------------------<br>";
$mens .= "Telefone Celular: $telefonecelular <br>";
$mens .= "---------------------------------------------<br>";
$mens .= "Email: $email <br>";
$mens .= "---------------------------------------------<br>";
$mens .= "Logradouro: $endereco <br>";
$mens .= "---------------------------------------------<br>";
$mens .= "Assunto: $assunto <br>";
$mens .= "---------------------------------------------<br>";
$mens .= "Mensagem: $mensagem <br>";
$mens .= "---------------------------------------------<br>";
$mens .= "<br>";
$mens .= "<br>";
$mens .= "Enviada em ".date("d/m/Y"). "<br>";


// Monta o cabecalho
$headers = "From: <$email>\n";
$headers .= "X-Sender: <$email>\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";

//Envia o email
mail("atendimento@brasilconstrutora.com.br","$assunto (CONTATO PELO SITE)",$mens,$headers);

?>

<!-- Mosta uma janela de alerta informando que o email foi enviado com sucesso. -->
<script>
alert('Sua mensagem foi enviada com sucesso!');
</script>

<!-- Redireciona para a página da ouvidoria novamente -->
<script>
window.location.href='contato.html';
</script>

</body>
</html>