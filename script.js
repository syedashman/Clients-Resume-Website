let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
  navbar.classList.toggle('active');

  // Change icon to X and back
  if (menuIcon.classList.contains('bx-menu')) {
    menuIcon.classList.replace('bx-menu', 'bx-x');
  } else {
    menuIcon.classList.replace('bx-x', 'bx-menu');
  }
};

// Optional: Close menu when a link is clicked
document.querySelectorAll('.navbar a').forEach(link =>
  link.addEventListener('click', () => {
    navbar.classList.remove('active');
    menuIcon.classList.replace('bx-x', 'bx-menu');
  })
);
