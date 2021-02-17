<?php


require_once '../includes/connect.php';

spl_autoload_register(function ($class) {
    require_once "../classes/$class.php";
});

for ($i = 1; $i <= characteridentity.length;$i++) {
    $sql = "SELECT *
            FROM characteridentity
            WHERE idCharacter = $i
            ORDER BY identityName ASC";
    $statement = $connection->prepare($sql);
    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $identityresults = $statement->fetchAll();

    foreach ($identiresults as $result) {
        $identity = new CharacterIdentity();
        $identity->setIdentityName($result['identityName']);
        $identity->setIdentityLevel($result['identityLevel']);

        var_dump($perso);
    }
}