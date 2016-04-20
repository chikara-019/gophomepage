<?php include "common/heder.php" ?>

<div id="wrapBg">
			<div class="wrapBox clearfix">
				<div id="mainContents">

				<a id="pageLink04" name="pageLink04"></a>
          <p class="chapter8">事業</p>
　　　　　  <table class="tableDec3">
              <?php foreach($data as $d): ?>
           <tr>
						      <th><?php echo $d[0][0] ?></th>
							<td>


                  <th><?php echo $d[1]?></th>
							</td>
	         </tr>
					       <?php endforeach ?>
          </table>


								</div><!-- div#mainContents END -->
								<?php include "common/left.php" ?>

			</div><!-- div#wrapBox END -->
		</div><!-- div#wrapBg END -->

<?php include "common/footer.php" ?>
