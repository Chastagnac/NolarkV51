<footer>
    <p>&copy;2018 Nolark - Créé par <a href="leochastagnac@gmail.com">Chastagnac Léo</a> Benjabria Adem et Charles Valentin - Page chargée le <?php
        setlocale(LC_ALL, 'fr-FR.utf8', 'fra');
        date_default_timezone_set('Europe/Paris');
        echo strftime("%A %d %B");
        ?> à <?php echo strftime("%Hh%M"); ?><p>
</footer>