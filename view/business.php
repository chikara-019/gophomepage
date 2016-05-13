<?php include "common/heder.php" ?>{

<div id="wrapBg">
			<div class="wrapBox clearfix">
				<div id="mainContents">

				<a id="pageLink04" name="pageLink04"></a>
          <p class="chapter4">主な事業</p>
	          <table class="tableDec3">
	<?php foreach ($data as $v): ?>
				<tr>
        <th><p class="chapter16"><?php echo $v['business']['name']?></p></th>

             <td>
		     <?php foreach($v['content'] as $k => $d):?>
               <?php if($k > 0) echo '<br/>' ?>
               <?php echo $d['content'] ?>
             <?php endforeach ?>
            </td>
        </tr>
     <?php endforeach ?>
	     </table>

    </div><!-- div#mainContents END -->
								<?php include "common/left.php" ?>
    </div><!-- div#wrapBox END -->
		</div><!-- div#wrapBg END -->
                <?php include "common/footer.php" ?>
