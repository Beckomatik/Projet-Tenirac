// let links = document.getElementById("myDIV").getElementsByTagName("a");
// console.log(links);
//   for(let i = 0; i < links.length; i++){
//     if(links[i].href == location.href)
//     links[0].classList.remove('active');
//     links[i].classList.add('active');
//   }
const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length
for (let i = 0; i < menuLength; i++){
  if(menuItem[i].href === currentLocation){
    menuItem[i].className = "active"
  }
}