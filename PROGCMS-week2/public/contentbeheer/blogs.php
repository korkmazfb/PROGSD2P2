<?php include "../../private/init.php"; ?>
<?php include SHARED_PATH . "/header.php"; ?>

<h1>
  beheer
</h1>

    <?php
    lees_bestand(string:'blogs.txt');

        // $bestand = fopen( 'blogs.txt', 'r');

        // while(!feof($bestand)) {
        //     $blog_regel = fgets($bestand);
        //     echo $blog_regel, '<br>';
        // }

        ?>

<?php include SHARED_PATH . "/footer.php"; ?>