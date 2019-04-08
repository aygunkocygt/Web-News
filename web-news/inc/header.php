<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />   
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="<?php echo @$Arthur; ?>" />
    <meta name="designer" content="<?php echo @$Design; ?>" />
    <meta name="keywords" content="<?php echo @$Keywords; ?>" />
    <meta name="description" content="<?php echo @$Description; ?>" />
    
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/tools_Style.css"/>
  
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/npm.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>       
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <script type="text/javascript" src="js1/jquery.lightbox-0.5.js"></script>

    <script type="text/javascript">
  

$(document).ready(function(){
    
  var clickEvent = false;
  $('#myCarousel').carousel({
    interval:   4000  
  }).on('click', '.list-group li', function() {
      clickEvent = true;
      $('.list-group li').removeClass('active');
      $(this).addClass('active');   
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.list-group').children().length -1;
      var current = $('.list-group li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.list-group li').first().addClass('active'); 
      }
    }
    clickEvent = false;
  });
})

$(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
  $('#myCarousel .list-group-item').outerHeight(triggerheight);
});



   </script>


      <script type="text/javascript">
$(function(){

    $('#show').on('click',function(){        
        $('.card-reveal').slideToggle('slow');
    });
    
    $('.card-reveal .close').on('click',function(){
        $('.card-reveal').slideToggle('slow');
    });
});
      </script>
    
    <title><?php echo $PageTitle; ?></title>
    
</head>
<body>
