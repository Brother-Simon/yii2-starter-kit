<?php
/**
 * @var $this yii\web\View
 */
use backend\assets\BackendAsset;
use backend\widgets\Menu;
use common\models\TimelineEvent;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$bundle = BackendAsset::register($this);
?>
<?php $this->beginContent('@backend/views/layouts/base.php'); ?>
    <div class="wrapper">
        <!-- header logo: style can be found in header.less -->
        <header class="main-header">
            <a href="<?php echo Yii::getAlias('@frontendUrl') ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
<!--                 <?php echo Yii::$app->name ?>
 -->
          	马欢管理后台
             </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only"><?php echo Yii::t('backend', 'Toggle navigation') ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li id="timeline-notifications" class="notifications-menu">
                            <a href="<?php echo Url::to(['/timeline-event/index']) ?>">
                                <i class="fa fa-bell"></i>
                                <span class="label label-success">
                                    <?php echo TimelineEvent::find()->today()->count() ?>
                                </span>
                            </a>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <!-- <li id="log-dropdown" class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                            <span class="label label-danger">
                                <?php echo \backend\models\SystemLog::find()->count() ?>
                            </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><?php echo Yii::t('backend', 'You have {num} log items', ['num'=>\backend\models\SystemLog::find()->count()]) ?></li>
                                <li>

                                    <ul class="menu">
                                        <?php foreach(\backend\models\SystemLog::find()->orderBy(['log_time'=>SORT_DESC])->limit(5)->all() as $logEntry): ?>
                                            <li>
                                                <a href="<?php echo Yii::$app->urlManager->createUrl(['/log/view', 'id'=>$logEntry->id]) ?>">
                                                    <i class="fa fa-warning <?php echo $logEntry->level == \yii\log\Logger::LEVEL_ERROR ? 'text-red' : 'text-yellow' ?>"></i>
                                                    <?php echo $logEntry->category ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <?php echo Html::a(Yii::t('backend', 'View all'), ['/log/index']) ?>
                                </li>
                            </ul>
                        </li> -->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo Yii::$app->user->identity->userProfile->getAvatar($this->assetManager->getAssetUrl($bundle, 'img/anonymous.jpg')) ?>" class="user-image">
                                <span><?php echo Yii::$app->user->identity->username ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header light-blue">
                                    <img src="<?php echo Yii::$app->user->identity->userProfile->getAvatar($this->assetManager->getAssetUrl($bundle, 'img/anonymous.jpg')) ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo Yii::$app->user->identity->username ?>
                                        <small>
                                            <?php echo Yii::t('backend', '注册于 {0, date, short}', Yii::$app->user->identity->created_at) ?>
                                        </small>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <?php echo Html::a(Yii::t('backend', '设置'), ['/sign-in/profile'], ['class'=>'btn btn-default btn-flat']) ?>
                                    </div>
                                    <div class="pull-left">
                                        <?php echo Html::a(Yii::t('backend', '账户'), ['/sign-in/account'], ['class'=>'btn btn-default btn-flat']) ?>
                                    </div>
                                    <div class="pull-right">
                                        <?php echo Html::a(Yii::t('backend', '退出'), ['/sign-in/logout'], ['class'=>'btn btn-default btn-flat', 'data-method' => 'post']) ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?php echo Html::a('<i class="fa fa-cogs"></i>', ['/site/settings'])?>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo Yii::$app->user->identity->userProfile->getAvatar($this->assetManager->getAssetUrl($bundle, 'img/anonymous.jpg')) ?>" class="img-circle" />
                    </div>
                    <div class="pull-left info">
                        <p><?php echo Yii::t('backend', 'Hello, {username}', ['username'=>Yii::$app->user->identity->getPublicIdentity()]) ?></p>
                        <a href="<?php echo Url::to(['/sign-in/profile']) ?>">
                            <i class="fa fa-circle text-success"></i>
                           <!--  <?php echo Yii::$app->formatter->asDatetime(time()) ?> -->
                           马欢
                        </a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <?php echo Menu::widget([
                    'options'=>['class'=>'sidebar-menu'],
                    'linkTemplate' => '<a href="{url}">{icon}<span>{label}</span>{right-icon}{badge}</a>',
                    'submenuTemplate'=>"\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n",
                    'activateParents'=>true,
                    'items'=>[
                        [
                            'label'=>Yii::t('backend', '项目管理'),
                            'options' => ['class' => 'header']
                        ],
                        [
                            'label'=>Yii::t('backend', '仪器项目管理'),
                            'url' => '#',
                            'icon'=>'<i class="fa fa-edit"></i>',
                            'options'=>['class'=>'treeview'],
                            'items'=>[
                                [
                                'label'=>Yii::t('backend', '仪器名称'),
                                'url' => '#',
                                'icon'=>'<i class="fa fa-edit"></i>',
                                'options'=>['class'=>'treeview'],
                                'items'=>[
                                    ['label'=>Yii::t('backend', '仪器列表'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '添加仪器'), 'url'=>['/article-category/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ]
                                ],
                                [
                                'label'=>Yii::t('backend', '分布店面'),
                                'url' => '#',
                                'icon'=>'<i class="fa fa-edit"></i>',
                                'options'=>['class'=>'treeview'],
                                'items'=>[
                                    ['label'=>Yii::t('backend', '地图定位'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ]
                                ],
                                [
                                'label'=>Yii::t('backend', '使用频率'),
                                'url' => '#',
                                'icon'=>'<i class="fa fa-edit"></i>',
                                'options'=>['class'=>'treeview'],
                                'items'=>[
                                    ['label'=>Yii::t('backend', '每季度操作时间'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '每月操作时间'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '每日操作时间'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '每年操作时间'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ]
                                ],
                                [
                                'label'=>Yii::t('backend', '库存'),
                                'url' => '#',
                                'icon'=>'<i class="fa fa-edit"></i>',
                                'options'=>['class'=>'treeview'],
                                'items'=>[
                                    ['label'=>Yii::t('backend', '仪器数量'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '库存预警'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ]
                                ],
                                [
                                'label'=>Yii::t('backend', '成本'),
                                'url' => '#',
                                'icon'=>'<i class="fa fa-edit"></i>',
                                'options'=>['class'=>'treeview'],
                                'items'=>[
                                    ['label'=>Yii::t('backend', '仪器选购成本'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ]
                                ],
                                [
                                'label'=>Yii::t('backend', '出货量'),
                                'url' => '#',
                                'icon'=>'<i class="fa fa-edit"></i>',
                                'options'=>['class'=>'treeview'],
                                'items'=>[
                                    ['label'=>Yii::t('backend', '每日购买量'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '每月购买量'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '每季度购买量'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '每年购买量'), 'url'=>['/article/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ]
                                ]
                            ]
                        ],
                        [
                        'label'=>Yii::t('backend', '护理项目管理'),
                        'url' => '#',
                        'icon'=>'<i class="fa fa-edit"></i>',
                        'options'=>['class'=>'treeview'],
                        'items'=>[
                            [
                                'label'=>Yii::t('backend', '顾客使用情况'),
                                'url'=>['/article/index'],
                                'icon'=>'<i class="fa fa-angle-double-right"></i>',
                            ],
                            [
                            'label'=>Yii::t('backend', '预约系统'),
                            'url'=>['/article/index'],
                            'icon'=>'<i class="fa fa-angle-double-right"></i>',
                            ],
                        ]
                        ],
                        [
                            'label'=>Yii::t('backend', '养生项目管理'),
                            'icon'=>'<i class="fa fa-users"></i>',
                            'url'=>['/learn/index'],
                            'visible'=>Yii::$app->user->can('administrator')
                        ],
                        [
                            'label'=>Yii::t('backend', '产品管理'),
                            'url' => '#',
                            'icon'=>'<i class="fa fa-edit"></i>',
                            'options'=>['class'=>'treeview'],
                            'items'=>[
                                [
                                    'label'=>Yii::t('backend', '产品发布'),
                                    'url'=>['/produce/publish'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '产品列表'),
                                    'url'=>['/produce/list'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                'label'=>Yii::t('backend', '产品审核'),
                                'url'=>['/produce/care'],
                                'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        [
                            'label'=>Yii::t('backend', '订单管理'),
                            'url' => '#',
                            'icon'=>'<i class="fa fa-edit"></i>',
                            'options'=>['class'=>'treeview'],
                            'items'=>[
                                [
                                    'label'=>Yii::t('backend', '销售列表'),
                                    'url'=>['/order/sale_list'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '订单详情'),
                                    'url'=>['/order/sale_detail'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        //顾客管理

                        [
                        'label'=>Yii::t('backend', '顾客管理'),
                        'options' => ['class' => 'header']
                        ],
                        [
                            'label'=>Yii::t('backend', '顾客分级系统'),
                            'url' => '#',
                            'icon'=>'<i class="fa fa-edit"></i>',
                            'options'=>['class'=>'treeview'],
                            'items'=>[
                                [
                                    'label'=>Yii::t('backend', '顾客级别设置'),
                                    'url' => '#',
                                    'icon'=>'<i class="fa fa-edit"></i>',
                                    'options'=>['class'=>'treeview'],
                                    'items'=>[
                                        ['label'=>Yii::t('backend', '设置消费级别'), 'url'=>['/customer/set_level'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                        ['label'=>Yii::t('backend', '自动升级'), 'url'=>['/customer/auto_update'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                        ['label'=>Yii::t('backend', '不同级别折扣'), 'url'=>['/customer/level_sale'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ]
                                ],
                            ]
                        ],
                        [
                        'label'=>Yii::t('backend', '营销管理系统'),
                        'url' => '#',
                        'icon'=>'<i class="fa fa-edit"></i>',
                        'options'=>['class'=>'treeview'],
                        'items'=>[
                            [
                                'label'=>Yii::t('backend', '营销活动'),
                                'url' => '#',
                                'icon'=>'<i class="fa fa-edit"></i>',
                                'options'=>['class'=>'treeview'],
                                'items'=>[
                                    ['label'=>Yii::t('backend', '首次免单'), 'url'=>['/sale/first_free'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '节日折扣'), 'url'=>['/sale/holiday_sale'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                    ['label'=>Yii::t('backend', '赠品活动'), 'url'=>['/sale/free_gift'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ]
                            ],
                        ]
                        ],

                        //横向管理
                        [
                        'label'=>Yii::t('backend', '横向管理'),
                        'options' => ['class' => 'header']
                        ],

                        [
                            'label'=>Yii::t('backend', '店铺OA'),
                            'url' => '#',
                            'icon'=>'<i class="fa fa-edit"></i>',
                            'options'=>['class'=>'treeview'],
                            'items'=>[
                                [
                                    'label'=>Yii::t('backend', '员工考勤'),
                                    'url'=>['/shop/daliy'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '绩效考核'),
                                    'url'=>['/shop/mechine'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '员工信息'),
                                    'url'=>['/shop/yuangong'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        [
                            'label'=>Yii::t('backend', '店铺介绍'),
                            'url' => '#',
                            'icon'=>'<i class="fa fa-edit"></i>',
                            'options'=>['class'=>'treeview'],
                            'items'=>[
                                [
                                    'label'=>Yii::t('backend', '环境介绍'),
                                    'url'=>['/shop_set/enviroment'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '一键拨号'),
                                    'url'=>['/shop_set/phone'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '地址信息'),
                                    'url'=>['/shop_set/addr'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                'label'=>Yii::t('backend', '环境介绍'),
                                'url'=>['/shop_set/enviroment'],
                                'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '一键拨号'),
                                    'url'=>['/shop_set/phone'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '地址信息'),
                                    'url'=>['/shop_set/addr'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                'label'=>Yii::t('backend', '店铺展示'),
                                'url'=>['/shop_set/show'],
                                'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '联系方式'),
                                    'url'=>['/shop_set/cantact'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '公司展示'),
                                    'url'=>['/shop_set/show_company'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        //纵向管理
                        [
                        'label'=>Yii::t('backend', '纵向管理'),
                        'options' => ['class' => 'header']
                        ],

                        [
                            'label'=>Yii::t('backend', '信息推送'),
                            'url' => '#',
                            'icon'=>'<i class="fa fa-edit"></i>',
                            'options'=>['class'=>'treeview'],
                            'items'=>[
                                [
                                    'label'=>Yii::t('backend', '产品通知'),
                                    'url'=>['/message/produce'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '会议通知'),
                                    'url'=>['/message/meeting'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '培训通知'),
                                    'url'=>['/message/study'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '系统通知'),
                                    'url'=>['/message/system'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '活动通知'),
                                    'url'=>['/message/activity'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        [
                            'label'=>Yii::t('backend', '权限管理'),
                            'url' => '#',
                            'icon'=>'<i class="fa fa-edit"></i>',
                            'options'=>['class'=>'treeview'],
                            'items'=>[
                                [
                                    'label'=>Yii::t('backend', '设备管理'),
                                    'url'=>['/manage/manchine'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '操作员管理'),
                                    'url'=>['/manage/sys'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '用户管理'),
                                    'url'=>['/manage/customer'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label'=>Yii::t('backend', '数据管理'),
                                    'url'=>['/manage/data'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                ],

                            ]
                        ],

                        [
                            'label'=>Yii::t('backend', '系统管理'),
                            'options' => ['class' => 'header']
                        ],
                        [
                            'label'=>Yii::t('backend', '用户管理'),
                            'icon'=>'<i class="fa fa-users"></i>',
                            'url'=>['/user/index'],
                            'visible'=>Yii::$app->user->can('administrator')
                        ],

                        [
                            'label'=>Yii::t('backend', '其他设置'),
                            'url' => '#',
                            'icon'=>'<i class="fa fa-cogs"></i>',
                            'options'=>['class'=>'treeview'],
                            'items'=>[
                                // [
                                //     'label'=>Yii::t('backend', 'i18n'),
                                //     'url' => '#',
                                //     'icon'=>'<i class="fa fa-flag"></i>',
                                //     'options'=>['class'=>'treeview'],
                                //     'items'=>[
                                //         ['label'=>Yii::t('backend', 'i18n Source Message'), 'url'=>['/i18n/i18n-source-message/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                //         ['label'=>Yii::t('backend', 'i18n Message'), 'url'=>['/i18n/i18n-message/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                //     ]
                                // ],
                                ['label'=>Yii::t('backend', '键值设置'), 'url'=>['/key-storage/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ['label'=>Yii::t('backend', '文件存储'), 'url'=>['/file-storage/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ['label'=>Yii::t('backend', '缓存'), 'url'=>['/cache/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                ['label'=>Yii::t('backend', '文件管理'), 'url'=>['/file-manager/index'], 'icon'=>'<i class="fa fa-angle-double-right"></i>'],
                                [
                                    'label'=>Yii::t('backend', '系统信息'),
                                    'url'=>['/system-information/index'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>'
                                ],
                                [
                                    'label'=>Yii::t('backend', '日志'),
                                    'url'=>['/log/index'],
                                    'icon'=>'<i class="fa fa-angle-double-right"></i>',
                                    'badge'=>\backend\models\SystemLog::find()->count(),
                                    'badgeBgClass'=>'label-danger',
                                ],
                            ]
                        ]
                    ]
                ]) ?>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $this->title ?>
                    <?php if (isset($this->params['subtitle'])): ?>
                        <small><?php echo $this->params['subtitle'] ?></small>
                    <?php endif; ?>
                </h1>

                <?php echo Breadcrumbs::widget([
                    'tag'=>'ol',
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </section>

            <!-- Main content -->
            <section class="content">
                <?php if (Yii::$app->session->hasFlash('alert')):?>
                    <?php echo \yii\bootstrap\Alert::widget([
                        'body'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                        'options'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
                    ])?>
                <?php endif; ?>
                <?php echo $content ?>
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

<?php $this->endContent(); ?>