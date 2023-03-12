<?php 
    class Detail_courseModel extends BaseModel {
        const TABLE = "detail_course";

        public function insertDetailCourse($data) {
            return $this -> create(self::TABLE, $data);
        }
    }
