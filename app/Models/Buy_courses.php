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

    public function getRevenue()
    {
        $sql = "SELECT courses_buy.id,courses.name, COUNT(courses_buy.id_course) as bought , courses.price FROM courses_buy LEFT JOIN courses ON courses_buy.id_course = courses.id GROUP BY courses.id";

        return $this->query_all($sql);
    }

    public function getBill()
    {
        $sql = "SELECT courses_buy.id,courses.name, courses_buy.id_course as courseId, courses.thumb,COUNT(courses_buy.id_course) as bought , courses.price FROM courses_buy LEFT JOIN courses ON courses_buy.id_course = courses.id GROUP BY courses.id";

        return $this->query_all($sql);
    }

    public function getDetailBill($id)
    {
        $sql = "SELECT courses_buy.id, users.name, users.email, courses_buy.code_bill, courses_buy.date_pay,courses_buy.content_bill FROM courses_buy JOIN users ON courses_buy.id_user = users.id WHERE courses_buy.id_course = $id";

        return $this->query_all($sql);
    }
}
