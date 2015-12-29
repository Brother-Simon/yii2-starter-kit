<?php
/* @var $this yii\web\View */
$this->title = 'web开发者的该驻足的地方！';
?>
<div class="site-index">

    <?php echo \common\widgets\DbCarousel::widget([
        'key'=>'index',
        'options' => [
            'class' => 'slide', // enables slide effect
        ],
    ]) ?>

    <div class="container">
        <h1 class="text-center">试试手气!</h1>、
        <div class="row">
            <div class="input-group show-grid col-lg-offset-3 col-lg-6">
              <span class="input-group-addon">whatever</span>
              <input type="text" class="form-control" placeholder="输入任意关键字，直接进入网站">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Let's Go!</button>
              </span>
            </div>
        </div>
        <p class="lead text-center">看看我能不能猜到你！</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>十条精选</h2>

                <ul class="list-group">
                  <a href="http://www.baidu.com" class="list-group-item">
                    <span class="badge">热</span>
                    Cras justo odio
                  </a>
                  <a href="http://www.baidu.com" class="list-group-item">
                    <span class="badge">荐</span>
                    Cras justo odio
                  </a>
                </ul>
            </div>
            <div class="col-lg-8">
                <h2>探索&求知</h2>

                <ul class="list-group">
                  <a href="http://www.baidu.com" class="list-group-item">
                    Cras justo odio<span class="label label-success pull-right">github.com</span>
                  </a>
                  <a href="http://www.baidu.com" class="list-group-item">
                    Cras justo odio<span class="label label-success pull-right">zhihu.com</span>
                  </a>
                </ul>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">更多</a></p>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-8">
                <h2>PHPer</h2>
                <div class="show-grid clearfix">
                    <div class="col-lg-8">
                        <div class="input-group show-grid">
                        <span class="input-group-addon">php.net</span>
                          <input type="text" class="form-control" placeholder="在php.net中搜索官方文档">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">搜索</button>
                          </span>
                        </div>
                        <div class="input-group show-grid">
                        <span class="input-group-addon">w3cschool.org</span>
                          <input type="text" class="form-control" placeholder="w3cscholl中搜索">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">搜索</button>
                          </span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                          <div class="panel-heading">热搜排行榜</div>
                            <ul class="list-group">                    
                              <a href="http://www.baidu.com" class="list-group-item">
                                <span class="badge">热</span>
                                Cras justo odio
                              </a>
                              <a href="http://www.baidu.com" class="list-group-item">
                                <span class="badge">荐</span>
                                Cras justo odio
                              </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="show-grid">
                    <ul class="list-group">                    
                      <a href="http://www.baidu.com" class="list-group-item">
                        <span class="badge">热</span>
                        Cras justo odio
                      </a>
                      <a href="http://www.baidu.com" class="list-group-item">
                        <span class="badge">荐</span>
                        Cras justo odio
                      </a>
                    </ul>
                    
                    <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">更多</a></p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <h2>最后阅读</h2>

                <ul class="list-group">
                  <a href="http://www.baidu.com" class="list-group-item">
                    Cras justo odio
                  </a>
                  <a href="http://www.baidu.com" class="list-group-item">
                    Cras justo odio
                  </a>
                </ul>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">更多</a></p>
            </div>
        </div>

    </div>
</div>
