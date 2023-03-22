const variations = document.querySelectorAll('.wpcvs-term');
const imgTopViewImg = document.querySelector('#variable-img-top-view-img');
const imgSideViewImg = document.querySelector('#variable-img-side-view-img');
const urlStart = 'https://esatdev.com/2022/pedroramos/eyeconbeauty/wp-content/uploads/2023/03/';
const ddTitleImg = document.querySelector('.dd-title__img');
const ddTitleName = document.querySelector('.dd-title__name');

variations.forEach(x => {
  x.addEventListener('click', () => {
    imgTopViewImg.src = urlStart + x.getAttribute('data-term') + '-top.webp';
    imgSideViewImg.src = urlStart + x.getAttribute('data-term') + '-side.webp';

    ddTitleImg.src = urlStart + x.getAttribute('data-term') + '-shade.png';
    ddTitleName.textContent = x.getAttribute('aria-label');

  })
  
})