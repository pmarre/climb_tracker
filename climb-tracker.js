// const returnUser = document.querySelector('.login');
// const newUser = document.querySelector('.sign_up');
// const sign_up_anchor = document.querySelector('.login--sign_up--link');
// const login_anchor = document.querySelector('.login--link');
// const login_container = document.querySelector('.login--display');

// // sign_up_anchor.addEventListener('click', e => {
// //   e.preventDefault();
// //   returnUser.classList.add('toBottom');
// //   newUser.classList.add('animate-2');
// //   console.log(returnUser.classList);
// //   //   setTimeout(function() {
// //   //     if (returnUser.classList.contains('toBottom')) {
// //   //       returnUser.style.display = 'none';
// //   //     }
// //   //     if (newUser.classList.contains('animate-2')) {
// //   //       newUser.style.display = 'flex';
// //   //     }
// //   //   }, 2000);
// // });

// // login_anchor.addEventListener('click', e => {
// //   e.preventDefault();
// //   newUser.classList.add('toTop');
// //   returnUser.classList.add('animate-3');
// //   console.log(returnUser.classList);
// //   //   setTimeout(function() {
// //   //     if (returnUser.classList.contains('toBottom')) {
// //   //       returnUser.style.display = 'none';
// //   //     }
// //   //     if (newUser.classList.contains('animate-2')) {
// //   //       newUser.style.display = 'flex';
// //   //     }
// //   //   }, 2000);
// // });

// function webAnimateSlideDown(e) {
//   e.preventDefault();
// }

// sign_up_anchor.addEventListener('click', e => {
//   var children = login_container.children;
//   var interval = 100;
//   e.preventDefault();
//   [...children].forEach((x, index) => {
//     setTimeout(() => {
//       x.classList.add('toBottom');
//     }, index * interval);
//   });
// });
