
    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
        <h3 class="page-header MarginTop_0 Color_1">İletişim Formu</h3>
<?php
    if(@$_POST){
        $Konu = post("ConKonu");
        $AdSoyad = post("ConAdSoyad");
        $Email = post("ConEmail");
        $Telefon = post("ConTelefon");
        $Mesaj = post("ConMesaj");
        $Tarih = date("d.m.Y H:i:s");
        if($AdSoyad=="" || $Email=="" || $Mesaj==""){
            mesajUyari("Hata", "Lütfen gerekli alanları doldurunuz.");
        }
        else{
            $Kaydet = Sor("INSERT INTO mesajlar SET "
                    . "Konu='".$Konu."',"
                    . "AdSoyad='".$AdSoyad."',"
                    . "Email='".$Email."',"
                    . "Telefon='".$Telefon."',"
                    . "Mesaj='".$Mesaj."',"
                    . "Tarih='".$Tarih."'");
            if($Kaydet){
                mesajUyariSite("ok", "Mesajınız başarıyla kaydedildi.");
                $MailBilgiGet = Sor("SELECT * FROM site_mail_".@$Lang." WHERE ID='1' ");
                if(Say($MailBilgiGet)>0){
                    $Yaz = Yaz($MailBilgiGet);
                    extract($Yaz);
                    $mesaj = "Merhaba, {$Tarih} tarihinde {$AdSoyad} tarafından mesaj gönderildi.";
                    $MailGonder = mailGonder($Sunucu, $Port, $UserName, $UserPass, $GorunenAD, $mesaj);
                    if($MailGonder==true){}
                    else{
                        mesajUyariSite("info", "Mail gönderilemedi");
                    }
                }
            }
            else{
                mesajUyariSite("hata", "Üzgünüz. Mesajınız kaydedilemedi. Lütfen iletişim bilgilerini kullanınız.");
            }
        }
    }
?>     
        <form role="form" class="form-horizontal" method="POST" action="">
            <div class="form-group">
                <label for="ConAdSoyad" class="col-lg-2 control-label">Ad Soyad</label>
                <div class="col-lg-9 PaddingRight_0">
                    <input type="text" class="form-control" id="ConAdSoyad" name="ConAdSoyad" placeholder="Gerekli alan.." value="<?php echo @post("ConAdSoyad"); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="ConAdSoyad" class="col-lg-2 control-label">E-Mail</label>
                <div class="col-lg-9 PaddingRight_0">
                    <input type="text" class="form-control" id="ConEmail" name="ConEmail" placeholder="Gerekli alan.." value="<?php echo @post("ConEmail"); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="ConAdSoyad" class="col-lg-2 control-label">Telefon</label>
                <div class="col-lg-9 PaddingRight_0">
                    <input type="text" class="form-control" id="ConTelefon" name="ConTelefon" placeholder="Opsiyonel alan.." value="<?php echo @post("ConTelefon"); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="ConAdSoyad" class="col-lg-2 control-label">Konu</label>
                <div class="col-lg-9 PaddingRight_0">
                    <input type="text" class="form-control" id="ConKonu" name="ConKonu" placeholder="Opsiyonel alan.." value="<?php echo @post("ConKonu"); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="ConAdSoyad" class="col-lg-2 control-label">Mesaj</label>
                <div class="col-lg-9 PaddingRight_0">
                    <textarea class="form-control" rows="4" name="ConMesaj" placeholder="Gerekli alan.."><?php echo @post("ConMesaj"); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label"></label>
                <div class="col-lg-9 PaddingRight_0">
                    <input type="submit" class="btn btn-default pull-right" value="Gönder" />
                </div>

            </div>
        </form>
    </div>
