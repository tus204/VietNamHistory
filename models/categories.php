<?php
function insert_category($category_name){
    $sql = "INSERT INTO `categories`( `category_name`) VALUES ( '$category_name')";
    pdo_execute($sql);
}
function loadall_category(){
    $sql ="SELECT * FROM categories ORDER BY category_name ";
    $listcategory= pdo_query($sql);
    return $listcategory;
}
function delete_category(){
    $sql = "DELETE FROM categories WHERE id=".$_GET['category_id'];
    pdo_execute($sql);
}
function loadone_categories($id){
    $sql = "SELECT * FROM categories WHERE id=".$_GET['category_id'];
    $category = pdo_query_one($sql);
    return $category;
}
function update_categories($category_id , $category_name){
    $sql = "UPDATE categories SET category_name='".$category_name."' WHERE id=".$category_id;
    pdo_execute($sql);
}

?>