<?php
//单个数据库服务器
return [
    'host' => '127.0.0.1',
    'port' => 3306,
    'dbname' => 'mysql_test',
    'options' => null,
    'username' => 'root',
    'password' => '',
];

//你可以考虑读写分离，配置文件如下
/*return [
    'read' => [
        [
            'host' => '127.0.0.1',
            'port' => 3307,
            'dbname' => 'mysql_test',
            'options' => null,
            'username' => 'root',
            'password' => '',
        ],
        [
            'host' => '127.0.0.1',
            'port' => 3308,
            'dbname' => 'mysql_test',
            'options' => null,
            'username' => 'root',
            'password' => '',
        ]
    ],
    'write' => [
        [
            'host' => '127.0.0.1',
            'port' => 3306,
            'dbname' => 'mysql_test',
            'options' => null,
            'username' => 'root',
            'password' => '',
        ]
    ]
];*/