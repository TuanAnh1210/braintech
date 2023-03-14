<?php
    class CommentsModel extends BaseModel{
        public function getAllCmt(){
            $sql="SELECT  courses_lesson.name,comments.id_lesson, COUNT(id_lesson) AS totalCmt FROM comments JOIN courses_lesson ON comments.id_lesson = courses_lesson.id GROUP BY id_lesson";
            return $this->query_all($sql);
        }
        public function getDetailCmt($id){
            $sql = "SELECT comments.content,comments.id, comments.date_cmt,users.name,users.avatar FROM comments JOIN users ON comments.id_user=users.id WHERE comments.id_lesson=$id";
            return $this->query_all($sql);
        }
        public function deleteCmts($id){
            return $this->delete("comments",$id);
        }
    }
?>