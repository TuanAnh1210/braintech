<?php
class Buy_courses extends BaseModel
{
    const TABLE = "courses_buy";

    public function getCourseBought($id_course, $id_user)
    {
        $sql = "SELECT * FROM courses_buy WHERE id_course = $id_course AND id_user = $id_user";
        return $this->query_one($sql);
    }

    public function buySuccess($data)
    {
        return $this->create(self::TABLE, $data);
    }
}
