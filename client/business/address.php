<?php

require_once './dao/system_dao.php';
function address($ma_kh)
{
    $sqlQuery = "select * from address where user_id = $ma_kh";
    $address = executeQuery($sqlQuery, true);
    client_render('address/index.php', compact('address'), 'admin-assets/custom/admin-global.js');
}

function edit_address($id)
{
    $sqlQuery = "select * from address where id = $id";
    $address = executeQuery($sqlQuery, true);
    client_render('address/edit.php', compact('address') );
}
function delete_address_one($dellid)
{
    $sqlQuery = "delete from address where id = $dellid";
    executeQuery($sqlQuery, true);
    echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    exit();
}

function delete_addresss($dellid)
{
    delAll('address', 'id', explode(',', $dellid));
    echo "Xóa các mục đã chọn thành công";
    echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    exit();
}

function edit($id, $name, $call, $address, $note)
{
    $sqlQuery = "Update address set phone = '$call', recciever = '$name', address = '$address', note = '$note' where id = $id";
    executeQuery($sqlQuery, true);
    echo "Cập nhật thành công";
    echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    exit();
}

?>
