//variables

let nav =document.getElementById('nav');
let menu =document.getElementById('enlaces');
let abrir=document.getElementById('open');
let botones =document.getElementsByClassName('btn-header');
let cerrado=true;

function apertura(){
    if(cerrado){
        menu.style.width='70vw';
        cerrado=false;
    }else{
        menu.style.width='0%';
        menu.style.overflow='hidden';
        cerrado=true;
    }

}

function menus(){
    let Desplazamiento_Actual= window.pageYOffset;

    if(Desplazamiento_Actual <=300){

        nav.classList.remove('nav2');
        nav.className =('nav1');
        nav.style.transition= '1s';
        menu.style.top='80px';
        abrir.style.color='#fff';
    }else{
        nav.classList.remove('nav1');
        nav.className =('nav2');
        menu.style.top='100px';
        abrir.style.color='#000';
    }

}

window.addEventListener('scroll', function(){

    console.log(window.pageYOffset);
    menus();

});


window.addEventListener('resize', function(){
    if (screen.width>=700) {
        cerrado=true;
        menu.style.removeProperty('overflow');
        menu.style.removeProperty('width');
    }    

});


abrir.addEventListener('click', function(){

    apertura(); 

});

