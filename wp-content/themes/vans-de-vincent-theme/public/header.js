function closePreviousButSame(id){
    let myPreviousElement = document.getElementsByClassName('display')[0]
    if (myPreviousElement && myPreviousElement.id !== 'sub-menu__'+id){
        myPreviousElement.classList.add('undisplay')
        myPreviousElement.classList.remove('display')
    }
    let myPreviousElement2 = document.getElementsByClassName('undisplay')[0]
    if (myPreviousElement2 && myPreviousElement2.id !== 'sub-menu__'+id){
        setTimeout(()=>{myPreviousElement2.classList.remove('undisplay')},2000)
    }
    if(document.getElementById("picto-ford").classList.contains('run')){
        document.getElementById("picto-ford").classList.remove('run')
    }
    removeBackground()
}

let menuItems = [
    document.getElementById('prestations'),
    document.getElementById('realisations'),
    document.getElementById('aLaVente')
];
for (menu of menuItems){
    menu.addEventListener('click', (e) => {
        closePreviousButSame(e.target.id)
        let subMenu = document.getElementById("sub-menu__"+e.target.id);
        if (! subMenu.classList.contains('display') && ! subMenu.classList.contains('undisplay'))
        document.getElementById("picto-ford").classList.add('run')
        setTimeout(()=>{subMenu.classList.add("display")},370)
        setTimeout(()=>{document.getElementById("picto-ford").classList.remove('run')},3000)
        addBackground()
    })
}

let closeButtons = document.getElementsByClassName('close')
for (button of closeButtons){
    button.addEventListener('click', (e)=>{
        removeBackground()
        let myElement = document.getElementById(e.target.parentNode.id)
        myElement.classList.add('undisplay')
        myElement.classList.remove('display')
        setTimeout(()=>{myElement.classList.remove('undisplay')},2000)
    })
}

window.addEventListener("scroll", ()=>{
  if(this.scrollY > 800){
    closePreviousButSame(0)
  }
})

function addBackground(){
    const layer = document.createElement('div');
    layer.id="bgLayer"
    // Appliquez des styles CSS pour le layer.
    layer.style.position = 'absolute';
    layer.style.top = '0';
    layer.style.left = '0';
    layer.style.width = '100%';
    layer.style.height = '100%';
    layer.style.backgroundColor = 'rgba(255, 255, 255, 0.7)'; // Couleur semi-transparente (noir ici).

    // Attachez un gestionnaire d'événements pour le layer.
    layer.addEventListener('click', function() {
        closePreviousButSame(0)
    });

    // Ajoutez le layer au DOM, en le plaçant avant votre menu.
    const menuPrestations = document.getElementById('sub_menu__prestations');
    document.body.insertBefore(layer, menuPrestations);
    const menuRealisations = document.getElementById('sub_menu__realisation');
    document.body.insertBefore(layer, menuRealisations);
    const menuVentes = document.getElementById('sub_menu__aLaVente');
    document.body.insertBefore(layer, menuVentes);
}

function removeBackground(){
    let layer = document.getElementById('bgLayer')
    if(layer){
        document.body.removeChild(layer)
    }
}


// Sélectionnez le bouton par son ID
const boutonRetour = document.getElementById('bouton-retour');

// Ajoutez un gestionnaire d'événement au bouton
if (boutonRetour){
    boutonRetour.addEventListener('click', () => {
      // Utilisez la fonction history.back() pour revenir en arrière
      window.history.back();
    });
}