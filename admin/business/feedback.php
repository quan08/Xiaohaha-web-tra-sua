<?php

function renderAll()
{
    $sqlQuery = "SELECT * from feedback_order order by id DESC";
    $feedback = executeQuery($sqlQuery, true);
    admin_render('feedback/index.php', compact('feedback'), 'admin-assets/custom/admin-global.js');
}


function checkFeedB($id)
{
    $sqlQuery = "SELECT * from accounts where id = $id";
    $result = executeQuery($sqlQuery, false);
    return $result;
}
function sendEmailFeedback($id, $email)
{
    // dd($email);
    $url_feedback_order = BASE_URL . "don-hang-chi-tiet?id=$id";
    $title = "Trả lời từ Xiaohaha của đơn hàng #$id";
    $content = "Cảm ơn quý khách đã tin tưởng và ủng hộ trà sữa <b>XIAOHAHA</b> <br>";
    $content .= "Quý khách có thể click <a href='$url_feedback_order'> Tại đây</a> để xem phản hồi của Xiaohaha";
    sendEmail($title, $content, $email);
};
