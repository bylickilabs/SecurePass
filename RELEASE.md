# 🔐 SecurePass – Version 2

> SecurePass Version 2 ist eine verbesserte, visuell ansprechende Webanwendung zur sicheren und intuitiven Generierung von Passwörtern, ergänzt durch einen Schieberegler und optimiertes Design.

|![v2](https://github.com/user-attachments/assets/0a715eda-8c55-4d41-b4a3-043f2d199aa8)|
|---|


<br>

---

<br>

## 📖 Funktionen Version 2

- **Erweiterter Passwortgenerator:**
  - Einstellbare Passwortlänge per Schieberegler.
  - Standardmäßig aktivierte Optionen: Großbuchstaben, Zahlen, Sonderzeichen (optional deaktivierbar).

- **Intuitive Stärkeprüfung:**
  - Automatische Klassifizierung (Schwach, Mittel, Stark).
  - Visuelle Rückmeldung zur Passwortstärke.

- **Verbessertes UI:**
  - Neon-Farbschema mit animiertem Hintergrund.
  - Zentriertes und verbreitertes Overlay für bessere Bedienbarkeit.

<br>

---

<br>

## 📁 Projektstruktur

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

## 🛠️ Technologien

- **Frontend:** HTML, CSS (Neon-Design, Animationen), JavaScript
- **Backend:** PHP (Passwortstärkeprüfung)
- **Server:** XAMPP (Apache Webserver)

<br>

---

<br>

## 🚀 Installation & Einrichtung

### Voraussetzungen

- [XAMPP herunterladen und installieren](https://www.apachefriends.org/de/index.html).

<br>

### Schritt-für-Schritt Installation

1. **Repository klonen oder herunterladen:**

```yarn
git clone https://github.com/deinusername/SecurePass.git
```

> Oder ZIP herunterladen und entpacken.
  - Projekt in XAMPP-Verzeichnis platzieren:

 ```
C:\xampp\htdocs\SecurePass
```

> Apache starten:
  - Starte Apache über XAMPP Control Panel.

> Anwendung starten:
  - Öffne folgenden Link im Browser:

```yarn
http://localhost/SecurePass/index.html
```

<br>

---

<br>

📋 Bedienung
> Passwortlänge mit Schieberegler einstellen.
  - Optionen (Großbuchstaben, Zahlen, Sonderzeichen) nach Bedarf aktivieren/deaktivieren.
    - Passwort generieren und Passwortstärke visuell überprüfen.

<br>
   
🛡 Sicherheitshinweis
   - Diese Version speichert keine Passwörter dauerhaft.
     - Sichere generierte Passwörter separat an einem vertrauenswürdigen Ort.
    
---
