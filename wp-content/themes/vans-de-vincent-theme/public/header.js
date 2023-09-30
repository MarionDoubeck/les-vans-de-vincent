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

}

let menuItems = document.getElementById('menu-gauche').getElementsByTagName('li');
for (menu of menuItems){
    menu.addEventListener('click', (e) => {
        closePreviousButSame(e.target.id)
        let subMenu = document.getElementById("sub-menu__"+e.target.id);
        if (! subMenu.classList.contains('display') && ! subMenu.classList.contains('undisplay'))
        document.getElementById("picto-ford").classList.add('run')
        setTimeout(()=>{subMenu.classList.add("display")},370)
        setTimeout(()=>{document.getElementById("picto-ford").classList.remove('run')},3000)
    })
}

let closeButtons = document.getElementsByClassName('close')
for (button of closeButtons){
    button.addEventListener('click', (e)=>{
        let myElement = document.getElementById(e.target.parentNode.id)
        myElement.classList.add('undisplay')
        myElement.classList.remove('display')
        setTimeout(()=>{myElement.classList.remove('undisplay')},2000)
    })
}

window.addEventListener("scroll", ()=>{
  var bodyElement = document.querySelector("body")
  if(this.scrollY > 800){
    closePreviousButSame(0)
  }
})