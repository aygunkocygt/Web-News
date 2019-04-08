<?php
    $OkunmusMesajlar = Sor("SELECT * FROM mesajlar WHERE Durum=1");
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Okunmuş Mesajlar</h3>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">
            <div class="tab-content default-tab">
    <?php
        if(@Say($OkunmusMesajlar)>0){
            echo '<table class="table">'
                . '<tr>'
                    . '<td style="width:25px;text-align:center;">NO</td>'
                    . '<td>Tarih</td>'
                    . '<td>Gönderen</td>'
                    . '<td>E-Mail</td>'
                    . '<td>Telefon</td>'
                    . '<td style="text-align:center;">Kontroller</td>'
                . '</tr>';
            while ($Yaz=@Yaz($OkunmusMesajlar)){
                echo '<tr>'
                    . '<td style="text-align:center;">'.$Yaz["ID"].'</td>'
                    . '<td style="text-align:left;">'.$Yaz["Tarih"].'</td>'
                    . '<td style="text-align:left;">'.$Yaz["AdSoyad"].'</td>'
                    . '<td style="text-align:left;">'.$Yaz["Email"].'</td>'
                    . '<td style="text-align:left;">'.$Yaz["Telefon"].'</td>'
                    . '<td style="text-align:center;">'
                        . '<a href="index.php?Go=MesajOku&ID='.$Yaz["ID"].'" title="Mesaj Oku">Oku</a> | '
                        . '<a href="index.php?Go=MesajSil&ID='.$Yaz["ID"].'" title="Mesaj Sil" style="color:darkred;" onclick="return confirm(\'Silmek İstediğinize Eminmisniz\')">Sil</a>'
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
