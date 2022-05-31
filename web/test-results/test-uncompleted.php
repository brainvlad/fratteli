<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/css/test-copleted/test-completed.css">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <nav class="nav">
      <img class="logo" src="/assets/img/logo.svg" alt="">
      <ul class="nav__list">
        <li class="nav__list__item">
          <a class="nav__list__link" href="#">
            Мое расписание
          </a>
        </li>
        <li class="nav__list__item">
          <a class="nav__list__link" href="#">
            Мои группы
          </a>
        </li>
        <li class="nav__list__item">
          <a class="nav__list__link" href="#">
            Стикеры
          </a>
        </li>
        <li class="nav__list__item active__item">
          <a class="nav__list__link" href="#">
            Тесты
          </a>
        </li>
        <li class="nav__list__item">
          <a class="nav__list__link" href="#">
            Библиотека
          </a>
        </li>
      </ul>
      <ul class="nav__list--bottom">
        <li class="nav__list--bottom__item">
          <a class="nav__list--bottom__link" href="">Настройки</a>
        </li>
        <li class="nav__list--bottom__item">
          <a class="nav__list--bottom__link" href="">Выход</a>
        </li>

      </ul>
    </nav>
    <main class="main">
      <img class="main__bg" src="/assets/img/test-completed/test-uncompleted-bg.png" alt="">
      <div class="test__block">
        <div class="test__block__title">
          <h1>QCE Livello di contatto</h1>
          <img src="/assets/img/test-completed/test-level.png" alt="">
        </div>
        <div class="test__info">
          <p class="test__info__test">
            9 вопросов
          </p>
          <p class="test__info__test">
            |
          </p>
          <p class="test__info__test">
          Крайняя попытка: 16.03.2022 в 15:23
          </p>
        </div>
      </div>
      <div class="test__main">
        <p class="test__main__mark test__main__mark--not-passed">
          1/9
        </p>
        <p class="test__info__test">
          Плохо, стоит подучить еще...
        </p>
        <button class="btn">
          Пройти тест еще раз
        </button>
        <a href="#" class="nav__list__item link--clear">Все тесты <img src="/assets/icons/arrow--blue.svg" alt=""></a>
      </div>

    </main>
  </div>
</body>

</html>