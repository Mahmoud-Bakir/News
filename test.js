$(document).ready (function(){
    $.ajax({url: "display.php",datatype:"JSON", success: function(result){

        var breaking = ""
        $.each(result,function(i,row){
            breaking += "<div class='box'>";
            breaking +="<h1>"+ row.title +"</h1>";
            breaking +="<p>"+row.news + "</p>"
            breaking +="</div>"
        });
        $("body").html(breaking);
    }});
    });
  