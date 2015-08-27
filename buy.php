<div class="main-back">
  <div class="pic">
    <img style="width:100%;display:block;" src="./images/buy/buy.png"/>
    <div style="margin-top:-380px;margin-bottom:350px;z-index:1"></div>
    <div span style="font-color:black;font-size:15px;z-index:1;margin-bottom:20px;">或者您也可以申请试用我们的产品，试用期为一个月，试用硬件需要缴纳押金，试用期结束后全款退还</div>
  </div>
  <div class="container">
    
    <div class="title">
      产品试用申请
    </div>
    <div class="vice-title">
      请您填写一下信息，请务必填写真实信息，确保申请成功
    </div>

    <div class="content row">
      <span class="col-xs-4 content-title">您的公司类型</span>
      <div class="col-xs-7">
        <select class="form-control">
          <option selected="" value="请选择您的公司类型">请选择您的公司类型</option>
          <option value="终端用户(商场或商铺等)">终端用户(商场或商铺等)</option>
          <option value="代理商(中间渠道)">代理商(中间渠道)</option>
          <option value="运营商">运营商</option>
        </select>
      </div>
    </div>

    <div class="content row">
      <span class="col-xs-4 content-title">您所在或者关注的行业</span>
      <div class="col-xs-8">
        <input type="radio" name="mall" class="hidden 1"></input>
        <div class="radio" id="1"></div><span class="name">商场</span>
        <input type="radio" name="mall" class="hidden 2"></input>
        <div class="radio" id="2"></div><span class="name">商场</span>
        <input type="radio" name="mall" class="hidden 3"></input>
        <div class="radio" id="3"></div><span class="name">商场</span>
        <input type="radio" name="mall" class="hidden 4"></input>
        <div class="radio" id="4"></div><span class="name">商场</span>
        <input type="radio" name="mall" class="hidden 5"></input>
        <div class="radio" id="5"></div><span class="name">商场</span>
      </div>
      <div style="margin-left:223px">
         <input type="radio" name="mall" class="hidden 6"></input>
         <div class="radio" id="6"></div><span class="name">商场</span>
      </div>
    </div>
  </div>

  <div class="container-down">
  </div>


</div>


<script>
$('div .radio').click(function(){
  var select = $(this).attr('id');
  $(this).html('<div style="width: 8px;height: 8px;border-radius: 4px;background: #0ABBCA;margin:2px;"></div>');
  return $('.'+select).click();
});
</script>