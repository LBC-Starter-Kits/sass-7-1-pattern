function abreMenu(){
    document.getElementById("menu-movil__menu").style.visibility = "visible";
    document.body.style.overflowY = "hidden";
    document.documentElement.style.overflowY = "hidden";
}

function cierraMenu(){
    document.getElementById("menu-movil__menu").style.visibility = "hidden";
    document.body.style.overflowY = "auto";
    document.documentElement.style.overflowY = "auto";
}

module.exports = {
    abreMenu: abreMenu,
    cierraMenu: cierraMenu,
};