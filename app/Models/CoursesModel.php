<?php
class CoursesModel extends BaseModel
{
    const TABLE = 'courses';

    public function getCourse($cate_id, $dep)
    {
        return $this->getDep(self::TABLE, $cate_id, $dep);
    }

    public function getOneCourse($id)
    {
        return $this->one(self::TABLE, $id);
    }

    public function addNewCourse($data)
    {
        return $this->create(self::TABLE, $data);
    }

    public function updateCourse($data, $id)
    {
        return $this->update(self::TABLE, $data, $id);
    }
}