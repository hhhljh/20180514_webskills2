

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
                
<form action="" method="post">
<input type="hidden" name="action" value="pro_now">    
                <tr>
                    <td>테스트</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>             
</form>
            </table>
            
		</div> 
        
        <div class="msg">
            
        	거래처 이름이 누락되었습니다.<br>
			거래처 전화번호가 누락되었습니다.<br>
			거래처 주소가 누락되었습니다.<br>
        	동일한 이름의 거래처가 등록되어 있습니다.
        </div>
        
		<div class="title">거래처관리</div>  
	</div>     
</div>



<div id="con">
    <div class="wrap store">    
<form action="" method="post">
        <table>
    <input type="hidden" name="action" value="client_in">
            <tr>
                <td><span class="red">*</span> 거래처 이름 : <input type="text" name="name" style="width:150px;"></td>
                <td><span class="red">*</span> 거래처 전화번호 : <input type="text" name="tel" style="width:150px;"></td>
                <td><span class="red">*</span> 거래처 주소 : <input type="text" name="address" style="width:300px"></td>
                <td><button type="submit">거래처 등록</button></td>
            </tr>
        </table>
</form> 
        <table class="list mat10">
            <tr>
                <th style="width:5%;">번 호</th>
                <th style="width:15%;">이 름</th>
                <th style="width:15%;">전화번호</th>
                <th>주 소</th>
                <th style="width:12%;">등록일</th>
                <th style="width:8%;">삭 제</th>
            </tr>
            <?php
                $sql = "SELECT * FROM client ";
                $list = $db->query($sql)->fetchAll();
                foreach($list as $client){
            ?>
            <tr>
                <td><?php echo $client['idx'] ?></td>
                <td><?php echo $client['name'] ?></td>
                <td><?php echo $client['tel'] ?></td>
                <td><?php echo $client['address'] ?></td>
                <td><?php echo $client['date'] ?></td>
                <td><button type="submit" onclick="location.href = './?page=client_delete&amp;idx=<?php echo $client['idx']?>'; return false;">삭제</button></td>
            </tr>
            <?php } ?>
        </table>
        
        <div class="w100 ac mat20">
    	
 
            <button>이전</button>

            <button>1</button>

            <button>다음</button>

        </div>
        
	</div>
</div>



</body>
</html>




















