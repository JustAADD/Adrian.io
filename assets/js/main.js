/*===== MENU SHOW Y HIDDEN =====*/
const navMenu = document.getElementById('nav-menu');
const toggleMenu = document.getElementById('nav-toggle');
const closeMenu = document.getElementById('nav-close');

/*SHOW*/
toggleMenu.addEventListener('click', () => {
  navMenu.classList.add('show'); // Add 'show' class to display the menu
});

/*HIDDEN*/
closeMenu.addEventListener('click', () => {
  navMenu.classList.remove('show'); // Remove 'show' class to hide the menu
});

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link');

function linkAction() {
  /*Active link*/
  navLink.forEach(n => n.classList.remove('active'));
  this.classList.add('active');

  /*Remove menu mobile*/
  navMenu.classList.remove('show'); // Hide menu when a link is clicked
}

navLink.forEach(n => n.addEventListener('click', linkAction));
