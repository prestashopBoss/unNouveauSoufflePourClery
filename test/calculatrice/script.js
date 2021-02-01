const touches = [...document.querySelectorAll('.button')];
const ecran = document.querySelector('.ecran');
//console.log(touches);
/* Récupération des boutons dans le DOM avec un querySelector.
JavaScript nous ressort les 19 boutons dans une nodelist
Mettre dans un tableau avec l'opérateur spread
https://geeklecode.com/loperateur-spread-en-javascript-va-vous-simplifier-la-vie/ 
*/
//
/*
exemple :
const nouveauTab = tableau.map(element => faireQqch(element));
La fonction map() prend chaque élément d'un tableau, fait quelque chose à cet élément (fonction callback) 
et retourne le résultat sous forme d'un nouveau tableau
(ici la variable tab)

exemple a voir en console
*/
const tableau = [1, 2, 3];
const nouveauTab = tableau.map(element => element * 2);
console.log(tableau);
console.log(nouveauTab);
/*calculette
nouvelle constante pour récupéré les objets key "listKeyCode"
toutes les touches copier avec map
une variable touche pour chaque touche qu'il retrouve dans dataset qu'on a mit dans key
*/
const listeKeyCode = touches.map(touche => touche.dataset.key);
//console.log(listeKeyCode);
/*
keydown event = evenment au clavier
click event = evenement au ??? clavier
*/
document.addEventListener('keydown', (e) => {
    const valeur = e.keyCode.toString();
    calculer(valeur)
    //console.log(valeur, typeof valeur);
    /** typeof = voir de quel type est la donnée */
})

document.addEventListener('click', (e) => {
    const valeur = e.target.dataset.key;
    calculer(valeur);
    //console.log(valeur, typeof valeur);
})

const calculer = (valeur) => {
    if(listeKeyCode.includes(valeur)){
        switch(valeur){
            case '8' :
                ecran.textContent = "";
                breack;
            case '13' :
                const calcul = eval(ecran.textContent);
                ecran.textContent = calcul;
                break;
            default:
                const indexKeyCode = listeKeyCode.indexOf(valeur);
                const touche = touches[indexKeyCode];
                ecran.textContent += touche.innerHTML;
        }
    }
}

window.addEventListener('error', (e) => {
    alert('Une erreur est survenue, vérifié la syntaxe : ' + e.message);
    breack;
})
/*comprendre includes
const animaux = ['chat', 'chien', 'cheval'];
console.log(animaux.includes('chat')); 
//return true
*/