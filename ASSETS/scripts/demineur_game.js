const board = document.getElementById('board');
const gridSize = 20;
const bombCount = 40;
const cells = [];
const bombs = new Set();
let revealed = 0;
let gameStarted = false;
let firstClick = false;
let nonBombCellsCount = gridSize * gridSize - bombCount;

function createBoard() {
    function handleContextMenu(e) {
        e.preventDefault();
        toggleFlag(this);
    }

    function handleClick() {
        if (firstClick) {
            placeBombs(this);
            countBombsAround();
            firstClick = false;
        }

        if (!this.classList.contains('cell') || this.classList.contains('flagged') || this.classList.contains('revealed')) {
            return;
        }

        if (!gameStarted) {
            placeBombs(this);
            countBombsAround();
            gameStarted = true;
        }

        if (bombs.has(this)) {
            gameOver(false);
        } else {
            shakeCell(this);
            revealCell(this);
        }
    }

    for (let i = 0; i < gridSize; i++) {
        for (let j = 0; j < gridSize; j++) {
            const cell = document.createElement('div');
            cell.classList.add('cell');
            cell.dataset.row = i;
            cell.dataset.col = j;
            cell.textContent = '?';
            board.appendChild(cell);
            cells.push(cell);

            cell.addEventListener('contextmenu', handleContextMenu);
            cell.addEventListener('click', handleClick);
        }
    }
}

function placeBombs(firstClickedCell) {
    while (bombs.size < bombCount) {
        const randomIndex = Math.floor(Math.random() * cells.length);
        const cell = cells[randomIndex];
        if (cell !== firstClickedCell) {
            bombs.add(cell);
        }
    }
}

function revealCell(cell) {
    if (cell.classList.contains('revealed')) return;
    cell.classList.add('revealed');
    cell.textContent = '';

    const bombsAround = parseInt(cell.getAttribute('data-bombs-around'));
    if (bombsAround > 0) {
        cell.textContent = bombsAround;
        cell.classList.add(`num${bombsAround}`);
    } else {
        const row = parseInt(cell.dataset.row);
        const col = parseInt(cell.dataset.col);
        const neighbors = getNeighbors(row, col);
        neighbors.forEach((neighbor) => {
            if (!neighbor.classList.contains('revealed') && parseInt(neighbor.getAttribute('data-bombs-around')) === 0) {
                shakeCell(neighbor);
            }
            revealCell(neighbor);
        });
    }

    nonBombCellsCount--;

    if (nonBombCellsCount === 0) {
        gameOver(true);
    }

    createParticles(cell);
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






// Compte le nombre de bombes autour de chaque case
function countBombsAround() {
    cells.forEach((cell) => {
        const row = parseInt(cell.dataset.row);
        const col = parseInt(cell.dataset.col);
        let bombCount = 0;
        const neighbors = getNeighbors(row, col);
        neighbors.forEach((neighbor) => {
            if (bombs.has(neighbor)) {
                bombCount++;
            }
        });
        cell.setAttribute('data-bombs-around', bombCount);
    });
}

// Récupère les voisins d'une case
function getNeighbors(row, col) {
    const neighbors = [];
    for (let i = -1; i <= 1; i++) {
        for (let j = -1; j <= 1; j++) {
            const newRow = row + i;
            const newCol = col + j;
            if (newRow >= 0 && newRow < gridSize && newCol >= 0 && newCol < gridSize) {
                const neighbor = cells.find((cell) => {
                    return parseInt(cell.dataset.row) === newRow && parseInt(cell.dataset.col) === newCol;
                });
                if (neighbor) {
                    neighbors.push(neighbor);
                }
            }
        }
    }
    return neighbors;
}

// Ajoute l'effet de tremblement à une cellule
function shakeCell(cell) {
    cell.classList.add('shake');
    setTimeout(() => {
        cell.classList.remove('shake');
    }, 500);
}

// Bascule le drapeau sur une cellule
function toggleFlag(cell) {
    if (cell.classList.contains('revealed')) return;
    cell.classList.toggle('flagged');
    cell.textContent = cell.classList.contains('flagged') ? '🚩' : '';
}

// Gère la fin du jeu
function gameOver(win) {
    if (win) {
        alert('Félicitations, vous avez gagné !');
    } else {
        alert('DAAWWWN LES GENS! BOUM, vous avez perdu.\n(oubliez pas l accent marseillais quand vous lisez ceci merci)');
    }
    location.reload();
}

// Initialise le jeu
createBoard();

// Sélectionnez l'élément image
const logoImg = document.getElementById('logo-img');

// Écoutez le clic sur l'image
logoImg.addEventListener('click', () => {
    // Ajoutez la classe "shake" pour déclencher l'animation
    logoImg.classList.add('shake');

    // Supprimez la classe après un certain délai (0.5s ici)
    setTimeout(() => {
        logoImg.classList.remove('shake');
    }, 500);
});
