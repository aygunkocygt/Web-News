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
        $VideoLink = @mysql_real_escape_string(post("VideoLink"));
        $Tarih = date("d.m.Y H:i:s");
        if($Title==""){
             mesajUyari('', 'Başlığı Boş Bırakmayınız.');
        }
        else{
            $UrlSay = @Say(@Sor("SELECT Url FROM videolar_tr WHERE Url='".$Url."' "));
            if($UrlSay>0){
                $Title .= "-".$UrlSay;
                $Url .= "-".$UrlSay;
            }
            
      
            $Ekle = Sor("INSERT INTO slide_videolar3 SET "
                . "KatID='{$KatID}',"
                . "AltKatID='{$AltKatID}',"
                . "Title='{$Title}',"
                . "Url='{$Url}',"
                . "Keywords='{$Keywords}',"
                . "Description='{$Description}',"
                . "Text='{$Text}',"
                . "VideoLink='{$VideoLink}',"
                . "Tarih='{$Tarih}' "
               );
            if($Ekle){
                mesajUyari('ok', 'Ekleme Başarılı');
            }
            else {
                mesajUyari('', 'Hata ! Ekleme Yapılamadı.');
            }
        }
    }
?>
       <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Video Ekle</h3>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
                <form action="" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <table class="table">
                            <tr>
                                
                                <td class="TableContent">
                                    <input type="hidden" id="formNe" name="formNe" value="VideoYonetimi" />
                                  
                          
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Başlık</td>
                                <td class="TableContent"><input type="text" id="Title" name="Title" class="text-input large-input fontSize13" value="<?php echo @post("Title")=="" ? '' : post("Title"); ?>" /></td>
                            </tr>
                           
                            <tr>
                                <td class="TableBaslik TableBaslikTop" >Video Link</td>
                                <td class="TableContent">
                                    <textarea id="VideoLink" name="VideoLink" class="text-input large-input fontSize13" rows="3"><?php echo @post("VideoLink")=="" ? '' : post("VideoLink"); ?></textarea>
                                </td>
                            </tr>
                          
                           
                            <tr>
                                <td class="TableBaslik"></td>
                                <td class="TableContent">
                                    <input type="submit" id="kaydet" name="kaydet" class="button MarginR_15 fontSize15" value="Kaydet" />
                                    <a href="index.php?Go=VideoList" class="remove-link fontSize14">İptal et</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>      

        </div> 

    </div>

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