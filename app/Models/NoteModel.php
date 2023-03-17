<?php
class NoteModel extends BaseModel
{
    const TABLE = "note";

    public function getAllNote($id)
    {
        $sql = "SELECT note.id, content, id_lesson, name FROM note JOIN courses_lesson ON note.id_lesson = courses_lesson.id WHERE note.id_user = $id";

        return $this->query_all($sql);
    }

    public function addNewNote($data)
    {
        return $this->create(self::TABLE, $data);
    }
}
