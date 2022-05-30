<!DOCTYPE html>
<html>
<head>
	<title>Tema</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

	<?php get_header(); ?>

            <div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>Bem vindo ao meu primeiro tema</h2>
			</div>
		</div>
	</div>
    
    <?php
	if ( have_posts()) {
        while ( have_posts()) {
            the_post();
    ?>
    <h2><?php the_title(); ?></h2> 
    <div class="img">
     <?php the_post_thumbnail();?>

     </div>
     <div class="texto">
     <?php the_excerpt(); ?>
     </div>
     <a href="<?php the_permalink(); ?>">
        leia mais
        </a>
    <?php
        
        } // end while
     } // end if
?>

<figcaption>
			Tema da loren
		</figcaption>

		<a href="<?php echo site_url(); ?>">

	<img src=<?php get_template_directory_uri().'/assets/img/m1.jpg' ?> >

		</a>
    
    
<?php get_footer (); ?>
