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
}