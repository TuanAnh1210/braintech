<?php
class Detail_courseModel extends BaseModel
{
    const TABLE = "detail_course";

    public function insertDetailCourse($data)
    {
        return $this->create(self::TABLE, $data);
    }

    public function getAll()
    {
        return $this->all(self::TABLE);
    }

    public function getInfoCourse_User($id)
    {
        $sql = "SELECT courses.id,courses.name, courses.thumb, detail_course.status_learn FROM detail_course JOIN courses ON detail_course.course_id = courses.id WHERE detail_course.user_id = $id";

        return $this->query_all($sql);
    }

    public function getCourseDetail($id)
    {
        $sql = "SELECT courses.name, COUNT(detail_course.course_id) totalLearner FROM detail_course RIGHT JOIN courses ON detail_course.course_id = courses.id WHERE courses.cate_id = $id GROUP BY courses.id";
        return $this->query_all($sql);
    }
}