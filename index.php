<?php

require_once 'consts.php';
require_once 'functions.php';
require_once 'classes.php';


$data = get_data(API_URL);
$days_until_msg = get_until_message($data['days_until'])

?>

<?php render_template('head', $data); ?>
<?php render_template('main', array_merge(
    $data,
    ["days_until_msg" => $days_until_msg]
)); ?>
<?php render_template('styles'); ?>