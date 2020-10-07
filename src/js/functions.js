var btnAbrir = document.getElementsByClassName("nav__icono--abrir")[0];
var btnCerrar = document.getElementsByClassName("nav__icono--cerrar")[0];

function abreMenu(){
    document.getElementById("nav__menudiv").style.visibility = "visible";
    document.body.style.overflowY = "hidden";
    document.documentElement.style.overflowY = "hidden";

    btnAbrir.style.display = "none";
    btnCerrar.style.display = "block";
}

function cierraMenu(){
    document.getElementById("nav__menudiv").style.visibility = "hidden";
    document.body.style.overflowY = "auto";
    document.documentElement.style.overflowY = "auto";

    btnAbrir.style.display = "block";
    btnCerrar.style.display = "none";
}

module.exports = {
    abreMenu: abreMenu,
    cierraMenu: cierraMenu,
};