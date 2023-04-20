<?php
    if(!($_SESSION["PROFILE"]["ROLE"]=="k-rten")){
    //$_SERVER[HTTP_REFERER]: permet de retourner à la page précédente
        header("location: $_SERVER[HTTP_REFERER]");
    }
