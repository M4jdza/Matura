let linkovi = {
  gitara: {
    ime: "gitara",
    link: "https://sr.wikipedia.org/wiki/%D0%93%D0%B8%D1%82%D0%B0%D1%80%D0%B0",
  },
  violina: {
    ime: "violina",
    link: "https://sr.wikipedia.org/wiki/%D0%92%D0%B8%D0%BE%D0%BB%D0%B8%D0%BD%D0%B0",
  },
  klavir: {
    ime: "klavir",
    link: "https://sr.wikipedia.org/wiki/%D0%9A%D0%BB%D0%B0%D0%B2%D0%B8%D1%80",
  },
  bubnjevi: {
    ime: "bubnjevi",
    link: "https://sr.wikipedia.org/wiki/%D0%91%D1%83%D0%B1%D1%9A%D0%B5%D0%B2%D0%B8",
  },
  harmonika: {
    ime: "harmonika",
    link: "https://sr.wikipedia.org/wiki/%D0%A5%D0%B0%D1%80%D0%BC%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0",
  },
  kontrafagot: {
    ime: "kontrafagot",
    link: "https://sr.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BD%D1%82%D1%80%D0%B0%D1%84%D0%B0%D0%B3%D0%BE%D1%82",
  },
};

let instrumenti = document.querySelectorAll("#instrument");
let zvucnik = document.querySelectorAll("#zvucnik");

instrumenti.forEach((i) => {
  i.addEventListener("click", () => {
    let url = linkovi[i.alt].link;
    window.open(url, "widnow", "width=800, height=800");
  });
});
zvucnik.forEach((i) => {
  let audio = "zvukovi/" + linkovi[i.alt].ime + ".mp3";
  let A = new Audio(audio);
  i.addEventListener("mouseover", () => {
    A.play();
  });
});
