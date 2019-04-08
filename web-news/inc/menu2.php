

<nav class="my-navbar navbar navbar-inverse" >
  <div class="container-fluid">
    

    <div class="navbar-header" class="color:white;">
      <a href="index.php" class="navbar-brand">WEB NEWS</a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbarSec">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    

       <div class="collapse navbar-collapse navbarSec">
      <ul class="mn-primarymenu nav navbar-nav navbar-right">

         <li <?php echo $SayfaNe == "anasayfa" ? ' class="active"': null; ?> ><a href="<?php echo $SiteUrl; ?>" title="">Anasayfa</a></li>

         <li><a href="?Gelen=makaleler" title="">Haberler</a></li>
         <li><a href="?Gelen=videolar" title="">Videolar</a></li>

         <li <?php echo $SayfaNe == "hakkimizda" ? ' class="active"': null; ?> ><a href="?Gelen=hakkimizda" title="">Hakkımızda</a></li>  
          <li <?php echo $SayfaNe == "iletisim" ? ' class="active"': null; ?> ><a href="?Gelen=iletisim" title="">İletişim</a></li>


           <li class="dropdown">
                        <a href="#"title="" class="dropdown-toggle" data-toggle='dropdown'><i class="glyphicon glyphicon-search"></i></a>
                        <ul class="dropdown-menu navbar-inverse acilirMenu">
                            <li>
                                <form role="search" action="?Gelen=arama" class="navbar-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" placeholder="arama yap" />
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default input-sm"><i class="glyphicon glyphicon-search"></i></button>
                                        </span>
                                    </div>
                                        <select class="input-sm" name="aramaType">
                                            <option value="makaleler">Haberler</option>
                                            <option value="videolar" >Videolar</option>
                                        </select>
                                </form>                                
                            </li>
                        </ul>
                    </li>
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>