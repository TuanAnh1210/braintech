<?php
class QuizzsModel extends BaseModel
{
    const TABLE = "quizzs";

    public function getAllQuizz()
    {
        return $this->all(self::TABLE);
    }

    public function getQuizzById($id)
    {
        return $this->one(self::TABLE, $id);
    }
}