<?php include "common/heder.php" ?>{
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>ビジネス</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/">
                                        <i class="ion-ios-home"></i>
                                        ホーム
                                    </a>
                                </li>
                                <li class="active">Business</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#page-header-->

        <section id="feature">
            <div class="container">
                <div class="section-heading">
                    <h1 class="title wow fadeInDown" data-wow-delay=".3s">NEWS</h1>
                </div>
                <div class="row">
                    <?php foreach ($data as $v): ?>
                    	    <?php foreach($v['content'] as $k => $d):?>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-lightbulb-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $v['business']['name']?></h4>
                                <p><?= $d['content'] ?></p>
                            </div>
                        </div>
                    </div>
                   <?php endforeach ?>
                <?php endforeach ?>
               </div>
            </div>
        </section> <!-- /#feature -->

        <?php include "common/footer.php" ?>
