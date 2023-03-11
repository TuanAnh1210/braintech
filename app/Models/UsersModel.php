<?php
class UsersModel extends BaseModel
{
    const TABLE = "users";

    public function getAllUser()
    {
        return $this->all(self::TABLE);
    }

    public function addNewUser($data)
    {
        return $this->create(self::TABLE, $data);
    }
}
