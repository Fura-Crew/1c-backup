MenuButton = document.getElementById('mobile-btn')
MenuNav = document.getElementById('mobile-nav')
MobileMenu = document.getElementsByClassName('active-nav')


MenuButton.addEventListener('click', function(){
  MenuNav.classList.toggle('active-nav')
  MobileMenu[0].style.width = '80%'

})

