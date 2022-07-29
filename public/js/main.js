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


// set the default background color
background = getCookie("background");
if (background != "") {
  console.log(background);
  document.querySelector(':root').style.setProperty('--crimson', background);
} else {
  document.querySelector(':root').style.setProperty('--crimson', "#40288f");
}

// get and set the cookie for background
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/dashboard";
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/settings";
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/subjects";
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/questions";
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/history";
}
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


// Mode

var icon = document.getElementById("icon");

icon.onclick = function(){
  console.log("hello");
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
      icon.src = "/storage/img/settings/sun.png";
    }else{
      icon.src = "/storage/img/settings/moon.png";
      document.body.classList.toggle("dark-theme");
      if(document.body.classList.contains("dark-theme")){
          icon.src = "sun.png";
      }else{
          icon.src = "moon.png";
          
      }
    }
  }
// Colorful

background = getCookie("background");
console.log(background);
if (background != "") {
  document.querySelector(':root').style.setProperty('--crimson', background);
} else {
  document.querySelector(':root').style.setProperty('--crimson', "#f53677");
}

document.querySelectorAll('.theme-colors .color').forEach(color =>{
  color.onclick = () => {
    let background = color.style.background;
    document.querySelector(':root').style.setProperty('--crimson', background);
    setCookie("background", background, 7);
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
