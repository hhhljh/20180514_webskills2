
        
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
        	제품명이 누락되었습니다. <br>
            제품입고가가 누락되었습니다.  <br>
            제품개수가 누락되었습니다.  <br>
  			입고날짜가 누락되었습니다.  <br>
            제품 입고가가 잘못 입력되었습니다.
        </div> 
        
		<div class="title">입고관리</div>  
	</div>     
</div>

<div id="con">
	
	<div class="wrap store">
     <form action="" method="post">
        <input type="hidden" name="action" value="in_pro">
            
         
        <div>   
            <span class="red">*</span> 제품명 : 
            <select>
                <option value="">제품선택</option>
                <option value="" name="producty"><?php echo $product['product'] ?></option>
            </select>
            
            &nbsp;&nbsp;&nbsp;&nbsp;
            
            <span class="red">*</span> 제품 입고가 : <input type="text" name="price" style="width:70px;"> 원
            
            &nbsp;&nbsp;&nbsp;&nbsp;
            
           <span class="red">*</span> 제품개수 : <input type="text" name="quantity" style="width:70px;" > 
            
            &nbsp;&nbsp;&nbsp;&nbsp;
            
            <span class="red">*</span> 입고날짜 : <input type="text" name="date" id="in_date" style="width:150px; text-align:center;">
            &nbsp;&nbsp;&nbsp;&nbsp;
            
            <button>입고하기</button>
        </div>
        
    </form>
        <div class="in_search">
            
            제품별 : 
            <select >
                <option>전 체</option>   
            </select>
            
             &nbsp;&nbsp;&nbsp;&nbsp;
             
             시작날짜 : <input type="text" id="s_date" style="width:150px; text-align:center;">
             
             &nbsp;&nbsp;&nbsp;&nbsp;
            
             마지막날짜 : <input type="text" id="e_date" style="width:150px; text-align:center;" >
             
             &nbsp;&nbsp;&nbsp;&nbsp;
             <button>검색하기</button>            
             
        </div>
        
        <div class="s_list">
        
            <div class="se_re">
                검색어 : "제품명 : <span class="red"></span>", &nbsp; "시작날짜 : <span class="red"> 이상</span>", &nbsp;  "마지막날짜 : <span class="red"> 이하</span>" 
            </div>
            
            <div class="se_re2"> 
                총 건수 <span class="red">00</span> 건, 총 입고개수 <span class="red">00</span> 개,총 입고금액 <span class="red">00</span> 원
            </div>
            
            <?php $sql="SELECT * FROM in_pro WHERE product='{$product}'";
                $list=$db->query($sql)->fetchAll();
                foreach ($list as $in_pro) { 
            ?>
            <table class="list mat40">
                <tr>
                    <th>제품명</th>
                    <th>입고개수</th>
                    <th>제품입고가</th>
                    <th>총금액</th>
                    <th>입고날짜</th>
                </tr>
                
                <tr>
                    <td><?php echo $in_pro['product'] ?></td>
                    <td><?php echo $in_pro['quantity'] ?></td>
                    <td><?php echo $in_pro['price'] ?></td>
                    <td><?php echo $in_pro['price'] ?></td>
                    <td><?php echo $in_pro['date'] ?></td>

                </tr>
            
            </table>
            <?php } ?>
            
             <div class="w100 ac mat20">
            

            <button>이전</button>

            <button>1</button>

            <button>다음</button>

        
            </div>
        </div>
	</div>
</div>



</body>
</html>




















