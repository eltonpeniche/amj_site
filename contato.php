<?php

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$assunto =addslashes($_POST['assunto']);    
$messagem = addslashes($_POST['message']);

$to = "amj@amjmedicalsolutions.epizy.com";
$subject = $assunto;
$body =  "Nome: ".$nome."\n"
         "Email: ".$email."\n"
         "Mensagem".$message;
$header =   "From:elton_nfs@hotmail.com"."\n"
            "Reply-To:".$email."\n"
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso \n");
    
}else{
    echo("Falha ao enviar o Email");
}

?>