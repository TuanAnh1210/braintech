<?php
class Quizz extends BaseController
{
    private $quizzsModel;
    private $quizz_answerModel;

    public function __construct()
    {
        $this->loadModel("QuizzsModel");
        $this->quizzsModel = new QuizzsModel;

        $this->loadModel("Quizz_answerModel");
        $this->quizz_answerModel = new Quizz_answerModel;
    }

    public function index()
    {
        if (!empty($_GET["quizzId"])) {
            $id_quizz = $_GET["quizzId"];
            $id_lesson = $_GET["idLesson"];
            $id_course = $_GET["idCourse"];

            $quizz = $this->quizzsModel->getQuizzById($id_quizz);
            $answers = $this->quizz_answerModel->getAnswer($id_quizz);

            // echo "<pre>";
            // var_dump($answers);
            // die;
        }
        return $this->view("client.pages.quizz.index", [
            "quizz" => $quizz,
            "answers" => $answers,
            "id_lesson" => $id_lesson,
            "id_course" => $id_course,
        ]);
    }
}