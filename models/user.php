<?php

    include_once('pdo.php');

        // update user
        function updateUser($user_id, $full_name, $email, $password, $mobile, $role, $gender, $image)
        {
            try {
                // lấy thông từ ngưuời dùng từ id
                $user = getUserById($user_id);

                // Kiểm tra xem có ảnh mới được tải lên không và cập nhật đường dẫn ảnh
                $image_path = empty($image["name"]) ? $user['image'] : updateImage($image, $user['image']);

                // Cập nhật người dùng
                $sql_update = "UPDATE `users` SET `full_name`=?, `email`=?, `password`=?, `mobile`=?, `role`=?, `gender`=?, `image`=? WHERE `user_id`=?";
                pdo_execute($sql_update, $full_name, $email, $password, $mobile, $role, $gender, $image_path, $user_id);
            } catch (PDOException $e) {
                // Xử lý lỗi nếu có
                echo "Error: " . $e->getMessage();
            } finally {
                unset($conn);
            }
        }

        // delete user
        function delUser($user_id)
        {
            $sql = "DELETE FROM `users` WHERE `user_id`=?";
            pdo_execute($sql, $user_id);
        }
        
        // lay du lieu nguoi dung
        function getAllUsers() {
            try {
                $conn = pdo_get_connection();
                $sql = "SELECT * FROM users";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $users;
            } catch (PDOException $e) {
                throw $e;
            } finally {
                unset($conn);
            }
        }

        function getUserById($user_id) {
            // Lấy thông tin người dùng từ database để hiển thị trong biểu mẫu cập nhật
            try {
                $conn = pdo_get_connection();
                $sql = "SELECT * FROM users WHERE user_id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$user_id]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                return $user;
            } catch (PDOException $e) {
                // Xử lý lỗi nếu có
                echo "Error: " . $e->getMessage();
            }            
        }

        // Hàm upload ảnh 
        function updateImage($newImage, $oldImagePath)
        {
            $target_dir = "../upload/";
            $newImagePath = $oldImagePath;

            // Kiểm tra xem có ảnh mới được tải lên không
            if (!empty($newImage["name"])) {
                // Xóa ảnh cũ nếu tồn tại
                file_exists($oldImagePath) && unlink($oldImagePath);

                // Cập nhật ảnh mới
                $newImagePath = $target_dir . basename($newImage["name"]);
                move_uploaded_file($newImage["tmp_name"], $newImagePath);
            }

            return $newImagePath;
        }
    
?>