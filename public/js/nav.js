
/* OUVRIR NAVIGATION */
var open_nav_btn = document.getElementById('open_nav');
var close_nav_btn = document.getElementById('close_nav');
var navigation = document.getElementById('navigation');

open_nav_btn.onclick = function(){
    navigation.classList.remove("d-none");
}
close_nav_btn.onclick = function(){
    navigation.classList.add("d-none");
}

/* OUVRIR ENFANT */

var parent = document.querySelectorAll('.p-nav');
for (var i = 0; i < parent.length; i++) {
    parent[i].onmouseover = function(){
        /*if(parent[i] != this)
        {
        var li = parent[i].parentNode;
        ul = li.querySelector('ul');
        ul.classList.add("d-none");
        }*/
        var li = this.parentNode;
        ul = li.querySelector('ul');
        
        for (var x = 0; x < parent.length; x++) {
            var this_li = parent[x].parentNode;
            var this_ul = this_li.querySelector('ul');
            this_ul.classList.add("d-none");
        }

       
        ul.classList.remove("d-none");
        
      }
    }
  /*  for (var i = 0; i < parent.length; i++) {
        parent[i].onmouseleave = function(){
            /*if(parent[i] != this)
            {
            var li = parent[i].parentNode;
            ul = li.querySelector('ul');
            ul.classList.add("d-none");
            }
            var li = this.parentNode;
            ul = li.querySelector('ul');
            
            for (var x = 0; x < parent.length; x++) {
                var this_li = parent[x].parentNode;
                var this_ul = this_li.querySelector('ul');
                this_ul.classList.add("d-none");
            }
    
           
            ul.classList.add("d-none");
            
          }
        }
*/
/*
for (var i = 0; i < parent.length; i++) {
    parent[i].onmouseover = function(){
        /*if(parent[i] != this)
        {
        var li = parent[i].parentNode;
        ul = li.querySelector('ul');
        ul.classList.add("d-none");
        }
        var li = this.parentNode;
        ul = li.querySelector('ul');
        if(!(ul.classList.contains('d-none'))){
            ul.classList.add("d-none");

        }
        else{
        for (var x = 0; x < parent.length; x++) {
            var this_li = parent[x].parentNode;
            var this_ul = this_li.querySelector('ul');
            this_ul.classList.add("d-none");
        }

       
        ul.classList.remove("d-none");
        
      }
    }
}
*/

    /* DONS */
    var bouton_dons = document.getElementById('bouton_dons');
    var compte_dons = document.getElementById('compte_dons');
    bouton_dons.onclick = function(){
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
