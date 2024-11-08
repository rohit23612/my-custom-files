<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <style>
        img{
            max-width:100%;
        }
        .slider img {
            max-width: 500px;
            max-height: 500px;
        }
        .main-slider {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /* img.slide.active{
            display:block !important;
        } */
    </style>
</head>
<body>
    bnbnbnbnbnbnb
    <div class="container">
        <div class="main-slider">
            <button class="prev">prev</button>
            <div class="slider">
                <img src="https://images.pexels.com/photos/27351031/pexels-photo-27351031/free-photo-of-essaouira-view.jpeg" class="slide" data="1">
                <img src="https://images.pexels.com/photos/1008000/pexels-photo-1008000.jpeg" class="slide" style="display:none;" data="2">
                <img src="https://images.pexels.com/photos/15868534/pexels-photo-15868534/free-photo-of-woman-pouring-champagne-in-a-bed.jpeg" class="slide" style="display:none;" data="3">
                <img src="https://images.pexels.com/photos/4786135/pexels-photo-4786135.jpeg" class="slide" style="display:none;" data="4">
            </div>
            <button class="next">next</button>
        </div>
        <!-- <p class="dynmicshow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <span style="display:none;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus</span></p> -->
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function($){
    let slidercount = 1;
      let slideminus = 4;
function nextslide(){
let demodata = slidercount ++;
$(".slider .slide").prev().hide();
 $(".slider .slide").eq(demodata).show();
}
$(".next").click(function(){
    nextslide();
});

function previdside() {
    if (slideminus > 1) {
        slideminus--;
        $(".slider .slide").hide();
        $(".slider .slide").eq(slideminus - 1).show();
    } else {
        slideminus = 4;
        $(".slider .slide").hide();
        $(".slider .slide").eq(slideminus - 1).show();
    }
}

// Attach the event handler to the previous button
$(".prev").click(function () {
    previdside();
});
});
$(document).ready(function() {
    let lengthword = $("p.dynmicshow").text().trim().length;
    console.log("Length of text:", lengthword);  // Check the length

    if (lengthword >= 230) {
        // alert(lengthword);
        let htmldata = `<button type="button" name="btn">Read more</button>`;
        $("p.dynmicshow").append(htmldata);
    }
    $("button[type='button']").click(function(){
        $(this).hide();
        $("span").css("display","block","display");
    });
});

</script>
</body>
</html>
