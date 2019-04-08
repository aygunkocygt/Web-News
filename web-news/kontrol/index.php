<?php
    
    require_once 'functions/data.function.php';
    require_once 'functions/tools.function.php';
    require_once 'functions/panel.function.php';
    session_start();
    ob_start();
    
    if(!oturum_kontrol(sGet('user'), sGet('pass'))){
        go('../control.php');
    }
    
    $Go = @get("Go");
    switch ($Go){
        default :
            $PageNe = "anasayfa";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("panel.php");
            include("footer.php");
            break;
            
        case "":
            $PageNe = "anasayfa";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("panel.php");
            include("footer.php");
            break;
        
        case "GuncelGorunum":
            $PageNe = "güncel görünüm";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            echo 'Buradayız';
            include("footer.php");
            break;
        
        case "ProfilAyarlari":
            $PageNe = "profil ayarları";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/ayarlar/profil.php");
            include("footer.php");
            break;
        
        case "SiteAyarlari":
            $PageNe = "site ayarları";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/ayarlar/site.php");
            include("footer.php");
            break;
        
        case "MailAyarlari":
            $PageNe = "mail ayarları";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/ayarlar/mail.php");
            include("footer.php");
            break;
        
        case "IletisimAyarlari":
            $PageNe = "iletişim ayarları";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/ayarlar/iletisim.php");
            include("footer.php");
            break;
        
        case "SeoAyarlari":
            $PageNe = "seo ayarları";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/ayarlar/seo.php");
            include("footer.php");
            break;
        
        case "Hakkimizda":
            $PageNe = "hakkımızda";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/hakkimizda/ekle.php");
            include("footer.php");
            break;
        
        case "MakaleKategori":
            $PageNe = "makale kategorileri";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/makaleler/kategoriler.php");
            include("footer.php");
            break;
        
        case "MakaleList":
            $PageNe = "makale listesi";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/makaleler/list.php");
            include("footer.php");
            break;
        
        case "MakaleEkle":
            $PageNe = "makale ekle";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/makaleler/ekle.php");
            include("footer.php");
            break;
        
        case "MakaleDuzenle":
            $PageNe = "makale düzenle";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/makaleler/duzenle.php");
            include("footer.php");
            break;
        
        case "VideoKategori":
            $PageNe = "video kategorileri";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/videolar/kategoriler.php");
            include("footer.php");
            break;
        
        case "VideoList":
            $PageNe = "video listesi";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/videolar/list.php");
            include("footer.php");
            break;
        
        case "VideoEkle":
            $PageNe = "video ekle";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/videolar/ekle.php");
            include("footer.php");
            break;

            case "slide_sol_video":
            $PageNe = "slide_sol_video";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/slide-video/slide_sol_video.php");
            include("footer.php");
            break;

            case "slide_sag_video1":
            $PageNe = "slide_sag_video1";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/slide-video/slide_sag_video1.php");
            include("footer.php");
            break;

             case "slide_sag_video5":
            $PageNe = "slide_sag_video5";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/slide-video/slide_sag_video5.php");
            include("footer.php");
            break;

             case "slide_sag_video3":
            $PageNe = "slide_sag_video3";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/slide-video/slide_sag_video3.php");
            include("footer.php");
            break;


             case "slide_sag_video4":
            $PageNe = "slide_sag_video4";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/slide-video/slide_sag_video4.php");
            include("footer.php");
            break;
        
        case "VideoDuzenle":
            $PageNe = "video düzenle";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/videolar/duzenle.php");
            include("footer.php");
            break;
        
        case "YeniMesajlar":
            $PageNe = "yeni mesajlar";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/mesajlar/yeni-mesajlar.php");
            include("footer.php");
            break;
        
        case "MesajOku":
            $PageNe = "mesajlar";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/mesajlar/mesaj-oku.php");
            include("footer.php");
            break;
        
        case "OkunmusMesajlar":
            $PageNe = "okunmuş mesajlar";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/mesajlar/okunmus-mesajlar.php");
            include("footer.php");
            break;
        
        case "MesajSil":
            $PageNe = "mesajlar";
            include("header.php");
            include("sidebar.php");
            include("content-top.php");
            include("inc/mesajlar/mesaj-sil.php");
            include("footer.php");
            break;
        
        
    }
