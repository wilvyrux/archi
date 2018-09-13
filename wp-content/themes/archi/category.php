<?php get_header(); ?>

<?php global $archi_option; ?>
<?php if($archi_option['subpage-switch']!=false){ ?>

    <!-- subheader begin -->
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                      <?php printf( __( 'Category: %s', 'archi' ), single_cat_title( '', false ) ); ?>
                    </h1>
                    <?php archi_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

<?php }else{ ?>
    <section class="no-subpage"></section>
<?php } ?>

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="blog-list">
                    <?php 
                      while (have_posts()) : the_post();
                      get_template_part( 'content', get_post_format() ) ;   // End the loop.
                      endwhile;
                    ?>

                </ul>

                <div class="text-center">
                    <ul class="pagination">
                        <?php echo archi_pagination(); ?>
                    </ul>
                </div>
            </div>
            <div id="sidebar" class="col-md-4">
                <?php get_sidebar();?>
            </div>
            
        </div>
    </div>
</div>
<!-- content close -->
<?php get_footer(); ?>

