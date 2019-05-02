var  a;
function changeImage() {
    document.getElementById("image1").src="images/medium/5855774224.jpg";
    a=1;
}
function changeImage2() {
    document.getElementById("image1").src="images/medium/5856697109.jpg";
   a=2;
}
function changeImage3() {
    document.getElementById("image1").src="images/medium/6119130918.jpg";
    a=3;
}
function changeImage4() {
    document.getElementById("image1").src="images/medium/8711645510.jpg";
   a=4;
}
function changeImage5() {
    document.getElementById("image1").src ="images/medium/9504449928.jpg";
    a=5;
}
function u() {
    document.getElementById("text").style.opacity='80';
    document.getElementById("text").TransitionDuration='1s';
    if( a===1){
        document.getElementById("text").innerHTML="Battle";
        document.getElementById("image1").title="Battle";
    }
    if(a===2){
        document.getElementById("text").innerHTML="Luneburg";
        document.getElementById("image1").title="luneburg";
    }
    if( a===3){
        document.getElementById("text").innerHTML='Bermuda';
        document.getElementById("image1").title="Bermuda";
    }
    if( a===4){
        document.getElementById("text").innerHTML='Athens';
        document.getElementById("image1").title="Athens";
    }
    if( a===5){
        document.getElementById("text").innerHTML="Florence";
        document.getElementById("image1").title="Florence";
    }
}
function f() {
    document.getElementById("text").style.opacity=0;
    document.getElementById("text").TransitionDuration='1s';
}