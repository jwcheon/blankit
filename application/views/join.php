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
  display:inline-block;
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
  width:95px;
  display: inline-block;
}
.menu_button{
  margin-left: 10px;
}
.menu_input_phone_1{
  width:32px;
}
.menu_input_phone_2{
  width:50px;
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
</style>
<script>
$(function(){
  $("#info_see").on("click",function(){
    $("#info_see_content").css("display","");
  });
  $("#usage_see").on("click",function(){
    $("#usage_see_content").css("display","");
  });
  $("input[name='type']").on("change",function(event){
    switch(event.target.defaultValue){
      case '1':
      $("#artist_content").css("display","none");
      break;
      case '2':
      $("#artist_content").css("display","");
      break;
    }
  });
  // $("#artist_type").selectmenu();
});
</script>
<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <div class="col-xs-12 gal  row_padding-xs" style="border-bottom:1px solid #D3D3D3; padding-bottom:5px; padding-left:0px;">
      <span style="font-size:25px; font-weight:500;">Join</span>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">약관 동의</span>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <span class="title2">개인 정보 수집 및 안내</span>
    <span id="info_see" style="cursor:pointer; color:blue;">(펼치기)</span>
  </div>
  <div id="info_see_content" class="row row-padding-xs-100 " style="display:none; margin-top:10px;">
    <div style="background:#F5F6F7; width:100%; height:130px; overflow-y:auto;  padding:5px;">
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div style="float:right">
      <input type="checkbox" id="info_checkbox">
      <label for="info_checkbox" style="margin-left:5px;">(필수)약관에 동의합니다</label>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <span class="title2">이용 약관</span>
    <span id="usage_see" style="cursor:pointer; color:blue;">(펼치기)</span>
  </div>
  <div id="usage_see_content" class="row row-padding-xs-100 " style="display:none; margin-top:10px;">
    <div style="background:#F5F6F7; width:100%; height:130px; overflow-y:auto; padding:5px;">
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div style="float:right">
      <input type="checkbox" id="usage_checkbox">
      <label for="usage_checkbox" style="margin-left:5px;">(필수)약관에 동의합니다</label>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">회원 정보</span>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu">아이디</div>
    <input class="menu_input" type="text">
    <a href="#"><div class="menu_button myButton" style="border-radius:5px;">중복확인</div><a>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">비밀번호</div>
      <input class="menu_input" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">비밀번호 확인</div>
      <input class="menu_input" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">이름</div>
      <input class="menu_input" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">휴대전화</div>
      <input class="menu_input_phone_1" type="text" value="010">-
      <input class="menu_input_phone_2" type="text">-
      <input class="menu_input_phone_2" type="text">
      <a href="#"><div class="menu_button myButton" style="border-radius:5px;">인증번호 발송</div><a>
      </div>
      <div class="row row-padding-xs-100 " style="margin-top:10px;">
        <div class="menu"></div>
        <input class="menu_input" type="text">
        <a href="#"><div class="menu_button myButton" style="border-radius:5px;">인증번호 확인</div><a>
        </div>
        <div class="row row-padding-xs-100 " style="margin-top:10px;">
          <div class="menu title2">회원구분</div>
          <div class="menu_input_radio">
            <input type="radio" name="type" id="type1" value="1"><label for="type1">일반 회원</label>
          </div>
          <div class="menu_input_radio">
            <input type="radio" name="type" id="type2" value="2"><label for="type2">아티스트 회원</label>
          </div>
        </div>
        <div id="artist_content" style="display:none;">
          <div class="row row-padding-xs-100 " style="margin-top:10px; line-height:35px;">
            <div class="menu title2" style="vertical-align:middle;">아티스트 분류</div>
            <select id="artist_type">
              <option value="1">아티스트</option>
              <option value="2">아티스트</option>
              <option value="3">아티스트</option>
            </select>
          </div>
          <div class="row row-padding-xs-100 " style="margin-top:10px;">
            <div class="menu title2">프로필사진</div>
            <form id="profile" action="/login" class="dropzone"></form>
          </div>
          <div class="row row-padding-xs-100 " style="margin-top:10px;">
            <div class="menu title2">소개글</div>
            <textarea style="width:100%; height:150px;"  ></textarea>
          </div>
          <div class="row row-padding-xs-100 " style="margin-top:10px;">
            <div class="menu title2">포트폴리오</div>
            <form id="portfolio" action="/login" class="dropzone"></form>
          </div>
        </div>
        <div class="row row-padding-xs-100 " style="margin-top:30px;">
          <div style="text-align:center; display:block;">
          <a href="#"><div class="myButton" style="width:200px; font-size:20px;">가입하기</div></a>
        </div>
        </div>
      </div>
