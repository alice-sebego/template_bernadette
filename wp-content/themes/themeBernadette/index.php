<?php 
use function App\mon_theme_pagination;
get_header() 
?>

<?php if(have_posts()):?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?> 
            <div class="col-sm-4 col-md-4">
                <div class="card " style="width: 18rem;">
                <?php if ( has_post_thumbnail()): ?> 
                    <?php the_post_thumbnail('post_thumbnail',['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto']) ?>
                <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                        <?php if(the_content()):?>
                        <p class="card-text"><?php the_content() ?></p>
                         <!-- <p class="card-text"><?php //the_excerpt() ?></p> -->
                        <?php endif; ?>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>     
        <?php endwhile ?>
    </div>
   
       <?php mon_theme_pagination() ?>

    <!-- <?php  // echo paginate_links() ?> -->
    
    <!-- <?php // the_posts_pagination() ?> -->
<?php else : ?>
    <h1>Pas d'article</h1>
<?php endif; ?>    
<?php get_footer() ?>