<?php
return array(
//*************************************附加设置***********************************
    'TMPL_ACTION_ERROR'      => THINK_PATH . 'Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'    => THINK_PATH . 'Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
	//活动时段参数配置	
	'ACTIVITY_PERIOD_CONFIG' => array(
			0 => '',
			1 => '上午',
			2 => '下午',
			3 => '晚上'
	),
	//活动时长参数配置
	'ACTIVITY_DURATION_CONFIG' => array(
			0 => '',
			1 => '三小时',
			2 => '四小时'
	),
	//活动所属区域参数配置	
	'ACTIVITY_AREA_CONFIG' => array(
			0 => '',
			1 => '东区',
			2 => '西区',
			3 => '中区',
			4 => '广厦',
			5 => '澄海',
			6 => '棉城',
			7 => '大客户'
	),
	//角色所属大区参数配置	
	'USER_REGION_CONFIG' => array(
			0 => '',
			1 => '市区',
			2 => '澄海',
			3 => '潮阳'
	),
	//签约状态	
	'CONTRACT_STATUS_CONFIG' => array(
			0 => '',
			1 => '未签约',
			2 => '新签',
			3 => '续签'
	),
	//三证齐全状态值
	'PROVE_CONFIG' => array(
			0 => '',
			1 => '是',
			2 => '否'
	),
	//即将到期商家
	'EXPIRING_CONFIG' => array(
			0 => '',
			1 => '7天内',
			2 => '一个月内',
			3 => '三个月内'
	),
	//商家套餐类型
	'PACKAGE_TYPE_CONFIG' => array(
			0 => '',
			1 => '1888半年',
			2 => '3688一年',
			3 => '抽点'
	),
	//商家品类
	'BUSINESS_CATEGORY_CONFIG' => array(
			0 => '',
			1 => '面包蛋糕',
			2 => '小吃零食',
			3 => '烧烤麻辣烫',
			4 => '汉堡披萨',
			5 => '寿司',
			6 => '中式快餐',
			7 => '饮料饮品',
			8 => '便利店',
			9 => '水果蔬菜',
			10 => '生鲜肉禽',
			11 => '鲜花礼品',
			12 => '茶烟酒',
			13 => '粮油干货',
			14 => '生活服务',
			15 => '快餐店',
			16 => '西饼店',
			17 => '饮料店',
			18 => '披萨店',
			19 => '甜品店',
			20 => '汉堡店',
			21 => '面食店',
			22 => '中西餐',
			23 => '咖啡店',
			24 => '火锅店',
			25 => '烧烤店',
			26 => '小吃店',
			27 => '炖品店',
			28 => '海鲜店',
			29 => '粥店',
			30 => '茶餐厅',
			31 => '婴幼儿',
			32 => '特产店',
			33 => '奶饮品',
			34 => '燃气店',
			35 => '美鞋店',
			36 => '粥粉面'
	),
	'VISITS_TYPE_CONFIG' => array(
			0 => '',
			1 => '陌生拜访',
			2 => '发掘需求',
			3 => '谈方案',
			4 => '签约',
			5 => '回访',
			6 => '暂无意向',
			7 => '机具维护'			
	)	
);
