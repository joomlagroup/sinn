<?php include 'header.php' ?>
<?php
$isMobile = $detect->isMobile();
?>
<section class="section-introduce padding-bottom-60">
    <div class="container category-procedure-introduce-wrap">

        <div class="index-title margin-top-60 margin-bottom-40">
            <?php the_title(); ?>
        </div>
        <div class="section-introduce-des">
            <?php while (have_posts()):the_post(); the_content(); endwhile; ?>

        </div>

    </div>
</section>
<?php include 'inc/talk-to-day.php' ?>

<section class="procedures-list-article padding-bottom-60 single-procedure-enquire-block">
    <div class="container-fluid">

        <div class="container ">
            <div class="col-12 col-sm-12">
                <?php
                $list_enquire = get_field('list_enquire',$post->ID);
                if ($list_enquire) :
                    $stt = 0;
                    /* Start the Loop */
                    foreach ($list_enquire as $item){
                        $stt++;
                        if ($stt % 2 == 0 || $isMobile) {
                            ?>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="row procedures-list-article--left">
                                        <div class="single-title-enquire-procedure"><?php echo $item['title']; ?></div>

                                        <a href="#" class="btn btn-view-more">
                                            <span class="text-more">Enquire </span>
                                            <span class="icon"><i class="fa fa-angle-right"
                                                                  aria-hidden="true"></i> </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="row single-content-enquire-procedure">
                                        <?php echo $item['content']; ?>
                                    </div>
                                </div>
                            </div>

                            <?php
                        } else {
                            ?>
                            <div class=" row">
                                <div class="col-12 col-sm-6">
                                    <div class="row single-content-enquire-procedure">
                                        <?php echo $item['content']; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="row procedures-list-article--right">
                                        <div class="single-title-enquire-procedure"><?php echo $item['title']; ?></div>
                                        <a href="#" class="btn btn-view-more">
                                            <span class="text-more">Enquire </span>
                                            <span class="icon"><i class="fa fa-angle-right"
                                                                  aria-hidden="true"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                };
                endif;
                ?>

            </div>
        </div>

    </div>
</section>
<section class="section-single-procedure-block-wrap--background">
    <div class="container">
        <div class="section-single-procedure-block-wrap--title text-left">
            Pre- And Post Operative Care
        </div>

    </div>
</section>

<section class="procedures-list-article padding-bottom-60 single-procedure-enquire-block">
    <div class="container-fluid">

        <div class="container">
            <div class="col-12 col-sm-12">
                <?php
                $list_enquire = get_field('pre-and-post-operative-care',$post->ID);
                if ($list_enquire) :
                    $stt = 0;
                    /* Start the Loop */
                    foreach ($list_enquire as $item){
                        $stt++;
                        if ($stt % 2 == 0 || $isMobile) {
                            ?>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="row procedures-list-article--left">
                                        <div class="single-title-enquire-procedure"><?php echo $item['title']; ?></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="row single-content-enquire-procedure">
                                        <?php echo $item['content']; ?>
                                    </div>
                                </div>
                            </div>

                            <?php
                        } else {
                            ?>
                            <div class=" row">
                                <div class="col-12 col-sm-6">
                                    <div class="row single-content-enquire-procedure">
                                        <?php echo $item['content']; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="row procedures-list-article--right">
                                        <div class="single-title-enquire-procedure"><?php echo $item['title']; ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                    };
                endif;
                ?>

            </div>
        </div>

    </div>
</section>
<section class="section-single-procedure-block-wrap--background">
    <div class="container">
        <div class="section-single-procedure-block-wrap--title text-left">
            Risk
        </div>

    </div>
</section>
<section class="procedures-list-article padding-bottom-60">
    <div class="container-fluid">

        <div class="container">
            <?php
            if($isMobile){
                echo '<div class="mobile-single-procedure-risk">Risk</div>';
            } ?>
            <div class="col-12 col-sm-12">
                <?php
                $list_risk = get_field('risk',$post->ID);
                if ($list_risk) :
                    $stt = 0;
                    /* Start the Loop */
                    foreach ($list_risk as $item){
                        $stt++;

                            ?>
                            <div class="row single-block-risk-procedure">

                                <div class="col-12 col-sm-5">
                                    <img class="procedures-list-article--image"
                                         src="<?php echo $item['image'] ?>">
                                </div>
                                <div class="col-12 col-sm-7">
                                    <div class="row">
                                        <div class="single-content-risk-procedure">
                                            <div class="single-content-risk-procedure--text">
                                                <?php echo $item['content']; ?>
                                            </div>
                                            <a href="<?php echo $item['link_more'] ?>" class="btn btn-view-more">
                                                <span class="text-more">More </span>
                                                <span class="icon"><i class="fa fa-angle-right"
                                                                      aria-hidden="true"></i> </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php

                    };
                endif;
                ?>

            </div>
        </div>

    </div>
</section>
<section class="section-home-talk-to-us-today">
    <div class="container">
        <div class="section-single-procedure-block-wrap--title trusted--title">
            Trusted
        </div>
        <p class="color-fff font-size-22">'I wish i had surgery sooner'</p>

    </div>
</section>
<?php include "footer.php"; ?>
