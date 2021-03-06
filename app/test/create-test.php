<?php


/* --------------------------------
    REQUEST EXAMPLE IN JSON FORMAT:
    POST:
        {
        "test_title": "Тест Аллы Виленской",
        "test_level": "A2",
        "test_time": 30,
        "test_complexety": "3/5",
        "questions": [
            {
                "question_title": "Вы Алла Виленская?",
                "question_desc": "Выберите вариант ответа",
                "answers": [
                    {
                        "answer_title": "Да",
                        "is_correct": true
                    },
                    {
                        "answer_title": "Нет",
                        "is_correct": false
                    },
                    {
                        "answer_title": "Все варианты верны",
                        "is_correct": false
                    },
                    {
                        "answer_title": "Все варианты НЕверны",
                        "is_correct": false
                    }
                ]
            }
        ]
        }

    RESPONSE EXAMPLE IN JSON:

    {"test_id":43,"success":true}

*/

session_start();
require_once '../db.php';

header("Content-Type: application/json;");

try {
    
    $json = file_get_contents('php://input');
    $req = json_decode($json, true);
    $res = array("test_id" => "", "success" => false);

    $test_title = $req['test_title'];
    $test_complexity = $req['test_complexity'];
    $test_level = $req['test_level'];
    $test_time = $req['test_time'];
    $created_by = $_SESSION['user']['id'];
        
    $insertTestRow = "INSERT INTO `test` 
        (`test_id`, `test_title`, `test_level`, `test_time`, `test_complexity`, `created_by`) VALUES
        (NULL,'$test_title','$test_level','$test_time','$test_complexity', $created_by);
    ";

    $testCreated = mysqli_query($db, $insertTestRow);
    $test_id = mysqli_insert_id($db);

    $res["test_id"] = $test_id;
    $res["success"] = $testCreated;

    foreach ($req['questions'] as $question) {
        $question_title = $question['question_title'];
        $question_desc = $question['question_desc'];

        $insertQuestionRow = "INSERT INTO `question`
            (`question_id`, `test_id`, `question_title`, `question_desc`) VALUES
            (NULL, '$test_id', '$question_title', '$question_desc');";

        $createdQuestion = mysqli_query($db, $insertQuestionRow);
        $res["success"] = $res["success"] && $createdQuestion;

        $question_id = mysqli_insert_id($db);


        $insertAnswerRow = "INSERT INTO `answer`
        (`answer_id`, `question_id`, `answer_title`, `is_correct`) VALUES ";

        foreach ($question['answers'] as $answer) {
            $is_correct = $answer['is_correct'] ? 1 : 0;
            $answer_title = $answer['answer_title'];

            $insertAnswerRow .= "(NULL, '$question_id','$answer_title', $is_correct),";
        }

        $query = substr($insertAnswerRow, 0, -1).";";
        $createdAnswers = mysqli_query($db, $query);

        $res["success"] = $res["success"] && $createdAnswers;
    }

    echo json_encode($res, JSON_UNESCAPED_UNICODE);

} catch (\Exception $e) {

    echo $e->getMessage();
}

