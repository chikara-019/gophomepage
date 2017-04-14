<?php include "common/heder.php" ?>
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>企業情報</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="ion-ios-home"></i>
                                 ホーム
                            </a>
                        </li>
                        <li class="active">Company</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>   
</section><!--/#page-header-->

            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                会社概要
                                </h2>
		                        <table class="tableDec3">
                                    <tr>
                                      <th><p class="chapter16">会社名</p></th>
                                      <td><?php echo $name ?></td>
                                    </tr>
                                    <tr>
        		                     <th><p class="chapter16">本社所在地</p></th>
                                     <td><?php echo $address  ?></td>
                                    </tr>
                                    <tr>
                                     <th><p class="chapter16">TEL</p></th><td><?php echo $tel ?></td>
				                    </tr>
                                    <tr>
                                      <th><p class="chapter16">email</p></th>
                                      <td><?php echo $email ?></td>
				                    </tr>
                                </table>
                           </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->



<?php include "common/footer.php" ?>
