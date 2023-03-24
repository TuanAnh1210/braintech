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

    public function adminGetQuizz($id)
    {
        $sql = "SELECT quizzs.id, quizzs.name, quizzs.lesson_id FROM quizzs join courses_lesson ON quizzs.lesson_id = courses_lesson.id WHERE quizzs.lesson_id = $id";
        return $this->query_all($sql);
    }

    public function addNewQuizz($data)
    {
        return $this->create(self::TABLE, $data);
    }

    public function deleteQuizz($id)
    {
        return $this->delete(self::TABLE, $id);
    }
}
