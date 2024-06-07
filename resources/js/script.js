// JavaScript to show/hide the contact info popup
const contactIcon = document.getElementById('contact');
const contactPopup = document.getElementById('contactPopup');

contactIcon.addEventListener('click', () => {
  contactPopup.style.display = 'block';
});

// Close the popup when clicking outside of it
window.addEventListener('click', (event) => {
  if (event.target === contactPopup) {
    contactPopup.style.display = 'none';
  }
});

const closeContactPopupBtn = document.getElementById('closeContactPopup');
closeContactPopupBtn.addEventListener('click', () => {
  contactPopup.style.display = 'none';
});



const cartIcon = document.getElementById('cartIcon');   //Add to cart icon redirect to LOGIN FORM//

cartIcon.addEventListener('click', () => {
  
  window.location.href = 'signup.php';
});


var loginbtn = document.getElementById('loginbtn');

loginbtn.addEventListener('click', () =>{

  window.location.href ='signup.php';

});



var orderbtn = document.getElementById('orderbtn');

orderbtn.addEventListener('click', () =>{

  window.location.href ='signup.php';

});




const cartTooltip = document.getElementById('cartTooltip');              //hover

cartIcon.addEventListener('mouseenter', () => {
  cartTooltip.style.display = 'block';
});

cartIcon.addEventListener('mouseleave', () => {
  cartTooltip.style.display = 'none';
});




















































// JS script of Scrolling and navigation of buttons//

let section=document.querySelectorAll('section');
let navlink=document.querySelectorAll('.navbar a');
window.onscroll=()=>{
   section.forEach(sec=>{
    let top =window.scrollY;
    let offset=sec.offsetTop-150;
    let height=sec.offsetHeight;
    let id=sec.getAttribute('id');
    if(top > offset && top <offset + height){
       navlink.forEach(links=>{

         links.classList.remove('active')
         document.querySelector('header nav a[href*='+id+']').classList.add('active')

       })

    }

   })

}



