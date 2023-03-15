
// const toggleMenu = () => {
//   console.log('menu');
//   document.querySelector('.navigation').classList.toggle('open');
//   document.querySelector('.overlay').classList.toggle('hide');
//   document.querySelector('.nav-actions').classList.toggle('open');
//   document.querySelector('body').classList.toggle('overflow-hidden');
// }

const toggle = document.querySelector('.nav-actions .nav-toggle');

toggle.addEventListener('click', () => {
  document.querySelector('.navigation').classList.toggle('open');
  document.querySelector('.overlay').classList.toggle('hide');
  document.querySelector('.nav-actions').classList.toggle('open');
  document.querySelector('body').classList.toggle('overflow-hidden');
})