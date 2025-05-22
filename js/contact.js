document.getElementById("sendButton").addEventListener("click", function () {
  // Haal het bericht uit de textarea
  const message = document.querySelector('textarea[name="message"]').value;

  // Controleer of het bericht leeg is
  if (message.trim() === "") {
    alert("Het bericht kan niet leeg zijn");
    return;
  }

  // Maak een XMLHttpRequest object
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "contact.php", true); // Zorg dat de juiste PHP-bestand is gekoppeld
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // Luister naar de status van de request
  xhr.onload = function () {
    if (xhr.status === 200) {
      // Controleer of het bericht succesvol verzonden is
      if (xhr.responseText.includes("Message sent successfully")) {
        // Zet de "Dankuwel voor uw bericht!" tekst in het tekstveld
        const textarea = document.querySelector('textarea[name="message"]');
        textarea.value = "Dankuwel voor uw bericht!";
        textarea.disabled = true; // Schakel het tekstveld uit
      } else {
        alert("Er was een fout bij het verzenden van het bericht.");
      }
    } else {
      alert("Er was een fout bij het verzenden van het bericht.");
    }
  };

  // Stuur het bericht naar de server
  xhr.send("message=" + encodeURIComponent(message));
});
