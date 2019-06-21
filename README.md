# Uitleg Security

## Authenticatie

Voor authenticatie gebruik ik Laravel's middleware.
De reden hiervoor is dat je dit makkelijk kunt opzetten met een artisan commando.
Het implementeren ervan is ook niet zoveel werk,
omdat je alleen de auth middleware hoeft aan te roepen in de __construct functie van de controller.
Ik moest verder geen exotische inlogsysteem hebben, dus waarom zou ik zelf een inlogsysteem maken?

## Authorisatie

Voor authorisatie gebruik ik een RBAC systeem dat gebruik maakt van Policies.
Het RBAC systeem bestaat uit Users die een many to many relatie heeft met roles
die weer een many to many relatie heeft met permissies.
Als een user een bepaalde crud pagina wil zien wordt de Policy aangeroepen en
gecheckt of de user de juiste permissie heeft.
Ik heb ervoor gekozen dat alleen mijn crud paginas data bevat die ik moet beveiligen.
De reden dat ik voor policies heb gekozen in plaats van gates is,
omdat laravel met een handig commando komt om voor een crud resource een policy te maken.
Alle policies voor een resource staan dan ook bij de policy voor die resource.
Ik hoef ook alleen een authorizeResource functie aan te roepen in de Controller.
Ik gebruik RBAC, zodat ik kan defineren welke rollen welke permissies hebben en
dat ik dan een user een rol kan aanwijzen.

## Handleiding om authenticatie te testen

Zonder ingelogd te zijn, probeer naar een pagina op de site te gaan zoals /contact.
Je wordt dan geredirect naar een inlogscherm.
Om te registreren moet je op de geen account? klikken en het form invullen.

## Handleiding om authorisatie te testen

Maak een gebruiker aan via de register pagina. Die gebruiker is een 'user'.
Ga dan naar het dashboard en klik op een de naam van een toets, cursus of blok.
Klik daarna op de de create, update of delete knoppen. De user mag de show pagina zien,
maar niet anders.
Als je dit wel wil kunnen aanpassen moet je via de database de rol van de gebruiker aanpassen.
Je moet dan in de role_user tabel de rij van de user aanpassen. Verander de role id van 1 naar 2.
De gebruiker is nu een administrator.
