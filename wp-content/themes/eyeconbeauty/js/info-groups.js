const infoGroups = document.querySelectorAll('.info-group__toggle');

infoGroups.forEach(gr => {
  gr.addEventListener('click', (event) => {
    event.target.parentElement.classList.toggle('open');
  })
})