<?php
class AnswerModel extends BaseModel
{
    const TABLE = "quizz_answer";

    public function getAnswer($id)
    {
        $sql = "SELECT * FROM quizz_answer WHERE quizz_id = $id";
        return $this->query_all($sql);
    }

    public function addNewAnswer($data)
    {
        foreach ($data as $key => $value) {
            $this->create(self::TABLE, $value);
        }
    }

    public function deleteAnswer($id)
    {
        $sql = "DELETE FROM quizz_answer WHERE quizz_id = $id";
        return $this->execute($sql);
    }

    public function updateAnswer($data)
    {

        foreach ($data as $key => $value) {
            $dataUpdate = [
                "name" => $value["name"],
                "is_correct" => $value["is_correct"]
            ];

            $idUpdate = $value["id"];
            $this->update(self::TABLE, $dataUpdate,  $idUpdate);
        }
    }
}
