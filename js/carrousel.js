(function(){
    /*------------------------------------Les elements du carrousel------------------- */

    /*-----------Le conteneur principal du carrousel----------------- */
    let elmCarrousel = document.querySelector('.carrousel');
    /*---------Bouton temporaire pour ouvrir le carrousel----------- */
    let elmBtnModale = document.querySelector('.btn_modale');
    /*--------Bouton de fermeture du carrousel, le X de fermeture------------- */
    let elmBtnModaleFermer = document.querySelector('.btn-fermer');
    /*---------figure qui contiendra l'ensemble des images du carrousel------------- */
    let elmCarrousel__figure = document.querySelector('.carrousel__figure');
    /*---------figure qui contiendra l'ensemble des boutons radio------------- */
    let elmCarrousel__form = document.querySelector('.carrousel__form');



    /*----------------------------------------Les elements de la gallerie------------- */

    /* Le conteneur principal de la galerie */
    let elmGalerie = document.querySelector('.galerie');
    let elmGalerieImg = document.querySelectorAll('.galerie figure img');

    /**-----------------------------Etape 1 - Parcourir les images de la galerie------ */
    for (const elmImg of elmGalerieImg){
        console.log(elmImg.getAttribute("src"));

        ajouter_img_carrousel(elmImg);
        //ajouter_radio_carrousel();
    }

    function ajouter_img_carrousel(elmImg){
        //elmImg represente une image de la galerie
        let elmCarrousel__figure__img = document.createElement('img');
        elmCarrousel__figure__img.setAttribute('src', elmImg.getAttribute('src'));
        elmCarrousel__figure__img.classList.add('carrousel__figure__img');
        elmCarrousel__figure.appendChild(elmCarrousel__figure__img);
    }

    elmBtnModale.addEventListener('mousedown', function(){
        console.log('bouton boite modale');
        elmCarrousel.classList.add('carrousel--ouvrir');
        })

        elmBtnModaleFermer.addEventListener('mousedown', function() {
        elmCarrousel.classList.remove('carrousel--ouvrir');
        });


})();