<?php
	extract($_POST);
	switch ($action) {
	 	case 'client_in':
	 		$cnt=$db->query("SELECT * FROM client WHERE name='{$name}'")->rowCount();
            if(!$cnt){
                echo '<p>동일한 이름의 거래처가 등록되어 있습니다</p>';
            }
	 		 $sql = "INSERT INTO client SET
	 				name='{$name}',
	 				tel='{$tel}',
	 				address='{$address}',
	 				date = now()";
	 		if($db->query($sql)){
	 			alert('거래처가 등록되었습니다');
	 			move('./');
	 		}
	 		break;
	 	case 'pro_up':
	 	$sql = "INSERT INTO product SET
	 			product='{$product}',
	 			price='{$price}',
	 			etc='{$etc}',
	 			date=now()";
	 		if($db->query($sql)){
	 			alert('제품이 등록되었습니다');
	 			move('./?page=product');
	 		}
	 	break;
	 	case 'product_update':
	 	$sql = "UPDATE product SET
	 			price='{$price}',
	 			etc='{$etc}'
	 			WHERE idx='{$idx}'";
	 		if($db->query($sql)){
	 			alert('제품이 수정되었습니다');
	 			move('./?page=product');
	 		}
	 	break;
	 	case 'in_pro':
	 		$sql = "INSERT INTO in_pro SET
	 				product='{$_GET['product']}',
	 				price='{$price}',
	 				quantity='{$quantity}',
	 				date= '{$date}'";
	 			if($db->query($sql)){
	 				alert('입고되었습니다');
	 				move('./?page=in_pro');
	 			}
	 		break;
	 	case 'out_pro':
	 	$sql = "INSERT INTO out_pro SET
	 			client='{$client}',
	 			product='{$product}',
	 			quantity='{$quantity}',
	 			date='{$date}'";
	 			echo $sql;
	 		if($db->query($sql)){
	 			alert('출고되었습니다');
	 			move('./?page=out_pro');
	 		}
	 } 
 ?>