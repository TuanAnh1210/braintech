<?php
class AccountModel extends BaseModel
{
    const TABLE = "users";

    public function getAllUser()
    {
        return $this->all(self::TABLE);
    }

    public function getAuth($emailUser)
    {
        $sql = "SELECT * FROM users WHERE email = '$emailUser'";
        return $this->query_one($sql);
    }

    public function addNewAcc($data)
    {
        return $this->create(self::TABLE, $data);
    }
}
