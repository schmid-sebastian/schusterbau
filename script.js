function sizeFlipbox() {
    var item = document.getElementsByClassName("flipbox");
    var breite = item[0].offsetWidth;
    for(var i=0; i < item.length; i++) {
        var currentItem = item[i];
        currentItem.style.height = breite +"px";
    }
}

function sizeLogo() {
    var logo = document.getElementById("logoimg");
    var pics = document.getElementsByClassName("flipboxpic");
    if(document.body.clientWidth < 540) {
        logo.src="Pictures/Logo4.png"
    }
    else {
        logo.src="Pictures/Logo3.png"
    }
}

function showFlipboxtext(nummer) {
    var text = document.getElementsByClassName("flipboxtext");
    var texthoehe = text[nummer].clientHeight;
    var item = document.getElementsByClassName("flipbox");
    var itemhoehe = item[nummer].offsetWidth;
    var fontSize = 1;
    text[nummer].style.display = "block";
    
    while(texthoehe < itemhoehe) {
        fontSize++;
        text[nummer].style.fontSize = fontSize.toString() + "px";
        var texthoehe = text[nummer].clientHeight;
    }
    fontSize = fontSize - 1;
    text[nummer].style.fontSize = fontSize.toString() + "px";
}

function hideFlipboxtext(nummer) {
    var text = document.getElementsByClassName("flipboxtext");
    text[nummer].style.display = "none";
}