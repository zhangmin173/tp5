<?php

return [
	// 默认Host地址
    'app_host'               => '',
    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => true,
    // 默认输出类型
    'default_return_type'    => 'html',
    // 默认AJAX 数据返回格式,可选json xml ...
    'default_ajax_return'    => 'json',
    // 默认JSONP格式返回的处理方法
    'default_jsonp_handler'  => 'jsonpReturn',
    // 默认JSONP处理方法
    'var_jsonp_handler'      => 'callback',
    // 默认全局过滤方法 用逗号分隔多个
    'default_filter'         => '',

    'database' => [
        // 数据库类型
        'type'            => 'mysql',
    	// 服务器地址
        'hostname'        => '127.0.0.1',
        // 数据库名
        'database'        => 'tp5',
        // 数据库用户名
        'username'        => 'root',
        // 数据库密码
        'password'        => '',
        // 数据库表前缀
        'prefix'          => 'tb_',
        // 数据库调试模式
        'debug'           => false,
        // 自动写入时间戳字段
        'auto_timestamp'  => false,
        // 时间字段取出后的默认时间格式
        'datetime_format' => 'Y-m-d H:i:s',
    ]
];