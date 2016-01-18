<style>
.banner{
  height:50px;
  width:100%;
  background: white;
  position:absolute;
  left:0;
  top:0;
  border-bottom: 1px solid #D3D3D3;
}
.myButton {
  background-color:#687c87;
  border-radius:12px;
  border:2px solid #687c87;
  display:inline-block ;
  cursor:pointer;
  color:white !important;
  font-family:"Noto Sans", "Noto Sans CJK KR", sans-serif;
  font-size:12px;
  font-weight:regular;
  padding:3px 12px;
}
.myButton:hover {
  background-color: white;
  color: #687c87 !important;
}
.myButton:active {
  position:relative;
  top:1px;
}
.submit_button{
  display: block;
  text-align: center;
}
.menu{
  width:90px;
  display:inline-block;
}
.menu_input{
  width:150px;
}
.menu_input_radio{
  width:130px;
  display: inline-block;
}
.menu_button{
  margin-left: 10px;
}
.menu_input_phone_1{
  width:40px;
}
.menu_input_phone_2{
  width:50px;
}
.margin-bottom-5{
  margin-bottom: 5px;

}
input[type="radio"] + label{
  margin-left: 7px;
  font-size:13px;
}
.title1{
  font-size: 20px;
  color:#868686;
}
.title2{
  font-size: 13px;
  color:#443333;
}
.order_border{
  border:1px solid #B7B7B7;
  border-radius: 6px;
  padding: 5px;
}
.order_border:hover{
  background: #D3D3D3;
}
.order_result_1{
  font-size:10px;
  color:#D3D3D3;
  float:right;
}
.order_result_2{
  margin-left: 10px;
  font-size:12px;
  color:#443333;
  float:right;
}
.order_title{
  color:#868686;
  margin: 0px 0px 0px 3px;
}
.order_content{
  color:#443333;
  margin: 0px 0px 0px 3px;
}
</style>
<script>
$(function(){

});
</script>
<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <div class="col-xs-12 gal  row_padding-xs" style="border-bottom:1px solid #D3D3D3; padding-bottom:5px; padding-left:0px;">
      <span style="font-size:25px; font-weight:500;">Order</span>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">주문리스트 확인</span>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
   <!-- 주문 목록 반복되는 블럭 시작 -->
   <? for($i=0;$i<2;$i++){?>

    <div style="padding: 10px 5px 0px 5px;" class=" col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <div class="order_border">
      <div class="row">
        <div class="col-xs-5">
          <span class="order_title">제품코드</span>
        </div>
        <div class="col-xs-7">
          <span class="order_content">0000000</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <span class="order_title">제품정보</span>
        </div>
        <div class="col-xs-7">
          <span class="order_content">[이윤지 아티스트] 개와고양이를 그리는 사람들이다요다요</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <span class="order_title">판매가격</span>
        </div>
        <div class="col-xs-7">
          <span class="order_content">20,000원</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <span class="order_title">배송비</span>
        </div>
        <div class="col-xs-7">
          <span class="order_content">2,500원</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <span class="order_title">수량</span>
        </div>
        <div class="col-xs-7">
          <span class="order_content">1</span>
        </div>
      </div>
    </div>
  </div>
    <? }?>
    <!-- 주문목록 반복되는 부분 끝 -->
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <span class="order_result_2">총 주문금액 00,000원</span>
    <span class="order_result_1">상품 총 금액 00,000원 + 배송비 0,000원</span>
  </div>

  <!-- 페이지 로딩시 자동으로 채워지는 부분 *시작* -->
  <div>
    <div class="row row-padding-xs-100 " style="margin-top:30px; ">
      <div style="border-top: 1px solid #D3D3D3;padding-top:25px;">
        <span class="title1">주문고객 정보</span>
      </div>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu">보내시는 분</div>
      <input class="menu_input" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">이메일</div>
      <input class="menu_input" style="width:200px;" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">휴대전화</div>
      <input class="menu_input_phone_1" type="text" value="010">-
      <input class="menu_input_phone_2" type="text">-
      <input class="menu_input_phone_2" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2" style="  vertical-align: top;line-height: 100%;padding-top: 5px;">배송지</div>
      <div style="display:inline-block;width:210px;">
        <!-- 주소와 우편번호를 입력할 <input>들을 생성하고 적당한 name과 class를 부여한다 -->
        <input type="text" name="" class="margin-bottom-5 menu_input" placeholder="우편번호" value="" /><br />
        <input type="text" name="" class="margin-bottom-5 menu_input"  placeholder="기본주소" value="" /><br />
        <input type="text" name="" class="margin-bottom-5 menu_input" placeholder="상세주소" value="" /><br />

        <!-- jQuery와 Postcodify를 로딩한다 -->


        <!-- "검색" 단추를 누르면 팝업 레이어가 열리도록 설정한다 -->
      </div>
    </div>

  </div>
  <!-- 페이지 로딩시 자동으로 채워지는 부분 *종료* -->

  <div class="row row-padding-xs-100 " style="margin-top:30px; ">
    <div style="border-top: 1px solid #D3D3D3;padding-top:25px;">
      <span id="locInfo" class="title1">배송지 정보</span>
      <div style="margin-left:10px;" class="menu_input_radio">
        <input type="radio" name="same_info" id="same_info_1" ><label for="same_info_1" >주문고객 정보와 동일</label>
      </div>
      <div class="menu_input_radio" style="width:80px;">
        <input type="radio" name="same_info" id="same_info_2" ><label for="same_info_2" >새로운 주소</label>
      </div>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu">받으시는 분</div>
    <input class="menu_input" type="text">
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu title2">이메일</div>
    <input class="menu_input" style="width:200px;" type="text">
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu title2">휴대전화</div>
    <input class="menu_input_phone_1" type="text" value="010">-
    <input class="menu_input_phone_2" type="text">-
    <input class="menu_input_phone_2" type="text">
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu title2" style="  vertical-align: top;line-height: 100%;padding-top: 5px;">배송지</div>
    <div style="display:inline-block;width:210px;">
      <!-- 주소와 우편번호를 입력할 <input>들을 생성하고 적당한 name과 class를 부여한다 -->
      <input type="text" name="" class="margin-bottom-5 menu_input postcodify_postcode5" placeholder="우편번호" value="" />
      <a href="#"><button id="postcodify_search_button" class=" myButton">찾기</button></a><br />
      <input type="text" name="" class="margin-bottom-5 menu_input postcodify_address"  placeholder="기본주소" value="" /><br />
      <input type="text" name="" class="margin-bottom-5 menu_input postcodify_details" placeholder="상세주소" value="" /><br />

      <!-- jQuery와 Postcodify를 로딩한다 -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script src="//cdn.poesis.kr/post/search.min.js"></script>

      <!-- "검색" 단추를 누르면 팝업 레이어가 열리도록 설정한다 -->
      <script> $(function() { $("#postcodify_search_button").postcodifyPopUp(); }); </script>
    </div>
  </div>

  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu title2">배송 유의사항</div>
    <input class="menu_input" style="width:200px;" type="text">
  </div>

  <div class="row row-padding-xs-100 " style="margin-top:30px; ">
    <div style="border-top: 1px solid #D3D3D3;padding-top:25px;">
      <span class="title1">결제 정보</span>
    </div>
  </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">입금자 명</div>
      <input class="menu_input" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">입금할 계좌</div>
      <input class="menu_input" placeholder="은행-계좌번호" style="width:200px;" type="text">
    </div>


  <div class="row row-padding-xs-100 " style="margin-top:30px; ">
    <div style="border-top: 1px solid #D3D3D3;padding-top:25px; display:block;  text-align:center;">
      <a href="#"><div style="padding:7px 15px; border-radius:15px; width:150px;" class="myButton">주문하기</div></a>
    </div>

  </div>
</div>