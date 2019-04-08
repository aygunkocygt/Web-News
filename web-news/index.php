<?php
    
    require_once 'kontrol/functions/data.function.php';
    require_once 'kontrol/functions/tools.function.php';
    $Lang = "tr";

    $AyarSor = Sor("SELECT * FROM site_ayarlar_".@$Lang." WHERE ID='1' LIMIT 1");
    if(Say($AyarSor)>0){
        $AyarYaz = Yaz($AyarSor);
        extract($AyarYaz);
    }
    else{
        die("Sistem Ayarları Yapılmadı !");
    }
    if($SiteDurum==0){
        die("Site Kapatıldı..");
    }

    $IletisimAyarSor = Sor("SELECT * FROM site_iletisim_".@$Lang." WHERE ID='1' LIMIT 1");
    $IletisimAyarSay = Say($IletisimAyarSor);
    if($IletisimAyarSay>0){
        $IletisimAyarYaz = Yaz($IletisimAyarSor);
    }

    $SeoAyarSor = Sor("SELECT * FROM site_seo_".@$Lang." WHERE ID='1' LIMIT 1");
    $SeoAyarSay = Say($SeoAyarSor);
    if($SeoAyarSay>0){
        $SeoAyarYaz = Yaz($SeoAyarSor);
        @extract($SeoAyarYaz);
    }

    $Gelen = @get("Gelen");
    switch (@$Gelen){
        default :
            $PageTitle = "Anasayfa";
            $SayfaNe = "anasayfa";
            include 'inc/header.php';  

            include 'inc/menu.php';    
            include 'inc/slider2.php';             
            include 'inc/anasayfa.php';
            include 'inc/footer.php';
            break;
            
        case "hakkimizda":
            $PageTitle = "Hakkımızda";
            $SayfaNe = "hakkimizda";
            $Sor = Sor("SELECT * FROM hakkimizda_tr WHERE ID=1");
            if(Say($Sor)>0){
                $Yaz = Yaz($Sor);
                if($Yaz["Keywords"]!=""){ $Keywords = $Yaz["Keywords"]; }
                if($Yaz["Description"]!=""){ $Description = $Yaz["Description"]; }
                $PageTitle = $Yaz["Title"];
                include 'inc/header.php';
                include 'inc/menu.php';
                include 'inc/hakkimizda.php';
            }
            else{
                include 'inc/header.php';
                include 'inc/menu.php';
                include 'inc/kayit-yok.php';
            }
            include 'inc/footer.php';
            break;
        
        case "makaleler":
            $PageTitle = "Makaleler";
            $SayfaNe = "makaleler";
            include 'inc/header.php';
            include 'inc/menu.php';
            include 'inc/makaleler.php';
            include 'inc/footer.php';
            break;
        
        case "makaleKat":
            $PageTitle = "Makale Alt Kategoriler";
            $SayfaNe = "makaleler";
            $KatID = intval(@get("Kat"));
            if($KatID!=""){
                $MakaleKat = Sor("SELECT * FROM makale_kat_tr WHERE ID='".$KatID."' ");
                if(Say($MakaleKat)>0){
                    $Yaz = Yaz($MakaleKat);
                    if($Yaz["Keywords"]!=""){ $Keywords = $Yaz["Keywords"]; }
                    if($Yaz["Description"]!=""){ $Description = $Yaz["Description"]; }
                    $PageTitle = "Makaleler > ".$Yaz["Title"];
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/makale-alt-kat-list.php';
                }
                else{
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/kayit-yok.php';
                }
            }
            else{
                include 'inc/header.php';
                include 'inc/menu.php';
                include 'inc/kayit-yok.php';
            }
            include 'inc/footer.php';
            break;
        
        case "makaleAltKat":
            $PageTitle = "Alt Kategoriye Göre Listele";
            $SayfaNe = "makaleler";
            $KatID = intval(@get("AltKat"));
            if($KatID!=""){
                $MakaleKat = Sor("SELECT * FROM makale_kat_tr WHERE ID='".$KatID."' ");
                if(Say($MakaleKat)>0){
                    $Yaz = Yaz($MakaleKat);
                    if($Yaz["Keywords"]!=""){ $Keywords = $Yaz["Keywords"]; }
                    if($Yaz["Description"]!=""){ $Description = $Yaz["Description"]; }
                    $MakaleAnaKat = Sor("SELECT * FROM makale_kat_tr WHERE ID='".@get("Kat")."' ");
                    $MakaleAnaKatYaz = Yaz($MakaleAnaKat);
                    $PageTitle = $MakaleAnaKatYaz["Title"].' > '.$Yaz["Title"];
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/makale-list.php';
                }
                else{
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/kayit-yok.php';
                }
            }
            else{
                include 'inc/header.php';
                include 'inc/menu.php';
                include 'inc/kayit-yok.php';
            }
            include 'inc/footer.php';
            break;
        
        case "makaleDetay":
            $PageTitle = "Makale Detayı";
            $SayfaNe = "makaleler";
            $Url = @get("url");
            if($Url!=""){
                $Makale = Sor("SELECT * FROM makaleler_tr WHERE Url='".$Url."' ");
                if(Say($Makale)>0){
                    $Yaz = Yaz($Makale);
                    if($Yaz["Keywords"]!=""){ $Keywords = $Yaz["Keywords"]; }
                    if($Yaz["Description"]!=""){ $Description = $Yaz["Description"]; }
                    $MakaleAnaKat = Sor("SELECT Title FROM makale_kat_tr WHERE ID='".$Yaz["KatID"]."' ");
                    $MakaleAnaKatYaz = Yaz($MakaleAnaKat);
                    $PageTitle = $MakaleAnaKatYaz["Title"].' > ';
                    $MakaleAltKat = Sor("SELECT Title FROM makale_kat_tr WHERE ID='".$Yaz["AltKatID"]."' ");
                    if(Say($MakaleAltKat)>0){
                        $MakaleAltKatYaz = Yaz($MakaleAltKat);
                        $PageTitle .= $MakaleAltKatYaz["Title"].' > ';
                    }
                    $PageTitle .= $Yaz["Title"];
                    
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/makale-detay.php';
                }
                else{
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/kayit-yok.php';
                }
            }
            else{
                include 'inc/header.php';
                include 'inc/menu.php';
                include 'inc/kayit-yok.php';
            }
            include 'inc/footer.php';
            break;
        
        case "videolar":
            $PageTitle = "Videolar";
            $SayfaNe = "videolar";
            include 'inc/header.php';
            include 'inc/menu.php';
            include 'inc/videolar.php';
            include 'inc/footer.php';
            break;
        
        case "videoKat":
            $PageTitle = "Video Alt Kategoriler";
            $SayfaNe = "videolar";
            $KatID = intval(@get("Kat"));
            if($KatID!=""){
                $MakaleKat = Sor("SELECT * FROM video_kat_tr WHERE ID='".$KatID."' ");
                if(Say($MakaleKat)>0){
                    $Yaz = Yaz($MakaleKat);
                    if($Yaz["Keywords"]!=""){ $Keywords = $Yaz["Keywords"]; }
                    if($Yaz["Description"]!=""){ $Description = $Yaz["Description"]; }
                    $PageTitle = "Videolar > ".$Yaz["Title"];
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/video-alt-kat-list.php';
                }
                else{
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/kayit-yok.php';
                }
            }
            else{
                include 'inc/header.php';
                include 'inc/menu.php';
                include 'inc/kayit-yok.php';
            }
            include 'inc/footer.php';
            break;
        
        case "videoAltKat":
            $PageTitle = "Videolar -> Alt Kategoriye bağlı videolar";
            $SayfaNe = "videolar";
            $KatID = intval(@get("AltKat"));
            if($KatID!=""){
                $VideoKat = Sor("SELECT * FROM video_kat_tr WHERE ID='".$KatID."' ");
                if(Say($VideoKat)>0){
                    $Yaz = Yaz($VideoKat);
                    if($Yaz["Keywords"]!=""){ $Keywords = $Yaz["Keywords"]; }
                    if($Yaz["Description"]!=""){ $Description = $Yaz["Description"]; }
                    $VideoAnaKat = Sor("SELECT * FROM video_kat_tr WHERE ID='".@get("Kat")."' ");
                    $VideoAnaKatYaz = Yaz($VideoAnaKat);
                    $PageTitle = $VideoAnaKatYaz["Title"].' > '.$Yaz["Title"];
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/video-list.php';
                }
                else{
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/kayit-yok.php';
                }
            }
            else{
                include 'inc/header.php';
                include 'inc/menu.php';
                include 'inc/kayit-yok.php';
            }
            include 'inc/footer.php';
            break;
        
        case "videoDetay":
            $PageTitle = "Video Detayı";
            $SayfaNe = "videolar";
            $Url = @get("url");
            if($Url!=""){
                $Video = Sor("SELECT * FROM videolar_tr WHERE Url='".$Url."' ");
                if(Say($Video)>0){
                    $Yaz = Yaz($Video);
                    if($Yaz["Keywords"]!=""){ $Keywords = $Yaz["Keywords"]; }
                    if($Yaz["Description"]!=""){ $Description = $Yaz["Description"]; }
                    $VideoAnaKat = Sor("SELECT Title FROM video_kat_tr WHERE ID='".$Yaz["KatID"]."' ");
                    $VideoAnaKatYaz = Yaz($VideoAnaKat);
                    $PageTitle = $VideoAnaKatYaz["Title"].' > ';
                    $VideoAltKat = Sor("SELECT Title FROM video_kat_tr WHERE ID='".$Yaz["AltKatID"]."' ");
                    if(Say($VideoAltKat)>0){
                        $VideoAltKatYaz = Yaz($VideoAltKat);
                        $PageTitle .= $VideoAltKatYaz["Title"].' > ';
                    }
                    $PageTitle .= $Yaz["Title"];
                    
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/video-detay.php';
                }
                else{
                    include 'inc/header.php';
                    include 'inc/menu.php';
                    include 'inc/kayit-yok.php';
                }
            }
            else{
                include 'inc/header.php';
                include 'inc/menu.php';
                include 'inc/kayit-yok.php';
            }
            include 'inc/footer.php';
            break;
        
        case "iletisim":
            $PageTitle = "İletişim";
            $SayfaNe = "iletisim";
            include 'inc/header.php';
            include 'inc/menu.php';
            include 'inc/iletisim.php';
            include 'inc/footer.php';
            break;
        
        
    }

?>