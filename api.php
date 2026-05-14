<?php
$data = array(
    "name" => "John",
    "phone" => "9999999999",
    "email" => "john@gmail.com"
);

$options = array(
    'http' => array(
        'header'  => "Content-Type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data)
    )
);

$context = stream_context_create($options);

$result = file_get_contents(
    "https://youraspnetdomain.com/PreEnquiry.ashx",
    false,
    $context
);

echo $result;
?>
