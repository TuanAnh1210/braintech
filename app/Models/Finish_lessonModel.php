<?php
class Finish_lessonModel extends BaseModel
{
    const TABLE = "finish_lesson";

    public function getFinishLessonByIdUser($id)
    {
        $sql = "SELECT * FROM finish_lesson WHERE id_user = $id";
        return $this->query_all($sql);
    }

    public function getAll()
    {
        return $this->all(self::TABLE);
    }

    public function insertLessonFinish($data)
    {
        return $this->create(self::TABLE, $data);
    }
}