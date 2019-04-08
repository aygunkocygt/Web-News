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
        $Url = url($Title, array('transliterate' => true));
        $Keywords = @mysql_real_escape_string(post("Keywords"));
        $Description = @mysql_real_escape_string(post("Description"));
        $Text = @$_POST["Text"];
        if($Title==""){
             mesajUyari('', 'Başlığı Boş Bırakmayınız.');
        }
        else{
            $Say = Say(Sor("SELECT * FROM hakkimizda_tr WHERE ID=1"));
            if($Say>0){
                $Guncelle = Sor("UPDATE hakkimizda_tr SET "
                    . "Title='{$Title}',"
                    . "Url='{$Url}',"
                    . "Keywords='{$Keywords}',"
                    . "Description='{$Description}',"
                    . "Text='{$Text}'"
                    . "WHERE ID='1' ");
                if($Guncelle){
                    mesajUyari('ok', 'Güncelleme Başarılı');
                }
                 else {
                    mesajUyari('', 'Hata ! Güncelleme Yapılamadı.');
                }
            }
            else{
                $Ekle = Sor("INSERT INTO hakkimizda_tr SET "
                    . "Title='{$Title}',"
                    . "Url='{$Url}',"
                    . "Keywords='{$Keywords}',"
                    . "Description='{$Description}',"
                    . "Text='{$Text}' ");
                if($Ekle){
                    mesajUyari('ok', 'Ekleme Başarılı');
                }
                else {
                    mesajUyari('', 'Hata ! Ekleme Yapılamadı.');
                }
            }
        }
    }
    $HakkimizdaYaz = Yaz(Sor("SELECT * FROM hakkimizda_tr WHERE ID=1"));
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Hakkımızda</h3>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
                <form action="" method="POST">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Başlık</td>
                                <td class="TableContent"><input type="text" id="Title" name="Title" class="text-input large-input fontSize13" value="<?php echo @post("Title")=="" ? $HakkimizdaYaz["Title"] : post("Title"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop">Keywords</td>
                                <td class="TableContent"><input type="text" id="Keywords" name="Keywords" class="text-input large-input fontSize13 tagsinput" value="<?php echo @post("Keywords")=="" ? $HakkimizdaYaz["Keywords"] : post("Keywords"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik TableBaslikTop" >Description</td>
                                <td class="TableContent">
                                    <textarea id="Description" name="Description" class="text-input large-input fontSize13" rows="3"><?php echo @post("Description")=="" ? $HakkimizdaYaz["Description"] : post("Description"); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Text</td>
                                <td class="TableContent">
                                    <textarea id="editor1" name="Text"><?php echo @post("Text")=="" ? $HakkimizdaYaz["Text"] : post("Text"); ?></textarea></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik"></td>
                                <td class="TableContent">
                                    <input type="submit" id="kaydet" name="kaydet" class="button MarginR_15 fontSize15" value="Kaydet" />
                                    <a href="index.php?Go=Hakkimizda" class="remove-link fontSize14">İptal et</a>
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