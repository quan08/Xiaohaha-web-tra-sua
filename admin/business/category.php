<?php

function cate_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "SELECT * from categories where name like '%$keyword%'";
    $cates = executeQuery($sql, true);
    $keyword = '';
    // hiển thị view
    admin_render('category/index.php', compact('cates', 'keyword'), 'admin-assets/custom/admin-global.js');
}

function cate_remove()
{
    $id = $_GET['id'];
    $sql = "DELETE from categories where id = $id";
    pdo_execute($sql);
    header("location: " . ADMIN_URL . 'danh-muc');
}

function cate_add_form()
{
    admin_render('category/add-form.php', [], 'admin-assets/custom/admin-global.js');
}

function cate_save_add()
{
    $name = $_POST['name'];
    $show_menu = isset($_POST['show_menu']) ? 1 : 0;
    $sql = "INSERT into categories (name, show_menu) values ('$name', $show_menu)";
    pdo_execute($sql);
    header("location: " . ADMIN_URL . 'danh-muc');
}
//cập nhật danh mục
function cate_update()
{
    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $link_cate = BASE_URL."danh-muc?id=".$id;
        $update_at = date('y/m/d');
        $cate_show_new = $_POST['show_menu'];
        $cate_name_new = $_POST['name'];
        $sql = "UPDATE categories SET name = '$cate_name_new', show_menu = '$cate_show_new', updated_at = '$update_at', cate_slug = '$link_cate' WHERE id = '$id'";
        pdo_execute($sql);
        header("location: " . BASE_URL . "cp-admin/danh-muc");
    }
    admin_render('category/cate_update.php');
}
//end 
