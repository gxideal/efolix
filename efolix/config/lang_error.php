<?php
$config = array(
	'contact' => array(				//Controller
		'get' => array(				//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'Wrong Params handed!',
				'chs'	=> '参数传递错误!'
			),
			'2'	=>	array(
				'en' 	=> 'Failed To Query,Please Retry!',
				'chs'	=> '查询失败,请重试!'
			)
		),
		'update' => array(			//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'No Param Posted!',
				'chs'	=> '没有POST数据过来!'
			)
		),
		'import' => array(			//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'No file uploaded!',
				'chs'	=> '请上传文件!'
			),
			'2'	=>	array(
				'en' 	=> 'Only .csv allowed!',
				'chs'	=> '只允许上传csv文件!'
			),
			'3'	=>	array(
				'en' 	=> 'Unknown Error Occurred!',
				'chs'	=> '发生未知错误!'
			)
		),
	),
	
	'product' => array(				//Controller
		'add_sort' => array(		//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'Database Operation Failed! Retry Please!',
				'chs'	=> '数据库操作失败!请重试!'
			),
			'2'	=> array(			//ErrorCode
				'en' 	=> 'Name Empty!',
				'chs'	=> '分类名称必需!'
			)
		),
		'edit_sort' => array(		//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'Database Operation Failed! Retry Please!',
				'chs'	=> '数据库操作失败!请重试!'
			),
			'2'	=> array(			//ErrorCode
				'en' 	=> 'id required!',
				'chs'	=> '未获得ID参数!'
			)
		),
		'del_sort' => array(		//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'Database Operation Failed! Retry Please!',
				'chs'	=> '数据库操作失败!请重试!'
			),
			'2'	=> array(			//ErrorCode
				'en' 	=> 'id required!',
				'chs'	=> '未获得ID参数!'
			)
		),
		'add' => array(				//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'Database Operation Failed! Retry Please!',
				'chs'	=> '数据库操作失败!请重试!'
			)
		),
		'edit' => array(			//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'Database Operation Failed! Retry Please!',
				'chs'	=> '数据库操作失败!请重试!'
			),
			'2'	=> array(			//ErrorCode
				'en' 	=> 'id required!',
				'chs'	=> '未获得ID参数!'
			)
		),
		'del' => array(				//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'Database Operation Failed! Retry Please!',
				'chs'	=> '数据库操作失败!请重试!'
			),
			'2'	=> array(			//ErrorCode
				'en' 	=> 'id required!',
				'chs'	=> '未获得ID参数!'
			)
		)
	),
	
	'photo' => array(				//Controller
		'upload' => array(			//Action
			'1'	=> array(			//ErrorCode
				'en' 	=> 'No file uploaded!',
				'chs'	=> '未上传任何文件!'
			),
			'2'	=>	array(
				'en' 	=> 'Failed Saving!',
				'chs'	=> '保存失败!'
			),
			'3'	=>	array(
				'en' 	=> 'Failed saving to S3!',
				'chs'	=> '保存至亚马逊S3失败!'
			),
			'4'	=>	array(
				'en' 	=> 'Server Internal Error!',
				'chs'	=> '服务器内部配置错误!'
			)
		)
	)
);
