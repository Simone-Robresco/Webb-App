# Schema del Progetto — Webb-App ITIS

Creazione di un sito web simile a **subito.it**, dedicato esclusivamente agli studenti dell'ITIS.
Gli studenti possono pubblicare, acquistare e vendere oggetti all'interno della scuola.

---

## Requisiti Funzionali

### Autenticazione e Accesso
- Registrazione consentita solo con **mail istituzionale**
- Verifica account tramite **email di conferma**
- Ruoli: **venditore** e **compratore** (gestibili dallo stesso account)
- Account admin: `robre`, `boriz`, `fino`, `sara`, `gondy`

### Gestione Prodotti
- Nella home le card dei prodotti sono disposte in una griglia **4 per riga**
- Ogni utente può **creare**, **modificare** ed **eliminare** i propri annunci
- Visualizzazione e acquisto dei prodotti disponibili

---

## Requisiti Aggiuntivi *(opzionali / futuri)*

- **Notifiche** — avvisi per nuove interazioni sugli annunci
- **Gestione profilo** — pagina personale dell'utente
- **Trattative via mail** — acquirente e venditore si accordano tramite mail istituzionale

---

## Schema Database

### Tabella `UTENTI`
| Campo | Tipo |
|---|---|
| id_utente | INT (PK) |
| username | VARCHAR |
| nome | VARCHAR |
| cognome | VARCHAR |
| email | VARCHAR |
| password | VARCHAR |
| nome_scuola | VARCHAR |
| anno_scuola | INT |
| indirizzo | VARCHAR |

### Tabella `PRODOTTI`
| Campo | Tipo |
|---|---|
| id_prodotto | INT (PK) |
| prezzo | DECIMAL |
| descrizione | TEXT |
| data_pubblicazione | DATE |
| status | TINYINT (`0` = venduto, `1` = disponibile) |

### Tabella `TRANSAZIONI`
| Campo | Tipo |
|---|---|
| id_transazione | INT (PK) |
| id_utente_compra | INT (FK) |
| id_utente_vende | INT (FK) |
| id_prodotto | INT (FK) |

### Tabella `RECENSIONI`
| Campo | Tipo |
|---|---|
| id_recensione | INT (PK) |
| id_utente_scrive | INT (FK) |
| id_utente_riceve | INT (FK) |
| recensione | TEXT |

---

## Ruoli del Gruppo

| Ruolo | Responsabile |
|---|---|
| Gestione utenti | GONDY |
| Gestione DB | ROBRE |
| Gestione compravendita | FINO |
| Grafica (HTML/CSS) |  |
| Relazione/Presentazione | Canva, DOCX |
