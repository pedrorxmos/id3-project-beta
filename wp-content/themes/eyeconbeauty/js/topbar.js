


const toggleMenu = () => {
  console.log('menu');
  document.querySelector('.navigation').classList.toggle('open');
  document.querySelector('.overlay').classList.toggle('hide');
  document.querySelector('.nav-actions').classList.toggle('open');
  document.querySelector('body').classList.toggle('overflow-hidden');
}

document.querySelector('#js-nav-toggle').addEventListener('click', toggleMenu());