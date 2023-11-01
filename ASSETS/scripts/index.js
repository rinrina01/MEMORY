const openChatButton = document.getElementById("open-chat-button");
const chatBox = document.querySelector(".chat-box");
const closeChatButton = document.getElementById("close-chat");

openChatButton.addEventListener("click", () => {
    chatBox.style.display = "block";
    openChatButton.style.display = "none";
});

closeChatButton.addEventListener("click", () => {
    chatBox.style.display = "none";
    openChatButton.style.display = "block";
});


const chatGif = document.getElementById('chat-gif');

fetch('https://api.thecatapi.com/v1/images/search?mime_types=gif')
  .then(response => response.json())
  .then(data => {
    const gifUrl = data[0].url;
    chatGif.src = gifUrl;
  })
  .catch(error => {
    console.error('Erreur lors de la récupération du gif de chat :', error);
  });

