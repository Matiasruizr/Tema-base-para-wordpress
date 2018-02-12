<?php
/**
 * Template Name: Inicio
 *
 * @package base
 */ 

get_header(); 
$url = get_template_directory_uri();
?> 

<section class="banner">
  <div class="jumbotron">
      <div class="container">
          <h1>Tema base para wordpress</h1>
          <p>Tema para iniciar rapidamente una plantilla de wordpress</p>
          <p><a class="btn btn-primary btn-lg" role="button" href="matiasruizr.github.io">Saber más</a></p>
      </div>
  </div>
  <div class="row">
    <div class="col-xs-6 col-md-3">
      <a href="#" class="thumbnail">
        <img data-src="holder.js/100%x180" alt="...">
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img data-src="holder.js/300x200" alt="...">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>...</p>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php

get_footer();
