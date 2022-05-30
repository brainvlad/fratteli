<?php

session_start();
$id = $_GET["test_id"];
$page_title = "Добавить новость";

require_once '../app/db.php';

// header("Content-Type: application/json;");


if (isset($_POST["Save"]))
{
    if($_POST["Save"] == 'Добавить новость'){
    {
        $user_id = $_SESSION["user"]["id"];



        $postHeader = $_POST["post_header"];
        $postText = $_POST["post_text"];

        $path = '../app/uploads/' . time() . $_FILES['post_picture']['name'];
        if (!move_uploaded_file($_FILES['post_picture']['tmp_name'], '../app/' . $path)) {

        }
        $postPicture = '/app/' . $path;

        $insetPostRow = "INSERT INTO `posts`
            (`post_header`, `post_text`, `post_picture`) VALUES 
            ('$postHeader','$postText','$postPicture');
        ";

        mysqli_query($db, $insetPostRow);

        header("Location: library.php");
    }
}}

?>

<?php include "../layout/meta.php"; ?>

<body class="container__aside">

  <?php include "../layout/side-menu.php" ?>
  <main class="">
      <form enctype="multipart/form-data" method="post">
        <input type="text" name="post_header" placeholder="Заголовок поста"/>
        <input type="text" name="post_text" placeholder="Текст поста"/>
        <input type="file" name="post_picture" />
        <input value="Добавить новость" name="Save" type="submit"/>
      </form>
  </main>
</body>

</html>