<?php

return [
    // 默认Host地址
    'app_host'               => '127.0.0.1',
    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => true,
    
    // 数据库连接
    'database' => [
    	// 服务器地址
	    'hostname'        => '127.0.0.1',
	    // 数据库名
	    'database'        => 'dev',
	    // 数据库用户名
	    'username'        => 'root',
	    // 数据库密码
	    'password'        => 'root',
	    // 数据库表前缀
	    'prefix'          => 'tb',
	    // 数据库调试模式
	    'debug'           => false,
	    // 自动写入时间戳字段
	    'auto_timestamp'  => false,
	    // 时间字段取出后的默认时间格式
	    'datetime_format' => 'Y-m-d H:i:s',
    ]
];