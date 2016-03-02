<?php
/* @var $this yii\web\View */
$this->title = Yii::t('frontend', 'Articles')
?>
<header> <a class="btn-return" href="javascript:;"></a> asdasd </header>

<!-- 正文 start -->
<div class="m-detail-top">
  <h1> 新闻标题</h1>
  <p class="m-post-author"> 2016-01-13 &nbsp;&nbsp;&nbsp;测试&nbsp;&nbsp;&nbsp;</p>
  <p class="m-post-com-num" id="commentCont"> <a href="#comment"></a> </p>
</div>
<article>
  <div class="m-detail-con"  >
    <p>文章内容文章内容文章内容文章内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
      内容文章内容文章内容<br/>
    </p>
  </div>
</article>
<!-- 正文 end --> 


<!-- 相关阅读 start -->
<div class="tt-first">
  <h3> 推荐文章</h3>
</div>
<div class="m-txt-list">
  <ul>
    <li><a href="#">
      <p>推荐阅读一</p>
      </a></li>
    <li><a href="#">
      <p>推荐阅读一</p>
      </a></li>
    <li><a href="#">
      <p>推荐阅读一</p>
      </a></li>
    <li><a href="#">
      <p>推荐阅读一</p>
      </a></li>
    <li><a href="#">
      <p>推荐阅读一</p>
      </a></li>
    <li><a href="#">
      <p>推荐阅读一</p>
      </a></li>
  </ul>
</div>
<div class="wycs"></div>
<script>
function closed()
{
 var aaa=document.getElementById("ad");
 aaa.style.display="none"
}
</script>
<div id="ad">
  <div class="guang" > <a href="#"> <img src="images/ggg1.png"/> </a> </div>
  <div class="guanb"> <img src="/frontend/web/img/ad_app_top_close.png" onclick="closed();"/> </div>
</div>