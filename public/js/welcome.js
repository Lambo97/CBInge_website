 /* DONS */
 console.log('hello');
 var bouton_dons = document.getElementById('bouton_dons');
 var compte_dons = document.getElementById('compte_dons');
 bouton_dons.onclick = function(){
    console.log('coucou');
     compte_dons.classList.toggle('d-none');
 }
 /*Nav_Welcome*/
 var trottis = document.getElementById('0');
 var bleus = document.getElementById('1');
 var trottis_content = document.getElementById('4h');
 var bleus_content = document.getElementById('bleus');
 bleus.onclick = function(){
     trottis_content.classList.add('d-none');
     bleus_content.classList.remove('d-none');
     trottis.classList.remove('welcome_active');
     bleus.classList.add('welcome_active');
 }
 trottis.onclick = function(){
     trottis_content.classList.remove('d-none');
     bleus_content.classList.add('d-none');
     trottis.classList.add('welcome_active');
     bleus.classList.remove('welcome_active');
 }