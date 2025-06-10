# SecurePass

- S – Strong
- E – Evaluated
- C – Complex
- U – Unique
- R – Reliable
- E – Effective
- P – Password
- A – Authentication &
- S – Security
- S – System

<br>

---

<br>

🚩 Projektüberblick

> Erzeugung sicherer Passwörter basierend auf Nutzerpräferenzen.
  - Stärkeprüfung und Feedback in Echtzeit.
    - Serverseitige Stärkeprüfung durch PHP (für eine valide und unabhängige Bewertung).

<br>

---

<br>

📌 Benutzeroberfläche (index.html):

> Eingabefelder zur Auswahl der Passwortlänge.
  - Checkboxen für optionale Zeichen: Großbuchstaben, Zahlen, Sonderzeichen.

<br>

- Button zum Generieren des Passwortes.
  - Dynamische Stärkeanzeige mit Farbfeedback.

<br>

---

<br>

```yarn
SecurePass/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
│
├── api/
│   ├── strengthCheck.php
│   └── encrypt.php
│
└── index.html
```

<br>

---

<br>

## 🛠 Verwendete Technologien

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Entwicklungsserver:** XAMPP (Apache)

<br>

---

<br>

## 🚀 Installation & Start

### Voraussetzungen

- Installiere [XAMPP](https://www.apachefriends.org/de/index.html).

### Schritt-für-Schritt Installation

1. **Repository klonen oder herunterladen:**

```yarn
git clone https://github.com/deinusername/SecurePass.git
```

> Oder als ZIP herunterladen und entpacken.

2. Projekt in XAMPP-Verzeichnis kopieren:
    - Verschiebe den Ordner SecurePass in folgendes Verzeichnis:

```yarn
C:\xampp\htdocs\
```

3. Apache starten:
   - Öffne XAMPP Control Panel.
     - Starte den Apache-Server.

4. SecurePass im Browser öffnen:

```yarn
http://localhost/SecurePass/index.html
```

<br>

---

<br>

📋 Verwendung der Anwendung

> Stelle über das UI die gewünschte Passwortlänge ein.
  - Deaktiviere nach Bedarf die Optionen: Großbuchstaben, Zahlen, Sonderzeichen.
    - Generiere dein Passwort und lasse es automatisch auf Stärke prüfen.


<br>

---

<br>

🛡 Sicherheitshinweise
- [x] Version 1 speichert keine generierten Passwörter dauerhaft.
- [x] Notiere oder speichere generierte Passwörter sicher an einem externen Ort.

< 🧾 Lizenz
Dieses Projekt steht unter der MIT-Lizenz. Weitere Details findest du in der Datei [LICENSE](LICENSE).
