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
var c111=document.getElementById('111');
var c112=document.getElementById('112');
var c113=document.getElementById('113');
var c114=document.getElementById('114');
var c115=document.getElementById('115');
var c116=document.getElementById('116');
var c117=document.getElementById('117');
var c118=document.getElementById('118');
var c119=document.getElementById('119');
var c120=document.getElementById('120');
var c121=document.getElementById('121');
var c122=document.getElementById('122');
var c123=document.getElementById('123');
var c124=document.getElementById('124');
var c125=document.getElementById('125');
var c126=document.getElementById('126');
var c127=document.getElementById('127');
var c128=document.getElementById('128');
var c129=document.getElementById('129');
var c130=document.getElementById('130');
var c131=document.getElementById('131');
var c132=document.getElementById('132');
var c133=document.getElementById('133');
var c134=document.getElementById('134');
var c135=document.getElementById('135');
var c136=document.getElementById('136');
var c137=document.getElementById('137');
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
var c111c=document.getElementById('111c');
var c112c=document.getElementById('112c');
var c113c=document.getElementById('113c');
var c114c=document.getElementById('114c');
var c115c=document.getElementById('115c');
var c116c=document.getElementById('116c');
var c117c=document.getElementById('117c');
var c118c=document.getElementById('118c');
var c119c=document.getElementById('119c');
var c120c=document.getElementById('120c');
var c121c=document.getElementById('121c');
var c122c=document.getElementById('122c');
var c123c=document.getElementById('123c');
var c124c=document.getElementById('124c');
var c125c=document.getElementById('125c');
var c126c=document.getElementById('126c');
var c127c=document.getElementById('127c');
var c128c=document.getElementById('128c');
var c129c=document.getElementById('129c');
var c130c=document.getElementById('130c');
var c131c=document.getElementById('131c');
var c132c=document.getElementById('132c');
var c133c=document.getElementById('133c');
var c134c=document.getElementById('134c');
var c135c=document.getElementById('135c');
var c136c=document.getElementById('136c');
var c137c=document.getElementById('137c');
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
c111.onclick = function(){
    activec.classList.add('d-none');
    c111c.classList.remove('d-none');
    active.classList.remove('chosen');
    c111.classList.add('chosen');
    active=c111;
    activec=c111c;
}
c112.onclick = function(){
    activec.classList.add('d-none');
    c112c.classList.remove('d-none');
    active.classList.remove('chosen');
    c112.classList.add('chosen');
    active=c112;
    activec=c112c;
}
c113.onclick = function(){
    activec.classList.add('d-none');
    c113c.classList.remove('d-none');
    active.classList.remove('chosen');
    c113.classList.add('chosen');
    active=c113;
    activec=c113c;
}
c114.onclick = function(){
    activec.classList.add('d-none');
    c114c.classList.remove('d-none');
    active.classList.remove('chosen');
    c114.classList.add('chosen');
    active=c114;
    activec=c114c;
}
c115.onclick = function(){
    activec.classList.add('d-none');
    c115c.classList.remove('d-none');
    active.classList.remove('chosen');
    c115.classList.add('chosen');
    active=c115;
    activec=c115c;
}
c116.onclick = function(){
    activec.classList.add('d-none');
    c116c.classList.remove('d-none');
    active.classList.remove('chosen');
    c116.classList.add('chosen');
    active=c116;
    activec=c116c;
}
c117.onclick = function(){
    activec.classList.add('d-none');
    c117c.classList.remove('d-none');
    active.classList.remove('chosen');
    c117.classList.add('chosen');
    active=c117;
    activec=c117c;
}
c118.onclick = function(){
    activec.classList.add('d-none');
    c118c.classList.remove('d-none');
    active.classList.remove('chosen');
    c118.classList.add('chosen');
    active=c118;
    activec=c118c;
}
c119.onclick = function(){
    activec.classList.add('d-none');
    c119c.classList.remove('d-none');
    active.classList.remove('chosen');
    c119.classList.add('chosen');
    active=c119;
    activec=c119c;
}
c120.onclick = function(){
    activec.classList.add('d-none');
    c120c.classList.remove('d-none');
    active.classList.remove('chosen');
    c120.classList.add('chosen');
    active=c120;
    activec=c120c;
}
c121.onclick = function(){
    activec.classList.add('d-none');
    c121c.classList.remove('d-none');
    active.classList.remove('chosen');
    c121.classList.add('chosen');
    active=c121;
    activec=c121c;
}
c122.onclick = function(){
    activec.classList.add('d-none');
    c122c.classList.remove('d-none');
    active.classList.remove('chosen');
    c122.classList.add('chosen');
    active=c122;
    activec=c122c;
}
c123.onclick = function(){
    activec.classList.add('d-none');
    c123c.classList.remove('d-none');
    active.classList.remove('chosen');
    c123.classList.add('chosen');
    active=c123;
    activec=c123c;
}
c124.onclick = function(){
    activec.classList.add('d-none');
    c124c.classList.remove('d-none');
    active.classList.remove('chosen');
    c124.classList.add('chosen');
    active=c124;
    activec=c124c;
}
c125.onclick = function(){
    activec.classList.add('d-none');
    c125c.classList.remove('d-none');
    active.classList.remove('chosen');
    c125.classList.add('chosen');
    active=c125;
    activec=c125c;
}
c126.onclick = function(){
    activec.classList.add('d-none');
    c126c.classList.remove('d-none');
    active.classList.remove('chosen');
    c126.classList.add('chosen');
    active=c126;
    activec=c126c;
}
c127.onclick = function(){
    activec.classList.add('d-none');
    c127c.classList.remove('d-none');
    active.classList.remove('chosen');
    c127.classList.add('chosen');
    active=c127;
    activec=c127c;
}
c128.onclick = function(){
    activec.classList.add('d-none');
    c128c.classList.remove('d-none');
    active.classList.remove('chosen');
    c128.classList.add('chosen');
    active=c128;
    activec=c128c;
}
c129.onclick = function(){
    activec.classList.add('d-none');
    c129c.classList.remove('d-none');
    active.classList.remove('chosen');
    c129.classList.add('chosen');
    active=c129;
    activec=c129c;
}
c130.onclick = function(){
    activec.classList.add('d-none');
    c130c.classList.remove('d-none');
    active.classList.remove('chosen');
    c130.classList.add('chosen');
    active=c130;
    activec=c130c;
}
c131.onclick = function(){
    activec.classList.add('d-none');
    c131c.classList.remove('d-none');
    active.classList.remove('chosen');
    c131.classList.add('chosen');
    active=c131;
    activec=c131c;
}
c132.onclick = function(){
    activec.classList.add('d-none');
    c132c.classList.remove('d-none');
    active.classList.remove('chosen');
    c132.classList.add('chosen');
    active=c132;
    activec=c132c;
}
c133.onclick = function(){
    activec.classList.add('d-none');
    c133c.classList.remove('d-none');
    active.classList.remove('chosen');
    c133.classList.add('chosen');
    active=c133;
    activec=c133c;
}
c134.onclick = function(){
    activec.classList.add('d-none');
    c134c.classList.remove('d-none');
    active.classList.remove('chosen');
    c134.classList.add('chosen');
    active=c134;
    activec=c134c;
}
c135.onclick = function(){
    activec.classList.add('d-none');
    c135c.classList.remove('d-none');
    active.classList.remove('chosen');
    c135.classList.add('chosen');
    active=c135;
    activec=c135c;
}
c136.onclick = function(){
    activec.classList.add('d-none');
    c136c.classList.remove('d-none');
    active.classList.remove('chosen');
    c136.classList.add('chosen');
    active=c136;
    activec=c136c;
}
c137.onclick = function(){
    activec.classList.add('d-none');
    c137c.classList.remove('d-none');
    active.classList.remove('chosen');
    c137.classList.add('chosen');
    active=c137;
    activec=c137c;
}
