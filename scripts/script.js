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

var arr = ["pastel", "coxinha", "cachorro"];
var i;
const textbox = document.querySelector('.textbox');

textbox.addEventListener("input", function(e){
    var val = this.value;
    closeList();

    for(i = 0; i < arr.length; i++){
        if(arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase() && val != ''){
            var b = document.createElement("div");
            b.innerHTML = "<strong>" + arr[i] + "</strong>";
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            b.setAttribute("class", "autocomplete-item");
            console.log(arr[i]);
            textbox.parentNode.appendChild(b);
            b.addEventListener("click", function(e){
                textbox.value = this.getElementsByTagName("input")[0].value;
            });
        }
    }
});

function closeList() {
    var a = document.querySelectorAll('.autocomplete-item');
    for(i = 0; i < a.length; i++){
        textbox.parentNode.removeChild(a[i]);
    }
 }


