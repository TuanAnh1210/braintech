<?php
class LessonModel extends BaseModel
{
    const TABLE = "courses_lesson";

    public function getAllLesson($id, $dep)
    {
        return $this->getDep(self::TABLE, $id, $dep);
    }

    public function addNewLesson($data)
    {
        return $this->create(self::TABLE, $data);
    }

    public function getOneLesson($id)
    {
        return $this->one(self::TABLE, $id);
    }

    public function updateLesson($data, $id)
    {
        return $this->update(self::TABLE, $data, $id);
    }

    public function deleteLesson($id)
    {
        return $this->delete(self::TABLE, $id);
    }
}