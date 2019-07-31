const returnUser = document.querySelector('.login');
const newUser = document.querySelector('.sign_up');
const anchor = document.querySelector('.login--sign_up--link');

anchor.addEventListener('click', e => {
  e.preventDefault();
  returnUser.classList.add('toBottom');
  newUser.classList.add('animate-2');
  console.log(returnUser.classList);
  setTimeout(function() {
    if (returnUser.classList.contains('toBottom')) {
      returnUser.style.display = 'none';
    }
    if (newUser.classList.contains('animate-2')) {
      newUser.style.display = 'flex';
    }
  }, 2000);
});

function slideDown(e) {
  e.preventDefault();
}
