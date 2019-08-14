 function like(obj){
     var scroll=$(window).scrollTop();
    var url = obj.href;
    $.get(url, function(data){
        var newDoc = document.open("text/html", "replace");
        newDoc.write(data);
        $(window).scrollTop(scroll);
    }); 
    
 };
 