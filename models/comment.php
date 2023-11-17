<?php
function loadall_comment(){
    $sql ="SELECT us.full_name as full_name, co.comment_id ,co.user_id, co.post_id, co.comment_text, co.comment_time
    FROM comments as co
    INNER JOIN users as us
    ON co.user_id = us.user_id;
    
    ORDER BY comment_id";
    $listcomment = pdo_query($sql);
    return $listcomment;
}
function delete_comment(){
    $sql ="DELETE FROM comments WHERE comment_id=".$_GET['id'];
    pdo_execute($sql);
}
?>