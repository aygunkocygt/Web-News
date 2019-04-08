$(function(){
    var formNe = $("#formNe").val();
    if(formNe=="MakaleYonetimi"){
        $("select[name=KatID]").change(function(){
            var id = $(this).val();
            if(id != 0){
                $("select[name=AltKatID").remove();
                if($.post("functions/ajaxSecim.php")){
                    $.post("functions/ajaxSecim.php", {
                        "id" : id,
                        "formNe" : formNe
                    }, function(sonuc){
                        $("select[name=KatID]").after("<select name='AltKatID' id='AltKatID' class='text-input large-input fontSize13 MarginT_10'></select>");
                        $("select[name=AltKatID").html(sonuc);
                    });
                }
                else{
                    alert("ajaxSecim.php sayfasına ulaşılamıyor.");
                }
            }
            else{
                $("select[name=AltKatID").remove();
            }
        });
    }
    else if(formNe=="VideoYonetimi"){
        $("select[name=KatID]").change(function(){
            var id = $(this).val();
            if(id != 0){
                $("select[name=AltKatID").remove();
                if($.post("functions/ajaxSecim.php")){
                    $.post("functions/ajaxSecim.php", {
                        "id" : id,
                        "formNe" : formNe
                    }, function(sonuc){
                        $("select[name=KatID]").after("<select name='AltKatID' id='AltKatID' class='text-input large-input fontSize13 MarginT_10'></select>");
                        $("select[name=AltKatID").html(sonuc);
                    });
                }
                else{
                    alert("ajaxSecim.php sayfasına ulaşılamıyor.");
                }
            }
            else{
                $("select[name=AltKatID").remove();
            }
        });
    }
})

