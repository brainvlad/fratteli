<?

include "../app/db.php";
$user_role = $_SESSION['user']['user_role'];
?>
<aside class="nav">

  <div class="nav__top">
    <div class="nav__logo">
      <img src="/assets/img/logo.png" alt="">
    </div>
    <nav class="nav__list">
      <a href="../web/lessons.php" class="nav__item">Мое расписание</a>
      <a href="../web/group.php" class="nav__item">Мои группы</a>
      <a href="../web/words.php" class="nav__item">Словарь</a>
      <a href="../web/quiz-list.php" class="nav__item">Тесты</a>
      <a href="../web/library.php" class="nav__item">Библиотека</a>

<?

//if($user_role == "teacher")
echo <<<HTML
          <a href="../web/quiz-list.php" class="nav__item">Добавить новость</a>
          <a href="../web/library.php" class="nav__item">Добавить книгу</a>
HTML;



?>

    </nav>
  </div>
  <div class="nav__bottom">
    <a href="../web/reviews.php" class="nav__bottom-item">Отзывы</a>
    <a href="" class="nav__bottom-item">Настройки</a>
    <a href="/app/account/logout.php" class="nav__bottom-item">Выход</a>
  </div>
</aside>