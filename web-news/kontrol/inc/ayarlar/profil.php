<?php
    if(@$_POST){
        $userName = @mysql_real_escape_string(post("userName"));
        $sifreTxt = md5(@mysql_real_escape_string(post("userPass")));
        $name = @mysql_real_escape_string(post("name"));
        $email = @mysql_real_escape_string(post("email"));
        if($userName=="" || $email==""){
             mesajUyari('', 'Boş Alan Bırakmayınız.');
        }
        else{
            if(@post("userPass")!=""){ $pass = ",password='{$sifreTxt}'"; }
            else{ $pass=""; }
            $Guncelle = Sor("UPDATE admin SET "
                    . "username='{$userName}',"
                    . "name='{$name}',"
                    . "email='{$email}'"
                    . "{$pass}"
                    . "WHERE ID='1' ");
           if($Guncelle){
                mesajUyari('ok', 'Güncelleme Başarılı');
           }
           else {
                mesajUyari('', 'Hata ! Güncelleme Yapılamadı.');
           }
        }
    }
    $ProfilAyarlari = Yaz(Sor("SELECT * FROM admin WHERE ID=1"));
?>
    <div class="content-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
            <h3>Profil Ayarları</h3>
            <a href="index.php?Go=GuncelGorunum" class="align-right MarginR_15 MarginT_15">geri dön</a>
        </div> <!-- End .content-box-header -->

        <div class="content-box-content">

            <div class="tab-content default-tab">
                <form action="" method="POST">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td class="TableBaslik">Kullanıcı Adı</td>
                                <td class="TableContent"><input type="text" id="userName" name="userName" class="text-input large-input fontSize13" value="<?php echo @post("userName")=="" ? $ProfilAyarlari["username"] : post("userName"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Şifre</td>
                                <td class="TableContent"><input type="text" id="userPass" name="userPass" class="text-input large-input fontSize13" placeholder="şifreyi değiştirmek istemiyorsanız boş bırakınız.." /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">Ad Soyad</td>
                                <td class="TableContent"><input type="text" id="name" name="name" class="text-input large-input fontSize13" value="<?php echo @post("name")=="" ? $ProfilAyarlari["name"] : post("name"); ?>" /></td>
                            </tr>
                            <tr>
                                <td class="TableBaslik">E-Mail</td>
                                <td class="TableContent"><input type="text" id="email" name="email" class="text-input large-input fontSize13" value="<?php echo @post("email")=="" ? $ProfilAyarlari["email"] : post("email"); ?>" />
                                <textarea id="editor1"></textarea>
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