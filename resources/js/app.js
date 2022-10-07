import './bootstrap';

const sideMenu = document.querySelector("aside");
const menuBtn =  document.querySelector("#menu-btn")
const closeBtn =  document.querySelector("#close-btn")
const themeToggler  = document.querySelector(".theme-toggler");

// show sidebar
menuBtn.addEventListener('click',() =>{
    sideMenu.style.display = 'block';
})

// close sidebar

closeBtn.addEventListener('click',() =>{
    sideMenu.style.display = 'none';
})



// Dark theme 

themeToggler.addEventListener('click',()=>{
    document.body.classList.toggle('dark-theme-variables')

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})


// // to Activate buttons
var  linkContainer = document.getElementById("myDiv");
var btns = linkContainer.getElementsByClassName("btn")

for(var i = 0; i < btns.length; i++){
   btns[i].addEventListener("click",function(){
       var current = document.getElementsByClassName("active");
       current[0].className = current[0].className.replace(" active","");
       this.className +=" active";
   });
}
