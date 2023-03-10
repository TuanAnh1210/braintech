<?php
class CoursesModel extends BaseModel
{
    const TABLE = 'courses';

    public function getCourse($cate_id, $dep)
    {
        return $this->getDep(self::TABLE, $cate_id, $dep);
    }
}