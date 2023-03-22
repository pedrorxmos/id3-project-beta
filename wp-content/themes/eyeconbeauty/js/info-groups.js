const infoGroups = document.querySelectorAll('.info-group__toggle');

infoGroups.forEach(gr => {
  gr.addEventListener('click', (event) => {
    event.target.parentElement.classList.toggle('open');
    const infoContent = event.target.nextElementSibling;
    if (infoContent.style.maxHeight) {
      infoContent.style.maxHeight = null;
    } else {
      infoContent.style.maxHeight = infoContent.scrollHeight + "px";
    }
  })
})