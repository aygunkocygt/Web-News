<?php
    if(@get("islem")=="Sil" AND @get("ID")!=""){
        $Sor = Sor("SELECT ID FROM makaleler_tr WHERE ID='".@get("ID")."' ");
        if(Say($Sor)>0){
            $ImgSor = Sor("SELECT Img FROM makaleler_tr WHERE ID='".@get("ID")."' ");
            $ImgSay = Say($ImgSor);
            $Del = Sor("DELETE FROM makaleler_tr WHERE ID='".@get("ID")."' ");
            if($Del){
                mesajUyari("ok", "Kayıt başarıyla silindi.");
                if($ImgSay>0){
                    $ImgYaz = Yaz($ImgSor);
                    if(!@unlink("../images/Makaleler/".$ImgYaz["Img"])){
                        mesajUyari("inf", "Resim Dizinden Silinemedi.");
                    }
                }
            }
            else{
                mesajUyari("", "Hata ! Kayıt silinemedi.");
            }
        }
        else{
            mesajUyari("", "Hata ! Böyle bir kayıt yok.");
        }
    }
    $MakaleSor = Sor("SELECT ID, KatID, Title, Tarih FROM makaleler_tr ORDER BY ID ASC");
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Makaleler</h3>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
    <?php
        if(@Say($MakaleSor)>0){
            echo '<table class="table">'
                . '<tr>'
                    . '<td style="width:25px;text-align:center;">NO</td>'
                    . '<td>Tarih</td>'
                    . '<td>Başlık</td>'
                    . '<td>Kategori</td>'
                    . '<td style="text-align:center;">Kontroller</td>'
                . '</tr>';
            while ($Yaz=@Yaz($MakaleSor)){
                echo '<tr>'
                    . '<td style="text-align:center;">'.$Yaz["ID"].'</td>'
                    . '<td style="text-align:left;">'.$Yaz["Tarih"].'</td>'
                    . '<td style="text-align:left;">'.$Yaz["Title"].'</td>'
                    . '<td style="text-align:left;">';
               
                    $ParentYaz = Yaz(Sor("SELECT Title FROM makale_kat_tr WHERE ID='".$Yaz["KatID"]."' "));
                    echo $ParentYaz["Title"];
                
                echo '</td>'
                    . '<td style="text-align:center;">'
                        . '<a href="index.php?Go=MakaleDuzenle&ID='.$Yaz["ID"].'" title="Düzenle">Düzenle</a> | '
                        . '<a href="index.php?Go=MakaleList&islem=Sil&ID='.$Yaz["ID"].'" title="Sil" style="color:darkred;" onclick="return confirm(\'Silmek İstediğinize Eminmisniz\')">Sil</a>'
                    . '</td>'
                . '</tr>';
            }
            echo '</table>';
            
        }
        else {
            echo 'Kayıt Bulunamadı.';
        }
    ?>                
            </div>
        
        </div>
        
    </div>