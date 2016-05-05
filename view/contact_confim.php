<?php include "common/heder.php" ?>

 <?php if(isset($sucsess)):?>
 <p class="sucsess"><?= $sucsess ?></p>
 <?php endif?>

<div id="wrapBg">
   <div class="wrapBox clearfix">
     <div id="mainContents">
	  <p class="chapter8">問い合わせ内容確認ページ</p>
      <p>お名前</p>
      <p><?= $name; ?></p>
      <p>タイトル</p>
      <p><?= $title; ?></p>
      <p>返信メールアドレス</p>
      <p><?= $email; ?></p>
      <p>本文</p>
      <p><?= $body; ?></p>

      <form method="post" action="/contact">
       <input type="hidden" name="contact[email]" value="<?= isset($email)?$email:null; ?>" /> 
       <input type="hidden" name="contact[body]" value="<?= isset($body)?$body:null; ?>" /> 
      <input type="hidden" name="contact[title]" value="<?=isset($title)?$title:null; ?>"/> 
      <input type="hidden" name="contact[name]" value="<?=isset($name)?$name:null; ?>"/> 
       <input type="submit" name="commit" />
      </form>
     </div><!-- div#mainContents END -->
     <?php include "common/left.php" ?>
  </div><!-- div#wrapBox END -->
</div><!-- div#wrapBg END -->

<?php include "common/footer.php" ?>
