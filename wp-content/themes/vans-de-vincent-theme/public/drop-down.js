/**
 * ces fonctions servent à n'afficher sur une page (exemple archive) que les blocs du type blockType
 * qui correspondent au choix cliqué par l'utilisateur sur des drops down 
 * chaque drop down doit être sous la forme 
 * <div class="nom_d_une_categorie drop-down"> !!!attention nom_d_une_categorie doit etre la premiere classe de la div!!! cf ligne 122
 *      <ul>
    *      <li class="drop-down-label drop-down-all-choices">Tous les nom_d_une_categorie</li>
    *      <li class="drop-down-choice hidden">valeur choix 1</li>
    *      <li class="drop-down-choice hidden">valeur choix 2</li>
    *      <li class="drop-down-choice hidden">valeur choix 3</li>
    *      ... 
 *      </ul>
 * </div>
 * 
 * chaque bloc de la categorie nom_d_une_categorie doit être sous la forme
 * <div class="blockType 
 *              nom_d_une_categorie+valeur_choix_avec_underscore_a_la_place_d_espace 
 *              nom_d_une_autre_categorie+valeur_choix_avec_underscore_a_la_place_d_espace 
 *              nom_d_une_autre_categorie+valeur_choix_avec_underscore_a_la_place_d_espace 
 *              nom_d_une_autre_categorie+valeur_choix_avec_underscore_a_la_place_d_espace 
 * ...">
 *  contenu... 
 * </div>
 * 
 * en dessous des mettre une <div id="no-results-for-drops-down"></div>
 * 
 * sass doit contenir :
 * [class^="hidden"]{display : none !important};
 */


/**
 * rappel pour remplacer les espaces par des underscore en php : str_replace(' ','_',$stringName);
 * rappel pour remplacer les espaces par des underscore en js : stringName.split(' ').join('_');
 */

/**
 * dans functions.php mettre :
 *  add_action('wp_enqueue_scripts',wp_enqueue_script('drop-down',get_stylesheet_directory_uri() . '/public/drop-down.js','',1.1,true ));
 * 
 * ou
 *  //styles et scripts
 *  function doubeck_files(){
 *      wp_enqueue_style('the_site_main_styles', get_stylesheet_directory_uri() . '/public/style.css' );
 *      ...
 *      wp_enqueue_script('drop-down',get_stylesheet_directory_uri() . '/public/drop-down.js','',1.1,true );
 *      ...
 *  }
 *
 *  add_action('wp_enqueue_scripts','doubeck_files');
 */

function doubeck_drop_down(blockType){

    let allDrops = document.getElementsByClassName('drop-down')
    for (let i=0; i < allDrops.length; i++){
        let drop = allDrops[i]
        let myUl = ''
        let selected = ''
        drop.addEventListener('click', (e)=>{
            let allSelected = false
            //on s'assure de selectionner ul meme si l'utilisateur clique sur un li
            if(e.target.nodeName==='LI'){
                myUl = e.target.parentNode
                //si l'utilisateur a cliqué sur li, on selectionne ce choix
                selected = e.target
                selected.classList.add('chosen')
                if(e.target.classList.contains('drop-down-all-choices')){
                    allSelected = true
                }
            }else if(e.target.nodeName==='UL'){
                myUl = e.target
            //on s'assure de selectionner ul meme si l'utilisateur clique sur la div parente de ul
            }else if(e.target.classList.contains('drop-down')){
                myUl = e.target.firstElementChild
            }

            //si le dropdown est ouvert on le ferme
            if (myUl.firstElementChild.classList.contains('open')){
                myUl.firstElementChild.classList.remove('open')
                for( j=0; j<myUl.children.length; j++){
                    myUl.children[j].classList.add('hidden')
                }
                selected.classList.remove('hidden')
                
                //on lance la fonction de choix sur la selection
                let category = ''
                let term = ''
                if(allSelected){
                    category = selected.parentNode.parentNode.classList[0]
                    term = "all"
                    doubeck_display_after_choice_in_drop_down(blockType,category, term)
                    doubeck_display_no_result_with_drops_down(blockType,myUl)
                }else if(selected!=''){
                    category = selected.parentNode.parentNode.classList[0]
                    term = selected.innerText
                    doubeck_display_after_choice_in_drop_down(blockType,category, term)
                    doubeck_display_no_result_with_drops_down(blockType,myUl)
                }
            //si le dropdown est fermé on l'ouvre mais on ne choisit rien bien sur
            }else{
                myUl.firstElementChild.classList.add('open')
                for( j=0; j<myUl.children.length; j++){
                    myUl.children[j].classList.remove('hidden')
                    myUl.children[j].classList.remove('chosen')
                }
            }
        })
    }
}

function doubeck_display_after_choice_in_drop_down(blockType, sortingCategory, selectedTerm){
    //classname to keep
    let classNameToKeep = sortingCategory.split(' ').join('_')+selectedTerm.split(' ').join('_')
    //classname in order to be hidden
    let classNameToHide = "hidden-"+sortingCategory.split(' ').join('_')
    //select all blocks of chosen blockType
    let allBlocks = document.getElementsByClassName(blockType);
    for(let i = 0; i < allBlocks.length; i++){
        //hide all blocks not to keep
        if(! allBlocks[i].classList.contains(classNameToKeep)){
            allBlocks[i].classList.add(classNameToHide)
        //unhide all blocks to keep
        }else if( allBlocks[i].classList.contains(classNameToHide)){
            allBlocks[i].classList.remove(classNameToHide)
        }
        //if all is to keep in the category unhide all
        if (selectedTerm==='all'){
            if( allBlocks[i].classList.contains(classNameToHide)){
                allBlocks[i].classList.remove(classNameToHide)
            }
        }
    }
}

function doubeck_display_no_result_with_drops_down(blockType, myUl){
    let class1 = "div."+blockType
    let allBlocks = document.querySelectorAll(class1)
    for (let i=0; i < allBlocks.length; i++){
        let stringOfClasses = allBlocks[i].classList.toString()
        if(! stringOfClasses.includes('hidden')){
            document.getElementById('no-results-for-drops-down').innerHTML=''
            return
        }
    }
    //if not already returned
    console.log('no result')
    document.getElementById('no-results-for-drops-down').innerHTML="Il n'y a pas de résultat pour cette recherche"
}
