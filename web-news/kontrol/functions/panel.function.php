<?php

    function siteDurumGet($par){
        echo '<option value="0" ';
        echo $par=="0" || $par=="" ? 'selected' : null;
        echo '>Site Kapalı</option>';
        echo '<option value="1" ';
        echo $par=="1" ? 'selected' : null;
        echo '>Site Açık</option>';
        echo '<option value="2" ';
        echo $par=="2" ? 'selected' : null;
        echo '>Site Üyelere Açık</option>';
    }

    function uyeDurumGet($par){
        echo '<option value="0" ';
        echo $par=="0" || $par=="" ? 'selected' : null;
        echo '>Üyelik Kapalı</option>';
        echo '<option value="1" ';
        echo $par=="1" ? 'selected' : null;
        echo '>Üyelik Açık</option>';
        echo '<option value="2" ';
        echo $par=="2" ? 'selected' : null;
        echo '>Üyelik Admin Onaylı</option>';
    }

    function icerikDurumGet($par){
        echo '<option value="0" ';
        echo $par=="0" || $par=="" ? 'selected' : null;
        echo '>İçerik Kapalı</option>';
        echo '<option value="1" ';
        echo $par=="1" ? 'selected' : null;
        echo '>İçerik Herkese Açık</option>';
        echo '<option value="2" ';
        echo $par=="2" ? 'selected' : null;
        echo '>İçerik Üyelere Açık</option>';
        echo '<option value="3" ';
        echo $par=="3" ? 'selected' : null;
        echo '>İçerik VIP Üyelere Açık</option>';
    }

    function sslDurumGet($par){
        echo '<option value="0" ';
        echo $par=="0" || $par=="" ? 'selected' : null;
        echo '>Sertifika Gerekmiyor</option>';
        echo '<option value="1" ';
        echo $par=="1" ? 'selected' : null;
        echo '>Sertifika Gerekli</option>';
    }


    function mesajUyari($par, $mesaj){
        if($par=="ok"){ $uyari = "success"; }
        else if($par=="inf"){ $uyari = "information"; }
        else if($par=="uyar"){ $uyari = "attention"; }
        else{ $uyari = "error"; }
        echo '<div class="notification '.$uyari.' png_bg">'
            . '<a href="#" class="close">'
                . '<img src="images/icons/cross_grey_small.png" />'
            . '</a>'
            . '<div>'.$mesaj.'</div>'
        . '</div>';
    }