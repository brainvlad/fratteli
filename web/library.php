<?php

session_start();
$page_title = "Библиотека";

/* Я ебал разбираться с эти жсом */
/* а соответственно и вашими этими адекватными рендерами элементов и жсона */
/* поэтому тупо из бд все выведу и похуй мне */
/* Тимофей убери потом комменты после стилей, код как пример засуну, чут ьчто меняй эту разметку сраную */

    include "../app/db.php";

    $booksHTML = "<div class='booksContainer'>";
    $books = mysqli_query($db, "SELECT * FROM books");
    while ($book = $books->fetch_assoc()){
        $bookImage = "url(\"".$book['image']."\")";
        /* Да стайл но мне похуй */
        $booksHTML .= "<div class='bookMain' style='background-image: $bookImage; width: 200px; height: 600px'>";

        $bookFile = $book['file'];
        $booksHTML .= "<a href=\"".$bookFile."\" download=\"file\">Скачать</a>";

        $booksHTML .= "</div>";
    }
    $booksHTML .= "<div>";



    $postsHTML = "<div class='postsContainer'>";
    $posts = mysqli_query($db,"SELECT * FROM posts");
    while ($post = $posts->fetch_assoc()){
        $postsHTML .= "<div class='postMain'>";
            $postsHTML .= "<h4>".$post["post_header"]."</h4>";
            $postsHTML .= "<p>".$post["post_text"]."</p>";
            $postsHTML .= "<img src='".$post["post_picture"]."'>";
        $postsHTML .= "</div>";
    }
    $postsHTML .= "</div>";

?>

<?php include "../layout/meta.php"; ?>

<body class="container__aside">
  <?php include "../layout/side-menu.php" ?>
  <main class="container">
    <div class="head">
      <div class="head__info">
        <div class="head__title">
          <span id="headTitle">Библиотека</span>

        </div>
        <div class="head__subtitle head__subtitle-600">
            Здесь только самые интересные материалы <br> для изучения итальянского
        </div>
      </div>



    </div>
    <div class="grouplist">
      <div class="grouplist__title">
        Читальный зал
      </div>
          <?
            /*Сучьи книжки*/
            echo $booksHTML;
          ?>
    </div>

    <div class="grouplist">
      <div class="grouplist__title">
        Блог
      </div>
          <?
            /*Посты смешные картинки жопа*/
            echo $postsHTML;
          ?>
      </div>
  </main>




  <script src="/js/jquery.js"></script>
  <script src="/js/group-list.js"></script>
</body>

</html>