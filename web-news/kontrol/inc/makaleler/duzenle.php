<script src="scripts/ajaxSecim.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
<script src="scripts/jquery.tagsinput.min.js"></script>
<link rel="stylesheet" href="css/jquery.tagsinput.css" />
<script>
    $(document).ready(function(){
        $('.tagsinput').tagsInput({width:'auto', height:'auto'});
    });
</script>
<?php
    if(@$_POST){
        $Title = @mysql_real_escape_string(post("Title"));
        $KatID = @mysql_real_escape_string(post("KatID"));
        $AltKatID = @mysql_real_escape_string(post("AltKatID")) != "" ? @mysql_real_escape_string(post("AltKatID")): 0;
        $Url = url($Title, array('transliterate' => true));
        $Keywords = @mysql_real_escape_string(post("Keywords"));
        $Description = @mysql_real_escape_string(post("Description"));
        $Text = @$_POST["Text"];
        $Tarih = date("d.m.Y H:i:s");
        if($Title==""){
             mesajUyari('', 'Başlığı Boş Bırakmayınız.');
        }
        else{
            $UrlSay = @Say(@Sor("SELECT Url FROM makaleler_tr WHERE Url='".$Url."' "));
            if($UrlSay>1){
                $Title .= "-".$UrlSay;
                $Url .= "-".$UrlSay;
            }
            $ImgName = $_FILES["Img"]["name"];
            if($ImgName!=""){
                $ImgSize = $_FILES["Img"]["size"];
                if($ImgSize > 500000){
                    mesajUyari('', "Resim Buyutu 500 KB olmalıdır. Resim Eklenemedi.");
                    $Img = "";
                }
                else{
                    $ImgUzanti = explode(".", $ImgName);
                    $ImgUzanti = strtolower(end($ImgUzanti));
                    if($ImgUzanti=="jpg" || $ImgUzanti=="png" || $ImgUzanti=="jpeg"){
                        $ImgN =  $Url."-".date("d-m-Y").".".$ImgUzanti;
                        $ImgTemp = $_FILES["Img"]["tmp_name"];
                        $Hedef = "../images/Makaleler";
                        if(@move_uploaded_file($ImgTemp, $Hedef."/".$ImgN)){
                            $ImgSor = Sor("SELECT Img FROM makaleler_tr WHERE ID='".get("ID")."'");
                            if(Say($ImgSor)>0){
                                $ImgYaz = Yaz($ImgSor);
                                if(!@unlink($Hedef."/".$ImgYaz["Img"])){
                                    mesajUyari('inf', "Eski Resim Dizinden Silinemedi.");
                                }
                            }
                            $Img = ", Img='".$ImgN."' ";
                        }
                        else{
                            mesajUyari('', "Resim Güncellenemedi.");
                            $Img = "";
                        }
                    }
                    else{
                        mesajUyari('', "Resim 'JPG' yada 'PNG' olmalıdır.");
                        $Img = "";
                    }
                }
            }
            else{
                $Img = "";
            }
            $Ekle = Sor("UPDATE makaleler_tr SET "
                . "KatID='{$KatID}',"
                . "AltKatID='{$AltKatID}',"
                . "Title='{$Title}',"
                . "Url='{$Url}',"
                . "Keywords='{$Keywords}',"
                . "Description='{$Description}',"
                . "Text='{$Text}'"
                . $Img
                . " WHERE ID='".get("ID")."' ");
            if($Ekle){
                mesajUyari('ok', 'Güncelleme Başarılı');
            }
            else {
                mesajUyari('', 'Hata ! Güncelleme Yapılamadı.');
            }
        }
    }
    $MakaleSor = @Sor("SELECT * FROM makaleler_tr WHERE ID='".get("ID")."' ");
    if(Say($MakaleSor)>0){
        $MakaleYaz = Yaz($MakaleSor);
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Makale Düzenle</h3>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
                <form action="" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Kategori</td>
                                <td class="TableContent">
                                    <input type="hidden" id="formNe" name="formNe" value="MakaleYonetimi" />
                                    <select id="MakaleKat" name="KatID" class="text-input large-input fontSize13">
                                        <?php
                                            $MakaleKatTitleSor = Sor("SELECT ID, Title FROM makale_kat_tr WHERE ParentID='0' ORDER BY Title ASC");
                                            if(Say($MakaleKatTitleSor)>0){
                                                While($MakaleKatTitleYaz=  Yaz($MakaleKatTitleSor)){
                                                    echo '<option value="'.$MakaleKatTitleYaz["ID"].'" ';
                                                    echo @$MakaleYaz["KatID"]==$MakaleKatTitleYaz["ID"] ? 'selected' : null;
                                                    echo @post("KatID")==$MakaleKatTitleYaz["ID"] ? 'selected' : null;
                                                    echo '>'.$MakaleKatTitleYaz["Title"].'</option>';
                                                   
                                                }
                                            }
                                        ?>
                                    </select>
                                <?php
                                    echo "<select name='AltKatID' id='AltKatID' class='text-input large-input fontSize13 MarginT_10'>";
                                    $MakaleAltKatTitleSor = Sor("SELECT ID, Title FROM makale_kat_tr WHERE ParentID='".@$MakaleYaz["KatID"]."' ORDER BY Title ASC");
                                    if(Say($MakaleAltKatTitleSor)>0){
                                        While($MakaleAltKatTitleYaz=  Yaz($MakaleAltKatTitleSor)){
                                            echo '<option value="'.$MakaleAltKatTitleYaz["ID"].'" ';
                                            echo @$MakaleYaz["AltKatID"]==$MakaleAltKatTitleYaz["ID"] ? 'selected' : null;
                                            echo @post("AltKatID")==$MakaleAltKatTitleYaz["ID"] ? 'selected' : null;
                                            echo '>'.$MakaleAltKatTitleYaz["Title"].'</option>';
                                        }
                                    }
                                    else{
                                         echo '<option value="0" >Kayıt Yok</option>';
                                    }
                                    echo "</select>";
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Başlık</td>
                                <td class="TableContent"><input type="text" id="Title" name="Title" class="text-input large-input fontSize13" value="<?php echo @post("Title")=="" ? $MakaleYaz["Title"] : post("Title"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop">Keywords</td>
                                <td class="TableContent"><input type="text" id="Keywords" name="Keywords" class="text-input large-input fontSize13 tagsinput" value="<?php echo @post("Keywords")=="" ? $MakaleYaz["Keywords"] : post("Keywords"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop" >Description</td>
                                <td class="TableContent">
                                    <textarea id="Description" name="Description" class="text-input large-input fontSize13" rows="3"><?php echo @post("Description")=="" ? $MakaleYaz["Description"] : post("Description"); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop" >Resim</td>
                                <td class="TableContent">
                                    <input type="file" name="Img" style="float:left;" />
                                    <?php if($MakaleYaz["Img"]!=""){ ?>
                                    <img src="../images/Makaleler/<?php echo $MakaleYaz["Img"]; ?>" style="width: 150px;" />
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Text</td>
                                <td class="TableContent">
                                    <textarea id="editor1" name="Text"><?php echo @post("Text")=="" ? $MakaleYaz["Text"] : post("Text"); ?></textarea></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik"></td>
                                <td class="TableContent">
                                    <input type="submit" id="kaydet" name="kaydet" class="button MarginR_15 fontSize15" value="Güncelle" />
                                    <a href="index.php?Go=MakaleList" class="remove-link fontSize14">İptal et</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>      

        </div> 

    </div>
<?php 
    }
    else{
        mesajUyari('', 'Hata ! Böyle bir kayıt yok.');
    }
?>
<script type="text/javascript">
    CKEDITOR.replace( 'editor1',
    {
        filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        filebrowserWindowWidth : '1000',
        filebrowserWindowHeight : '700'
    });
</script>