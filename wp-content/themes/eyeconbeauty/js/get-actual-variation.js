const variations = document.querySelectorAll('.wpcvs-term');
const onLoadVar = document.querySelector('.wpcvs-term.wpcvs-selected');
const imgTopViewLink = document.querySelector('#variable-img-top-view-link');
const imgSideViewLink = document.querySelector('#variable-img-side-view-link');
const imgTopViewImg = document.querySelector('#variable-img-top-view-img');
const imgSideViewImg = document.querySelector('#variable-img-side-view-img');
const urlStart = 'https://esatdev.com/2022/pedroramos/eyeconbeauty/wp-content/uploads/2023/03/';



variations.forEach(x => {
  x.addEventListener('click', () => {
    imgTopViewImg.src = urlStart + x.getAttribute('data-term') + '-top.webp';
    imgSideViewImg.src = urlStart + x.getAttribute('data-term') + '-side.webp';

    imgTopViewLink.href = urlStart + x.getAttribute('data-term') + '-top.webp';
    imgSideViewLink.href = urlStart + x.getAttribute('data-term') + '-side.webp';
  })
  
})