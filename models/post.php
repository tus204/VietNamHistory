<?php
function loadall_post(){
    $sql ="SELECT * FROM posts ORDER BY post_id ";
    $listpost= pdo_query($sql);
    return $listpost;
}
function insert_post($post_title,$post_content,$post_time,$category_id){
    $sql = "INSERT INTO `posts`( `post_title`, `post_content`, `post_time`, `category_id`) VALUES ('$post_title','$post_content','$post_time','$category_id')";
pdo_execute($sql);
}
?>