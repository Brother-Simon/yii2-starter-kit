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
                  <div class="row">
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
                </div>
                <div class="show-grid">
                    <div class="panel panel-default">
                      <div class="panel-heading">PHP导航</div>
                      <ul class="list-group">
                        <li class="list-group-item">
                          <strong>权威网站：</strong>
                          <a type="button" class="label label-primary" href="http://www.php.net">PHP官网</a>
                          <a type="button" class="label label-info" href="http://www.php.net">PHP内核</a>
                          <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                          <a type="button" class="label label-info" href="http://www.phppan.com/">某大牛的博客</a>
                        </li>
                        <li class="list-group-item">
                          <strong>框架相关：</strong>
                          <a type="button" class="label label-primary" href="http://www.golaravel.com/">laravel中文网</a>
                          <a type="button" class="label label-info" href="https://laravel.com/">laravel English Site</a>
                          <a type="button" class="label label-info" href="http://www.yiichina.com/doc/guide/2.0">yii2官方中文教程</a>
                        </li>
                        <li class="list-group-item">
                          <a href="http://www.baidu.com" class="btn-small btn-link">
                            <span class="badge bg-primary">荐</span>
                            PHP7.0正式发布，让我们看一看~
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="http://www.baidu.com" class="btn-small btn-link">
                            <span class="badge bg-success">热</span>
                            PHP7.0正式发布，让我们看一看~
                          </a>
                        </li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                    </div>
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
        <div class="row">
            <div class="col-lg-8">
                <h2>架构与设计</h2>
                <div class="show-grid clearfix">
                  <div class="row">
                    <div class="col-lg-8">
                        <div class="input-group show-grid">
                        <span class="input-group-addon">设计模式</span>
                          <input type="text" class="form-control" placeholder="搜索常用的设计模式">
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
                </div>
                <div class="show-grid">
                    <div class="panel panel-default">
                      <div class="panel-heading">架构与设计导航</div>
                      <ul class="list-group">
                        <li class="list-group-item">
                          <strong>权威网站：</strong>
                          <a type="button" class="label label-primary" href="http://www.php.net">PHP官网</a>
                          <a type="button" class="label label-info" href="http://www.php.net">PHP内核</a>
                          <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                        </li>
                        <li class="list-group-item">
                          <strong>知名博客：</strong>
                          <a type="button" class="label label-primary" href="http://blog.csdn.net/yunhua_lee" target="_blank">CSDN专家</a>
                          <a type="button" class="label label-info" href="https://laravel.com/">laravel English Site</a>
                          <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                        </li>
                        <li class="list-group-item">
                          <a href="http://www.baidu.com" class="btn-small btn-link">
                            <span class="badge bg-primary">荐</span>
                            PHP7.0正式发布，让我们看一看~
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="http://www.baidu.com" class="btn-small btn-link">
                            <span class="badge bg-success">热</span>
                            PHP7.0正式发布，让我们看一看~
                          </a>
                        </li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                    </div>
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

        <div class="row">
            <div class="col-lg-8">
                <h2>前端</h2>
                <div class="show-grid clearfix">
                  <div class="row">
                    <div class="col-lg-8">
                        <div class="input-group show-grid">
                        <span class="input-group-addon">w3cschool中搜索</span>
                          <input type="text" class="form-control" placeholder="w3cschool中搜索">
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
                </div>
                <div class="show-grid">
                    <div class="panel panel-default">
                      <div class="panel-heading">前端</div>
                      <ul class="list-group">
                        <li class="list-group-item">
                          <strong>权威网站：</strong>
                          <a type="button" class="label label-primary" href="http://www.php.net">PHP官网</a>
                          <a type="button" class="label label-info" href="http://www.php.net">PHP内核</a>
                          <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                        </li>
                        <li class="list-group-item">
                          <strong>知名博客：</strong>
                          <a type="button" class="label label-primary" href="http://www.zhangxinxu.com/" target="_blank">张鑫旭</a>
                          <a type="button" class="label label-info" href="http://www.jq22.com/">http://www.jq22.com/</a>
                          <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                        </li>
                        <li class="list-group-item">
                          <strong>资源网站：</strong>
                          <a type="button" class="label label-primary" href="http://www.jq22.com/" target="_blank">jQuery插件大集合</a>
                          <a type="button" class="label label-info" href="http://www.jq22.com/">http://www.jq22.com/</a>
                          <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                        </li>
                        <li class="list-group-item">
                          <a href="http://www.baidu.com" class="btn-small btn-link">
                            <span class="badge bg-primary">荐</span>
                            PHP7.0正式发布，让我们看一看~
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="http://www.baidu.com" class="btn-small btn-link">
                            <span class="badge bg-success">热</span>
                            PHP7.0正式发布，让我们看一看~
                          </a>
                        </li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                    </div>
                    <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">更多</a></p>
                </div>
            </div>
            
            <div class="show-grid">
                  <div class="panel panel-default">
                    <div class="panel-heading">优秀开源方案</div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <strong>oto类：</strong>
                        <a type="button" class="label label-primary" href="http://www.wstmall.com/">wstmall</a>
                        <a type="button" class="label label-info" href="http://www.php.net">PHP内核</a>
                        <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                      </li>
                      <li class="list-group-item">
                        <strong>知名博客：</strong>
                        <a type="button" class="label label-primary" href="http://www.zhangxinxu.com/" target="_blank">张鑫旭</a>
                        <a type="button" class="label label-info" href="http://www.jq22.com/">http://www.jq22.com/</a>
                        <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                      </li>
                      <li class="list-group-item">
                        <strong>资源网站：</strong>
                        <a type="button" class="label label-primary" href="http://www.jq22.com/" target="_blank">jQuery插件大集合</a>
                        <a type="button" class="label label-info" href="http://www.jq22.com/">http://www.jq22.com/</a>
                        <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                      </li>
                      <li class="list-group-item">
                        <a href="http://www.baidu.com" class="btn-small btn-link">
                          <span class="badge bg-primary">荐</span>
                          PHP7.0正式发布，让我们看一看~
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="http://www.baidu.com" class="btn-small btn-link">
                          <span class="badge bg-success">热</span>
                          PHP7.0正式发布，让我们看一看~
                        </a>
                      </li>
                      <li class="list-group-item">Porta ac consectetur ac</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
                  <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">更多</a></p>
                </div>
            </div>
            <div class="show-grid">
                  <div class="panel panel-default">
                    <div class="panel-heading">wap开发</div>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <strong>微信:</strong>
                        <a type="button" class="label label-primary" href="http://easywechat.org/">微信api</a>
                        <a type="button" class="label label-info" href="http://www.php.net">PHP内核</a>
                        <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                      </li>
                      <li class="list-group-item">
                        <strong>知名博客：</strong>
                        <a type="button" class="label label-primary" href="http://www.zhangxinxu.com/" target="_blank">张鑫旭</a>
                        <a type="button" class="label label-info" href="http://www.jq22.com/">http://www.jq22.com/</a>
                        <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                      </li>
                      <li class="list-group-item">
                        <strong>资源网站：</strong>
                        <a type="button" class="label label-primary" href="http://www.jq22.com/" target="_blank">jQuery插件大集合</a>
                        <a type="button" class="label label-info" href="http://www.jq22.com/">http://www.jq22.com/</a>
                        <a type="button" class="label label-info" href="http://www.w3school.com.cn/php/">w3cschool的PHP教程</a>
                      </li>
                      <li class="list-group-item">
                        <a href="http://www.baidu.com" class="btn-small btn-link">
                          <span class="badge bg-primary">荐</span>
                          PHP7.0正式发布，让我们看一看~
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="http://www.baidu.com" class="btn-small btn-link">
                          <span class="badge bg-success">热</span>
                          PHP7.0正式发布，让我们看一看~
                        </a>
                      </li>
                      <li class="list-group-item">Porta ac consectetur ac</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
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
