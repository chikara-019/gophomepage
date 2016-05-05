<?php include "common/heder.php" ?>

<div id="wrapBg">
			<div class="wrapBox clearfix">
				<div id="mainContents">

				<a id="pageLink04" name="pageLink04"></a>
				<p class="chapter4">会社概要</p>
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
                  <th><p class="chapter16">TEL</p></th>
　　　　　　　　　　　　　　<td><?php echo $tel ?></td>
						</tr>
						 <tr>
							    <th><p class="chapter16">email</p></th>
                          <td><?php echo $email ?></td>
						</tr>

            </table>


				    </div><!-- div#mainContents END -->

                <?php include "common/left.php" ?>

			</div><!-- div#wrapBox END -->
		</div><!-- div#wrapBg END -->

<?php include "common/footer.php" ?>
