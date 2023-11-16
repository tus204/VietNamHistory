<?php
    include_once('pdo.php');

    class quiz {
        public static function getAllQuiz() {
            try {
                $conn = pdo_get_connection();
                $sql = "SELECT * FROM quiz";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $quiz = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $quiz;
            } catch (PDOException $e) {
                throw $e;
            } finally {
                unset($conn);
            }
        }
    }
?>