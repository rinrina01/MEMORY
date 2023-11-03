let numbersOfPairs = 0;
let pairsGenerated = [];
let gridCards = [];
let blockedClicks = false;
var score = 0;
var temps = null;

let startText = document.getElementById("startText");
let startSelect = document.getElementById("startSelect");
let infosGame = document.getElementById("infosGame");
startText.style.visibility = "visible";
startSelect.style.visibility = "visible";
infosGame.style.visibility = "hidden";

function generateGrid() {
  // Changer les textes
  startText.style.visibility = "hidden";
  startSelect.style.visibility = "hidden";
  infosGame.style.visibility = "visible";

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
        if (
          cardsRevelated.includes([i, j]) == false &&
          cardsComparaison.includes([i, j]) == false &&
          blockedClicks === false
        ) {
          revealCard(event, themeName);
        }
      });
    }
  }

  inGame(); // Lancement du jeu
  console.log(gridCards);
}

let cardsRevelated = []; // Liste toutes les cartes révélés
let cardsComparaison = []; // Liste toutes les cartes en cours de comparaison
let buttonImage2 = null;

function revealCard(event, themeName) {
  let buttonImage = event.currentTarget;
  let i = buttonImage.getAttribute("data-i");
  let j = buttonImage.getAttribute("data-j");

  if (
    cardsRevelated.includes([i, j]) == false &&
    cardsComparaison.includes([i, j]) == false &&
    blockedClicks === false
  ) {
    let image = document.createElement("img");
    let pairNumber = gridCards[i][j];
    image.src = `../../assets/images/cards/${themeName}/${pairNumber}.png`;
    buttonImage.innerHTML = "";
    buttonImage.append(image);

    createParticles(buttonImage);

    if (cardsComparaison.length < 1) {
      cardsComparaison.push([i, j]);
      buttonImage2 = buttonImage;
    } else if (cardsComparaison.length === 1) {
      if (cardsComparaison[0][0] !== i || cardsComparaison[0][1] !== j) {
        cardsComparaison.push([i, j]);
        // Compare
        let idCard = gridCards[cardsComparaison[0][0]][cardsComparaison[0][1]];
        let idCard2 = gridCards[i][j];

        if (idCard === idCard2) {
          cardsRevelated.push(cardsComparaison[0]);
          cardsRevelated.push([i, j]);

          let textScore = document.getElementById("score");
          score += 1;
          textScore.textContent = score.toString();
        } else {
          blockedClicks = true;
          setTimeout(resetCard, 1000, event, themeName, buttonImage);
        }
        cardsComparaison = [];
        checkVictory();
      }
    }
  }
}


function checkVictory() {
  if (score >= numbersOfPairs) {
    alert("vous avez vaincu le boo maitre des cartes !");
  }
}

function resetCard(event, themeName, buttonImage) {
  console.log("RESETTTTTTTTTTTTT");
  let image = document.createElement("img");
  image.src = `../../assets/images/cards/${themeName}/dos_cartes.png`;
  buttonImage.innerHTML = ""; // Efface le contenu actuel du bouton
  buttonImage.append(image);
  let image2 = document.createElement("img");
  image2.src = `../../assets/images/cards/${themeName}/dos_cartes.png`;
  buttonImage2.innerHTML = ""; // Efface le contenu actuel du bouton
  buttonImage2.append(image2);
  blockedClicks = false;
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
var is_gameover = false ;

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
  if (!is_gameover){
    tick();
    h1.textContent =
      (hrs > 9 ? hrs : "0" + hrs) +
      ":" +
      (min > 9 ? min : "0" + min) +
      ":" +
      (sec > 9 ? sec : "0" + sec);
    temps = h1.textContent;
    timer();
  }
}

function timer() {
  t = setTimeout(add, 1000);
}

// STOP GAME AND GET TIME

function GetTimerTime() {
  var get_timer = document.getElementById('time').innerHTML; // récupération temps
  console.log(get_timer);
  is_gameover = true; // variable qui arrête le timer ds add()
  document.getElementById('input_player_time').value = get_timer;
}

function send_data(){
  // SEND SCORE TO DB
  var player_time = document.getElementById('input_player_time').value;

  /*
  $.ajax({
    url: "serverScript.php",
    method: "POST",
    data: { "profile_viewer_uid": profile_viewer_uid }
  })*/

  var httpr = new XMLHttpRequest();
  httpr.open('POST',"../../games/memory/memory_game.php",true);
  httpr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  httpr.onreadystatechange = function() {
    if (httpr.readyState==4 && httpr.status==200) {
      document.getElementById('response').innerHTML = player_time;
    }
  }
  httpr.send('player_time='+player_time);
}

function createParticles(targetCell) {
  const particleCount = 1;
  
  for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');
      
      targetCell.appendChild(particle);

      setTimeout(() => {
          targetCell.removeChild(particle);
      }, 1000);
  }
}
