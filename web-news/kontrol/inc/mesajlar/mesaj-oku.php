<?php
    $ID = intval(get("ID"));
    $MesajNe = Sor("SELECT * FROM mesajlar WHERE ID='".$ID."'");
    echo '<div class="content-box">';
    if(@Say($MesajNe)>0){
        $Yaz = Yaz($MesajNe);
        echo ' <div class="content-box-header">
            <h3 style="font-weight:normal;"><b>'.$Yaz["AdSoyad"].'</b> <i>kişisinden gelen Mesaj</i></h3>
        </div>';
        echo '<div class="content-box-content">
            <div class="tab-content default-tab">
                <fieldset>
                    <table class="table">
                        <tr>
                            <td class="TableBaslik">Tarih</td>
                            <td class="TableContent">'.$Yaz["Tarih"].'</td>
                        </tr>
                        <tr>
                            <td class="TableBaslik">Gönderen</td>
                            <td class="TableContent">'.$Yaz["AdSoyad"].'</td>
                        </tr>
                        <tr>
                            <td class="TableBaslik">E-Mail</td>
                            <td class="TableContent">'.$Yaz["Email"].'</td>
                        </tr>
                        <tr>
                            <td class="TableBaslik">Telefon</td>
                            <td class="TableContent">'.$Yaz["Telefon"].'</td>
                        </tr>
                        <tr>
                            <td class="TableBaslik">Mesaj</td>
                            <td class="TableContent">'.$Yaz["Mesaj"].'</td>
                        </tr>
                    </table>';
        $MesajOku = Sor("UPDATE mesajlar SET Durum=1 WHERE ID='".$ID."'");
        if(!$MesajOku){
            mesajUyari("", "Mesaj okundu olarak işaretlenemedi. HATA : ".$Hata);
        }
        echo '</fieldset>
            </div>  
        </div> ';
    }
    else{
         echo ' <div class="content-box-header">
            <h3>Kayıt Yok</h3>
        </div>';
        echo '<div class="content-box-content">
            <div class="tab-content default-tab">
                <fieldset>';
        mesajUyari("uyar", "Üzgünüz, böyle bir kayıt yok.");
        echo '</fieldset>
            </div>  
        </div> ';
    }
    echo '</div>';
?>