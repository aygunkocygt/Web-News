-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 May 2018, 17:08:04
-- Sunucu sürümü: 10.1.25-MariaDB
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tasarimciweb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `ID` smallint(6) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `name`, `email`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'aygün', 'aygunkocygt@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda_tr`
--

CREATE TABLE `hakkimizda_tr` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda_tr`
--

INSERT INTO `hakkimizda_tr` (`ID`, `Title`, `Url`, `Keywords`, `Description`, `Text`) VALUES
(1, 'Hakkımızda', 'hakkimizda', 'tasarimciwebasd', 'Aygün Koçyiğit', '<h2><span style=\"font-family:comic sans ms,cursive\"><span style=\"color:#000000\"><strong>Merhaba arkadaşlar, ben Ayg&uuml;n Ko&ccedil;yiğit. 19&nbsp;yaşındayım, İstanbul Esenyurt &Uuml;niversitesi Bilgisayar Programcılığı okumaktayım ve yaklaşık 3&nbsp;senedir Front end ve Back end alanında uğraşmaktayım. İstanbul Esenyurt &Uuml;niversitesinden &ouml;nce Rosvita Timur İmrağ Anadolu Teknik Lisesinden mezunum. Eğer haber sitem&nbsp;hoşunuza gittiyse l&uuml;tfen takip etmekten ve siteyi paylaşmaktan&nbsp;&ccedil;ekinmeyin, destekleriniz benim i&ccedil;in &ccedil;ok &ouml;nemli. &nbsp; &nbsp; &nbsp; </strong>&nbsp; &nbsp; &nbsp; &nbsp;</span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makaleler_tr`
--

