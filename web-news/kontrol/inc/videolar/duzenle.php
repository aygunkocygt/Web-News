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
            $UrlSay = @Say(@Sor("SELECT Url FROM videolar_tr WHERE Url='".$Url."' "));
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
                        $Hedef = "../images/Video";
                        if(@move_uploaded_file($ImgTemp, $Hedef."/".$ImgN)){
                            $ImgSor = Sor("SELECT Img FROM videolar_tr WHERE ID='".get("ID")."'");
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
            $Ekle = Sor("UPDATE videolar_tr SET "
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
    $VideoSor = @Sor("SELECT * FROM videolar_tr WHERE ID='".get("ID")."' ");
    if(Say($VideoSor)>0){
        $VideoYaz = Yaz($VideoSor);
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Video Düzenle</h3>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
                <form action="" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Kategori</td>
                                <td class="TableContent">
                                    <input type="hidden" id="formNe" name="formNe" value="VideoYonetimi" />
                                    <select id="VideoKat" name="KatID" class="text-input large-input fontSize13">
                                        <?php
                                            $VideoKatTitleSor = Sor("SELECT ID, Title FROM video_kat_tr WHERE ParentID='0' ORDER BY Title ASC");
                                            if(Say($VideoKatTitleSor)>0){
                                                While($VideoKatTitleYaz=  Yaz($VideoKatTitleSor)){
                                                    echo '<option value="'.$VideoKatTitleYaz["ID"].'" ';
                                                    echo @$VideoYaz["KatID"]==$VideoKatTitleYaz["ID"] ? 'selected' : null;
                                                    echo @post("KatID")==$VideoKatTitleYaz["ID"] ? 'selected' : null;
                                                    echo '>'.$VideoKatTitleYaz["Title"].'</option>';
                                                   
                                                }
                                            }
                                        ?>
                                    </select>
                                <?php
                                    echo "<select name='AltKatID' id='AltKatID' class='text-input large-input fontSize13 MarginT_10'>";
                                    $VideoAltKatTitleSor = Sor("SELECT ID, Title FROM video_kat_tr WHERE ParentID='".@$VideoYaz["KatID"]."' ORDER BY Title ASC");
                                    if(Say($VideoAltKatTitleSor)>0){
                                        While($VideoAltKatTitleYaz=  Yaz($VideoAltKatTitleSor)){
                                            echo '<option value="'.$VideoAltKatTitleYaz["ID"].'" ';
                                            echo @$VideoYaz["AltKatID"]==$VideoAltKatTitleYaz["ID"] ? 'selected' : null;
                                            echo @post("AltKatID")==$VideoAltKatTitleYaz["ID"] ? 'selected' : null;
                                            echo '>'.$VideoAltKatTitleYaz["Title"].'</option>';
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
                                <td class="TableContent"><input type="text" id="Title" name="Title" class="text-input large-input fontSize13" value="<?php echo @post("Title")=="" ? $VideoYaz["Title"] : post("Title"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop">Keywords</td>
                                <td class="TableContent"><input type="text" id="Keywords" name="Keywords" class="text-input large-input fontSize13 tagsinput" value="<?php echo @post("Keywords")=="" ? $VideoYaz["Keywords"] : post("Keywords"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop" >Description</td>
                                <td class="TableContent">
                                    <textarea id="Description" name="Description" class="text-input large-input fontSize13" rows="3"><?php echo @post("Description")=="" ? $VideoYaz["Description"] : post("Description"); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop" >Video Link</td>
                                <td class="TableContent">
                                    <textarea id="VideoLink" name="VideoLink" class="text-input large-input fontSize13" rows="3"><?php echo @post("VideoLink")=="" ? $VideoYaz["VideoLink"] : post("VideoLink"); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop" >Resim</td>
                                <td class="TableContent">
                                    <input type="file" name="Img" style="float:left;" />
                                    <?php if($VideoYaz["Img"]!=""){ ?>
                                    <img src="../images/Video/<?php echo $VideoYaz["Img"]; ?>" style="width: 150px;" />
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Text</td>
                                <td class="TableContent">
                                    <textarea id="editor1" name="Text"><?php echo @post("Text")=="" ? $VideoYaz["Text"] : post("Text"); ?></textarea></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik"></td>
                                <td class="TableContent">
                                    <input type="submit" id="kaydet" name="kaydet" class="button MarginR_15 fontSize15" value="Güncelle" />
                                    <a href="index.php?Go=VideoList" class="remove-link fontSize14">İptal et</a>
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