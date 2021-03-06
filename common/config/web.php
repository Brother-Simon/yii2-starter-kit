<?php
$config = [
    'components' => [
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'linkAssets' => true,
            'appendTimestamp' => YII_ENV_DEV
        ]
    ],
    'as locale' => [
        'class' => 'common\behaviors\LocaleBehavior',
        'enablePreferredLanguage' => true
    ]
];

// if (YII_DEBUG) {
if (true) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '221.8.52.56','192.168.33.1', '*.*.*.*', '::::', '192.168.0.100', '172.17.42.1'],
    ];
}

    $config['modules']['gii'] = [
        'allowedIPs' => ['127.0.0.1', '::1', '*.*.*.*','192.168.33.1', '::::', '172.17.42.1', '192.168.0.100'],
    ];


return $config;
