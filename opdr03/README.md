### Laravel Migrations Opdrachten

1. **php artisan migrate:rollback --step=5**: Dit commando rolt de laatste 5 migrations terug die zijn uitgevoerd. Het verwijdert de tabellen en wijzigingen die zijn aangebracht door de laatste 5 migrations.

2. **php artisan migrate:reset**: Dit commando rolt alle migrations terug. Het verwijdert alle tabellen en wijzigingen die zijn aangebracht door de migrations.

3. **php artisan migrate:refresh**: Dit commando rolt alle migrations terug en voert ze opnieuw uit. Hierdoor wordt de database volledig opnieuw opgebouwd op basis van de migrations.
