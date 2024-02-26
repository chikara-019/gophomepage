<?php include "common/heder.php" ?>

        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>お問い合わせ</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/">
                                        <i class="ion-ios-home"></i>
                                         ホーム
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#page-header-->

        <!-- 
        ================================================== 
            Contact Section Start
        ================================================== -->
        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">お問い合わせフォーム</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                                 consectetur adipisicing elit. Dolore, ea!
                            </p>

                             <?php if(isset($sucsess)):?>
                             <p class="sucsess"><?= $sucsess ?></p>
                             <?php endif?>
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="/?action=contact" role="form">
                        
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <?php if(isset($error['name'])):?>
                                        <p class="error"><?= $error['name'] ?></p>
                                        <?php endif?>
                                        <input type="text" name="contact[name]" value="<?=isset($name)?$name:null; ?>" placeholder="Your Name" class="form-control" id="name" /> 
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <?php if(isset($error['email'])):?>
                                        <p class="error"><?= $error['email'] ?></p>
                                        <?php endif?>
                                        <input type="text" name="contact[email]" value="<?=isset($email)?$email:null; ?>" placeholder="メールアドレス" class="form-control" id="email" /> 
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <?php if(isset($error['body'])):?>
                                        <p class="error"><?= $error['body'] ?></p>
                                        <?php endif?>
                                        <textarea rows="6" type="text" name="contact[body]" value="<?=isset($body)?$body:null; ?>" placeholder="本文" class="form-control" id="message" ></textarea>    
                                    </div>
                                    
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>                      
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">住所</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                <?php echo $cmp['name'] ?>  <?php echo $cmp['address'] ?>  <?php echo $cmp['tel'] ?> <?php echo $cmp['email'] ?>
                            </p>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.020998502281!2d139.91634831642975!3d35.77486053243643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188467d3f0f861%3A0xafc121be4512f389!2z44CSMjcwLTIyMzIg5Y2D6JGJ55yM5p2-5oi45biC5ZKM5ZCN44Kx6LC377yR77yS77yS77yY4oiS77yY!5e0!3m2!1sja!2sjp!4v1532917976439" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row address-details">
                    <div class="col-md-3">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <i class="ion-ios-location-outline"></i>
                            <h5><?php echo $cmp['address'] ?></h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <i class="ion-ios-email-outline"></i>
                            <p><?php echo $cmp['email'] ?></p>
                            <br />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <i class="ion-ios-telephone-outline"></i>
                            <p><?php echo $cmp['tel'] ?></p>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include "common/footer.php" ?>
