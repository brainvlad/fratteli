<?php
 session_start();

 require_once "../layout/meta.php";

?>

<link rel="stylesheet" href="/styles/css/reg-test/reg-test.css">
<body>
  <div class="wrapper">
    <header class="header">
      <div class="container--big">
        <div class="header__title">
          <img class="header__logo" src="/assets/img/logo.svg" alt="">
          <h1 id="test_title">Определение уровня итальянского</h1>
          <p class="header__title__text" id="questions_count">10 вопросов</p>
        </div>
        <div class="header__manage">
          <img src="/assets/img/reg-test/Timer.svg" alt="">
          <span class="timer__text">30:00</span>
          <button class="header__btn"><img src="/assets/img/reg-test/closeBtn.png" alt=""></button>
        </div>
      </div>
    </header>
    <main id="questions_container">

    </main>
  </div>

    <script src="/js/quiz/level-test.js"></script>
</body>

</html>