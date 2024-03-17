# Esercizio di oggi: Laravel Migration Seeder Factory
### Nome repo: laravel-migration-seeder

Iniziamo un nuovo progetto laravel<br>
Creiamo una tabella `trains` tramite una migration<br>
Ogni treno dovrà avere:
- Azienda
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Numero Carrozze
- In orario
- Cancellato (si / no)

Una volta eseguita la migration provate ad inserire un dato sul db tramite PhpMyAdmin.<br>
Se tutto funziona, potete passare a generare i file utilizzando una factory:<br>
> php artisan make:factory NomeFactory
Utilizzare la documentazione relativa al PHP Faker

Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna

### BONUS
Provate a crearvi un array contenente dei dati da poter utilizzare all'interno di un Seeder !