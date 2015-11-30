<?php include('header.inc.php') ; ?>
<div id="menuLeft" class="col-md-1">
    <a class="hamburger btn btn-default btn-lg" href="">
        <i class="glyphicon glyphicon-menu-hamburger"></i>
    </a>
    <div class="socialNetwork">
        <a href="" class="btn btn-default btn-lg"><i class="fa fa-facebook"></i></a>
        <a href="" class="btn btn-default btn-lg"><i class="fa fa-twitter"></i></a>
        <a href="" class="btn btn-default btn-lg"><i class="fa fa-linkedin"></i></a>
        <a href="" class="btn btn-default btn-lg"><i class="fa fa-google-plus"></i></a>
        <a href="" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"></i></a>
    </div>
</div>
<nav class="col-md-offset-2 col-md-2 nav nav-pills nav-stacked" style="color:white">
    <li><a href="" data-toggle="tab">Accueil</a></li>
    <li id="nav-presentation" >
        <div class="btn-group" role="group" >
            <a href="presentation.php" class="btn">Présentation</a>
            <a href="#content-nav-presentation"
               class="btn"
               role="button"
               data-toggle="collapse"
               data-parent="#nav-presentation"
               aria-controls="content-nav-presentation"
               aria-expanded="false">
                <i class="glyphicon glyphicon-chevron-down"></i>
            </a>
        </div>
        <ul id="content-nav-presentation" class="nav nav-pills nav-stacked ">
            <li><a href="" data-toggle="tab">Artistes</a></li>
            <li><a href="" data-toggle="tab">Associations</a></li>
            <li><a href="" data-toggle="tab">Entreprises</a></li>
        </ul>
    </li>


    <li><a href="" data-toggle="tab">L'équipe</a></li>
    <li><a href="" data-toggle="tab">Compétences</a></li>
    <li><a href="" data-toggle="tab">Contact</a></li>
</nav>