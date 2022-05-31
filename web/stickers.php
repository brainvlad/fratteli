<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/css/library/library.css">
  <link rel="stylesheet" href="/styles/css/stickers/stickers.css">
  <link rel="stylesheet" href="/styles/css/components/popup.css">
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
          <p class="nav__list--bottom__link">Настройки</p>
        </li>
        <li class="nav__list--bottom__item">
          <p class="nav__list--bottom__link exit__btn">Выход</p>
        </li>

      </ul>
    </nav>
    <main class="main">
      <div class="main__title">
        <h1 class="title__text">Стикеры</h1>
        <p class="main__title__text">
          Тут будут слова, отмеченные вами и собранные в одном месте
        </p>
      </div>
      <section class="selected">
        <div class="selected__title">
          <h2>Избранные</h2>
          <img src="/assets/icons/like--blue.svg" alt="">
        </div>
        <div class="selected__cards">
          <div class="selected__cards__item">
            <img src="/assets/img/stickers/sticker1.png" alt="">
            <p class="title__text">Sedia</p>
            <p class="main__title__text">
              стул
            </p>
            <button class="like__btn">
              <img src="/assets/icons/like--blue.svg" alt="">
            </button>
          </div>
          <div class="selected__cards__item">
            <img src="/assets/img/stickers/sticker2.png" alt="">
            <p class="title__text">Cane</p>
            <p class="main__title__text">
              собака
            </p>
            <button class="like__btn">
              <img src="/assets/icons/like--blue.svg" alt="">
            </button>
          </div>
        </div>
      </section>
    </main>
    <aside class="completed">
      <h2>Пройденные</h2>
      <div class="completed__cards">
        <div class="completed__cards__item">
          <img src="/assets/img/stickers/sticker1.png" alt="">
          <div class="item__info">
            <h3 class="title__text">Sedia</h3>
            <p class="main__title__text">
              Стул
            </p>
          </div>
        </div>
      </div>
      <div class="completed__cards__item">
        <img src="/assets/img/stickers/sticker3.png" alt="">
        <div class="item__info">
          <h3 class="title__text">Sole</h3>
          <p class="main__title__text">
            Солнце
          </p>
        </div>
      </div>
      <div class="completed__cards__item">
        <img src="/assets/img/stickers/sticker4.png" alt="">
        <div class="item__info">
          <h3 class="title__text">Ragazza</h3>
          <p class="main__title__text">
            Девочка
          </p>
        </div>
      </div>
      <div class="completed__cards__item">
        <img src="/assets/img/stickers/sticker5.png" alt="">
        <div class="item__info">
          <h3 class="title__text">Casa</h3>
          <p class="main__title__text">
            Дом
          </p>
        </div>
      </div>
  </div>
  </aside>
  </div>
  <script src="/js/popup.js"></script>

</body>

</html>