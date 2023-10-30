let numbersOfPairs = 0;
let pairsGenerated = [];
let gridCards = [];

function generateGrid() {
  let xCards = 5;
  let yCards = 5;

  let difficulty = document.getElementById("difficulties");
  let themes = document.getElementById("themes");
  let themeName = "";
  let grid = document.getElementById("grid"); // définit les bordels
  let textDifficulty = document.getElementById("textDifficulty"); // définit les bordels

  if (difficulty.value == "easy") {
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
    themeName = "classic";
  } else if (themes.value == "numbers") {
    themeName = "numbers";
  } else if (themes.value == "theme3") {
    themeName = "politics";
  }

  for (i = 0; i < numbersOfPairs; i++) {
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
    let div = document.createElement("div");
    grid.append(div);
    for (j = 0; j < yCards; j++) {
      let buttonImage = document.createElement("button");
      let image = document.createElement("img");
      image.src =
        "../../assets/images/cards/" + themeName.toString() + "/dos_cartes.png"; // Ajoute la source à l'image
      buttonImage.append(image);
      div.append(buttonImage); // Ajoute une image
      setPair(i, j);
    }
  }

  console.log(gridCards);
  console.log(pairsGenerated);

  inGame();
}

function setPair(i, j) {
  var pairok = false;
  while (pairok === false) {
    var pairNumber = Math.floor(Math.random() * numbersOfPairs);
    if (pairsGenerated[pairNumber] < 2) {
      pairsGenerated[pairNumber]++;
      gridCards[i][j] = pairNumber;
      pairok = true;
    } else {
        pairok = false;
    }
  }
}

function inGame() {
  let secondes = 0;
  let textTimer = document.getElementById("textTimer"); // définit les bordels
  while (secondes < 10000) {
    secondes++;
    textTimer.textContent = secondes.toString();
  }
}
