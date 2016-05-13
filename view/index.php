<?php include "common/heder.php" ?>

<div id="wrapBg">
			<div class="wrapBox clearfix">
				<div id="mainContents">
            <p style="overflow:hidden;height:300px;"><img src="/images/matsudo.jpg" alt="合同会社ジーオーピー" width="700px" /></p>

			<p class="chapter4">新着ニュース.お知らせ</p>
      		<table class="tableDec3">
                <?php foreach($data as $d): ?>
                  <tr>
                     <th>[<?php echo date('Y/m',strtotime($d['created_at'])) ?>]<?php echo $d['title']?></th>
                     <td><?= nl2br($d['body']) ?></td>
                 </tr>
                <?php endforeach ?>
		   </table>

          </div><!-- div#mainContents END -->

                <?php include "common/left.php" ?>

			</div><!-- div#wrapBox END -->
		</div><!-- div#wrapBg END -->

<?php include "common/footer.php" ?>
