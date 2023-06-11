function newSrc() {
    var gradovi = document.getElementById("gradovi");
    var newSrc = gradovi.options[gradovi.selectedIndex].value;
    document.getElementById("iframe").src = newSrc;

    var imena = gradovi.options[gradovi.selectedIndex].getAttribute("data-grad");

    window.open(`stranice/${imena}.html`, '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');
}