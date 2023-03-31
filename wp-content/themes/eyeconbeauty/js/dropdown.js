const dropdown = document.querySelectorAll('.dropdown-button');

dropdown.forEach((dd) => {
  dd.addEventListener('click', () => {
    const parent = dd.parentElement;
    const content = parent.querySelector('.dropdown-content');

    if (parent.classList.contains('open')) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
    
    parent.classList.toggle('open');
  })
})