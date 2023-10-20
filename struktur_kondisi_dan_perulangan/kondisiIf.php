<?php
$user = array('user_id' => 1, 'username' => 'linds');

//user=array(1,'linds');

// echo $user['username'];

if (is_array($user)) {
    $user_id = isset($user['user_id']) ? $user['user_id'] : null;
    $username = isset($user['username']) ? $user['username'] : null;
    //statemen lainnya
}
echo $user_id;
echo $username;
?>