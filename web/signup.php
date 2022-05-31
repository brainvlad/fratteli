<?php

session_start();

if ($_SESSION['user']) {
  header('location: /web/home.php');
}

$page_title = "Регистрация";

?>

<?php include "../layout/meta.php"; ?>


<body>
  <main class="sign sign-up">
    <section class="sign__container" data-signUp>
      <header class="sign__header">
        <header class="sign__logo">
          <img class="sign__logo-img" src="/assets/img/logo.png" alt="Fratelli">
        </header>
        <div class="sign__header-title">
          Добро пожаловать!
        </div>
        <div class="sign__subtitle">
          <span>Начните свое итальянское путешествие!</span>
          <span>Есть аккаунт? <a class="sign__link" href="/web/signin.php">Войдите прямо сейчас!</a></span>
        </div>
      </header>
      <form class="form form-sign" action="" id="signUp">
        <div class="form__fields">
          <div class="form__item">
            <input class="form__input" name="email" id="email" type="email" placeholder="Email" required>
          </div>
          <div class="form__item">
            <input class="form__input" name="name" id="name" type="text" placeholder="Имя пользователя" required>
          </div>
          <div class="form__item">
            <input class="form__input" name="password" id="password" type="password" placeholder="Пароль" required>
            <i id="viewField" class="form__item-icon ci-hide"></i>
          </div>
          <div class="form__item">
            <input class="form__input" name="passwordRepeat" id="passwordRepeat" type="password" placeholder="Пароль" required>
          </div>
        </div>
        <button class="form__btn">
          Зарегистрироваться
        </button>
      </form>
    </section>

    <section class="sign__container" data-signRole>
      <header class="sign__header">
        <header class="sign__logo">
          <img class="sign__logo-img" src="/assets/img/logo.png" alt="Fratelli">
        </header>
        <div class="sign__header-title">
          Выберите роль:
        </div>
        <div class="sign__subtitle">
          <span>Начните свое итальянское путешествие!</span>
          <span>Есть аккаунт? <a class="sign__link" href="/web/signin.html">Войдите прямо сейчас!</a></span>
        </div>
      </header>
      <form class="form form-sign" action="" id="signRole">
        <div class="form__fields form__fields-role">
          <label class="form__card">
            <input name="role" type="radio" value="student" hidden id="inputStudent" required>
            <label for="inputStudent" class="form__card-picture">
              <img class="form__cart-image" src="/assets/img/sign/student.png" alt="Student">
            </label>
            <div class="form__card-title">
              <span>Хочу изучать</span>
              <span>итальянский</span>
            </div>
          </label>
          <div class="form__card">
            <input name="role" type="radio" value="teacher" hidden id="inputTeacher" required>
            <label for="inputTeacher" class="form__card-picture">
              <img class="form__cart-image" src="/assets/img/sign/teacher.png" alt="Teacher">
            </label>
            <div class="form__card-title">
              <span>Хочу обучать</span>
              <span>итальянскому</span>
            </div>
          </div>
        </div>
        <button class="form__btn">
          Далее
        </button>
      </form>
    </section>

<!--    <section class="sign__container" data-signLevel>-->
<!--      <header class="sign__header">-->
<!--        <header class="sign__logo">-->
<!--          <img class="sign__logo-img" src="/assets/img/logo.png" alt="Fratelli">-->
<!--        </header>-->
<!--        <div class="sign__header-title">-->
<!--          Ваш уровень итальянского?-->
<!--        </div>-->
<!--        <div class="sign__subtitle">-->
<!--          <span>Если вы не знаете свой уровень - пройдите тест на знание</span>-->
<!--          <span>итальянского в разделе <a class="sign__link" href="/web/signin.html">Тесты</a></span>-->
<!--        </div>-->
<!--      </header>-->
<!--      <form class="form form-sign" action="" id="signLevel">-->
<!--        <div class="form__fields">-->
<!--          <div class="form__item">-->
<!--            <select class="form__input" name="level" placeholder="Выберите ваш уровень" required>-->
<!--              <option value="A1">A1</option>-->
<!--              <option value="A2">A2</option>-->
<!--              <option value="B1">B1</option>-->
<!--              <option value="B2">B2</option>-->
<!--              <option value="C1">C1</option>-->
<!--              <option value="C2">C2</option>-->
<!--            </select>-->
<!--          </div>-->
<!--        </div>-->
<!--        <button class="form__btn">-->
<!--          Далее-->
<!--        </button>-->
<!--      </form>-->
<!--    </section>-->

    <section class="sign__container" data-signEnd>
      <header class="sign__header">
        <header class="sign__logo">
          <img class="sign__logo-img" src="/assets/img/logo.png" alt="Fratelli">
        </header>
        <div class="sign__header-title">
          Ваш аккаунт успешно<br>
          зарегестрирован!
        </div>
        <div class="sign__subtitle">
          <span>Продолжим путешествие?</span>
        </div>
      </header>
      <form class="form" action="" id="signEnd">
        <div class="form__fields"></div>
        <button class="form__btn" id="btnEnd">
          Далее
        </button>
      </form>
    </section>
  </main>

  <script src="/js/jquery.js"></script>
  <script src="/js/sign/sign.js"></script>
</body>

</html>