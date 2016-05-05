<?php include "common/heder.php" ?>

<div id="wrapBg">
			<div class="wrapBox clearfix">
				<div id="mainContents">

				<a id="pageLink04" name="pageLink04"></a>
				   <p class="chapter4">新着ニュース.お知らせ</p>
      		<table class="tableDec3">
                <?php foreach($data as $d): ?>
          <tr>
　　　　　　　　　<p class="chapter18"><?php echo $d['title']?></p>
　　　    </tr>
                <?php endforeach ?>
					</table>

          </div><!-- div#mainContents END -->

                <?php include "common/left.php" ?>

			</div><!-- div#wrapBox END -->
		</div><!-- div#wrapBg END -->

<?php include "common/footer.php" ?>
