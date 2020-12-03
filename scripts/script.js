const botaoMenuMobile = document.querySelector(".menuMobile");
botaoMenuMobile.addEventListener('click', function(e){
    e.preventDefault();
    let menu = document.querySelector('.itensMenuMobile');
    if (menu.style.display != "block"){
    menu.setAttribute("style", "display: block;");
    }else{
    menu.setAttribute("style", "display: none;");
    }
});
