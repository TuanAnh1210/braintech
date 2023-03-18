<?php 
    class Quizz_answerModel extends BaseModel {
        const TABLE = "quizz_answer";

        public function getAnswer($id) {
            return $this -> getDep(self::TABLE, $id, "quizz_id");
        }
    }