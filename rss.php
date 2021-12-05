<?php
$bdd = new PDO('mysql:host=localhost;dbname=watson;charset=utf8','watson','watson');
$_feedRSS = $bdd->query("SELECT * FROM tl_liens ORDER BY lien_id DESC");
?>
<?xml version="1.0" encoding="utf-8" ?>
<rss version="2.0">
    <channel>
        <title>Watson</title>
        <description>Flux RSS du site Watson</description>
        <link>http://localhost:1234/index.php</link>
        <?php
        while( $article = $_feedRSS->fetch()) { ?> 
            <item>
                <title><?= $article['lien_titre'] ?></title>
                <link><?= $article['lien_url'] ?></link>
                <author><?= $article['user_id'] ?></author>
                <description><?= $article['lien_desc'] ?></description>
            </item>
            <?php } ?>
    </channel>
</rss>