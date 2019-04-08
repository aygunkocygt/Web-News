<?php
    if(@$_POST){
        $sunucu = @mysql_real_escape_string(post("sunucu"));
        $userName = @mysql_real_escape_string(post("userName"));
        $userPass = @mysql_real_escape_string(post("userPass"));
        $port = @mysql_real_escape_string(post("port"))=="" ? 587 : @mysql_real_escape_string(post("port"));
        $sslDurum = @mysql_real_escape_string(post("sslDurum"));
        $gorunenAd = @mysql_real_escape_string(post("gorunenAd"));
        if($sunucu=="" || $userName=="" || $userPass==""){
            mesajUyari('', 'Sunuc, Kullanıcı Adı ve Şifre Boş Olamaz.');
        }
        else{
            $MailAyarSay = Say(Sor("SELECT ID FROM site_mail_tr WHERE ID=1"));
            if($MailAyarSay>0){
                $Guncelle = Sor("UPDATE site_mail_tr SET "
                    . "Sunucu='{$sunucu}',"
                    . "UserName='{$userName}',"
                    . "UserPass='{$userPass}',"
                    . "Port='{$port}',"
                    . "SslDurum='{$sslDurum}',"
                    . "GorunenAD='{$gorunenAd}'"
                    . "WHERE ID='1' ");
                if($Guncelle){
                    mesajUyari('ok', 'Güncelleme Başarılı');
                }
                else {
                     mesajUyari('', 'Hata ! Güncelleme Yapılamadı.');
                }
            }
            else {
                $Ekle = Sor("INSERT INTO site_mail_tr SET "
                    . "Sunucu='{$sunucu}',"
                    . "UserName='{$userName}',"
                    . "UserPass='{$userPass}',"
                    . "Port='{$port}',"
                    . "SslDurum='{$sslDurum}',"
                    . "GorunenAD='{$gorunenAd}' ");
                if($Ekle){
                     mesajUyari('ok', 'Ekleme Başarılı');
                }
                else {
                     mesajUyari('', 'Hata ! Ekleme Yapılamadı.');
                }
            }
        }
    }
    $MailAyarlari = Yaz(Sor("SELECT * FROM site_mail_tr WHERE ID=1"));
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Mail Ayarları</h3>
            <a href="index.php?Go=GuncelGorunum" class="align-right MarginR_15 MarginT_15">geri dön</a>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
                <form action="" method="POST">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Sunucu</td>
                                <td class="TableContent"><input type="password" id="sunucu" name="sunucu" class="text-input large-input fontSize13" value="<?php echo @post("sunucu")=="" ? $MailAyarlari["Sunucu"] : post("sunucu"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Kullanıcı Adı</td>
                                <td class="TableContent"><input type="password" id="userName" name="userName" class="text-input large-input fontSize13" value="<?php echo @post("userName")=="" ? $MailAyarlari["UserName"] : post("userName"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Şifre</td>
                                <td class="TableContent"><input type="password" id="userPass" name="userPass" class="text-input large-input fontSize13" value="<?php echo @post("userPass")=="" ? $MailAyarlari["UserPass"] : post("userPass"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Port</td>
                                <td class="TableContent"><input type="text" id="port" name="port" class="text-input large-input fontSize13" value="<?php echo @post("port")=="" ? $MailAyarlari["Port"] : post("port"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">SSL Durum</td>
                                <td class="TableContent">
                                    <select id="sslDurum" name="sslDurum" class="text-input medium-input fontSize13">
                                        <?php sslDurumGet($MailAyarlari["SslDurum"]); ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Görünen Ad</td>
                                <td class="TableContent"><input type="text" id="gorunenAd" name="gorunenAd" class="text-input large-input fontSize13" value="<?php echo @post("gorunenAd")=="" ? $MailAyarlari["GorunenAD"] : post("gorunenAd"); ?>" /></td>
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
