<?php
class ChapterModel extends BaseModel
{
    const TABLE = "courses_chapter";

    public function getOneChapter($id)
    {
        // return $this->getDep(self::TABLE, $id, $dep);
        return $this->one(self::TABLE, $id);
    }

    public function addNewChapter($data)
    {
        return $this->create(self::TABLE, $data);
    }



    public function getChapter()
    {
        $sql = "SELECT courses_chapter.id, courses_chapter.name, COUNT(course_chapter_id) as totalLesson, courses_id FROM courses_lesson RIGHT JOIN courses_chapter ON courses_lesson.course_chapter_id = courses_chapter.id GROUP BY courses_chapter.id";

        return $this->query_all($sql);
    }

    public function updateChapter($data, $id)
    {
        return $this->update(self::TABLE, $data, $id);
    }
}
