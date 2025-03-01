const burger_menu = ()=>{
    const menu = document.getElementById('nav-bar');

    if(menu.style.visibility === 'hidden'){
        menu.style.visibility = 'visible';
        document.getElementById('nav-bar-constructor').style.visibility = 'visible';
        document.getElementsByClassName('white-scene')[0].style.visibility = 'visible';
    }
    else{
        menu.style.visibility = 'hidden';
        document.getElementById('nav-bar-constructor').style.visibility = 'hidden';
        document.getElementsByClassName('white-scene')[0].style.visibility = 'hidden';
    }
} 