let menu= document.querySelector('#menu-btn');
let navbar= document.querySelector('.navbar');

menu.onclick=() =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

document.querySelector('#login').onclick=()=>{
    document.querySelector('.login-form-container').classList.toggle('active');
}
document.querySelector('#close-login-form').onclick=()=>{
    document.querySelector('.login-form-container').classList.remove('active');
}

document.querySelector('#sign').onclick=()=>{
    document.querySelector('.sign-form-container').classList.toggle('active');
}
document.querySelector('#close-sign-form').onclick=()=>{
    document.querySelector('.sign-form-container').classList.remove('active');
}


window.onscroll=() =>{

    if(window.scrollY>0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
window.onload=() =>{

    if(window.scrollY>0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
  
}

document.querySelector('.home').onmousemove= (e) =>{
    document.querySelectorAll('.home-parallax').forEach(elm=>{
        let speed =elm.getAttribute('data-speed');
        let x=(window.innerWidth- e.pageX * speed)/90;
        let y=(window.innerHeight- e.pageX * speed)/90;

        elm.style.transform = 'translateX(${y}px) translateY(${x}px)';
    })
}

document.querySelector('.home').onmouseleave=(e) =>{
    document.querySelectorAll('.home-parallax').forEach(elm=>{
     
        elm.style.transform = 'translateX(0px) translateY(0px)';
    })
}