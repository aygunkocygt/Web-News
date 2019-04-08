
<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

        <h1 id="sidebar-title"><a href="#">Yönetim Paneli</a></h1>

        <!-- Logo (221px wide) -->
      <br>
      <br>
      <br>
      <br>
      <br>

        <!-- Sidebar Profile links -->
        <div id="profile-links">
            Merhaba, <a href="#" title="Edit your profile">Yönetici</a>, 
            <br />
            <a href="aygunkocygt.com" title="View the Site">Site Anasayfası</a> | <a href="aygunkocygt.com/control.php" title="Sign Out">Çıkış</a>
        </div>        

        <ul id="main-nav">  <!-- Accordion Menu -->

            <li>
                <a href="index.php" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Anasayfa
                </a>       
            </li>
            <!-- menunun açık kalması için : current -->
            
            <li> 
                <a href="#" class="nav-top-item 
                    <?php echo $PageNe=="güncel görünüm" || $PageNe=="site ayarları" || $PageNe=="iletişim ayarları" || $PageNe=="mail ayarları" 
                            || $PageNe=="seo ayarları"|| $PageNe=="profil ayarları" ? 'current' : null; '' ?>
                    "> <!-- Add the class "current" to current menu item -->
                    Ayarlar
                </a>
                <ul>
                    <li><a href="?Go=GuncelGorunum" <?php echo $PageNe=="güncel görünüm" ? ' class="current"' : null; ?>>Guncel Görünüm</a></li>
                    <li><a href="?Go=SiteAyarlari" <?php echo $PageNe=="site ayarları" ? ' class="current"' : null; ?>>Site Ayarları</a></li> <!-- Add class "current" to sub menu items also -->
                    <li><a href="?Go=IletisimAyarlari" <?php echo $PageNe=="iletişim ayarları" ? ' class="current"' : null; ?>>İletişim Ayarları</a></li>
                    <li><a href="?Go=MailAyarlari" <?php echo $PageNe=="mail ayarları" ? ' class="current"' : null; ?>>Mail Ayarları</a></li>
                    <li><a href="?Go=SeoAyarlari" <?php echo $PageNe=="seo ayarları" ? ' class="current"' : null; ?>>Seo Ayarları</a></li>
                    <li><a href="?Go=ProfilAyarlari" <?php echo $PageNe=="profil ayarları" ? ' class="current"' : null; ?>>Profil Ayarları</a></li>
                </ul>
            </li>

            <li> 
                <a href="?Go=Hakkimizda" class="nav-top-item  no-submenu 
                    <?php echo $PageNe=="hakkımızda" ? 'current' : null; '' ?>
                    "> <!-- Add the class "current" to current menu item -->
                    Hakkımızda
                </a>
            </li>
            

 



            <li> 
                <a href="#" class="nav-top-item 
                    <?php echo $PageNe=="makale kategorileri" || $PageNe=="makale listesi" || $PageNe=="makale ekle" || $PageNe =="makale düzenle" ? 'current' : null; '' ?>
                    "> <!-- Add the class "current" to current menu item -->
                    Makale Yönetimi
                </a>
                <ul>
                    <li><a href="?Go=MakaleKategori" <?php echo $PageNe=="makale kategorileri" ? ' class="current"' : null; ?>>Kategoriler</a></li>
                    <li><a href="?Go=MakaleList" <?php echo $PageNe=="makale listesi" || $PageNe =="makale düzenle" ? ' class="current"' : null; ?>>Makaleler</a></li>
                    <li><a href="?Go=MakaleEkle" <?php echo $PageNe=="makale ekle" ? ' class="current"' : null; ?>>Makale Ekle</a></li>
                </ul>
            </li>
            
            <li> 
                <a href="#" class="nav-top-item 
                    <?php echo $PageNe=="video kategorileri" || $PageNe=="video listesi" || $PageNe=="video ekle" || $PageNe =="video düzenle" ? 'current' : null; '' ?>
                    "> <!-- Add the class "current" to current menu item -->
                    Video Yönetimi
                </a>
                <ul>
                    <li><a href="?Go=VideoKategori" <?php echo $PageNe=="video kategorileri" ? ' class="current"' : null; ?>>Kategoriler</a></li>
                    <li><a href="?Go=VideoList" <?php echo $PageNe=="video listesi" || $PageNe =="video düzenle" ? ' class="current"' : null; ?>>Videolar</a></li>
                    <li><a href="?Go=VideoEkle" <?php echo $PageNe=="video ekle" ? ' class="current"' : null; ?>>Video Ekle</a></li>
                    
                </ul>
            </li>


 <li> 
                <a href="#" class="nav-top-item 
                    <?php echo $PageNe=="slide_sol_video" || $PageNe=="slide_sag_video1" || $PageNe=="slide_sag_video5" || $PageNe =="slide_sag_video3" || $PageNe =="slide_sag_video4"? 'current' : null; '' ?>
                    "> <!-- Add the class "current" to current menu item -->
                    Slide videoları
                </a>
                <ul>
                    <li><a href="?Go=slide_sol_video" <?php echo $PageNe=="slide_sol_video" ? ' class="current"' : null; ?>>Slide Sol Video</a></li>
                    <li><a href="?Go=slide_sag_video1" <?php echo $PageNe=="slide_sag_video1" || $PageNe =="slide_sag_video1" ? ' class="current"' : null; ?>>Slide sağ üst sol video</a></li>
                    <li><a href="?Go=slide_sag_video5" <?php echo $PageNe=="slide_sag_video5" ? ' class="current"' : null; ?>>Slide Sağ üst sağ video</a></li>
                     <li><a href="?Go=slide_sag_video3" <?php echo $PageNe=="slide_sag_video3" ? ' class="current"' : null; ?>>Slide sağ alt sol video</a></li>
                      <li><a href="?Go=slide_sag_video4" <?php echo $PageNe=="slide_sag_video4" ? ' class="current"' : null; ?>>Slide Sağ alt sağ Video</a></li>
                </ul>
            </li>



            
            <li> 
                <a href="#" class="nav-top-item 
                    <?php echo $PageNe=="yeni mesajlar" || $PageNe=="okunmuş mesajlar" || $PageNe=="mesajlar" ? 'current' : null; '' ?>
                    "> <!-- Add the class "current" to current menu item -->
                    Mesajlar
                </a>
                <ul>
                    <li><a href="?Go=YeniMesajlar" <?php echo $PageNe=="yeni mesajlar" ? ' class="current"' : null; ?>>Yeni Mesajlar</a></li>
                    <li><a href="?Go=OkunmusMesajlar" <?php echo $PageNe=="okunmuş mesajlar" ? ' class="current"' : null; ?>>Okunmuş Mesajlar</a></li> <!-- Add class "current" to sub menu items also -->
                </ul>
            </li>
        </ul> <!-- End #main-nav -->

    </div></div> <!-- End #sidebar -->


<div id="main-content"> <!-- Main Content Section with everything -->
