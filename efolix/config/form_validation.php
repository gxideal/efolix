<?php
$config = array(
	'contact' => array(
        array(
                'field' => 'first_name',
                'rules' => 'trim|xxs_clean|required|max_length[20]'
             ),
        array(
                'field' => 'last_name',
                'rules' => 'trim|xxs_clean|required|max_length[20]'
             ),
        array(
                'field' => 'email',
                'rules' => 'trim|xxs_clean|valid_email'
             ),
        array(
                'field' => 'phone',
                'rules' => 'trim|xxs_clean|min_length[5]|max_length[15]'
			 ),
		array(
                'field' => 'stars',
                'rules' => 'trim|xxs_clean|less_than[5]'
			 )
	),
	'contact_get' => array(
        array(
                'field' => 'page',
                'rules' => 'is_natural_no_zero'
             ),
        array(
                'field' => 'size',
                'rules' => 'is_natural_no_zero'
             ),
        array(
                'field' => 'star',
                'rules' => 'less_than[6]'
             ),
        array(
                'field' => 'keyword',
                'rules' => 'trim|xxs_clean|min_length[2]|max_length[50]'
			 )
	),
	'product' => array(
        array(
                'field' => 'name',
                'rules' => 'required|trim|min_length[2]|max_length[50]'
             )
	)
);