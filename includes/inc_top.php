<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="1%" align="left"> 
      <table border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td><a href="index.php"><img src="images/img_1_1.jpg" width="119" height="80" border="0"></a></td>
          <td><a href="index.php"><img src="images/img_1_2.jpg" width="115" height="80" border="0"></a></td>
          <td><a href="index.php"><img src="images/img_1_3.jpg" width="115" height="80" border="0"></a></td>
          <td><a href="index.php"><img src="images/img_1_4.gif" width="115" height="80" border="0"></a></td>
          <td><a href="index.php"><img src="images/img_1_5.gif" width="115" height="80" border="0"></a></td>
          <td><a href="index.php"><img src="images/img_1_6.gif" width="48" height="80" border="0"></a></td>
        </tr>
        <tr> 
          <td>
		  <?php 
		  if ($cat==1) {
		  ?>
		  <img src="images/img_p_2_1_f2.jpg" name="b_photo1" width="119" height="76" border="0">
		  	<?php	
			} else {
			?>
		  <a href="photos.php?cat=1" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('b_photo1','','images/img_p_2_1_f2.jpg','swapstitle','','images/img_stitle_swap1.gif',1)"><img src="images/img_p_2_1_f1.jpg" name="b_photo1" width="119" height="76" border="0"></a>	
		  <?php
		  }
		  ?>
		  </td>
          <td>
		  <?php
		  if ($cat==2) {
		  ?>
		  <img src="images/img_p_2_2_f2.jpg" name="b_photo2" width="115" height="76" border="0">
		  	<?php	
			} else {
			?>		  
		  <a href="photos.php?cat=2" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('b_photo2','','images/img_p_2_2_f2.jpg','swapstitle','','images/img_stitle_swap2.gif',1)"><img src="images/img_p_2_2_f1.jpg" name="b_photo2" width="115" height="76" border="0"></a>
		  <?php
		  }
		  ?>		  
		  </td>
          <td>
		  <?php
		  if ($cat==4) {
		  ?>
		  <img src="images/img_p_2_4_f2.jpg" name="b_photo4" width="115" height="76" border="0" id="b_photo4">
		  	<?php	
			} else {
			?>
		  <a href="photos.php?cat=4" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('b_photo4','','images/img_p_2_4_f2.jpg','swapstitle','','images/img_stitle_swap4.gif',1)"><img src="images/img_p_2_4_f1.jpg" name="b_photo4" width="115" height="76" border="0" id="b_photo4"></a>
		  <?php
		  }
		  ?>		  
		  </td>
          <td>
		  <?php
		  if ($cat==3) {
		  ?>
		  <img src="images/img_p_2_3_f2.jpg" name="b_photo3" width="115" height="76" border="0">
		  	<?php	
			} else {
			?>		  		  
		  <a href="photos.php?cat=3" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('b_photo3','','images/img_p_2_3_f2.jpg','swapstitle','','images/img_stitle_swap3.gif',1)"><img src="images/img_p_2_3_f1.jpg" name="b_photo3" width="115" height="76" border="0"></a>
		  <?php
		  }
		  ?>
		  </td>
          <td bgcolor="#36281a"><img src="images/img_p_swap.jpg" name="p_swap" width="115" height="76" border="0" id="p_swap"></td>
          <td bgcolor="#36281a"><img src="images/img_p_blank.jpg" name="b_photo_blank1" width="48" height="76" border="0"></td>
        </tr>
        <tr> 
          <td><img src="images/img_3_1.gif" width="119" height="21"></td>
          <td><img src="images/img_3_2.gif" width="115" height="21"></td>
          <td><img src="images/img_3_3.gif" width="115" height="21"></td>
          <td><img src="images/img_3_4.gif" width="115" height="21"></td>
          <td><img src="images/img_3_5.gif" width="115" height="21"></td>
          <td><img src="images/img_3_6.gif" width="48" height="21"></td>
        </tr>
      </table></td>
    <td><table border="0" align="right" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="99%" align="right"><img src="images/img_1_7.jpg" width="173" height="80"></td>
        </tr>
        <tr> 
          <td width="99%" align="right" bgcolor="#36281a"><img src="images/img_p_fin.jpg" name="b_photo_blank1" width="173" height="76" border="0"></td>
        </tr>
        <tr> 
          <td width="99%" align="right"><img src="images/img_3_7.jpg" width="173" height="21"></td>
        </tr>
      </table></td>
  </tr>
</table>