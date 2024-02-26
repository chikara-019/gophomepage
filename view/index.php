<?php include "common/heder.php" ?>

        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span>MATSUDO</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">GOP</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                 システムをもっとリアルに近づける
                                </h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
            <section id="feature">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">NEWS</h1>
                    </div>
                    <div class="row">
                        <?php foreach($data as $d): ?>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo date('Y/m',strtotime($d['created_at'])) . "<br><br>"?><?php echo $d['title']?></h4>
                                    <p><?= nl2br($d['body']) ?></p>
                                </div>
                            </div>
                        </div>
                       <?php endforeach ?>
                   </div>
                </div>
            </section> <!-- /#feature -->

  <?php include "common/footer.php" ?>

