<?php
    if(@$_POST){
        $title = @mysql_real_escape_string(post("title"));
        $tel = @mysql_real_escape_string(post("tel"));
        $tel2 = @mysql_real_escape_string(post("tel2"));
        $mobil = @mysql_real_escape_string(post("mobil"));
        $fax = @mysql_real_escape_string(post("fax"));
        $adres = @mysql_real_escape_string(post("adres"));
        $ilce = @mysql_real_escape_string(post("ilce"));
        $il = @mysql_real_escape_string(post("il"));
        
        $IletisimAyarSay = Say(Sor("SELECT ID FROM site_iletisim_tr WHERE ID=1"));
        if($IletisimAyarSay>0){
            $Guncelle = Sor("UPDATE site_iletisim_tr SET "
                . "Title='{$title}',"
                . "Tel='{$tel}',"
                . "Tel_2='{$tel2}',"
                . "Mobil='{$mobil}',"
                . "Fax='{$fax}',"
                . "Adres='{$adres}',"
                . "Ilce='{$ilce}',"
                . "Il='{$il}'"
                . "WHERE ID='1' ");
            if($Guncelle){
                mesajUyari('ok', 'Güncelleme Başarılı');
            }
            else {
                 mesajUyari('', 'Hata ! Güncelleme Yapılamadı.');
            }
        }
        else {
            $Ekle = Sor("INSERT INTO site_iletisim_tr SET "
                . "Title='{$title}',"
                . "Tel='{$tel}',"
                . "Tel_2='{$tel2}',"
                . "Mobil='{$mobil}',"
                . "Fax='{$fax}',"
                . "Adres='{$adres}',"
                . "Ilce='{$ilce}',"
                . "Il='{$il}' ");
            if($Ekle){
                 mesajUyari('ok', 'Ekleme Başarılı');
            }
            else {
                 mesajUyari('', 'Hata ! Ekleme Yapılamadı.');
            }
        }
        
    }
    $IletisimAyarlari = Yaz(Sor("SELECT * FROM site_iletisim_tr WHERE ID=1"));
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>İletişim Ayarları</h3>
            <a href="index.php?Go=GuncelGorunum" class="align-right MarginR_15 MarginT_15">geri dön</a>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
                <form action="" method="POST">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Başlık</td>
                                <td class="TableContent"><input type="text" id="title" name="title" class="text-input large-input fontSize13" value="<?php echo @post("title")=="" ? $IletisimAyarlari["Title"] : post("title"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Telefon</td>
                                <td class="TableContent"><input type="text" id="tel" name="tel" class="text-input large-input fontSize13" value="<?php echo @post("tel")=="" ? $IletisimAyarlari["Tel"] : post("tel"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Telefon 2</td>
                                <td class="TableContent"><input type="text" id="tel2" name="tel2" class="text-input large-input fontSize13" value="<?php echo @post("tel2")=="" ? $IletisimAyarlari["Tel_2"] : post("tel2"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Mobil Tel.</td>
                                <td class="TableContent"><input type="text" id="mobil" name="mobil" class="text-input large-input fontSize13" value="<?php echo @post("mobil")=="" ? $IletisimAyarlari["Mobil"] : post("mobil"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Fax</td>
                                <td class="TableContent"><input type="text" id="fax" name="fax" class="text-input large-input fontSize13" value="<?php echo @post("fax")=="" ? $IletisimAyarlari["Fax"] : post("fax"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Adres</td>
                                <td class="TableContent"><input type="text" id="adres" name="adres" class="text-input large-input fontSize13" value="<?php echo @post("adres")=="" ? $IletisimAyarlari["Adres"] : post("adres"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">İlçe</td>
                                <td class="TableContent"><input type="text" id="ilce" name="ilce" class="text-input large-input fontSize13" value="<?php echo @post("ilce")=="" ? $IletisimAyarlari["Ilce"] : post("ilce"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">İl</td>
                                <td class="TableContent"><input type="text" id="il" name="il" class="text-input large-input fontSize13" value="<?php echo @post("il")=="" ? $IletisimAyarlari["Il"] : post("il"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik"></td>
                                <td class="TableContent">
                                    <input type="submit" id="kaydet" name="kaydet" class="button MarginR_15 fontSize15" value="Kaydet" />
                                    <a href="index.php?Go=GuncelGorunum" class="remove-link fontSize14">İptal et</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>      

        </div> 

    </div>
