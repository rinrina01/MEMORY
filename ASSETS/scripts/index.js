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


const chatGif = document.getElementById('chat-gif')

fetch('https://api.thecatapi.com/v1/images/search?mime_types=gif')
  .then(response => response.json())
  .then(data => {
    const gifUrl = data[0].url;
    chatGif.src = gifUrl;
  })
  .catch(error => {
    console.error('Erreur lors de la récupération du gif de chat :', error);
  });



  function send_msg_to_DB(){
    // SEND MESSAGE TO DB
    var message = document.getElementById('message-input').value;
    var messageColumn = document.getElementsByClassName("messageColumn")[0]; 
    console.log(message);
    document.getElementById('message-input').value = '';
  
    var httpr = new XMLHttpRequest();
    httpr.open('POST',"../ProjectMemory/index.php",true);
    httpr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    httpr.onreadystatechange = function() {
      if (httpr.readyState==4 && httpr.status==200) {
        // Quand c'est ok

        // Crée le message et l'envoie
        var messageContainer = document.createElement("div");
        messageContainer.className = "messageContainer"
        messageColumn.append(messageContainer);

        var messageInfo = document.createElement("p");
        messageInfo.className = "messageInfo"
        messageInfo.textContent = "Vous";
        messageContainer.append(messageInfo);

        var messageBubble = document.createElement("div");
        messageBubble.className = "messageBubble sender";
        messageContainer.append(messageBubble);

        var messageText = document.createElement("p");
        messageText.className = "messageText"
        messageText.textContent = message;
        messageBubble.append(messageText);

        var messageDate = document.createElement("p");
        messageDate.className = "messageDate"
        messageDate.textContent = Date().toString();
        messageContainer.append(messageDate);

        console.log('request gud');
      }
    }
    httpr.send('message='+message);
  }