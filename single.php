<?php get_header();
the_post();?>
<?php
//the_post();
//echo the_title();
//echo the_content();
//$post=get_post(22);
//echo $post->post_title;
//echo $post->post_content;
//print_r($post);
?>

<!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri();?>/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo get_bloginfo('name');?></h1>
                        <h2 class="subheading"><?php echo get_bloginfo('description');?></h2>
                        <span class="meta">Posted by <a href="#"><?php the_author_posts_link(); ?></a> <?php the_time('F jS, Y'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h2><?php
                    the_title();?></h2>
					<?php the_content();
					?>
                </div>
            </div>
        </div>
    </article>

    <hr>

<?php comments_template();?>

<?php get_footer();?>