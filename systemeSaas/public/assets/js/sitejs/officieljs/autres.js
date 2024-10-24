//copy menu for mobile
function copyMenu() {
    // Copy inside .dpt-cat to .departments
    var dptCategory = document.querySelector('.header-top .left');
    var dptPlace = document.querySelector('.departments');
    if (dptCategory && dptPlace) {
      dptPlace.innerHTML = dptCategory.innerHTML;
    }
  
    // Copy inside nav to nav
    var mainNav = document.querySelector('.header-nav .bloc');
    var navPlace = document.querySelector('.off-canvas nav');
    if (mainNav && navPlace) {
      navPlace.innerHTML = mainNav.innerHTML;
    }
  
    // Copy .header-top .wrapper to .thetop-nav
    var topNav = document.querySelector('.header-top .right');
    var topPlace = document.querySelector('.off-canvas .thetop-nav');
    if (topNav && topPlace) {
      topPlace.innerHTML = topNav.innerHTML;
    }
}
  
copyMenu();
  

//menu du responsive, montrer le aside
const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

//montrer le menu
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

//fermer le menu
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})