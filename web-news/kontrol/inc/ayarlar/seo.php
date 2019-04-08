<script src="scripts/jquery.tagsinput.min.js"></script>
<link rel="stylesheet" href="css/jquery.tagsinput.css" />
<script>
    $(document).ready(function(){
        $('.tagsinput').tagsInput({width:'auto', height:'auto'});
    });
</script>
<?php
    if(@$_POST){
        $arthur = @mysql_real_escape_string(post("athur"));
        $design = @mysql_real_escape_string(post("design"));
        $key = @mysql_real_escape_string(post("key"));
        $desc = @mysql_real_escape_string(post("desc"));
        
        $SeoAyarSay = Say(Sor("SELECT ID FROM site_seo_tr WHERE ID=1"));
        if($SeoAyarSay>0){
            $Guncelle = Sor("UPDATE site_seo_tr SET "
                . "Arthur='{$arthur}',"
                . "Design='{$design}',"
                . "Keywords='{$key}',"
                . "Description='{$desc}'"
                . "WHERE ID='1' ");
            if($Guncelle){
                mesajUyari('ok', 'Güncelleme Başarılı');
            }
            else {
                 mesajUyari('', 'Hata ! Güncelleme Yapılamadı.');
            }
        }
        else {
            $Ekle = Sor("INSERT INTO site_seo_tr SET "
                 . "Arthur='{$arthur}',"
                . "Design='{$design}',"
                . "Keywords='{$key}',"
                . "Description='{$desc}' ");
            if($Ekle){
                 mesajUyari('ok', 'Ekleme Başarılı');
            }
            else {
                 mesajUyari('', 'Hata ! Ekleme Yapılamadı.');
            }
        }
        
    }
    $SeoAyarlari = Yaz(Sor("SELECT * FROM site_seo_tr WHERE ID=1"));
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Seo Ayarları</h3>
            <a href="index.php?Go=GuncelGorunum" class="align-right MarginR_15 MarginT_15">geri dön</a>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
                <form action="" method="POST">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Arthur</td>
                                <td class="TableContent"><input type="text" id="athur" name="athur" class="text-input large-input fontSize13" value="<?php echo @post("athur")=="" ? $SeoAyarlari["Athur"] : post("athur"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Desing</td>
                                <td class="TableContent"><input type="text" id="design" name="design" class="text-input large-input fontSize13" value="<?php echo @post("design")=="" ? $SeoAyarlari["Design"] : post("design"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop">Keywords</td>
                                <td class="TableContent"><textarea id="key" name="key" rows="3" class="fontSize13 tagsinput textarea"><?php echo @post("key")=="" ? $SeoAyarlari["Keywords"] : post("key"); ?></textarea></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop">Description</td>
                                <td class="TableContent"><textarea id="desc" name="desc" rows="3" class="fontSize13 textarea"><?php echo @post("desc")=="" ? $SeoAyarlari["Desciption"] : post("desc"); ?></textarea></td>
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
