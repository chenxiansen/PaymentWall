<?php
require_once('../lib/paymentwall.php');
Paymentwall_Config::getInstance()->set(array(
    'api_type' => Paymentwall_Config::API_GOODS,
    'public_key' => 'e23b0408f3e308f01ae36d807a8cd25f',
    'private_key' => '671446f9456d6535337d7ce3e2747b0c'
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