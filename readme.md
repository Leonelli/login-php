# LOGIN PHP


## installazione

installare php5 o superiore

installlare sqlite3

installare tutte le dipendenze

### Esempio:


```
sudo apt-get update

sudo apt-get install apache2

sudo apt-get install sqlite sqlite3

sudo apt-get install libapache2-mod-php

sudo apt-get install php7.0-sqlite3
```

controllare che il la cartella data, il file phpmyadmin e il database sia sia lettura che scrittura (chmod)

```
sudo chmod 777 /var/www/html/data

sudo chmod 777 /var/www/html/datasistema.db

sudo chmod 777 /var/www/html/dataphpliteadmin.php
```

Nel file define.php potrebbe essere necessarrio modificare il percorso.

## visualizzazione database

host/data/phpliteadmin.php

password: admin

## istruzioni login

entrare con user: admin, password: admin

la visualizzazione della pagina utenti sarà possibile sono dopo il login al sito

il database tiene traccia degli accessi tentati e riusciti

La pagina di modifica degli utenti sarà visibile solamente dopo aver effettuato il login, mentre per la pagina 'amministrazione' purchè visibile sarà richiesto all'utente di loggarsi.

(pagina iniziale index.php)