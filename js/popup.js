const popup = document.createElement('div');
const body = document.querySelector('body');
const popupTitle = document.createElement('h1');
const popupText = document.createElement('p');
const popupImg = document.createElement('img');
const popupClose = document.createElement('img');
const popupContainer = document.createElement('div');
const confirmBtn = document.createElement('button');
const backBtn = document.createElement('button');
const btnContainer = document.createElement('div');
const exitBtn = document.querySelector('.exit__btn');

popupImg.setAttribute('src', '/assets/img/popup.png');
popupClose.setAttribute('src', '/assets/icons/modal-close.svg');

popupTitle.classList.add('title__text');
popup.classList.add('popup');
popupText.classList.add('main__title__text');
popupContainer.classList.add('popup__container');
btnContainer.classList.add('btn__container');
confirmBtn.classList.add('btn', 'btn--confirm');
backBtn.classList.add('btn', 'btn--back');
popupClose.classList.add('popup__close');

body.append(popupContainer);
popupContainer.append(popup);
btnContainer.append(confirmBtn, backBtn);
popup.append(popupClose, popupTitle, popupText, popupImg, btnContainer);

backBtn.innerText = 'Нет';
confirmBtn.innerText = 'Да';
popupTitle.innerText = 'Уже уходишь?';
popupText.innerText = 'Кажется, у нас осталось что-то интересное для вас....';

exitBtn.addEventListener('click', () => {
  popupContainer.style.visibility = 'visible';
});

backBtn.addEventListener('click', () => {
  popupContainer.style.visibility = 'hidden';
});

popupClose.addEventListener('click', () => {
  popupContainer.style.visibility = 'hidden';
});
