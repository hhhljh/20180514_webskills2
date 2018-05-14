
        
		<div class="wrap mat30">
			<div class="w100 ft24">재고현황</div>
            <div id="left_title">
            	<span class="blue">재고 총개수</span> : <span class="red">100</span> 개, &nbsp;
                <span class="blue">재고 총합계</span> : <span class="red">100</span> 원
            </div>
            <table class="list">
                <tr>
                    <th style="width:10%;">제품명</th>
                    <th style="width:20%;">제품개수(총개수)</th>
                    <th style="width:25%;">입고단가</th>
                    <th style="width:35%;">입고날짜</th>
                    <th style="width:10%;">총가격</th>
                </tr>
                

                <tr>
                    <td>테스트</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
             
			</table>
            
		</div> 
        
        <div class="msg">
        	제품명이 누락되었습니다.<br>
			제품 출고가가 누락되었습니다.<br>
        	동일한 이름의 제품이 등록되어 있습니다.
        </div>
        
		<div class="title">제품관리</div>  
	</div>     
</div>


<div id="con">
	<div class="wrap store">
    <form action="" method="post">
    <input type="hidden" name="action" value="pro_up">
        <table>
            <tr>
                <td class="al">
                <span class="red">*</span> 제품명 : <input type="text" name="product" style="width:130px;"> &nbsp;&nbsp;
                <span class="red">*</span> 제품 출고가 : <input type="text" name="price" style="width:130px;"> &nbsp;&nbsp;
                <span class="blue">*</span> 비 고 : <input type="text" name="etc" style="width:500px;"> &nbsp;&nbsp;
                <button>제품 등록</button>
                </td>
            </tr>
        </table>
    </form>	
        
        <table class="list mat10">
            <tr>
                <th style="width:5%;">번 호</th>
                <th style="width:15%;">제품명</th>
                <th style="width:20%;">출고가</th>
                <th>비 고</th>
                <th style="width:8%;">수 정</th>
            </tr>
            <?php $sql="SELECT * FROM product";
                $list=$db->query($sql)->fetchAll();
                foreach($list as $product){
            ?>
            <form action="" method="post">
                <input type="hidden" name="action" value="product_update">
                <input type="hidden" name="idx" value="<?php echo $product['idx']?>">
                <tr>
                    <td><?php echo $product['idx'] ?></td>
                    <td><?php echo $product['product'] ?></td>
                    <td><input type="" name="price" value="<?php echo $product['price'] ?>"></td>
                    <td><input type="" name="etc" value="<?php echo $product['etc'] ?>"></td>
                    <td><button type="submit">수정</button></td>
                </tr>
            </form>
            <?php } ?>
            

	
        </table>
        
        
	</div>
</div>



</body>
</html>




















