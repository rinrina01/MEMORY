const words = ['pendu', 'extrême', 'jeu', 'deviner', 'tente', 'mot'];

const wordDisplay = document.getElementById('word-display');
const attemptsElement = document.getElementById('attempts');
const letterInput = document.getElementById('letter-input');
const guessButton = document.getElementById('guess-button');

let selectedWord, attemptsLeft, guessedLetters;

function initGame() {
    selectedWord = words[Math.floor(Math.random() * words.length)];
    attemptsLeft = 6;
    guessedLetters = [];

    const maskedWord = selectedWord.replace(/\w/g, '_');
    wordDisplay.textContent = maskedWord;

    attemptsElement.textContent = attemptsLeft;

    guessButton.addEventListener('click', handleGuess);
}

function handleGuess() {
    const guessedLetter = letterInput.value.toLowerCase();

    if (guessedLetters.includes(guessedLetter)) {
        alert('Vous avez déjà deviné cette lettre.');
        return;
    }

    if (selectedWord.includes(guessedLetter)) {
        guessedLetters.push(guessedLetter);

        let updatedWord = '';
        for (const letter of selectedWord) {
            if (guessedLetters.includes(letter) || letter === ' ') {
                updatedWord += letter;
            } else {
                updatedWord += '_';
            }
        }

        wordDisplay.textContent = updatedWord;

        if (!updatedWord.includes('_')) {
            alert('Félicitations ! Vous avez deviné le mot.');
            resetGame();
        }
    } else {
        guessedLetters.push(guessedLetter);
        attemptsLeft--;

        if (attemptsLeft === 0) {
            alert(`Désolé, vous avez épuisé toutes vos tentatives. Le mot était "${selectedWord}".`);
            resetGame();
        } else {
            alert(`Mauvaise lettre. Il vous reste ${attemptsLeft} tentatives.`);
            attemptsElement.textContent = attemptsLeft;
        }
    }

    letterInput.value = '';
}

function resetGame() {
    initGame();
}

initGame();
