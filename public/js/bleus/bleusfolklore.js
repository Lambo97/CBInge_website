/*Nav_Oripeaux*/
var penne = document.getElementById('10');
var insignes = document.getElementById('11');
var couleurs = document.getElementById('12');
var a_fond = document.getElementById('13');
var chants = document.getElementById('14');
var penne_content = document.getElementById('penne');
var insignes_content = document.getElementById('insignes');
var couleurs_content = document.getElementById('couleurs');
var a_fond_content = document.getElementById('a_fond');
var chants_content = document.getElementById('chants');
penne.onclick = function(){
    a_fond_content.classList.add('d-none');
    chants_content.classList.add('d-none');
    insignes_content.classList.add('d-none');
    couleurs_content.classList.add('d-none');
    penne_content.classList.remove('d-none');
    a_fond.classList.remove('welcome_active');
    chants.classList.remove('weclome_active');
    insignes.classList.remove('welcome_active');
    couleurs.classList.remove('welcome_active');
    penne.classList.add('welcome_active');
}
insignes.onclick = function(){
    a_fond_content.classList.add('d-none');
    chants_content.classList.add('d-none');
    penne_content.classList.add('d-none');
    couleurs_content.classList.add('d-none');
    insignes_content.classList.remove('d-none');
    a_fond.classList.remove('welcome_active');
    chants.classList.remove('weclome_active');
    penne.classList.remove('welcome_active');
    couleurs.classList.remove('welcome_active');
    insignes.classList.add('welcome_active');
}
couleurs.onclick = function(){
    a_fond_content.classList.add('d-none');
    chants_content.classList.add('d-none');
    insignes_content.classList.add('d-none');
    penne_content.classList.add('d-none');
    couleurs_content.classList.remove('d-none');
    a_fond.classList.remove('welcome_active');
    chants.classList.remove('weclome_active');
    insignes.classList.remove('welcome_active');
    penne.classList.remove('welcome_active');
    couleurs.classList.add('welcome_active');
}
a_fond.onclick = function(){
    a_fond_content.classList.remove('d-none');
    chants_content.classList.add('d-none');
    insignes_content.classList.add('d-none');
    penne_content.classList.add('d-none');
    couleurs_content.classList.add('d-none');
    a_fond.classList.add('welcome_active');
    chants.classList.remove('weclome_active');
    insignes.classList.remove('welcome_active');
    penne.classList.remove('welcome_active');
    couleurs.classList.remove('welcome_active');
}
chants.onclick = function(){
    a_fond_content.classList.add('d-none');
    chants_content.classList.remove('d-none');
    insignes_content.classList.add('d-none');
    penne_content.classList.add('d-none');
    couleurs_content.classList.add('d-none');
    a_fond.classList.remove('welcome_active');
    chants.classList.add('weclome_active');
    insignes.classList.remove('welcome_active');
    penne.classList.remove('welcome_active');
    couleurs.classList.remove('welcome_active');
}