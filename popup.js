var btnAbrirPopup = document.getElementById('ingresar'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup');


btnAbrirPopup.addEventListener('click', function(){
    overlay.classList.add('active');

}
);

btnCerrarPopup.addEventListener('click', function(){
    overlay.classList.remove('active');

}
);