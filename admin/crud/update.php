<?php
/**
 * Created by PhpStorm.
 * User: jjes
 * Date: 2016/11/4
 * Time: 下午 04:02
 */
    include '../../../../mainfile.php';

    $update_data = array_map("addslashes",
        array_map("htmlspecialchars", $_POST));

    if(isset($update_data['update_id']) &&
        strlen( $update_data["name"]) &&
        strlen($update_data["amount"]) &&
        intval($update_data["amount"]) > 0 &&
        intval($update_data["amount"]) > 0
    ){

        $update_name = $update_data["name"];
        $update_amount = $update_data["amount"];
        $update_id = $update_data['update_id'];
        $sql = sprintf("UPDATE `%s` SET `name`='{$update_id}', `amount`={$update_amount} WHERE `id`={$update_id}" ,
            $xoopsDB->prefix('equipment_desc')
        );

        echo $sql;
    }