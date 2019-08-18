/*Nav_Oripeaux*/
var penne = document.getElementById('10');
var insignes = document.getElementById('11');
var couleurs = document.getElementById('12');
var penne_content = document.getElementById('penne');
var insignes_content = document.getElementById('insignes');
var couleurs_content = document.getElementById('couleurs');
penne.onclick = function(){
    insignes_content.classList.add('d-none');
    couleurs_content.classList.add('d-none');
    penne_content.classList.remove('d-none');
    insignes.classList.remove('welcome_active');
    couleurs.classList.remove('welcome_active');
    penne.classList.add('welcome_active');
}
insignes.onclick = function(){
    penne_content.classList.add('d-none');
    couleurs_content.classList.add('d-none');
    insignes_content.classList.remove('d-none');
    penne.classList.remove('welcome_active');
    couleurs.classList.remove('welcome_active');
    insignes.classList.add('welcome_active');
}
couleurs.onclick = function(){
    insignes_content.classList.add('d-none');
    penne_content.classList.add('d-none');
    couleurs_content.classList.remove('d-none');
    insignes.classList.remove('welcome_active');
    penne.classList.remove('welcome_active');
    couleurs.classList.add('welcome_active');
}