<?php
    if(@$_POST){
        $siteTitle = @mysql_real_escape_string(post("siteTitle"));
        $siteUrl = @mysql_real_escape_string(post("siteUrl"));
        $siteDurum = @mysql_real_escape_string(post("siteDurum"));
        $uyeDurum = @mysql_real_escape_string(post("uyeDurum"));
        $icerikDurum = @mysql_real_escape_string(post("icerikDurum"));
        if($siteTitle=="" || $siteUrl==""){
            mesajUyari('', 'Site Başlığı ve Linki Boş Olamaz.');
        }
        else{
            $SiteAyarSay = Say(Sor("SELECT ID FROM site_ayarlar_tr WHERE ID=1"));
            if($SiteAyarSay>0){
                $Guncelle = Sor("UPDATE site_ayarlar_tr SET "
                    . "SiteTitle='{$siteTitle}',"
                    . "SiteUrl='{$siteUrl}',"
                    . "SiteDurum='{$siteDurum}',"
                    . "UyeDurum='{$uyeDurum}',"
                    . "IcerikDurum='{$icerikDurum}'"
                    . "WHERE ID='1' ");
                if($Guncelle){
                    mesajUyari('ok', 'Güncelleme Başarılı');
                }
                else {
                     mesajUyari('', 'Hata ! Güncelleme Yapılamadı.');
                }
            }
            else {
                $Ekle = Sor("INSERT INTO site_ayarlar_tr SET "
                    . "SiteTitle='{$siteTitle}',"
                    . "SiteUrl='{$siteUrl}',"
                    . "SiteDurum='{$siteDurum}',"
                    . "UyeDurum='{$uyeDurum}',"
                    . "IcerikDurum='{$icerikDurum}' ");
                if($Ekle){
                     mesajUyari('ok', 'Ekleme Başarılı');
                }
                else {
                     mesajUyari('', 'Hata ! Ekleme Yapılamadı.');
                }
            }
        }
    }
    $SiteAyarlari = Yaz(Sor("SELECT * FROM site_ayarlar_tr WHERE ID=1"));
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Site Ayarları</h3>
            <a href="index.php?Go=GuncelGorunum" class="align-right MarginR_15 MarginT_15">geri dön</a>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
                <form action="" method="POST">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Site Başlığı</td>
                                <td class="TableContent"><input type="text" id="siteTitle" name="siteTitle" class="text-input large-input fontSize13" value="<?php echo @post("siteTitle")=="" ? $SiteAyarlari["SiteTitle"] : post("siteTitle"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Site Link</td>
                                <td class="TableContent"><input type="text" id="siteUrl" name="siteUrl" class="text-input large-input fontSize13" value="<?php echo @post("siteUrl")=="" ? $SiteAyarlari["SiteUrl"] : post("siteUrl"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Site Durum</td>
                                <td class="TableContent">
                                    <select id="siteDurum" name="siteDurum" class="text-input medium-input fontSize13">
                                        <?php siteDurumGet($SiteAyarlari["SiteDurum"]); ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Üyelik Durum</td>
                                <td class="TableContent">
                                    <select id="uyeDurum" name="uyeDurum" class="text-input medium-input fontSize13">
                                        <?php uyeDurumGet($SiteAyarlari["UyeDurum"]); ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">İçerik Durum</td>
                                <td class="TableContent">
                                    <select id="icerikDurum" name="icerikDurum" class="text-input medium-input fontSize13">
                                        <?php icerikDurumGet($SiteAyarlari["IcerikDurum"]); ?>
                                    </select>
                                </td>
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
