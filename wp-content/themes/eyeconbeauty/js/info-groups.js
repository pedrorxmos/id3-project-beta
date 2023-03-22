const infoDrop = document.querySelectorAll('.info-group__toggle');

infoDrop.forEach(gr => {
  gr.addEventListener('click', (event) => {
    const infoGroup = event.target.parentElement;
    const infoContent = event.target.nextElementSibling;
    if (infoGroup.classList.contains('open')) {
      infoContent.style.maxHeight = null;
    } else {
      infoContent.style.maxHeight = infoContent.scrollHeight + "px";
    }

    infoGroup.classList.toggle('open');
  })
})