var img = document.querySelectorAll("img");

img.forEach(slika => {
    slika.addEventListener("mouseover", function() {
        let audio = "audio/" + slika.alt + ".wav";
        let A = new Audio(audio);
        // A.play();
    });

    slika.addEventListener("click", () => {
        let page = "zivotinje/" + slika.alt + ".php";
        window.open(page, 'window', 'width = 400, height = 400');
    })
});