CREATE TABLE `makaleler_tr` (
  `ID` int(11) NOT NULL,
  `KatID` int(11) NOT NULL,
  `AltKatID` int(11) NOT NULL DEFAULT '0',
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `makaleler_tr`
--

INSERT INTO `makaleler_tr` (`ID`, `KatID`, `AltKatID`, `Title`, `Url`, `Keywords`, `Description`, `Text`, `Img`, `Tarih`, `Hit`) VALUES
(13, 11, 0, 'Elektrikli Otomobil Piyasasını Alt Etmeye Gelen Tesla Katili Firma: SF Motors!-1', 'elektrikli-otomobil-piyasasini-alt-etmeye-gelen-tesla-katili-firma-sf-motors-1', '', 'Tesla\\\'nın zor günleri, rakipleri için gün doğumu oldu. İki yeni elektrikli araç ve bir de diğer üreticiler için sistem geliştiren SF Motors, fırtınalar estirmeye geliyor.', '<p>Tesla&#39;nın zor g&uuml;nleri, rakipleri i&ccedil;in g&uuml;n doğumu oldu. İki yeni elektrikli ara&ccedil; ve bir de diğer &uuml;reticiler i&ccedil;in sistem geliştiren SF Motors, fırtınalar estirmeye geliyor. &nbsp; Elektrikli otomobiller gelecekte benzinli otomobillere &uuml;st&uuml;n gelip trafiği ele ge&ccedil;irecekler. Hem de &ccedil;ok değil,&nbsp;maksimum 20 yıl i&ccedil;erisinde. Volkswagen gibi dev şirketler, &uuml;retim tesislerini d&ouml;n&uuml;şt&uuml;rmeye başladılar. Artık her firmadan teker teker 5 ila 20 senelik d&ouml;n&uuml;ş&uuml;m planlarını duyuyoruz. İşin bir de Tesla gibi sıfırdan elektrikli ara&ccedil; &uuml;retimi i&ccedil;in kurulan şirketler tarafı var. Tesla&rsquo;nın son 1 aydır s&uuml;r&uuml;klendiği mali krizler, şirketin rakiplerine de fırsat yarattı. Sonu&ccedil;ta rekabet g&uuml;zel bir şey ve &ccedil;oğu zaman t&uuml;keticinin yararına işler g&ouml;rmek kolay oluyor. Diğer taraftan s&ouml;z konusu Tesla rakipleri de bir bir &lsquo;Tesla katili&rsquo; olarak lanse edilen ara&ccedil;larını tanıtıyorlar. Bug&uuml;n o rakiplerden birine, SF Motors&rsquo;a odaklanıyoruz. Şirketin iki yeni SUV tipi aracı g&ouml;r&uuml;c&uuml;ye &ccedil;ıktı. Bunların yanında da diğer elektrikli otomobil &uuml;reticileri i&ccedil;in yapılan bir hazır paket de var. Bu paketi satın alan &uuml;reticiler, &uuml;zerine kendi dizayn ettikleri aracın g&ouml;vdesini oturtup kendi markasını koyacaklar. Yani SF Motors, bir başka değişle iPhone X ekranını &uuml;reten Samsung gibi b&uuml;y&uuml;k bir pazarın peşinde koşturuyor.</p>\r\n', 'elektrikli-otomobil-piyasasini-alt-etmeye-gelen-tesla-katili-firma-sf-motors-1.jpg', '30.03.2018 15:06:57', 0),
(14, 11, 0, 'Google, Play Sesli Kitaplar İçin Birbirinden Faydalı Yeni Özellikler Ekledi!', 'google-play-sesli-kitaplar-icin-birbirinden-faydali-yeni-ozellikler-ekledi', '', 'Play Sesli Kitaplar için kullanıcı deneyimini en üst seviyeye çıkarmak isteyen Google, yayınladığı güncelleme ile uygulamaya yeni özellikler ekledi.', '<p>Google, ge&ccedil;tiğimiz Ocak ayında Play Kitaplar i&ccedil;in sesli kitaplar &ouml;zelliğini yayınlayarak Audible&rsquo;a doğrudan rakip olmuştu. Kullanıcı deneyimini geliştirmek isteyen Google, Play Kitaplara yer işaretleri, akıllı durdurma, hız kontrol&uuml; ve aile k&uuml;t&uuml;phanesi gibi &ouml;zellikler getiren yeni bir g&uuml;ncelleme yayınladı.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/36806ce408cac1e693c6f0b21956224291ff2785.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:301px; max-width:calc(100% + 60px); width:700px\" /></p>\r\n\r\n<p>Akıllı durdurma, bir durdurma işlemi ger&ccedil;ekleştirdiğinizde, sesli kitabın c&uuml;mlenin ortasından değil başından başlamasını sağlıyor. Aile k&uuml;t&uuml;phanesi &ouml;zelliği ise Play Kitaplar kullanıcılarının kitaplarını en fazla beşe kadar aile &uuml;yeleri ile paylaşabilmesini sağlıyor. Yer işaretleri &ouml;zelliği ise, işaret koyduğunuz kısma dilediğiniz zaman kolayca d&ouml;nebilmenizi sağlıyor.</p>\r\n\r\n<p>Google, yeni g&uuml;ncelleme ile birlikte Play Kitaplar&rsquo;a yeni &uuml;lkeler de ekledi. Artık Bel&ccedil;ika, Almanya, İtalya, Hollanda, Norve&ccedil;, Polonya, Rusya, İspanya, İsvi&ccedil;re, Şili, Meksika, G&uuml;ney Afrika ve Japonya da sesli kitapları kullanabilecek. Yeni &ouml;zellikler hem iOS hem Androi hem de Google Asistan i&ccedil;in kullanıma sunulmuş durumda.</p>\r\n', 'google-play-sesli-kitaplar-icin-birbirinden-faydali-yeni-ozellikler-ekledi.jpg', '30.03.2018 15:17:03', 0),
(15, 10, 0, 'Westworld 2. Sezon Fragmanı Yayınlandı!', 'westworld-2-sezon-fragmani-yayinlandi', '', 'HBO\\\'nun en sevilen yapımlarından biri olan Westworld\\\'un uzun bir aradan sonra iki sezon fragmanı geldi. Fragman, robot ayaklanmasının yeni sezonda da devam edeceğini gösteriyor.', '<p>J.J. Abrams ve Jonathan Nolan&rsquo;ın yapımcılığını &uuml;stlendiği, &nbsp;Ed Harris, Evan Rachel Wood, James Marsden, Thandie Newton, Jeffrey Wright ve Tessa Thompson gibi &uuml;nl&uuml; isimlerin başrol&uuml;nde olduğu HBO&rsquo;nun en &ccedil;arpıcı yapıtlarından Westworld&rsquo;un ikinci sezon fragmanı yayınlandı.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"content-card material-shadow--1dp clearfix\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; overflow: hidden; position: relative; width: calc(100% + 60px); font-size: 16px; margin-top: 16px; line-height: 0; box-shadow: rgba(0, 0, 0, 0.12) 0px 2px 2px 0px, rgba(0, 0, 0, 0.1) 0px 3px 1px -2px, rgba(0, 0, 0, 0.1) 0px 1px 5px 0px; color: rgb(34, 34, 34); font-family: Roboto; letter-spacing: -0.2px;\">\r\n<div class=\"content-card__image lazyloaded\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; width: 222px; height: 125px; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 15px inset; position: relative; float: left; overflow: hidden; background-color: rgb(221, 221, 221); background-size: cover; background-position: center center; background-image: url(&quot;http://cdn.webtekno.com/media/cache/showcase_small/article/43271/netflix-la-casa-de-papel-in-2-sezonu-icin-bir-fragman-yayinladi-1522395549.jpg&quot;);\">&nbsp;</div>\r\n\r\n<div class=\"content-card__detail\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; float: right; width: calc(100% - 222px); height: 125px; padding: 16px;\">\r\n<div class=\"content-card__category content-card__category--news\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; position: relative; line-height: normal; text-transform: uppercase; font-weight: 700; display: table-cell; font-size: 0.75em; padding: 0px; margin: 0px; text-align: center; color: rgb(153, 153, 153);\">İLGİLİ HABER</div>\r\n\r\n<h3 style=\"margin-left:0px !important; margin-right:0px !important\"><a href=\"http://www.webtekno.com/netflix-la-casa-de-papel-2-sezon-fragmani-h43271.html\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(34, 34, 34); position: relative; display: block; text-decoration-line: none !important;\" title=\"Netflix, La Casa de Papel’in 2. Sezonu İçin Bir Fragman Yayınladı!\">Netflix, La Casa de Papel&rsquo;in 2. Sezonu İ&ccedil;in Bir Fragman Yayınladı!</a></h3>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>100 milyon dolarlık ilk sezon b&uuml;t&ccedil;esiyle merak uyandıran ve neredeyse izleyen herkesin memnun kaldığı dizinin ikinci sezonunda, birinci sezonun finalinde başlayan robot ayaklanması devam ediyor. Bernard ve Dolores karakterleri &uuml;zerine odaklanan fragman, Dolores&rsquo;in istediği yaşamı elde etmek i&ccedil;in amansız bir m&uuml;cadele vereceğini g&ouml;steriyor.</p>\r\n\r\n<p>Westworld&rsquo;un 22 Nisan&rsquo;da yayınlanacak ikinci sezonuna ait&nbsp;fragmanı&nbsp;aşağıdan izleyebilirsiniz.</p>\r\n', 'westworld-2-sezon-fragmani-yayinlandi.jpeg', '30.03.2018 15:46:14', 0),
(16, 10, 0, 'Facebook Yöneticisinin Paylaştığı, Zuckerberg\\\'in Büyümek İçin Her Şeyi Yapabileceğini Gösteren Not!', 'facebook-yoneticisinin-paylastigi-zuckerberg-in-buyumek-icin-her-seyi-yapabilecegini-gosteren-not', '', 'Facebook Başkan Yardımcısı tarafından Twitter\\\'da paylaşılan 2016 yılına ait bir not, Facebook\\\'un daha fazla kullanıcıya ulaşmak için her şeyi yapabileceğini ve bu konuda kendini haklı gördüğünü gösteriyor.', '<p>2 milyar aktif kullanıcı ile d&uuml;nyanın en b&uuml;y&uuml;k sosyal medya platformunun patronu konumunda bulunan Mark Zuckerberg, &uuml;st &uuml;ste ortaya &ccedil;ıkan Facebook skandallarına rağmen şirketin hi&ccedil;bir zaman &lsquo;k&ouml;t&uuml;&rsquo; ama&ccedil;lar taşımadığı konusunda ısrar ediyor. Fakat şirketin Başkan Yardımcısı konumunda bulunan Boz lakaplı Andrew Bosworth&rsquo;un Twitter hesabından paylaştığı 2016 yılına ait bir not, Facebook&rsquo;un kendini o kadar da masum g&ouml;rmediğini g&ouml;steriyor.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/1b51cd7573e96d07c3b99917981b39850b7059b9.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:359px; max-width:calc(100% + 60px); width:788px\" /></p>\r\n\r\n<p>Bosworth&rsquo;un yayınladığı nota g&ouml;re Facebook, daha fazla kullanıcıya ulaşmak i&ccedil;in yapılacak her şeyi m&uuml;bah g&ouml;r&uuml;yor. Yazılanlara g&ouml;re Facebook, platformun &ouml;l&uuml;mlere yol a&ccedil;abileceğinin ya da ter&ouml;ristlerin platform sayesinde bir eylem planı ger&ccedil;ekleştirebileceğinin zaten farkında. Fakat Facebook&rsquo;a g&ouml;re bu durum tamamen doğal ve yalnızca şirketin b&uuml;y&uuml;mesine giden yolda bazı yan &uuml;r&uuml;nlerden ibaret.</p>\r\n', 'facebook-yoneticisinin-paylastigi-zuckerberg-in-buyumek-icin-her-seyi-yapabilecegini-gosteren-not.jpg', '30.03.2018 15:54:16', 0),
(17, 10, 0, 'GetContact Kullanıp Umulmayan Sonuçlarla Karşılaşan Kişilerden 10 Komik Paylaşım', 'getcontact-kullanip-umulmayan-sonuclarla-karsilasan-kisilerden-10-komik-paylasim', '', 'Bütün dünya Facebook’un kişisel bilgileri sızdırması olayıyla çalkalanırken, geliştiricisinin Türk olduğu anlaşılan rehber uygulaması GatContact, viral bir şekilde popülerleşti.', '<p>Mobil rehber uygulaması GetContact, kısa bir s&uuml;re &ouml;nce sessiz sedasız Apple Store ve Google Play &uuml;zerinden kullanıcıya sunuldu. İnsanlar, Instagram hikayelerinden ve Twitter paylaşımlarından g&ouml;rd&uuml;kleri bu uygulamanın peşine d&uuml;şt&uuml;ler. Herkes kendisinin diğer insanların rehberlerinde nasıl kaydedildiğini merak etti.&nbsp; Ancak bu s&uuml;re&ccedil; &uuml;&ccedil;&uuml;nc&uuml; parti bir uygulamanın ve şirketin eline kendinizin ve t&uuml;m rehberinizin bilgilerini vermekti. Temel olarak benzer şekilde &ccedil;alışan daha eski uygulamalar olsa da GetContact&rsquo;in doğrudan sorgulama sonucu vermesi, bir anda patlama yarattı. A&ccedil;ık&ccedil;ası işin i&ccedil;inde verilerin sızdırılması tehlikesi olsa da insanlar, uygulamanın heyecanıyla bunu pek &ouml;nemsemediler. &nbsp; &nbsp; İLGİLİ HABER GetContact&#39;a Mahkeme Kararı İle Erişim Engeli Geldi &nbsp; GetContact&rsquo;in T&uuml;rk yapımcısı&nbsp;ellerindeki verileri paylaşmayacaklarını s&ouml;yl&uuml;yor, fakat&nbsp;d&uuml;nya&nbsp;Facebook&rsquo;un skandallarıyla &ccedil;alkalanıyorken bizim de&nbsp;kişisel verilerimize dair endişe duymamız &ccedil;ok doğal.&nbsp;</p>\r\n', 'getcontact-kullanip-umulmayan-sonuclarla-karsilasan-kisilerden-10-komik-paylasim.jpg', '30.03.2018 16:00:00', 0),
(18, 10, 0, 'CHP Milletvekili Kemal Kılıçdaroğlu\\\'nu Canlı Yayında Gandalf\\\'a Dönüştürdü, Sosyal Medya Yıkıldı!', 'chp-milletvekili-kemal-kilicdaroglu-nu-canli-yayinda-gandalf-a-donusturdu-sosyal-medya-yikildi', '', 'CHP İzmir Milletvekili Tacettin Bayır, Kemal Kılıçdaroğlu\\\'nun konuşmasını canlı yayınladığı sırada \\\'Face effect\\\' eklentisini unutunca konuşma sırasında kadraja giren herkes komik görüntüler oluşturdu.', '<p><span style=\"color:rgb(34, 34, 34); font-family:roboto; font-size:18px\">CHP İzmir Milletvekili Tacettin Bayır, her zaman olduğu gibi partisinin grup toplantısında konuşma ger&ccedil;ekleştiren Kemal Kılı&ccedil;daroğlu&rsquo;nun konuşmasını Facebook&rsquo;tan canlı olarak yayınladı. Fakat Bayır&rsquo;ın atladığı nokta &lsquo;Face effects&rsquo; eklentisinin yayın sırasında a&ccedil;ık olduğuydu. Yaklaşık 18 dakika s&uuml;ren yayın boyunca CHP Başkanı Kemal Kılı&ccedil;daroğlu, parti &uuml;yeleri ve gazeteciler Face effects sayesinde şekilden şekle girdi.</span></p>\r\n\r\n<p><span style=\"color:rgb(34, 34, 34); font-family:roboto; font-size:18px\">Yayını izleyenler ilk başta Kemal Kılı&ccedil;daroğlu&rsquo;nu Y&uuml;z&uuml;klerin Efendisi&rsquo;nin ak sakallı b&uuml;y&uuml;c&uuml;s&uuml; Gandalf efektiyle g&ouml;r&uuml;nce olup bitene bir anlam veremedi. Fakat kısa s&uuml;re sonra durumu fark eden izleyiciler, yayını ger&ccedil;ekleştiren Tacettin Bayır&rsquo;ı yorumlar ile uyarmaya &ccedil;alışsalar da Bayır, yorumlara bakmadığı i&ccedil;in hata devam etti. Nihayetinde olup biten fark edildi ve yayın panikle kapatılıp Facebook&rsquo;tan silindi.</span></p>\r\n', 'chp-milletvekili-kemal-kilicdaroglu-nu-canli-yayinda-gandalf-a-donusturdu-sosyal-medya-yikildi.jpg', '30.03.2018 17:06:07', 0),
(19, 10, 0, 'Şok İddia: Tesla İflas mı Ediyor?', 'sok-iddia-tesla-iflas-mi-ediyor', '', 'Günümüzde en medyatik girişimcilerden birisini size sorsak eminim cevabınız Elon Musk olurdu. Dünya ve Türkiye gündemine sürekli başka yeniliklerle gelen Elon Musk\\\'ın otomobil şirketi Tesla iddialara göre, iflasın eşiğinde.', '<p>Vilas Capital Management&#39;ın baş yatırım sorumlusu John Thompson, yatırımcılara a&ccedil;ıkladı:<em>&quot;Emin olun ki Tesla adlı şirket, iflasın eşiğinde.&quot;</em></p>\r\n\r\n<p>İlk &ccedil;ıktığı g&uuml;nden beri gerek halk tarafından gerekse medya tarafından s&uuml;rekli g&uuml;ndemde olan ve hızla adını duyuran dev şirket Tesla, Mart ayından bu yana şirket hisselerinde %25 dolaylarında bir değer kaybetti.&nbsp;Uluslararası kredi derecelendirmesi yapan kuruluş&nbsp;Moody&#39;s, Tesla&#39;nın kredi notunu da ge&ccedil;tiğimiz g&uuml;nlerde azaltmıştı.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"content-card material-shadow--1dp clearfix\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; overflow: hidden; position: relative; width: calc(100% + 60px); font-size: 16px; margin-top: 16px; line-height: 0; box-shadow: rgba(0, 0, 0, 0.12) 0px 2px 2px 0px, rgba(0, 0, 0, 0.1) 0px 3px 1px -2px, rgba(0, 0, 0, 0.1) 0px 1px 5px 0px; color: rgb(34, 34, 34); font-family: Roboto; letter-spacing: -0.2px;\">\r\n<div class=\"content-card__image lazyloaded\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; width: 222px; height: 125px; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 15px inset; position: relative; float: left; overflow: hidden; background-color: rgb(221, 221, 221); background-size: cover; background-position: center center; background-image: url(&quot;http://cdn.webtekno.com/media/cache/showcase_small/article/43265/tesla-dunya-capindaki-123-000-adet-model-s-otomobilini-geri-cagirdi-1522385682.jpg&quot;);\">&nbsp;</div>\r\n\r\n<div class=\"content-card__detail\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; float: right; width: calc(100% - 222px); height: 125px; padding: 16px;\">\r\n<div class=\"content-card__category content-card__category--news\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; position: relative; line-height: normal; text-transform: uppercase; font-weight: 700; display: table-cell; font-size: 0.75em; padding: 0px; margin: 0px; text-align: center; color: rgb(153, 153, 153);\">İLGİLİ HABER</div>\r\n\r\n<h3 style=\"margin-left:0px !important; margin-right:0px !important\"><a href=\"http://www.webtekno.com/tesla-dunya-capindaki-123-000-adet-model-s-otomobilini-geri-cagirdi-h43265.html\" style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(34, 34, 34); position: relative; display: block; text-decoration-line: none !important;\" title=\"Tesla, Dünya Çapındaki 123.000 Adet Model S Otomobilini Geri Çağırdı!\">Tesla, D&uuml;nya &Ccedil;apındaki 123.000 Adet Model S Otomobilini Geri &Ccedil;ağırdı!</a></h3>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Şirketin Ne Parası, Ne B&uuml;t&ccedil;esi, Ne de Araba Siparişlerini Karşılayacak G&uuml;c&uuml; Kaldı</h3>\r\n\r\n<p>Elon Musk, uzun zamandır &ccedil;ok fazla sermaye biriktirerek fonların b&uuml;y&uuml;mesine dayanan bir strateji planı yaptı.&nbsp;Thompson, Tesla&#39;nın &ccedil;alışmalarını&nbsp;s&uuml;rd&uuml;rmek i&ccedil;in &ouml;n&uuml;m&uuml;zdeki 18 ay i&ccedil;inde yaklaşık 8 milyar dolara ihtiyacı olacağını tahmin ediyor.</p>\r\n\r\n<p>Bir şekilde&nbsp;&uuml;retimine&nbsp;devam eden şirket, dakikada 8 bin dolar ve&nbsp;saat başına yaklaşık&nbsp;480 bin dolar zarar ediyor.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i2.wp.com/investoralmanac.com/wp-content/uploads/2017/05/tesla-crash.jpg?fit=750%2C562&amp;ssl=1\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:562px; max-width:calc(100% + 60px); width:750px\" /></p>\r\n\r\n<p>Hedge&#39;in&nbsp;fon y&ouml;neticisi, &quot;Musk&#39;ın yeni telafi&nbsp;fikri, şirketin b&uuml;y&uuml;kl&uuml;ğ&uuml;n&uuml; artırmaya ve Tesla&#39;nın piyasa değerini b&uuml;y&uuml;tmeye teşvik ediyor, ancak k&acirc;rlı olmayı pek de ama&ccedil;lamıyor.<em>&nbsp;&ldquo;D&uuml;nyada piyasa kontrol&uuml;n&uuml; ele alan Tesla, Ford&#39;un iki katına &ccedil;ıktı, ancak Ford, ge&ccedil;en yıl 6,6 bin dolara 7,6 milyar dolar k&acirc;r sağladı. Tesla ise&nbsp;100.000 arabayla 2 milyar dolarlık zarara uğradı&rdquo;</em>a&ccedil;ıklamasını yaptı.</p>\r\n\r\n<p>Y&ouml;neticinin bu konudaki fikri ise&nbsp;<em>&ldquo;Kariyerimde hi&ccedil; bu kadar sa&ccedil;ma bir şey g&ouml;rmedim&rdquo;&nbsp;</em>oldu. Elbette başlıkta ve haber i&ccedil;eriğinde belirttiğimiz gibi t&uuml;m bunlar bir yatırım uzmanının iddialarından ibaret. A&ccedil;ık&ccedil;ası biz Elon Musk ve Tesla gibi b&uuml;y&uuml;k değerlerin bu kadar kolay pes edeceğini hi&ccedil; d&uuml;ş&uuml;nm&uuml;yoruz. Sizin yorumunuz ne? Sizce Tesla&#39;nın durumu bu kadar kritik olabilir mi?</p>\r\n', 'sok-iddia-tesla-iflas-mi-ediyor.jpg', '30.03.2018 18:48:29', 0),
(20, 11, 0, 'Vücudunuzun Vitamin Eksikliği Çektiğini Adeta Haykıran 8 Belirti!', 'vucudunuzun-vitamin-eksikligi-cektigini-adeta-haykiran-8-belirti', '', 'Vitamin eksikliği, gerek takviyeler ile gerekse besin kontrolleri ile kolaylıkla tedavi edilebilse de hala pek çok kişinin yaşadığı bir sorundur. İşte vitamin eksikliği çektiğinizi gösteren 8 belirti.', '<p>G&uuml;n&uuml;m&uuml;zde vitamin eksikliği kolay tedavi edilebildiği i&ccedil;in ciddi bir sağlık sorunu olarak g&ouml;r&uuml;lmemektedir. Fakat tedavisinin kolaylığına rağmen g&uuml;n&uuml;m&uuml;zde d&uuml;nyanın d&ouml;rt bir yanında hala vitamin eksikliği sorunu yaşayan kişiler bulunmaktadır. Vitamin eksikliğinin ciddi bir sorun olduğunu d&uuml;ş&uuml;nm&uuml;yorsanız, fikrinizi değiştirmek i&ccedil;in listemizi bir incelemenizi tavsiye ederiz.</p>\r\n\r\n<h3>1- Sa&ccedil; D&ouml;k&uuml;lmesi</h3>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/ffe94fad5e3bbdd4396fa7ef7631703de1a807fb.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:354px; max-width:calc(100% + 60px); width:700px\" /></p>\r\n\r\n<p>Gereğinden fazla &ccedil;iğ yumurta yenmesi, yumurtanın i&ccedil;inde bulunan avidin maddesi nedeni ile v&uuml;cudun B7 vitaminini (biyotin) sindirememesine neden olur. Daha fazla soya fasulyesi, p&uuml;re veya fırınlanmış patates, muz ve badem t&uuml;keterek B7 vitamini t&uuml;ketiminizi arttırabilirsiniz.</p>\r\n\r\n<h3>2- Kramplar</h3>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/0d898938a75d7bf0868d8d1ef5e0525286665e45.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:466px; max-width:calc(100% + 60px); width:700px\" /></p>\r\n\r\n<p>&Ccedil;ok fazla spor yaptığınızda kramp girmesinin nedeni, terle birlikte mineral dolayısı ile de kalsiyum, magnezyum ve potasyum kaybetmenizden kaynaklanır. Fındık, badem, balkabağı, muz ve elma t&uuml;keterek bu eksikliği giderebilirsiniz.</p>\r\n\r\n<h3>3- Ciltte Oluşan Kızarıklıklar</h3>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/39701d4d3ad09034cc4b88e21c8cc4ba46f7770a.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:354px; max-width:calc(100% + 60px); width:700px\" /></p>\r\n\r\n<p>Ciltte oluşan kızarıklıkların nedeni de yine B7 vitamini eksikliğidir. V&uuml;cudumuzda yağda &ccedil;&ouml;z&uuml;nen pek &ccedil;ok vitamin bulunsa da B vitaminlerini d&uuml;zenli olarak almamız gerekir. Yukarıdaki besinlere ek olarak mantar, peynir, haşlanmış yumurta, ıspanak ve karnabahar ile B7 vitamini seviyenizi arttırabilirsiniz.</p>\r\n\r\n<h3>4- Uzuvlardaki Uyuşmalar</h3>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/d932f6ac5b4bc2c7a18da7df554e75d51454848e.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:414px; max-width:calc(100% + 60px); width:700px\" /></p>\r\n\r\n<p>H&uuml;crelere oksijen taşınmasında rol alan kan h&uuml;crelerinin &uuml;retiminde kullanılan besin bloklarını etkileyen B6, B12 ve B9 vitaminlerinin eksikliği, uzuvlarda uyuşukluk oluşmasına neden olur. Fasulye, narenciye, deniz &uuml;r&uuml;nleri ve k&uuml;mes hayvanları t&uuml;keterek bu eksiklikleri&nbsp;giderebilirsiniz.</p>\r\n\r\n<h3>5- El ve Kal&ccedil;alardaki Şişlikler</h3>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/6dd7bf2667733cb5f4bb6efb0ef077981d7cb642.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:313px; max-width:calc(100% + 60px); width:700px\" /></p>\r\n\r\n<p>El ve kal&ccedil;alarda oluşan akne benzeri şişlikler, A ve D vitamini eksikliğinde g&ouml;r&uuml;l&uuml;r. Trans yağ kullanımını azaltmalı, somon, fındık, kırmızı biber ve havu&ccedil; gibi besinlerin t&uuml;ketimini arttırmalısınız.</p>\r\n\r\n<h3>6- G&ouml;zlerde Oluşan Sarılık</h3>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/1bfd585bb0968dd13fecfe3f3998bafbc157c86e.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:247px; max-width:calc(100% + 60px); width:700px\" /></p>\r\n\r\n<p>B12 vitamini eksikliğinde g&ouml;r&uuml;len bu soruna inek ve tavuk ciğeri, s&uuml;t, somon, ton balığı ve koyun eti t&uuml;keterek &ccedil;&ouml;z&uuml;m bulabilirsiniz.</p>\r\n\r\n<h3>7- Hasarlı Diş Dokusu</h3>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/35303f85a5211b9f807ef74ffdea197c00b53eab.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:247px; max-width:calc(100% + 60px); width:700px\" /></p>\r\n\r\n<p>Araştırmalar diş dokusunun zarar g&ouml;rmesindeki en b&uuml;y&uuml;k nedenin D vitamini eksikliği olduğunu g&ouml;steriyor. S&uuml;t ve s&uuml;t &uuml;r&uuml;nleri, kahverengi pirin&ccedil;, domates, fasulye, balık, &uuml;z&uuml;m ve narenciye t&uuml;ketimi D vitamini eksikliği ile baş etmek i&ccedil;in birebirdir.</p>\r\n\r\n<h3>8- Ağız Etrafındaki Yaralar</h3>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/3ea917acfaaf8fda837269cd8d9faf3673d25210.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:354px; max-width:calc(100% + 60px); width:700px\" /></p>\r\n\r\n<p>Ağız etrafında oluşan &ccedil;atlakların en b&uuml;y&uuml;k nedeni, demir ve &ccedil;inko bakımından zengin olan B3, B2 ve B12 vitaminlerinde yaşanan eksikliktir. K&uuml;mes hayvanı, balık, yumurta, fasulye ve fındık t&uuml;ketimini arttırmak, bu vitaminleri kazanmak i&ccedil;in yararlı olacaktır.</p>\r\n', 'vucudunuzun-vitamin-eksikligi-cektigini-adeta-haykiran-8-belirti.jpg', '30.03.2018 18:50:53', 0),
(21, 10, 0, 'WhatsApp’a Numaranızı Kolaylıkla Değiştirmenizi Sağlayan Bir Yenilik Geliyor!', 'whatsapp-a-numaranizi-kolaylikla-degistirmenizi-saglayan-bir-yenilik-geliyor', '', 'WhatsApp\\\'a numara değiştirirken bir sıkıntı yaşamamanız için var olan özelliğine ek bir güncelleme daha geliyor.', '<p><span style=\"color:rgb(34, 34, 34); font-family:roboto; font-size:18px\">Facebook zor g&uuml;nler ge&ccedil;irmeye devam etse de, şirketin alt platformlarından WhatsApp&rsquo;ta işler fena gitmiyor. S&uuml;rekli yeni g&uuml;ncellemelerle kullanıcılarını memnun eden WhatsApp, şimdi de numara değiştirme &ouml;zelliği i&ccedil;in ek &ouml;zellikler getirecek. Mobil operat&ouml;r&uuml; veya telefon numarasını değiştirenler i&ccedil;in kolaylıkla numara değiştirme imkanı sunan WhatsApp, iOS, Android ve Windows Phone işletim sistemine sahip cihazların t&uuml;m verileriyle birlikte kolaylıkla başka bir numaraya ge&ccedil;mesine olanak tanıyor.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3 style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-family: TMSans; font-weight: 700; border-left: 6px solid rgb(255, 87, 34); padding: 5px 10px; margin-bottom: 10px; clear: both; font-size: 1.375em; color: rgb(34, 34, 34); letter-spacing: -0.2px;\"><span style=\"-webkit-tap-highlight-color:transparent; box-sizing:border-box; font-weight:bolder\">WhatsApp&rsquo;ta Numara Değiştirme</span></h3>\r\n\r\n<p style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(34, 34, 34); font-family: Roboto; font-size: 18px; letter-spacing: -0.2px;\">WhatsApp&rsquo;ta bulunan ayarlar men&uuml;s&uuml;nden numaranızı değiştirebilirsiniz. Bunun i&ccedil;in Ayarlar&gt;Hesap&gt;Numarayı Değiştir se&ccedil;eneklerine tıklamanız gerekiyor. Sonrasında yeni telefon numaranızı girip bu numarayı SMS yoluyla doğrulayarak WhatsApp&rsquo;ı yeni numaranız &uuml;zerinden kullanabilirsiniz. Aslında bu işlemleri zaten yapıyorduk. Yakında gelecek g&uuml;ncellemede, bu adımlardan sonra yapmak istediğiniz şeyleri size soracak yeni bir ekran geliyor. Burada, kişilere haber ver/verme gibi &ouml;zellikler bulunuyor. Kişilere haber vermemeye karar verseniz dahi bulunduğunuz gruplarda numarayı değiştirdiğinize dair bir bildirim gittiğini hatırlatalım.</p>\r\n\r\n<p style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(34, 34, 34); font-family: Roboto; font-size: 18px; letter-spacing: -0.2px;\"><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/46/856394a84017f87558cd894f2e3b48ecde063c85.jpeg\" style=\"-webkit-tap-highlight-color:transparent; border-style:none; box-sizing:border-box; height:558px; max-width:calc(100% + 60px); width:350px\" /></p>\r\n\r\n<p style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(34, 34, 34); font-family: Roboto; font-size: 18px; letter-spacing: -0.2px;\">Yeni g&uuml;ncellemenin &ccedil;ok yakında Android &uuml;zerinde yayınlanması beklenirken, iOS ve Windows Phone&rsquo;a ne zaman geleceği hen&uuml;z belli değil. Muhtemelen bu platformlara da en yakın zamanda b&ouml;yle bir g&uuml;ncelleme gelecektir.</p>\r\n\r\n<p style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(34, 34, 34); font-family: Roboto; font-size: 18px; letter-spacing: -0.2px;\"><span style=\"letter-spacing:-0.2px\">Facebook&rsquo;un veri ihlali olayları ile g&uuml;ndeme gelmesi WhatsApp&rsquo;a da yansıyacak mı dersiniz? Facebook bilgilerimizi genel anlamda topluyor olsa da, en kişisel verilerimiz WhatsApp &uuml;zerinde bulunuyor.</span></p>\r\n', 'whatsapp-a-numaranizi-kolaylikla-degistirmenizi-saglayan-bir-yenilik-geliyor.jpg', '30.03.2018 18:52:51', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale_kat_tr`
--

CREATE TABLE `makale_kat_tr` (
  `ID` int(11) NOT NULL,
  `ParentID` int(11) NOT NULL DEFAULT '0',
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `UpdateTarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `makale_kat_tr`
--

INSERT INTO `makale_kat_tr` (`ID`, `ParentID`, `Title`, `Url`, `Keywords`, `Description`, `Tarih`, `UpdateTarih`) VALUES
(10, 0, 'Teknoloji haberleri', 'teknoloji-haberleri', 'teknoloji,haber', 'Teknoloji Haberleri', '17.02.2018 20:03:32', ''),
(11, 0, 'Bilim', 'bilim', 'dinozor,Neandertal', '', '25.02.2018 16:12:32', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `ID` int(11) NOT NULL,
  `Konu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `AdSoyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Telefon` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `Mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Durum` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`ID`, `Konu`, `AdSoyad`, `Email`, `Telefon`, `Mesaj`, `Tarih`, `Durum`) VALUES
(1, 'asd', 'asd', 'asd', 'asd', 'asd', '17.03.2018 19:28:54', 1),
(2, 'Bug', 'aygün koçyiğit', 'aygunkocygt@gmail.com', '05393517249', 'sasdasdasdads', '17.03.2018 21:38:27', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayarlar_tr`
--

CREATE TABLE `site_ayarlar_tr` (
  `ID` int(11) NOT NULL,
  `SiteTitle` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SiteUrl` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `SiteDurum` tinyint(1) NOT NULL DEFAULT '1',
  `UyeDurum` tinyint(1) NOT NULL DEFAULT '0',
  `IcerikDurum` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_ayarlar_tr`
--

INSERT INTO `site_ayarlar_tr` (`ID`, `SiteTitle`, `SiteUrl`, `SiteDurum`, `UyeDurum`, `IcerikDurum`) VALUES
(1, 'Web News', 'http://localhost/web-news/', 1, 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_iletisim_tr`
--

CREATE TABLE `site_iletisim_tr` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Tel_2` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Mobil` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Fax` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Adres` text COLLATE utf8_turkish_ci NOT NULL,
  `Ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Il` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_iletisim_tr`
--

INSERT INTO `site_iletisim_tr` (`ID`, `Title`, `Tel`, `Tel_2`, `Mobil`, `Fax`, `Adres`, `Ilce`, `Il`) VALUES
(1, 'Bilgilerim', '-', '-', '05393517249', '-', 'Türkoba Mah', 'Büyükçekmece', 'İstanbul');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_mail_tr`
--

CREATE TABLE `site_mail_tr` (
  `ID` int(11) NOT NULL,
  `Sunucu` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `UserName` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `UserPass` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Port` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SslDurum` tinyint(1) NOT NULL DEFAULT '0',
  `GorunenAD` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_seo_tr`
--

CREATE TABLE `site_seo_tr` (
  `ID` int(11) NOT NULL,
  `Arthur` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Design` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_sol_video`
--
-- tasarimciweb.slide_sol_video tablosu için yapı okuma hatası: #1932 - Table 'tasarimciweb.slide_sol_video' doesn't exist in engine
-- tasarimciweb.slide_sol_video tablosu için veri okuma hatası: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `tasarimciweb`.`slide_sol_video`' at line 1

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_sol_videolar`
--

CREATE TABLE `slide_sol_videolar` (
  `ID` int(11) NOT NULL,
  `KatID` int(11) NOT NULL,
  `AltKatID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL,
  `VideoLink` text COLLATE utf8_turkish_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Hit` int(11) NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `UpdateTarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slide_sol_videolar`
--

INSERT INTO `slide_sol_videolar` (`ID`, `KatID`, `AltKatID`, `Title`, `Url`, `Keywords`, `Description`, `Text`, `VideoLink`, `Img`, `Hit`, `Tarih`, `UpdateTarih`) VALUES
(16, 0, 0, '', '', '', '', '', 'https://www.youtube.com/embed/X35voOs4rQA', '', 0, '', ''),
(17, 0, 0, '', '', '', '', '', 'https://www.youtube.com/embed/X35voOs4rQA', '', 0, '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_video1`
--
-- tasarimciweb.slide_video1 tablosu için yapı okuma hatası: #1932 - Table 'tasarimciweb.slide_video1' doesn't exist in engine
-- tasarimciweb.slide_video1 tablosu için veri okuma hatası: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `tasarimciweb`.`slide_video1`' at line 1

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_video2`
--
-- tasarimciweb.slide_video2 tablosu için yapı okuma hatası: #1932 - Table 'tasarimciweb.slide_video2' doesn't exist in engine
-- tasarimciweb.slide_video2 tablosu için veri okuma hatası: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `tasarimciweb`.`slide_video2`' at line 1

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_video3`
--
-- tasarimciweb.slide_video3 tablosu için yapı okuma hatası: #1932 - Table 'tasarimciweb.slide_video3' doesn't exist in engine
-- tasarimciweb.slide_video3 tablosu için veri okuma hatası: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `tasarimciweb`.`slide_video3`' at line 1

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_video4`
--
-- tasarimciweb.slide_video4 tablosu için yapı okuma hatası: #1932 - Table 'tasarimciweb.slide_video4' doesn't exist in engine
-- tasarimciweb.slide_video4 tablosu için veri okuma hatası: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `tasarimciweb`.`slide_video4`' at line 1

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_video5`
--
-- tasarimciweb.slide_video5 tablosu için yapı okuma hatası: #1932 - Table 'tasarimciweb.slide_video5' doesn't exist in engine
-- tasarimciweb.slide_video5 tablosu için veri okuma hatası: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `tasarimciweb`.`slide_video5`' at line 1

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_videolar1`
--

CREATE TABLE `slide_videolar1` (
  `ID` int(11) NOT NULL,
  `KatID` int(11) NOT NULL,
  `AltKatID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL,
  `VideoLink` text COLLATE utf8_turkish_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Hit` int(11) NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `UpdateTarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slide_videolar1`
--

INSERT INTO `slide_videolar1` (`ID`, `KatID`, `AltKatID`, `Title`, `Url`, `Keywords`, `Description`, `Text`, `VideoLink`, `Img`, `Hit`, `Tarih`, `UpdateTarih`) VALUES
(12, 10, 0, 'Riverdale', 'riverdale', '', 'The Southside Serpents', '', 'https://www.youtube.com/embed/E9y1NKCqUbQ', 'riverdale.png', 0, '25.02.2018 17:04:14', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_videolar3`
--

CREATE TABLE `slide_videolar3` (
  `ID` int(11) NOT NULL,
  `KatID` int(11) NOT NULL,
  `AltKatID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL,
  `VideoLink` text COLLATE utf8_turkish_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Hit` int(11) NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `UpdateTarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slide_videolar3`
--

INSERT INTO `slide_videolar3` (`ID`, `KatID`, `AltKatID`, `Title`, `Url`, `Keywords`, `Description`, `Text`, `VideoLink`, `Img`, `Hit`, `Tarih`, `UpdateTarih`) VALUES
(15, 10, 0, 'La Casa De Papel', 'la-casa-de-papel', '', 'Together', '', 'https://www.youtube.com/embed/_MdaQ1rWJ0w', 'la-casa-de-papel.jpg', 0, '25.02.2018 17:25:25', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_videolar4`
--

CREATE TABLE `slide_videolar4` (
  `ID` int(11) NOT NULL,
  `KatID` int(11) NOT NULL,
  `AltKatID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL,
  `VideoLink` text COLLATE utf8_turkish_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Hit` int(11) NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `UpdateTarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slide_videolar4`
--

INSERT INTO `slide_videolar4` (`ID`, `KatID`, `AltKatID`, `Title`, `Url`, `Keywords`, `Description`, `Text`, `VideoLink`, `Img`, `Hit`, `Tarih`, `UpdateTarih`) VALUES
(11, 10, 0, 'La Casa De Papel Berlin', 'la-casa-de-papel-berlin', '', '', '', 'https://www.youtube.com/embed/VfIYurN8XU0', 'la-casa-de-papel-berlin.jpg', 0, '25.02.2018 16:52:24', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide_videolar5`
--

CREATE TABLE `slide_videolar5` (
  `ID` int(11) NOT NULL,
  `KatID` int(11) NOT NULL,
  `AltKatID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL,
  `VideoLink` text COLLATE utf8_turkish_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Hit` int(11) NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `UpdateTarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slide_videolar5`
--

INSERT INTO `slide_videolar5` (`ID`, `KatID`, `AltKatID`, `Title`, `Url`, `Keywords`, `Description`, `Text`, `VideoLink`, `Img`, `Hit`, `Tarih`, `UpdateTarih`) VALUES
(12, 10, 0, 'Riverdale', 'riverdale', '', 'The Southside Serpents', '', 'https://www.youtube.com/embed/E9y1NKCqUbQ', 'riverdale.png', 0, '25.02.2018 17:04:14', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videolar1`
--

CREATE TABLE `videolar1` (
  `ID` int(11) NOT NULL,
  `KatID` int(11) NOT NULL,
  `AltKatID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL,
  `VideoLink` text COLLATE utf8_turkish_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Hit` int(11) NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `UpdateTarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `videolar1`
--

INSERT INTO `videolar1` (`ID`, `KatID`, `AltKatID`, `Title`, `Url`, `Keywords`, `Description`, `Text`, `VideoLink`, `Img`, `Hit`, `Tarih`, `UpdateTarih`) VALUES
(16, 0, 0, '', '', '', '', '', 'https://www.youtube.com/embed/X35voOs4rQA', '', 0, '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videolar_tr`
--

CREATE TABLE `videolar_tr` (
  `ID` int(11) NOT NULL,
  `KatID` int(11) NOT NULL,
  `AltKatID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL,
  `VideoLink` text COLLATE utf8_turkish_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Hit` int(11) NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `UpdateTarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `videolar_tr`
--

INSERT INTO `videolar_tr` (`ID`, `KatID`, `AltKatID`, `Title`, `Url`, `Keywords`, `Description`, `Text`, `VideoLink`, `Img`, `Hit`, `Tarih`, `UpdateTarih`) VALUES
(11, 10, 0, 'La Casa De Papel Berlin', 'la-casa-de-papel-berlin', '', '', '', 'https://www.youtube.com/embed/VfIYurN8XU0', 'la-casa-de-papel-berlin.jpg', 0, '25.02.2018 16:52:24', ''),
(12, 10, 0, 'Riverdale', 'riverdale', '', 'The Southside Serpents', '', 'https://www.youtube.com/embed/E9y1NKCqUbQ', 'riverdale.png', 0, '25.02.2018 17:04:14', ''),
(15, 10, 0, 'La Casa De Papel', 'la-casa-de-papel', '', 'Together', '', 'https://www.youtube.com/embed/_MdaQ1rWJ0w', 'la-casa-de-papel.jpg', 0, '25.02.2018 17:25:25', ''),
(17, 11, 0, 'Amber Run', 'amber-run', '', '', '', 'https://www.youtube.com/embed/Xu3_bNLR328', 'amber-run.jpg', 0, '08.05.2018 14:52:18', ''),
(18, 11, 0, 'Westworld Sweetwater', 'westworld-sweetwater', '', '', '', 'https://www.youtube.com/embed/X35voOs4rQA', 'westworld-sweetwater-08-05-2018.jpg', 0, '08.05.2018 15:37:45', ''),
(19, 11, 0, 'Westworld  Main', 'westworld-main', '', '', '', 'https://www.youtube.com/embed/rYelEUVQ50g', 'westworld-main.jpg', 0, '08.05.2018 16:29:53', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video_kat_tr`
--

CREATE TABLE `video_kat_tr` (
  `ID` int(11) NOT NULL,
  `ParentID` int(11) NOT NULL DEFAULT '0',
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `UpdateTarih` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `video_kat_tr`
--

INSERT INTO `video_kat_tr` (`ID`, `ParentID`, `Title`, `Url`, `Keywords`, `Description`, `Tarih`, `UpdateTarih`) VALUES
(10, 0, 'Yabancı Dizi Edits', 'yabanci-dizi-edits', 'edits', '', '25.02.2018 16:09:39', ''),
(11, 0, 'Song', 'song', '', '', '08.05.2018 14:44:46', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `hakkimizda_tr`
--
ALTER TABLE `hakkimizda_tr`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `makaleler_tr`
--
ALTER TABLE `makaleler_tr`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `makale_kat_tr`
--
ALTER TABLE `makale_kat_tr`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `site_ayarlar_tr`
--
ALTER TABLE `site_ayarlar_tr`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `site_iletisim_tr`
--
ALTER TABLE `site_iletisim_tr`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `site_mail_tr`
--
ALTER TABLE `site_mail_tr`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `site_seo_tr`
--
ALTER TABLE `site_seo_tr`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `slide_sol_videolar`
--
ALTER TABLE `slide_sol_videolar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `slide_videolar1`
--
ALTER TABLE `slide_videolar1`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `slide_videolar3`
--
ALTER TABLE `slide_videolar3`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `slide_videolar4`
--
ALTER TABLE `slide_videolar4`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `slide_videolar5`
--
ALTER TABLE `slide_videolar5`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `videolar1`
--
ALTER TABLE `videolar1`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `videolar_tr`
--
ALTER TABLE `videolar_tr`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `video_kat_tr`
--
ALTER TABLE `video_kat_tr`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda_tr`
--
ALTER TABLE `hakkimizda_tr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `makaleler_tr`
--
ALTER TABLE `makaleler_tr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Tablo için AUTO_INCREMENT değeri `makale_kat_tr`
--
ALTER TABLE `makale_kat_tr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `site_ayarlar_tr`
--
ALTER TABLE `site_ayarlar_tr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `site_iletisim_tr`
--
ALTER TABLE `site_iletisim_tr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `site_mail_tr`
--
ALTER TABLE `site_mail_tr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `site_seo_tr`
--
ALTER TABLE `site_seo_tr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `slide_sol_videolar`
--
ALTER TABLE `slide_sol_videolar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Tablo için AUTO_INCREMENT değeri `slide_videolar1`
--
ALTER TABLE `slide_videolar1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `slide_videolar3`
--
ALTER TABLE `slide_videolar3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `slide_videolar4`
--
ALTER TABLE `slide_videolar4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `slide_videolar5`
--
ALTER TABLE `slide_videolar5`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `videolar1`
--
ALTER TABLE `videolar1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Tablo için AUTO_INCREMENT değeri `videolar_tr`
--
ALTER TABLE `videolar_tr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Tablo için AUTO_INCREMENT değeri `video_kat_tr`
--
ALTER TABLE `video_kat_tr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
