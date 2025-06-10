document.getElementById('generateBtn').addEventListener('click', () => {
  const length = parseInt(document.getElementById('length').value);
  const uppercase = document.getElementById('uppercase').checked;
  const numbers = document.getElementById('numbers').checked;
  const symbols = document.getElementById('symbols').checked;

  fetch('api/strengthCheck.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({length, uppercase, numbers, symbols})
  })
  .then(res => res.json())
  .then(data => {
    document.getElementById('passwordOutput').textContent = "Passwort: " + data.password;
    document.getElementById('strengthFeedback').textContent = "Stärke: " + data.strengthText;
    document.getElementById('strengthFeedback').style.backgroundColor = data.strengthColor;

    // Verschlüsselung durchführen
    fetch('api/encrypt.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({password: data.password})
    })
    .then(res => res.json())
    .then(encData => {
      document.getElementById('encryptedOutput').textContent = "Verschlüsselt: " + encData.encrypted_password + " (IV: " + encData.iv + ")";
    })
    .catch(err => console.error('Verschlüsselungsfehler:', err));
  })
  .catch(err => console.error('Fehler:', err));
});
