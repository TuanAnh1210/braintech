<?php
class Admin_answer extends BaseController
{
    private $answerModel;

    public function __construct()
    {
        $this->loadModel("AnswerModel");
        $this->answerModel = new AnswerModel;
    }

    public function index()
    {
        if (!empty($_GET["quizzId"])) {
            $id = $_GET["quizzId"];

            $answers = $this->answerModel->getAnswer($id);
            return $this->view("admin.pages.answer.index", [
                "answers" => $answers,
                "id" => $id
            ]);
        }
    }

    public function addAnswer()
    {
        if (!empty($_GET["quizzId"])) {
            $id = $_GET["quizzId"];
        }
        if (!empty($_POST)) {
            $answer1 = $_POST["answer1"];
            $answer_is_correct1 = $_POST["answer_is_correct1"];
            $answer2 = $_POST["answer2"];
            $answer_is_correct2 = $_POST["answer_is_correct2"];
            $answer3 = $_POST["answer3"];
            $answer_is_correct3 = $_POST["answer_is_correct3"];

            $data = [
                [
                    "name" => $answer1,
                    "is_correct" => $answer_is_correct1,
                    "quizz_id" => $id
                ],
                [
                    "name" => $answer2,
                    "is_correct" => $answer_is_correct2,
                    "quizz_id" => $id
                ],
                [
                    "name" => $answer3,
                    "is_correct" => $answer_is_correct3,
                    "quizz_id" => $id
                ],
            ];

            $this->answerModel->addNewAnswer($data);

            $url = $GLOBALS["domainPage"] . "/admin_answer?quizzId=$id";
            header("location: $url");
        }
        return $this->view("admin.pages.answer.addAnswer");
    }

    public function deleteAnswer()
    {
        if (!empty($_GET)) {
            $quizzId = $_GET["quizzId"];

            $this->answerModel->deleteAnswer($quizzId);
            $url = $GLOBALS["domainPage"] . "/admin_answer?quizzId=$quizzId";
            header("location: $url");
        }
    }

    public function handleUpdateAnswer()
    {
        if (!empty($_GET)) {
            $quizzId = $_GET["quizzId"];

            $answer = $this->answerModel->getAnswer($quizzId);

            if (!empty($_POST)) {
                $answer1 = $_POST["answer1"];
                $answer_is_correct1 = $_POST["answer_is_correct1"];
                $answer_id1 = $_POST["answer_id1"];
                $answer2 = $_POST["answer2"];
                $answer_is_correct2 = $_POST["answer_is_correct2"];
                $answer_id2 = $_POST["answer_id2"];

                $answer3 = $_POST["answer3"];
                $answer_is_correct3 = $_POST["answer_is_correct3"];
                $answer_id3 = $_POST["answer_id3"];

                $data = [
                    [
                        "name" => $answer1,
                        "is_correct" => $answer_is_correct1,
                        "id" => $answer_id1
                    ],
                    [
                        "name" => $answer2,
                        "is_correct" => $answer_is_correct2,
                        "id" => $answer_id2
                    ],
                    [
                        "name" => $answer3,
                        "is_correct" => $answer_is_correct3,
                        "id" => $answer_id3
                    ],
                ];
                $this->answerModel->updateAnswer($data);
    
                $url = $GLOBALS["domainPage"] . "/admin_answer?quizzId=$quizzId";
                header("location: $url");
            }



            return $this->view("admin.pages.answer.updateAnswer", [
                "answer" => $answer
            ]);
        }
    }
}