<?php include "common/heder.php" ?>

<div id="wrapBg">
   <div class="wrapBox clearfix">
     <div id="mainContents">
      <p class="chapter4">問い合わせページ</p>


      <?php if(isset($sucsess)):?>
      <p class="sucsess"><?= $sucsess ?></p>
      <?php endif?>

      <form method="post" action="/contact">
      <p>お名前</p>
      <?php if(isset($error['name'])):?>
      <p class="error"><?= $error['name'] ?></p>
      <?php endif?>
      <input type="text" name="contact[name]" value="<?=isset($name)?$name:null; ?>"/> 
      <p>タイトル</p>
      <?php if(isset($error['title'])):?>
      <p class="error"><?= $error['title'] ?></p>
      <?php endif?>
      <input type="text" name="contact[title]" value="<?=isset($title)?$title:null; ?>"/> 
      <p>返信メールアドレス</p>
      <?php if(isset($error['email'])):?>
      <p class="error"><?= $error['email'] ?></p>
      <?php endif?>
       <input type="email" name="contact[email]" value="<?= isset($email)?$email:null; ?>" /> 
      <p>本文</p>
      <?php if(isset($error['body'])):?>
      <p class="error"><?= $error['body'] ?></p>
      <?php endif?>
       <textarea name="contact[body]" cols=50 rows=10><?= isset($body)?$body:null; ?></textarea> <br />
       <input type="submit" name="confim" />
      </form>
     </div><!-- div#mainContents END -->
     <?php include "common/left.php" ?>
  </div><!-- div#wrapBox END -->
</div><!-- div#wrapBg END -->

<?php include "common/footer.php" ?>
