# Ingame Item Trading en Verkoopplatform

Dit project is een platform voor het verhandelen en verkopen van ingame items. Gebruikers kunnen hun items uploaden, aanbieden voor ruil of verkoop, en items van andere gebruikers zoeken, ruilen of kopen. Het platform biedt functies zoals gebruikersregistratie, itembeheer, ruilverzoeken, koopverzoeken en een beoordelingssysteem voor gebruikers.

## Inhoudsopgave
- [Functies](#functies)
- [Installatie](#installatie)
- [Gebruik](#gebruik)
- [API Endpoints](#api-endpoints)
- [Optionele Uitbreidingen](#optionele-uitbreidingen)
- [Toekomstige Verbeteringen](#toekomstige-verbeteringen)
- [Bijdragen](#bijdragen)
- [Licentie](#licentie)

## Functies
- Gebruikersregistratie en -authenticatie (inclusief wachtwoordherstel)
- Gebruikersprofielen met gamertags en favoriete games
- CRUD-functionaliteit voor ingame items
- Zoek- en filterfunctionaliteit voor beschikbare items
- Ruilverzoeken indienen en accepteren/afwijzen
- Koopverzoeken en betalingssysteem (mock payment)
- Notificaties voor nieuwe handels- en verkoopverzoeken
- Beoordelingssysteem voor gebruikers na transacties

## Installatie

### Vereisten
- PHP 8.0 of hoger
- Composer
- MySQL of een andere ondersteunde database
- Node.js en NPM (optioneel, voor frontend assets)

### Stappen
1. **Kloon de repository:**
   ```bash
   git clone https://github.com/jouw-gebruikersnaam/ingame-item-trading-platform.git
   cd ingame-item-trading-platform
   ```

2. **Installeer afhankelijkheden:**
   - Backend afhankelijkheden via Composer:
     ```bash
     composer install
     ```
   - Frontend afhankelijkheden (optioneel):
     ```bash
     npm install && npm run dev
     ```

3. **Maak een `.env` bestand:**
   Kopieer het `.env.example` bestand en pas het aan:
   ```bash
   cp .env.example .env
   ```

4. **Genereer de applicatiesleutel:**
   ```bash
   php artisan key:generate
   ```

5. **Configureer de database:**
   Stel je database-instellingen in het `.env` bestand in en voer de migraties uit:
   ```bash
   php artisan migrate
   ```

6. **Start de ontwikkelserver:**
   ```bash
   php artisan serve
   ```

De applicatie is nu toegankelijk op `http://localhost:8000`.

## Gebruik
1. **Registreer een account:** Nieuwe gebruikers kunnen een account aanmaken via de registratiepagina.
2. **Items toevoegen:** Zodra je bent ingelogd, kun je items toevoegen aan je inventaris met alle relevante details (naam, game, status, etc.).
3. **Items zoeken en filteren:** Gebruikers kunnen ingame items doorzoeken en filteren op basis van beschikbaarheid, game, zeldzaamheid, etc.
4. **Verzoek indienen:** Klik op een item en dien een ruilverzoek of koopverzoek in.
5. **Verzoeken beheren:** Beheerders en gebruikers kunnen ruil- en koopverzoeken accepteren, afwijzen of aanpassen.

## API Endpoints
Voor integratie met een API, zijn de belangrijkste endpoints als volgt:

### Authenticatie
- `POST /api/register` - Gebruiker registreren
- `POST /api/login` - Gebruiker inloggen

### Items
- `GET /api/items` - Alle beschikbare items ophalen
- `POST /api/items` - Nieuw item toevoegen
- `PUT /api/items/{id}` - Bestaand item bewerken
- `DELETE /api/items/{id}` - Item verwijderen

### Handelsverzoeken
- `POST /api/trades` - Ruilverzoek indienen
- `PUT /api/trades/{id}/accept` - Ruilverzoek accepteren
- `PUT /api/trades/{id}/reject` - Ruilverzoek afwijzen

### Koopverzoeken
- `POST /api/purchases` - Koopverzoek indienen
- `PUT /api/purchases/{id}/accept` - Koopverzoek accepteren
- `PUT /api/purchases/{id}/reject` - Koopverzoek afwijzen

## Optionele Uitbreidingen
- **Beveiliging met wachtwoordherstel**
- **Validatie voor het toevoegen van items (alle verplichte velden)**
- **Filters voor beschikbaarheid (te koop, te ruil)**
- **Koopverzoeken en betalingslogica met mock payment systeem**
  
## Toekomstige Verbeteringen
- **Veilingfunctionaliteit**: Voeg de mogelijkheid toe voor gebruikers om biedingen te plaatsen op items.
- **Transactiegeschiedenis**: Een pagina waar gebruikers hun ruil- en verkoopgeschiedenis kunnen bekijken.
- **Live chat-functionaliteit**: Voor real-time communicatie tussen gebruikers tijdens onderhandelingen.
- **Twee-factor-authenticatie (2FA)**: Verbeterde beveiliging voor gebruikersaccounts.

## Bijdragen
Bijdragen aan dit project zijn altijd welkom! Volg deze stappen om bij te dragen:

1. Fork de repository
2. Maak een nieuwe feature branch (`git checkout -b feature/jouw-feature`)
3. Commit je wijzigingen (`git commit -am 'Voeg nieuwe feature toe'`)
4. Push naar de branch (`git push origin feature/jouw-feature`)
5. Open een pull request

## Licentie
Dit project is gelicentieerd onder de MIT License. Raadpleeg het [LICENSE](LICENSE) bestand voor meer informatie.
