$(document).ready(function){
    
    $("#showall").on('click',function(){
        var link="https://info2180-lab6-trevg96.c9users.io/request.php?q="+query;
        
        $.ajax(link, {
            
            method: 'GET',
            dataType:"xml",
            
        }).done(funtion(sol){
            var definition =$(sol).find('definition');
            
            $("#response").html("");
            $("#response").append('<ol></ol>');
            
            $(defs).each(function(){
                
                var return='<h4>'+$(this).attr('name')+'</h4>';
                return+='<p>'+$(this).text()+'</p>';
                return+='<p>-'+$(this).attr('author)'+'</p>';
                $("#response").append('<li>'+return+'</li>');
            });
            
        }).fail(funtion(error){
            $('#response').html(error);
        });
        
        
            
       
        
    });
        
     $('#search').on('click',function(){
         var query=$("query").val();
         var link=" https://info2180-lab6-trevg96.c9users.io/request/php?q"+query;
         
         $.ajax(link,{
             method: 'GET',
         }).done(function(sol){
             $("#response").html(sol);
         }).fail(function(eror){
             $("#result").htm;(error);
         });
};        
         

      
