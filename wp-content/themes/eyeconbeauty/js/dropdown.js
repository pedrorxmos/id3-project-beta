const dropdown = document.querySelectorAll('.dropdown-button');

dropdown.forEach((dd) => {
  dd.addEventListener('click', () => {
    const parent = dd.parentElement;
    const content = parent.querySelector('.dropdown-content');

    parent.classList.toggle('open');
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
    
  })
})