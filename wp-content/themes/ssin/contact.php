<?php /* Template Name: Contact Page */ ?>
<?php include 'header.php' ?>
<section class="section-introduce padding-bottom-60">
    <div class="container">
        <div class="index-title margin-top-60 margin-bottom-40">
         <?php the_title(); ?>
        </div>
        <div class="section-introduce-des">
            <?php while (have_posts()):the_post(); the_content(); endwhile; ?>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>
