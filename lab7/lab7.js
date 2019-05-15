$(document).ready(function(){
    $(".small2").click(function(){
        $("#first").attr('src',"images/medium/painting2.jpg" );
        $(".introduction").text("Portrait of Alida Christina Assink");
        $(".writer").text("Jan Davidsz. de Heem, 1650 - 1683");
    });
    $(".small1").click(function(){
        $("#first").attr('src',"images/medium/painting1.jpg" );
        $(".introduction").text("Still Life with Flowers in a Glass Vase");
        $(".writer").text("Jan Davidsz. de Heem, 1650 - 1683");
    });
    $(".small3").click(function(){
        $("#first").attr('src',"images/medium/painting4.jpg" );
        $(".introduction").text("William II, Prince of Orange, and his Bride, Mary Stuart");
        $(".writer").text("Anthony van Dyck, 1641");
    });
    $(".small4").click(function(){
        $("#first").attr('src',"images/medium/painting5.jpg" );
        $(".introduction").text("Milkmaid" );
        $(".writer").text("Johannes Vermeer, c. 1660");
    });
});
$(document).ready(function(){
    $("#sliderOpacity").mouseup(function () {
        $("#numOpacity").text($("#sliderOpacity").val());
    });
    $("#sliderSaturation").mouseup(function () {
        $("#numSaturation").text($("#sliderSaturation").val());
    });
    $("#sliderBrightness").mouseup(function () {
        $("#numBrightness").text($("#sliderBrightness").val());
    });
    $("#sliderHue").mouseup(function () {
        $("#numHue").text($("#sliderHue").val());
    });
    $("#sliderGray").mouseup(function () {
        $("#numGray").text($("#sliderGray").val());
    });
    $("#sliderBlur").mouseup(function () {
        $("#numBlur").text($("#sliderBlur").val());
    });
    $("input.sliders").on('input',function () {
        var settings = "opacity("+$("#sliderOpacity").val()+"%"+")"
            +"saturate("+$("#sliderSaturation").val()+"%"+")"
            + "brightness("+$("#sliderBrightness").val()+"%"+")"
            +"hue-rotate("+$("#sliderHue").val()+"deg"+")"
            +"grayscale("+$("#sliderGray").val()+"%"+")"
            +"blur("+$("#sliderBlur").val()+"px"+")";
        $('#imgManipulated >img').css("-webkit-filter",settings)
            .css("filter",settings);
    });
    $(document).ready(function(){
        $("#resetFilters").click(function(){
            $('#imgManipulated >img').css("-webkit-filter",none)
                .css("filter",none);

        });
    });
});
