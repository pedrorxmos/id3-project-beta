const accountDD = document.querySelector('.account__dropdown');

if(accountDD !== null) {
  accountDD.addEventListener('click', () => {
    accountDD.classList.toggle('open');
    const items = accountDD.parentElement.querySelector('.account__items');
    if (items.style.maxHeight) {
      items.style.maxHeight = null;
    } else {
      items.style.maxHeight = items.scrollHeight + "px";
    }
  });
}