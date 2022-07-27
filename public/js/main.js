// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};


// Mode

var icon = document.getElementById("icon");

        icon.onclick = function(){
            document.body.classList.toggle("dark-theme");
            if(document.body.classList.contains("dark-theme")){
                icon.src = "sun.png";
            }else{
                icon.src = "moon.png";
                
            }
        }
// Colorful

document.querySelectorAll('.theme-colors .color').forEach(color =>{
  color.onclick = () => {
      let background = color.style.background;
      document.querySelector(':root').style.setProperty('--crimson', background);
  }
}); 

let theme = document.querySelector('.themes-container');

document.querySelector('#theme-open').onclick = () =>{
  theme.classList.add('active');
  document.body.style.paddingRight = '350px';
}

document.querySelector('#theme-close').onclick = () =>{
  theme.classList.remove('active');
  document.body.style.paddingRight = '0px';
}