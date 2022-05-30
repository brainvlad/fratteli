<?php

session_start();
$id = $_GET["test_id"];
$page_title = "Добавить книгу";

require_once '../app/db.php';

// header("Content-Type: application/json;");


if (isset($_POST["Save"]))
{
    if($_POST["Save"] == 'Добавить книгу'){
        {
            $user_id = $_SESSION["user"]["id"];


            $name = $_POST["name"];
            $description = $_POST["description"];

            $path = '../app/uploads/' . time() . $_FILES['book_picture']['name'];
            if (!move_uploaded_file($_FILES['book_picture']['tmp_name'], '../app/' . $path)) {

            }
            $bookPicture = '/app/' . $path;

            $path = '../app/uploads/' . time() . $_FILES['book_file']['name'];
            if (!move_uploaded_file($_FILES['book_file']['tmp_name'], '../app/' . $path)) {

            }
            $bookFile = '/app/' . $path;

            $insetBookRow = "INSERT INTO `books`(`name`, `image`, `file`, `description`) 
                          VALUES ('$name','$bookPicture','$bookFile','$description')
    ";

            mysqli_query($db, $insetBookRow);

            header("Location: library.php");
        }
    }}

?>

<?php include "../layout/meta.php"; ?>

<body class="container__aside">

  <?php include "../layout/side-menu.php" ?>
  <main class="">
      <form id="create-word-form" enctype="multipart/form-data" method="post">
        <input type="text" name="name" placeholder="Название книги"/>
        <input type="text" name="post_text" placeholder="Описание книги"/>
        <input type="file" name="book_picture" />
        <input type="file" name="book_file" />
        <input type="submit" name="Save" value="Добавить книгу">Добавить книгу</input>
      </form>
  </main>

</body>

</html>