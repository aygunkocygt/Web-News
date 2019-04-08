<?php
    require_once 'data.function.php';
    require_once 'tools.function.php';
    $formNe = post("formNe");
    if($formNe=="MakaleYonetimi"){
        $id = post("id");
        $MakaleAltKatTitleSor = Sor("SELECT ID, Title FROM makale_kat_tr WHERE ParentID='".$id."' ORDER BY Title ASC");
        if(Say($MakaleAltKatTitleSor)>0){
            echo '<option value="0" >Alt kategoriye bağlı değil..</option>';
            While($MakaleAltKatTitleYaz=  Yaz($MakaleAltKatTitleSor)){
                echo '<option value="'.$MakaleAltKatTitleYaz["ID"].'" >';
                echo $MakaleAltKatTitleYaz["Title"].'</option>';
            }
        }
        else{
             echo '<option value="0" >Kayıt Yok</option>';
        }
    }
    else if($formNe=="VideoYonetimi"){
        $id = post("id");
        $VideoAltKatTitleSor = Sor("SELECT ID, Title FROM video_kat_tr WHERE ParentID='".$id."' ORDER BY Title ASC");
        if(Say($VideoAltKatTitleSor)>0){
            echo '<option value="0" >Alt kategoriye bağlı değil..</option>';
            While($VideoAltKatTitleYaz=  Yaz($VideoAltKatTitleSor)){
                echo '<option value="'.$VideoAltKatTitleYaz["ID"].'" >';
                echo $VideoAltKatTitleYaz["Title"].'</option>';
            }
        }
        else{
             echo '<option value="0" >Kayıt Yok</option>';
        }
    }
    
