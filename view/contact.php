<?php include "common/heder.php" ?>

<div id="wrapBg">
			<div class="wrapBox clearfix">
				<div id="mainContents">

				<a id="pageLink04" name="pageLink04"></a>
				<p class="chapter8">問い合わせページ</p>
				<table class="tableDec3">
                 <tr>
                 <th>問い合わせ内容</th>
								<th><?php echo $d['title']?></th>
                <td>

               <?php echo date('Y年m月n日', strtotime($d['created_at'])) ?><br/>
                          <?php echo $d['body']?>
                        </td>
						</tr>

					</table>


				    </div><!-- div#mainContents END -->

                <?php include "common/left.php" ?>

			</div><!-- div#wrapBox END -->
		</div><!-- div#wrapBg END -->

<?php include "common/footer.php" ?>
