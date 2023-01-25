window.addEventListener('DOMContentLoaded', (event) => {
    var state = false;
    const mob = document.querySelector("label.icon");
        mob.addEventListener("click", function(){

    if (state == false) {
        document.getElementById("myNav").style.width = "100%";
        document.querySelector("body").style.overflow = "hidden"; 
        state = true;
    } else {
        document.querySelector("body").style.overflow = "auto";
        document.getElementById("myNav").style.width = "0%";
        state = false;
    }        

});

    
    const mobmenu = document.querySelectorAll("#menu-menu-1 li");
        mobmenu.forEach(function(menuitem) {
                menuitem.addEventListener('click', function() {
                    document.getElementById("myNav").style.width = "0%";
                    document.getElementById("menunav").checked = false;
                    document.querySelector("body").style.overflow = "auto";
                    state = false;
                })
        })

});