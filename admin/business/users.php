<?php

function users()
{
    $sql = " select * from accounts where role = 1";
    $users = executeQuery($sql, true);
    admin_render(
        'users/users.php',
        compact('users'),
        'admin-assets/custom/admin-global.js'
    );
}

function staff()
{
    $sql = " select * from accounts where role = 2 ";
    $staff = executeQuery($sql, true);
    admin_render(
        'users/staff.php',
        compact('staff'),
        'admin-assets/custom/admin-global.js'
    );
}

function edit_staff($id)
{
    $sql = " select * from accounts where id = $id ";
    $staff = executeQuery($sql, true);
    admin_render(
        'users/edit.php',
        compact('staff')
    );
}


function edit_user($id)
{
    $sqlQuery = "select * from accounts where id = $id";
    $user = executeQuery($sqlQuery, true);
    admin_render('users/edit.php', compact('user'));
}
function delete_user_one($dellid)
{
    $sqlQuery = "delete from accounts where id = $dellid";
    executeQuery($sqlQuery, true);
    echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    exit();
}

function delete_user($dellid)
{
    delAll('accounts', 'id', explode(',', $dellid));
    echo "Xóa các mục đã chọn thành công";
    echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    exit();
}

function edit($id, $vaitro)
{
    $sqlQuery = "Update accounts set role = '$vaitro' where id = $id";
    executeQuery($sqlQuery, true);
    echo "Cập nhật thành công";
    echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    exit();
}
function Count_users($vaitro)
{
    $sqlQuery = "select count(*) from accounts where role = $vaitro";
    $total = executeQuery($sqlQuery, true);
    return $total;
}

function account_index($role)
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "SELECT * from accounts where name like '%$keyword%' and role = $role";
    $account = executeQuery($sql, true);
    $keyword = '';
    // hiển thị view
    if($role == 2) {
        admin_render('users/staff.php', compact('account', 'keyword'), 'admin-assets/custom/admin-global.js');
    }
    else{
        admin_render('users/users.php', compact('account', 'keyword'), 'admin-assets/custom/admin-global.js');  
    }
}
