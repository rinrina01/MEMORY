let numbersOfPairs = 0;
let pairsGenerated = [];
let gridCards = [];
let score = 0;

function generateGrid() {
  // Générer la grille
  let xCards = 5;
  let yCards = 5;

  let difficulty = document.getElementById("difficulties");
  let themes = document.getElementById("themes");
  let themeName = "";
  let grid = document.getElementById("grid"); // définit les bordels
  let textDifficulty = document.getElementById("textDifficulty"); // définit les bordels

  if (difficulty.value == "easy") {
    // Initialise les variables pour une difficulté choisie
    xCards = 6;
    yCards = 5;
    numbersOfPairs = 15;
    textDifficulty.textContent = "facile";
  } else if (difficulty.value == "medium") {
    xCards = 8;
    yCards = 8;
    numbersOfPairs = 32;
    textDifficulty.textContent = "moyenne";
  } else if (difficulty.value == "hard") {
    xCards = 12;
    yCards = 12;
    numbersOfPairs = 72;
    textDifficulty.textContent = "difficile";
  }

  if (themes.value == "classic") {
    // Définit le dossier des images à l'aide de la difficulté choisie
    themeName = "classic";
  } else if (themes.value == "numbers") {
    themeName = "numbers";
  } else if (themes.value == "theme3") {
    themeName = "politics";
  }

  for (i = 0; i < numbersOfPairs; i++) {
    // Génère l'array du compte des pairs générés
    pairsGenerated.push(0);
  }

  for (ig = 0; ig < xCards; ig++) {
    // Générer la matrice
    gridCards.push([]);
    for (jg = 0; jg < yCards; jg++) {
      gridCards[ig].push(0);
    }
  }

  for (i = 0; i < xCards; i++) {
    // Création et affichage des images
    let div = document.createElement("div");
    grid.append(div);
    for (j = 0; j < yCards; j++) {
      let buttonImage = document.createElement("button");
      buttonImage.setAttribute("data-i", i);
      buttonImage.setAttribute("data-j", j);
      let image = document.createElement("img");
      image.src =
        "../../assets/images/cards/" + themeName.toString() + "/dos_cartes.png"; // Ajoute la source à l'image
      buttonImage.append(image);
      div.append(buttonImage); // Ajoute une image
      setPair(i, j);

      // Appel de revealCard pour révéler les cartes
      buttonImage.addEventListener("click", function (event) {
        revealCard(event, themeName);
      });
    }
  }

  inGame(); // Lancement du jeu
  console.log(gridCards)
}

let cardsRevelated = []; // Liste toutes les cartes révélés
let cardsComparaison = []; // Liste toutes les cartes en cours de comparaison
let buttonImage2 = null;

function revealCard(event, themeName) {
  let buttonImage = event.currentTarget;
  let i = buttonImage.getAttribute("data-i");
  let j = buttonImage.getAttribute("data-j");

  if (!cardsRevelated.includes([i, j])) {
    let image = document.createElement("img");
    let pairNumber = gridCards[i][j];
    image.src = `../../assets/images/cards/${themeName}/${pairNumber}.png`;
    buttonImage.innerHTML = ""; // Efface le contenu actuel du bouton
    buttonImage.append(image);

    if (cardsComparaison.length < 1) {
      // Regarde si dans la comparaison y'a moins d'une carte
      cardsComparaison.push([i, j]); // Ajoute à la comparaison
      buttonImage2 = buttonImage;
    } else {
      cardsComparaison.push([i, j]); // Ajoute à la comparaison

      // Compare
      let idCard = -1;
      let posCards = [
        [0, 0],
        [0, 0],
      ];
      let idCard2 = -1;
      let cardPos = [[0,0],[0,0]];
      for (i = 0; i < cardsComparaison.length; i++) {
        // Parcourt toutes les cartes en comparaison
        cardPos[i] = cardsComparaison[i];
        posCards[i] = cardPos;
        if (i === 0) {
          idCard = gridCards[cardPos[i][0]][cardPos[i][1]];
        } else {
          idCard2 = gridCards[cardPos[i][0]][cardPos[i][1]];
        }
      }
      if (idCard === idCard2) {
        // Regarde si les cartes sont identiques
        // Ajoute les 2 cartes dans la liste pour éviter de recliquer dessus
        cardsRevelated.push(cardPos[0]);
        cardsRevelated.push(cardPos[1]);
        console.log("ok");
        let textScore = document.getElementById("score"); // définit les bordels
        score += 1;
        textScore.textContent = score.toString();
      } else {
        setTimeout(resetCard, 1000, event, themeName, buttonImage);
      }
      cardsComparaison = [];
    }
  }
}

function resetCard(event, themeName, buttonImage) {
  console.log("RESETTTTTTTTTTTTT")
  let image = document.createElement("img");
  image.src = `../../assets/images/cards/${themeName}/dos_cartes.png`;
  buttonImage.innerHTML = ""; // Efface le contenu actuel du bouton
  buttonImage.append(image);
  let image2 = document.createElement("img");
  image2.src = `../../assets/images/cards/${themeName}/dos_cartes.png`;
  buttonImage2.innerHTML = ""; // Efface le contenu actuel du bouton
  buttonImage2.append(image2);
}

function setPair(i, j) {
  // Définit et attribue au carte des pairs
  var pairok = false;
  while (pairok === false) {
    var pairNumber = Math.floor(Math.random() * numbersOfPairs);
    if (pairsGenerated[pairNumber] < 2) {
      pairsGenerated[pairNumber]++;
      gridCards[i][j] = pairNumber + 1;
      pairok = true;
    } else {
      pairok = false;
    }
  }
}

function inGame() {
  // Fonction du jeu
  let secondes = 0;
  let textTimer = document.getElementById("textTimer"); // définit les bordels
  timer();
}

// TIMER //
var h1 = document.getElementById("time");
var sec = 0;
var min = 0;
var hrs = 0;
var t;

function tick() {
  sec++;
  if (sec >= 60) {
    sec = 0;
    min++;
    if (min >= 60) {
      min = 0;
      hrs++;
    }
  }
}
function add() {
  tick();
  h1.textContent =
    (hrs > 9 ? hrs : "0" + hrs) +
    ":" +
    (min > 9 ? min : "0" + min) +
    ":" +
    (sec > 9 ? sec : "0" + sec);
  timer();
}
function timer() {
  t = setTimeout(add, 1000);
}