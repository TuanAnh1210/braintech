<?php

class CommentsModel extends BaseModel
{
    const TABLE = "comments";

    public function getFullComment($id)
    {
        $sql = "SELECT comments.id, comments.id_user ,date_cmt, content, users.avatar, users.name FROM comments JOIN users on comments.id_user = users.id WHERE comments.id_lesson = $id";

        return $this->query_all($sql);
    }

    public function addCmt($data)
    {
        return $this->create(self::TABLE, $data);
    }

    public function deleteCmt($id)
    {
        return $this->delete(self::TABLE, $id);
    }

    public function updateCmt($data, $id)
    {
        return $this->update(self::TABLE, $data, $id);
    }

    public function getAllCmt()
    {
        $sql = "SELECT  courses_lesson.name,comments.id_lesson, COUNT(id_lesson) AS totalCmt FROM comments JOIN courses_lesson ON comments.id_lesson = courses_lesson.id GROUP BY id_lesson";
        return $this->query_all($sql);
    }
    public function getDetailCmt($id)
    {
        $sql = "SELECT comments.content,comments.id, comments.id_lesson,comments.date_cmt,users.name,users.avatar FROM comments JOIN users ON comments.id_user=users.id WHERE comments.id_lesson=$id";
        return $this->query_all($sql);
    }
    public function deleteCmts($id)
    {
        return $this->delete("comments", $id);
    }
}