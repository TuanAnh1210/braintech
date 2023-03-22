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

    public function updateInfo($data, $id)
    {
        return $this->update(self::TABLE, $data, $id);
    }
    public function getOne($id){
        return $this->one(self::TABLE, $id);
    }
    public function handleUpdateUsers($data, $id){
        return $this->update(self::TABLE, $data, $id);
    }
}
