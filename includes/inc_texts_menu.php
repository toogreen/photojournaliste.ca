<?
$num_tss=1;
	while ($num_tss <= 3) {
		if ($num_tss==1) { $sectname="Articles"; }
		if ($num_tss==2) { $sectname="Travel writings"; }
		if ($num_tss==3) { $sectname="Links"; }
		//echo " | ";
		echo "<span class='stitres'><A class='stitres' href='texts_$num_tss.php?scat=$num_tss'>";
		if ($scat==$num_tss) {
			echo "<strong>$sectname</strong>";
		}else{
			echo $sectname;
		}
		echo "</A>";
		if ($num_tss < 3) {
			echo " | </span>";
		}
	++$num_tss;
	}
?>