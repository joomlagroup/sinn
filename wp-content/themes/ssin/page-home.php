<?php /* Template Name: Home Page */ ?>
<?php include 'header.php' ?>
<section class="section-introduce padding-bottom-60">
    <div class="container">
        <div class="index-title margin-top-60 margin-bottom-40"><?php echo get_field('home_introduce_tilte', $post->ID); ?>

        </div>
        <div class="section-introduce-des"><?php echo get_field('home_introduce_description', $post->ID); ?></div>
    </div>
</section>
<section class="index-section-top-procedure">
    <div class="container-fluid">
        <div class="row">
            <div class="container padding-bottom-60 padding-top-60">
                <div class="row">
                    <?php
                    $list_top_procedures = get_field('home_top_procedures', $post->ID);
                    if ($list_top_procedures) {
                        foreach ($list_top_procedures as $key => $value) {
                            // var_dump($value);
                            ?>
                            <div class="col-12 col-sm-4">
                                <div class="block-top-procedure">
                                    <div class="block-top-procedure--cat"><strong>Top procedure</strong></div>
                                    <div class="block-top-procedure--title"><?php echo $value['title']; ?></div>
                                    <div class="block-top-procedure--des"><?php echo $value['summary']; ?></div>
                                    <a href="<?php echo $value['url']; ?>" class="btn btn-view-more">
                                        <span class="text-more">More </span>
                                        <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                    </a>
                                </div>
                            </div>

                            <?php
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-home-about-stewart padding-top-60">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="<?php echo get_field('home_image_stewart', $post->ID) ?>">
            </div>
            <div class="col-12 col-md-7">
                <div class="section-home-about-stewart--about-stewart">About stewart</div>
                <div class="section-home-about-stewart--title">Christchurch’s most experienced surgeon</div>
                <div class="section-home-about-stewart--navigate block-tab-navigate">
                    <?php
                    $list_about_stewart = get_field('home_about_stewart', $post->ID);
                    ?>
                    <ul class="nav nav-tabs">
                        <?php if ($list_about_stewart) {
                            foreach ($list_about_stewart as $key=>$ste) {
                                ?>
                                <li class="<?php echo $key == 0 ? 'active' : ''?>"><a data-toggle="tab" class="<?php echo $key == 0 ? 'active show' : ''?>"
                                       href="#<?php echo sanitize_title($ste['title']); ?>"><?php echo $ste['title']; ?></K></a>
                                </li>
                                <?php
                            }
                        } ?>
                    </ul>

                    <div class="tab-content">
                        <?php if ($list_about_stewart) {
                            foreach ($list_about_stewart as $key=>$ste) {
                                ?>
                                <div id="<?php echo sanitize_title($ste['title']); ?>" class="tab-pane fade <?php echo $key == 0 ? 'in active show' : ''?> ">
                                  <?php echo $ste['summary'] ?>
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
<?php include 'inc/talk-to-day.php'?>
<section class="home-regular-procedures">
    <div class="container">
        <div class="row">
            <div class="home-regular-procedures--title">
                Over 25 regular procedures
            </div>
        </div>
        <div class="row">
            <?php
            $list_regular_procedures = get_field('home_regular_procedures',$post->ID);
            if ($list_regular_procedures){
                foreach ($list_regular_procedures as $value){
                    ?>
                    <div class="home-regular-procedures--item">
                        <div class="item--image">
                            <img src="<?php echo $value['image'] ?>">
                        </div>
                        <a href="<?php echo $value['url'] ?>">
                            <div class="item--title"><?php echo $value['title'] ?> <span class="icon"><i class="fa fa-angle-right"
                                                                                                         aria-hidden="true"></i> </span></div>
                        </a>

                    </div>

            <?php
                }
            }

            ?>


        </div>

    </div>
</section>

<?php include "footer.php"; ?>
