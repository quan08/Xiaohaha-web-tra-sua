<?php

const BASE_URL = "http://localhost/duan1-nhom7/";
const ADMIN_URL = BASE_URL . 'cp-admin/';
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';
const CLIENT_ASSET = BASE_URL . 'public/client-assets/';

function dd()
{
    $data = func_get_args();
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

function client_render($view, $data = [], $jsFile = null)
{
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}

function admin_render($view, $data = [], $jsFile = null)
{
    extract($data);
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}

function delAll($nameTable, $key, $listDel)
{
    for ($i = 0; $i < count($listDel); $i++) {
        $query = "DELETE from $nameTable where $key = '$listDel[$i]'";
        executeQuery($query, true);
    }
}
?>
<script>
    function confirm_remove(url, name, pageName = null) {
        Swal.fire({
            title: `Bạn có thực sự muốn xóa ${pageName} "${name}"?`,
            // showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Đồng ý",
            cancelButtonText: `Hủy`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }

    delList = [];

    function reLoad() {
        location.reload();
    }

    function reInput() {
        var inputs = document.querySelectorAll("input");
        for (var i = 0; i < inputs.length; i++) {
            if ((inputs[i].attributes = "radio")) {
                inputs[i].value = "";
            } else if ((inputs[i].attributes = "radio")) {
                inputs[i].checked = false;
            }
        }
    }

    function chooseAll() {
        var checkboxs = document.getElementsByName("checkbox[]");
        for (var i = 0; i < checkboxs.length; i++) {
            checkboxs[i].checked = true;
        }
    }

    function unchooseAll() {
        var checkboxs = document.getElementsByName("checkbox[]");
        for (var i = 0; i < checkboxs.length; i++) {
            checkboxs[i].checked = false;
        }
    }

    function checkbox() {
        var key = document.querySelectorAll(".key");
        var checkboxs = document.getElementsByName("checkbox[]");
        for (var i = 0; i < checkboxs.length; i++) {
            if (checkboxs[i].checked == true) {
                delList.push(key[i].innerHTML);
            }
        }

        function insertParam(key, value) {
            key = encodeURI(key);
            value = encodeURI(value);

            var kvp = document.location.search.substr(1).split("&");

            var i = kvp.length;
            var x;
            while (i--) {
                x = kvp[i].split("=");

                if (x[0] == key) {
                    x[1] = value;
                    kvp[i] = x.join("=");
                    break;
                }
            }

            if (i < 0) {
                kvp[kvp.length] = [key, value].join("=");
            }

            //this will reload the page, it's likely better to store this until finished
            document.location.search = kvp.join("&");
        }
        if (delList.length == 0) {
            alert("Chưa có mục nào được chọn");
        }
        insertParam("dels", delList);
    }
</script>