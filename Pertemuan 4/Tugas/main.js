// Menambahkan efek hover pada card untuk menambahkan shadow dan pointer cursor.
$(document).ready(function(){
    // Contoh penggunaan jQuery
    $(".card").hover(
        function(){
            $(this).addClass("shadow-lg").css("cursor", "pointer");
        },
        function(){
            $(this).removeClass("shadow-lg");
        }
    );
}); 

$(document).ready(function(){
    $("#flip6").click(function(){
        $("#panel6").slideDown("slow");
    });

    $("#flip6").click(function(){
        $("#panel6").slideDown("slow");
    });
});
