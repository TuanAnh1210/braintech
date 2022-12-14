<?php

class HomeModel extends BaseModel
{
    const TABLE = 'products';

    public function getProduct($num, $option = 'DESC', $select = ['*'], $depenent = 'id')
    {
        return $this->getNewListByNum(self::TABLE, $num, $option);
    }

    public function getById($id)
    {
        return $this->one(self::TABLE, $id);
    }
}