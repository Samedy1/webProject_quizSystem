// Mode

var icon = document.getElementById("icon");

        icon.onclick = function(){
            document.body.classList.toggle("dark-theme");
            if(document.body.classList.contains("dark-theme")){
                icon.src = "/storage/img/settings/sun.png";
            }else{
                icon.src = "/storage/img/settings/moon.png";
                
            }
        }
// Colorful

// background = getCookie("background");
// console.log(background);
// if (background != "") {
//   document.querySelector(':root').style.setProperty('--crimson', background);
// } else {
//   document.querySelector(':root').style.setProperty('--crimson', "#f53677");
// }


document.querySelectorAll('.theme-colors .color').forEach(color =>{
  color.onclick = () => {
      let background = color.style.background;
      document.querySelector(':root').style.setProperty('--crimson', background);
      setCookie("background", background, 7);
  }
});

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/Setting";
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/Select_Subject";
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




let theme = document.querySelector('.themes-container');

document.querySelector('#theme-open').onclick = () =>{
  theme.classList.add('active');
  document.body.style.paddingRight = '350px';
}

document.querySelector('#theme-close').onclick = () =>{
  theme.classList.remove('active');
  document.body.style.paddingRight = '0px';
}