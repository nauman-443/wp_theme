
<?php get_header(); ?>



 <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri();?>/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php echo get_bloginfo('name');?></h1>
                        <hr class="small">
                        <span class="subheading"><?php echo get_bloginfo('description');?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            					<?php 
							if ( have_posts() ) {
								while ( have_posts() ) {
								the_post(); 
								?>

                <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title">
                            <?php the_title(); ?>
                        </h2>
                	
                    
                        <a href="<?php the_permalink(); ?>" class="img-responsive">
                        <?php the_post_thumbnail(); ?>
                            
                        </a>
                         
                    

                        <p class="post-subtitle">
                            <?php the_content(); ?>
                        </p>
                    </a>
                    <p class="post-meta">Posted by <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a> <?php the_time('F jS, Y'); ?>

                    <a href="<?php comments_link();?>" class="comments">
                        <?php comments_number('0 comments', '1 comments', '% responses');?>
                    </p>
                </div>
                <hr>


                <?php
                } // end while
				} // end if
				?>

				
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>


<?php get_footer();?>