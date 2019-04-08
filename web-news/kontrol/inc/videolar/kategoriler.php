<script src="scripts/jquery.tagsinput.min.js"></script>
<link rel="stylesheet" href="css/jquery.tagsinput.css" />
<script>
    $(document).ready(function(){
        $('.tagsinput').tagsInput({width:'auto', height:'auto'});
    });
</script>
<?php
    if(@get("islem")=="Sil" AND @get("ID")!=""){
       $KayitSay = Say(Sor("SELECT ID FROM video_kat_tr WHERE ID='".@get("ID")."' "));
       if($KayitSay=="0"){
           mesajUyari('', 'Hata ! Böyle bir Kayıt Yok.');
       }
       else{
            $BagliKatSay = Say(Sor("SELECT ParentID FROM video_kat_tr WHERE ParentID='".@get("ID")."' "));
            $BagliConSay = Say(Sor("SELECT KatID FROM videolar_tr WHERE KatID='".@get("ID")."' "));
            if($BagliKatSay>0 || $BagliConSay>0){
                mesajUyari('', 'Hata ! Bu Kayıta Bağlı içerikler mevcut <b>önce bağlı içerikleri silin yada düzenleyin</b>.');
            }
            else{
                $VideoKatSil = Sor("DELETE FROM video_kat_tr WHERE ID='".@get("ID")."' ");
                if($VideoKatSil){
                    mesajUyari('ok', 'Silme Başarılı');
                }
                else{
                    mesajUyari('', 'Hata ! Kayıt Silinemedi.');
                }
            }
       }
    }
    if(@$_POST){
        $ParentID = @mysql_real_escape_string(post("ParentID"));
        $Title = @mysql_real_escape_string(post("Title"));
        $Url = url($Title, array('transliterate' => true));
        $Keywords = @mysql_real_escape_string(post("Keywords"));
        $Description = @mysql_real_escape_string(post("Description"));
        $Tarih = date("d.m.Y H:i:s");
        if($Title==""){
             mesajUyari('', 'Başlığı Boş Bırakmayınız.');
        }
        else{
            if(@get("islem")=="Ekle"){
                $Ekle = Sor("INSERT INTO video_kat_tr SET "
                    . "ParentID='{$ParentID}',"
                    . "Title='{$Title}',"
                    . "Url='{$Url}',"
                    . "Keywords='{$Keywords}',"
                    . "Description='{$Description}',"
                    . "Tarih='{$Tarih}' ");
                if($Ekle){
                    mesajUyari('ok', 'Ekleme Başarılı');
                }
                else {
                    mesajUyari('', 'Hata ! Ekleme Yapılamadı.');
                }
            }
            else if(@get("islem")=="Guncelle"){
                $UpdateTarih = date("d.m.Y H:i:s");
                $Guncelle = Sor("UPDATE video_kat_tr SET "
                    . "ParentID='{$ParentID}',"
                    . "Title='{$Title}',"
                    . "Url='{$Url}',"
                    . "Keywords='{$Keywords}',"
                    . "Description='{$Description}',"
                    . "UpdateTarih='{$UpdateTarih}' "
                    . "WHERE ID='".@get("ID")."'");
                if($Guncelle){
                    mesajUyari('ok', 'Güncelleme Başarılı');
                }
                else {
                    mesajUyari('', 'Hata ! Güncelleme Yapılamadı.');
                }
            }
        }
    }
    $VideoKatSor = Sor("SELECT * FROM video_kat_tr ORDER BY ID ASC");
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Video Kategori Yönetimi</h3>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
    <?php 
        if((@get("islem")=="Duzenle" || @get("islem")=="Guncelle") AND @get("ID")!=""){ 
            $VideoDuzenleSor = Sor("SELECT * FROM video_kat_tr WHERE ID='".@get("ID")."' ");
            if(Say($VideoDuzenleSor)>0){
                $VideoDuzenleYaz = Yaz($VideoDuzenleSor);            
    ?>
                <form action="index.php?Go=VideoKategori&islem=Guncelle&ID=<?php echo @get("ID"); ?>" method="POST">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Kategori</td>
                                <td class="TableContent">
                                    <select id="VideoKat" name="ParentID" class="text-input large-input fontSize13">
                                        <option value="0">Ana Kategori</option>
                                        <?php
                                            $VideoKatTitleSor = Sor("SELECT ID, Title FROM video_kat_tr ORDER BY Title ASC");
                                            if(Say($VideoKatTitleSor)>0){
                                                While($VideoKatTitleYaz=  Yaz($VideoKatTitleSor)){
                                                    if($VideoDuzenleYaz["ID"]!=$VideoKatTitleYaz["ID"]){
                                                        echo '<option value="'.$VideoKatTitleYaz["ID"].'" ';
                                                        echo $VideoDuzenleYaz["ParentID"]==$VideoKatTitleYaz["ID"] ? 'selected' : null;
                                                        echo '>'.$VideoKatTitleYaz["Title"].'</option>';
                                                    }
                                                }
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Başlık</td>
                                <td class="TableContent"><input type="text" id="Title" name="Title" class="text-input large-input fontSize13" value="<?php echo @post("Title")!="" ? @post("Title") : $VideoDuzenleYaz["Title"]; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop">Keywords</td>
                                <td class="TableContent"><input type="text" id="Keywords" name="Keywords" class="text-input large-input fontSize13 tagsinput" value="<?php echo @post("Keywords")!="" ? @post("Keywords") : $VideoDuzenleYaz["Keywords"]; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop" >Description</td>
                                <td class="TableContent">
                                    <textarea id="Description" name="Description" class="text-input large-input fontSize13" rows="3"><?php echo @post("Description")!="" ? @post("Description") : $VideoDuzenleYaz["Description"]; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik"></td>
                                <td class="TableContent">
                                    <input type="submit" id="kaydet" name="kaydet" class="button MarginR_15 fontSize15" value="Kaydet" />
                                    <a href="index.php?Go=VideoKategori" class="remove-link fontSize14">İptal et</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
    <?php 
            }
            else{
                mesajUyari('', 'Hata ! Böyle bir Kayıt Yok.');
            }
        } else if(@get("islem")=="" || @get("islem")=="Sil" || @get("islem")=="Ekle"){ ?>            
                <form action="index.php?Go=VideoKategori&islem=Ekle" method="POST">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Kategori</td>
                                <td class="TableContent">
                                    <select id="VideoKat" name="ParentID" class="text-input large-input fontSize13">
                                        <option value="0">Ana Kategori</option>
                                        <?php
                                            $VideoKatTitleSor = Sor("SELECT ID, Title FROM video_kat_tr ORDER BY Title ASC");
                                            if(Say($VideoKatTitleSor)>0){
                                                While($VideoKatTitleYaz=  Yaz($VideoKatTitleSor)){
                                                    echo '<option value="'.$VideoKatTitleYaz["ID"].'" ';
                                                    echo @post("ParentID")==$VideoKatTitleYaz["ID"] ? 'selected' : null;
                                                    echo '>'.$VideoKatTitleYaz["Title"].'</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Başlık</td>
                                <td class="TableContent"><input type="text" id="Title" name="Title" class="text-input large-input fontSize13" value="<?php echo @post("Title")!="" ? @post("Title") : null; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop">Keywords</td>
                                <td class="TableContent"><input type="text" id="Keywords" name="Keywords" class="text-input large-input fontSize13 tagsinput" value="<?php echo @post("Keywords")!="" ? @post("Keywords") : null; ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop" >Description</td>
                                <td class="TableContent">
                                    <textarea id="Description" name="Description" class="text-input large-input fontSize13" rows="3"><?php echo @post("Description")!="" ? @post("Description") : null; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik"></td>
                                <td class="TableContent">
                                    <input type="submit" id="kaydet" name="kaydet" class="button MarginR_15 fontSize15" value="Kaydet" />
                                    <a href="index.php?Go=VideoKategori" class="remove-link fontSize14">İptal et</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
    
    <?php } ?>
            </div>      

        </div> 

        
        <div class="content-box-content">

            <div class="tab-content default-tab">
    <?php
        if(@Say($VideoKatSor)>0){
            echo '<table class="table">'
                . '<tr>'
                    . '<td style="width:25px;text-align:center;">NO</td>'
                    . '<td>Tarih</td>'
                    . '<td>Başlık</td>'
                    . '<td>Kategori</td>'
                    . '<td>Bağlı Kat.</td>'
                    . '<td>İçerik</td>'
                    . '<td style="text-align:center;">Kontroller</td>'
                . '</tr>';
            while ($Yaz=@Yaz($VideoKatSor)){
                echo '<tr>'
                    . '<td style="text-align:center;">'.$Yaz["ID"].'</td>'
                    . '<td style="text-align:left;">';
                echo $Yaz["UpdateTarih"]!="" ? $Yaz["UpdateTarih"] : $Yaz["Tarih"];
                echo '</td>'
                    . '<td style="text-align:left;">'.$Yaz["Title"].'</td>'
                    . '<td style="text-align:left;">';
                if($Yaz["ParentID"]=="0"){
                    echo 'Ana Kategori';
                }
                else{
                    $ParentYaz = Yaz(Sor("SELECT Title FROM video_kat_tr WHERE ID='".$Yaz["ParentID"]."' "));
                    echo $ParentYaz["Title"];
                }
                echo '</td>'
                    . '<td style="text-align:left;">';
                    $ChildSay = Say(Sor("SELECT ID FROM video_kat_tr WHERE ParentID='".$Yaz["ID"]."' "));
                    echo $ChildSay;
                echo '</td>'
                    . '<td style="text-align:left;">';
                    $ContentSay = Say(Sor("SELECT ID FROM videolar_tr WHERE KatID='".$Yaz["ID"]."' "));
                    echo $ContentSay;
                echo '</td>'
                    . '<td style="text-align:center;">'
                        . '<a href="index.php?Go=VideoKategori&islem=Duzenle&ID='.$Yaz["ID"].'" title="Düzenle">Düzenle</a> | '
                        . '<a href="index.php?Go=VideoKategori&islem=Sil&ID='.$Yaz["ID"].'" title="Sil" style="color:darkred;" onclick="return confirm(\'Silmek İstediğinize Eminmisniz\')">Sil</a>'
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