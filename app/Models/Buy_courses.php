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

    public function getCourseBoughtInfo($id)
    {
        $sql = "SELECT courses_buy.date_pay, courses.name, courses.thumb FROM courses_buy JOIN courses ON courses_buy.id_course = courses.id JOIN users ON courses_buy.id_user = users.id WHERE courses_buy.id_user = $id";
        return $this->query_all($sql);
    }
}
