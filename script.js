// Credits: https://dribbble.com/shots/16771965-Sidebar-menu-dark-mode

// dribble@rymasheuski


// Preview with the link below.
// https://cdpn.io/ilyasbilgihan/fullpage/BadPLRd

// Please leave a comment if you like.



//  twitter@ilyasbilgihan
//   github@ilyasbilgihan
// linkedin@ilyasbilgihan



const sidebarToggleBtn = document.querySelector('#sidebar-toggle')
const sidebar = document.querySelector('.sidebar')
const toggle = document.querySelector('#toggle-check')
const html = document.querySelector("html")

sidebarToggleBtn.addEventListener("click", function(){
  sidebar.classList.toggle("closed")
})

toggle.addEventListener("change", function(e){
  html.classList.toggle("light")
})


// Showcase
function showCase(){
  setTimeout(function(){
    sidebar.classList.toggle("closed")
  },1000)
  setTimeout(function(){
    toggle.checked = false
    html.classList.toggle("light")
  },2000)
  setTimeout(function(){
    sidebar.classList.toggle("closed")
  },3000)
}

showCase()