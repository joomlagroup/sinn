<?php /* Template Name: About Page */ ?>
<?php include 'header.php' ?>
<section class="section-introduce padding-bottom-60">
    <div class="container">
        <div class="index-title margin-top-60 margin-bottom-40">
           <?php the_title() ?>
        </div>
        <div class="section-introduce-des">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <?php while (have_posts()):the_post(); the_content(); endwhile; ?>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="about-content-quote">
                        <?php echo get_field('quote',$post->ID) ?>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>
<section class="section-introduce padding-top-60 padding-bottom-60 background-philosophy">
    <div class="container">
        <div class="index-title margin-bottom-40">
            Philosophy
        </div>
        <div class="section-introduce-des">
            <?php echo get_field('phylosophy',$post->ID) ?>
        </div>
    </div>
</section>
<section class="section-introduce padding-bottom-60">
    <div class="container">
        <div class="index-title margin-top-60 margin-bottom-40">
            Risk
        </div>
        <div class="section-introduce-des">
            <?php echo get_field('risk',$post->ID) ?>

        </div>
    </div>
</section>
<section class="section-introduce padding-bottom-60">
    <div class="container">
        <div class="index-title margin-top-60 margin-bottom-40">
            Location
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="<?php echo get_field('location_image',$post->ID) ?>">
            </div>
            <div class="col-12 col-sm-6">
                <div class="about-location--wrap-content">
                    <div class="location--great-value-of-money">
                        Great value of money
                    </div>
                    <div class="section-introduce-des location--great-value-of-money-content">
                        <?php echo get_field('location_content',$post->ID) ?>

                    </div>
                    <a href="<?php echo get_field('link_more',$post->ID) ?>" class="btn btn-view-more">
                        <span class="text-more">enrique </span>
                        <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>


<?php include "footer.php"; ?>
