<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
 <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="<?php if($currentPage =='home'){echo '#';}else{echo '../index.php';}?>"><img src="../favicon.ico" width="40em" alt="Mokranjac Logo"></img></a>
 </div>

 <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <li class = "<?php if($currentPage =='home'){echo 'active';}?>"><a href="<?php if($currentPage =='home'){echo '#';}else{echo '../index.php';}?>"><p>Početna</p></a></li>
    <li class = "<?php if($currentPage =='about'){echo 'active';}?>"><a href="<?php if($currentPage =='about'){echo '#';}else{echo '../pages/about.php';}?>"><p>O nama</p></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><p>Sportovi <span class="caret"></span></p></a>
      <ul class="dropdown-menu">
        <li class = "<?php if($currentPage =='fudbal'){echo 'active';}?>"><a href="<?php if($currentPage =='fudbal'){echo '#';}else{echo '../pages/fudbal.php';}?>"><p>Fudbal</p></a></li>
        <li class = "<?php if($currentPage =='kosarka'){echo 'active';}?>"><a href="<?php if($currentPage =='kosarka'){echo '#';}else{echo '../pages/kosarka.php';}?>"><p>Košarka</p></a></li>
        <li class = "<?php if($currentPage =='tenis'){echo 'active';}?>"><a href="<?php if($currentPage =='tenis'){echo '#';}else{echo '../pages/tenis.php';}?>"><p>Tenis</p></a></li>
        <li role="separator" class="divider"></li>
        <li class = "<?php if($currentPage =='badza'){echo 'active';}?>"><a href="<?php if($currentPage =='badza'){echo '#';}else{echo '../pages/badza.php';}?>"><p>Pogodite Badžinu odevnu kombinaciju</p></a></li>
      </ul>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li class = "<?php if($currentPage =='prava'){echo 'active';}?>"><a href="<?php if($currentPage =='prava'){echo '#';}else{echo '../pages/prava.php';}?>"><p>Prava i uslovi korišćenja</p></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><p>Informacije <span class="caret"></span></p></a>
      <ul class="dropdown-menu">
        <li class = "<?php if($currentPage =='contact'){echo 'active';}?>"><a href="<?php if($currentPage =='contact'){echo '#';}else{echo '../pages/contact.php';}?>"><p>Kontakt</p></a></li>
        <li class = "<?php if($currentPage =='odgovorno_kladjenje'){echo 'active';}?>"><a href="<?php if($currentPage =='odgovorno_kladjenje'){echo '#';}else{echo '../pages/odgovorno_kladjenje.php';}?>"><p>Odgovorno klađenje</p></a></li>
      </ul>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->
</div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
