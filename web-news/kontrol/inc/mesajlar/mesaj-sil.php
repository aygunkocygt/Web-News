<?php
    $ID = intval(get("ID"));
    $MesajSil = @Sor("DELETE FROM mesajlar WHERE ID='".$ID."'");
    echo '<div class="content-box">';
        echo ' <div class="content-box-header">
            <h3 style="font-weight:normal;">Mesaj Silme</h3>
        </div>
        <div class="content-box-content">
            <div class="tab-content default-tab">
                <fieldset>';
    if($MesajSil){
        mesajUyari("ok", "Mesaj Başarıyla Silindi");
        go($_SERVER["HTTP_REFERER"], 2);
    }
    else{
        mesajUyari("", "Mesaj silinemedi. HATA : ".$Hata);
        echo '<a href="'.$_SERVER["HTTP_REFERER"].'" class="align-left MarginR_15 MarginT_15"><< Geri Dön</a>';
       
    } 
        echo '</fieldset>
            </div>  
        </div> ';
    echo '</div>';
?>