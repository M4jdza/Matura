function otvori(thisObj) {
    var ime = thisObj.getAttribute("data-ime");
    window.open(`stranice/${ime}.html`, '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');
}

function pusti(thisObj) {
    var ime = thisObj.getAttribute("data-ime");
    let audio = `./zvukovi/${ime}.mp3`;
    let A = new Audio(audio);
    A.play();

}