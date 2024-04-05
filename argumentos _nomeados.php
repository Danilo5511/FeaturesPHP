<?php

    function sendEmail($destinatarios ="",$cc="",$assunto="",$mensagem="")
    {
        echo "Destinatarios : ".$destinatarios."<br>";
        echo "CC : ".$cc."<br>";
        echo "Assunto: ".$assunto."<br>";
        echo "Mensagem :".$mensagem."<br>";

    }

    sendEmail(
        assunto: "Argumentos Nomeados",
        destinatarios: "send@email.com",
        mensagem:"Dominando a feature de argumentos nomeados",
    );

    echo "<hr>";
##Forma convecional respeitando a ordem dos parÂmetros
    sendEmail(
        "email@email.com",
        "Argumentos Nomeados",
        "send@email.com",
        "Dominando a feature de argumentos nomeados"
    );

    echo "<hr>";
##Forma convecional respeitando a ordem dos parÂmetros
    sendEmail(
      
        "Argumentos Nomeados",
        "send@email.com",
        "Dominando a feature de argumentos nomeados"
    );


?>