document.addEventListener('DOMContentLoaded', function() {
    $(".option").click(function(){
        $(".option").removeClass("active");
        $(this).addClass("active");
    });
});
