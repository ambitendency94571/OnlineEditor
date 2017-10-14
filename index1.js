var windowHeight=$(window).height();
var menuBarHeight=$("#menuBar").height();
var codeContainerHeight=windowHeight-menuBarHeight;
$(".codeContainer").height(codeContainerHeight+"px");
/*游標移動*/ 
$(".toggle").hover(function(){
    $(this).toggleClass("mov");
});
/*游標點擊*/ 
$(".toggle").click(function(){
    $(this).toggleClass("selected");
    var activeDiv=$(this).attr('name');
    $("#"+activeDiv).toggle();/*toggle()   有點像 display 開關*/ 

    var windowQuantity=$(".codeContainer").filter(function(){/*算視窗數*/
        return ($(this).css("display")!="none");
    }).length;
    $(".codeContainer").css("width",100/windowQuantity+"%");
});
$("#runButton").click(function(){
    var css="<style>"+$("#csscode").val()+"</style>";
    var html=$("#htmlcode").val();
    var js=$("#jscode").val();
    $("iframe").contents().find("html").html(html+css);
    //eval();  可以執行JS程式碼
    document.getElementById("outputiframe").contentWindow.eval(js);

    
});


