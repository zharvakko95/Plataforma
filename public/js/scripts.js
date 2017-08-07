var $ = jQuery;
$(function() {

    $("#update").click(function() {
        $("body").attr("update","true");
    });

    $("[type='file']").on("change",function() {
        $("label[for='profilePic']").text($(this).val().replace(/^.*[\\\/]/, ''));
    });

});
