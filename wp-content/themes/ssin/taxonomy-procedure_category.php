<?php 
include 'header.php' ;
$isMobile = $detect->isMobile();
?>
<?php $queried_object = $wp_query->get_queried_object();
?>
<section class="section-introduce padding-bottom-60">
    <div class="container category-procedure-introduce-wrap">

        <div class="index-title margin-top-60 margin-bottom-40">
            <?php echo $queried_object->name; ?>
        </div>
        <div class="section-introduce-des">
            <?php echo get_field('content', $queried_object); ?>

        </div>
        <?php
        $child_term = get_terms(array(
            'taxonomy' => 'procedure_category',
            'parent' => $queried_object->term_id,
            'hide_empty' => false,
        ));
        if ($child_term) {
            ?>
            <ul class="category-procedures-child">
                <?php
                foreach ($child_term as $item) {
                    ?>

                    <li><a href="" class="chose-sub-category-provider" data-name="<?php echo $item->name ?>" data-url="<?php echo get_term_link($item); ?>"><?php echo $item->name; ?> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </li>

                    <?
                }
                ?>
            </ul>
            <?php
        }
        ?>
    </div>
</section>
<div  class="title-sub-category-wrap"></div>
<section class="procedures-list-article padding-bottom-60">
    <div class="container-fluid">

            <div class="container">
                <div class="col-12 col-sm-12">
                <?php if (have_posts() && !$child_term) :
                    $stt = 0;
                    /* Start the Loop */
                    while (have_posts()) : the_post();
                        $stt++;
                        if ($stt % 2 == 0 && !$isMobile) {
                            ?>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="row procedures-list-article--left">
                                        <div class="procedures-list-article--title"><?php the_title(); ?></div>
                                        <?php $sub_title = get_field('subtitle',$post->ID);
                                        if ($sub_title != ''){
                                        ?>
                                        <div class="procedures-list-article--sub-title"><?php echo $sub_title ?></div>
                                        <?php } ?>
                                        <div class="procedures-list-article--summary">
                                            <?php echo get_field('summary',$post->ID) ?>
                                        </div>
                                        <a href="<?php the_permalink() ?>" class="btn btn-view-more">
                                            <span class="text-more">More </span>
                                            <span class="icon"><i class="fa fa-angle-right"
                                                                  aria-hidden="true"></i> </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="procedures-list-article--wrap-image">
                                        <img class="procedures-list-article--image"
                                             src="<?php echo thumb_img($post->ID, 398, 563, 100) ?>">
                                    </div>
                                </div>
                            </div>

                            <?php
                        } else {
                            ?>
                            <div class=" row">
                                <div class="col-12 col-sm-6">
                                    <div class="procedures-list-article--wrap-image">
                                        <img class="procedures-list-article--image"
                                             src="<?php echo thumb_img($post->ID, 398, 563, 100) ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="row procedures-list-article--right">
                                        <div class="procedures-list-article--title"><?php the_title() ?></div>
                                        <?php $sub_title = get_field('subtitle',$post->ID);
                                        if ($sub_title != ''){
                                        ?>
                                        <div class="procedures-list-article--sub-title"><?php echo $sub_title ?></div>
                                        <?php } ?>
                                        <div class="procedures-list-article--summary ">
                                            <?php echo get_field('summary',$post->ID) ?>
                                        </div>
                                        <a href="<?php the_permalink() ?>" class="btn btn-view-more">
                                            <span class="text-more">More </span>
                                            <span class="icon"><i class="fa fa-angle-right"
                                                                  aria-hidden="true"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                    endwhile;
                endif;
                ?>

                </div>
            </div>

    </div>
</section>
<?php
if (!$isMobile)
{

?>
    <?php include 'inc/talk-to-day.php' ?>
    <section class="section-home-about-stewart padding-top-60 padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <img src="<?php echo get_field('most_common_image', $queried_object) ?>">
                </div>
                <div class="col-12 col-md-7">
                    <div class="section-home-about-stewart--about-stewart"><?php echo get_field('point', $queried_object) ?></div>
                    <div class="section-home-about-stewart--title"><?php echo get_field('most_common', $queried_object) ?></div>
                    <div class="section-home-about-stewart--navigate block-tab-navigate">

                        <?php $data = get_field('most_common_data', $queried_object); ?>
                        <ul class="nav nav-tabs">
                            <?php
                            if ($data) {
                                foreach ($data as $key => $ste) {
                                    ?>
                                    <li class="<?php echo $key == 0 ? 'active' : '' ?>"><a data-toggle="tab"
                                                                                        class="<?php echo $key == 0 ? 'active show' : '' ?>"
                                                                                        href="#<?php echo sanitize_title($ste['title']); ?>"><?php echo $ste['title']; ?></K></a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>

                        </ul>

                        <div class="tab-content">
                            <?php if ($data) {
                                foreach ($data as $key => $ste) {
                                    ?>
                                    <div id="<?php echo sanitize_title($ste['title']); ?>"
                                        class="tab-pane fade <?php echo $key == 0 ? 'in active show' : '' ?> ">
                                        <div class="margin-bottom-40">
                                            <?php echo $ste['text'] ?>
                                        </div>
                                        <a href="<?php echo $ste['link'] ?>" class="btn btn-view-more">
                                            <span class="text-more">More </span>
                                            <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                        </a>
                                    </div>
                                <?php }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
    } 
?>
<?php include "footer.php"; ?>