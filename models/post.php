<?php
function insert_post($post_title, $post_content, $post_time,$image,$category_id){
    $sql = "INSERT INTO `posts`( `post_title`, `post_content`, `post_time`, `image`, `category_id`) VALUES ('$post_title','$post_content','$post_time','$image','$category_id')";
    pdo_execute($sql);
}
function loadall_post(){
    $sql ="SELECT us.full_name as full_name, po.post_title, po.post_content, po.post_time , po.image, po.category_id, po.post_id, po.post_id , po.user_id
     FROM posts as po
    INNER JOIN users as us
    ON po.user_id = us.user_id
     ORDER BY post_id ";
    $listpost= pdo_query($sql);
    return $listpost;
}   

function delete_post(){
    $sql = "DELETE FROM posts WHERE post_id=".$_GET['id'];
    pdo_execute($sql);
}
function loadone_post(){
    $sql = "SELECT * FROM posts WHERE post_id=".$_GET['id'];
    $post = pdo_query_one($sql);
    return $post;
}
function update_post($post_id,$post_title,$post_content,$post_time,$image,$category_id){
    $sql = "UPDATE `posts` SET `post_title`='$post_title',`post_content`='$post_content',`post_time`='$post_time',`image`='$image',`category_id`='$category_id' WHERE post_id=".$post_id;
    pdo_execute($sql);
}
?>