<?php 
	$sql = "DELETE FROM client WHERE idx={$idx}";
	if($db->query($sql)){
		alert('삭제되었습니다');
		move('./');
	}
 ?>