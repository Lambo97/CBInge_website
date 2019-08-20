/*c1xx: button chant n°xx; c1xxc: text chant n°xx*/
var c100=document.getElementById('100');
var c101=document.getElementById('101');
var c102=document.getElementById('102');
var c103=document.getElementById('103');
var c104=document.getElementById('104');
var c105=document.getElementById('105');
var c106=document.getElementById('106');
var c107=document.getElementById('107');
var c108=document.getElementById('108');
var c109=document.getElementById('109');
var c110=document.getElementById('110');
var c100c=document.getElementById('100c');
var c101c=document.getElementById('101c');
var c102c=document.getElementById('102c');
var c103c=document.getElementById('103c');
var c104c=document.getElementById('104c');
var c105c=document.getElementById('105c');
var c106c=document.getElementById('106c');
var c107c=document.getElementById('107c');
var c108c=document.getElementById('108c');
var c109c=document.getElementById('109c');
var c110c=document.getElementById('110c');

var first=document.getElementById('first');
var firstc=document.getElementById('firstc');
activec=firstc;
active=first;
/* cette idée est plus simple mais ça bug...
function chants(titre, contenu, actif) {
    this.titre = titre;
    this.contenu = contenu;
    this.actif = actif;

    (this.titre).onclick = function() {
        active.contenu.classList.add('d-none');
        active.titre.classList.remove('chosen');
        if(this.actif==1){
            active=first;
            this.actif=0;
        }
        else{
            (this.contenu).classList.remove('d-none');
            (this.titre).classList.add('chosen');
            active=this;
            this.actif=1;
        }
    };
}
var active= new chants(first,firstc,0);
var ch100= new chants(c100,c100c,0);
...
*/
/* si on veut permettre à l'utilisateur de cacher le chant en recliquant dessus 
c100.onclick = function(){
    if(active == c100){
        activec.classList.add('d-none');
        active.classList.remove('chosen');
        activec=firstc;
        active=first;
    }
    else{
        activec.classList.add('d-none');
        c100c.classList.remove('d-none');
        active.classList.remove('chosen');
        c100.classList.add('chosen');
        active=c100;
        activec=c100c;
    }
*/
c100.onclick = function(){
    activec.classList.add('d-none');
    c100c.classList.remove('d-none');
    active.classList.remove('chosen');
    c100.classList.add('chosen');
    active=c100;
    activec=c100c;
}
c101.onclick = function(){
    activec.classList.add('d-none');
    c101c.classList.remove('d-none');
    active.classList.remove('chosen');
    c101.classList.add('chosen');
    active=c101;
    activec=c101c;
}
c102.onclick = function(){
    activec.classList.add('d-none');
    c102c.classList.remove('d-none');
    active.classList.remove('chosen');
    c102.classList.add('chosen');
    active=c102;
    activec=c102c;
}
c103.onclick = function(){
    activec.classList.add('d-none');
    c103c.classList.remove('d-none');
    active.classList.remove('chosen');
    c103.classList.add('chosen');
    active=c103;
    activec=c103c;
}
c104.onclick = function(){
    activec.classList.add('d-none');
    c104c.classList.remove('d-none');
    active.classList.remove('chosen');
    c104.classList.add('chosen');
    active=c104;
    activec=c104c;
}
c105.onclick = function(){
    activec.classList.add('d-none');
    c105c.classList.remove('d-none');
    active.classList.remove('chosen');
    c105.classList.add('chosen');
    active=c105;
    activec=c105c;
}
c106.onclick = function(){
    activec.classList.add('d-none');
    c106c.classList.remove('d-none');
    active.classList.remove('chosen');
    c106.classList.add('chosen');
    active=c106;
    activec=c106c;
}
c107.onclick = function(){
    activec.classList.add('d-none');
    c107c.classList.remove('d-none');
    active.classList.remove('chosen');
    c107.classList.add('chosen');
    active=c107;
    activec=c107c;
}
c108.onclick = function(){
    activec.classList.add('d-none');
    c108c.classList.remove('d-none');
    active.classList.remove('chosen');
    c108.classList.add('chosen');
    active=c108;
    activec=c108c;
}
c109.onclick = function(){
    activec.classList.add('d-none');
    c109c.classList.remove('d-none');
    active.classList.remove('chosen');
    c109.classList.add('chosen');
    active=c109;
    activec=c109c;
}
c110.onclick = function(){
    activec.classList.add('d-none');
    c110c.classList.remove('d-none');
    active.classList.remove('chosen');
    c110.classList.add('chosen');
    active=c110;
    activec=c110c;
}
