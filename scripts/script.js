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

var currentFocus;
var arr = ["pastel", "coxinha", "cachorro"];
const textbox = document.querySelector('.textbox');

textbox.addEventListener("input", function(e){
    var val = this.value;
    var a, i;
    // console.log(val);
    closeAllLists();

    if (!val){ return false;}
    currentFocus = -1;

    a = document.createElement("DIV");
    a.setAttribute("id", this.id + "autocomplete-list");
    a.setAttribute("class", "autocomplete-items");
    /*append the DIV element as a child of the autocomplete container:*/
    this.parentNode.appendChild(a);

    for(i = 0; i < arr.length; i++){
        if(arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()){
            var b = document.createElement("div");
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            console.log(arr[i]);

            b.addEventListener("click", function(e){
                textbox.value = this.getElementsByTagName("input")[0].value;
                closeAllLists();
            });
        }
    }
});

function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != textbox) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}

document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
