<?php
require_once('./lib/paymentwall.php');
Paymentwall_Config::getInstance()->set(array(
    'api_type' => Paymentwall_Config::API_GOODS,
    'public_key' => '',
    'private_key' => ''
));

$widget = new Paymentwall_Widget(
    '2323123', // uid
    'p1', // widget
    array(
    	'shop_id'=>1,
    	'shop_name'=>'钻石',
    	'shop_amount'=>1
    ), // Product parts, leave empty for Widget API
    array(
        'email' => '15951982354@163.com', 
        'history[registration_date]' => 'registered_date_of_user',
        'ps' => 'all', // Replace the value of 'ps' with specific payment system short code for Widget API uni
        'addtional_param_name' => 'addtional_param_value'
    )
);

echo $widget->getHtmlCode();

?>