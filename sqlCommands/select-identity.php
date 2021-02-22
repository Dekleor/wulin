<?php

require_once '../includes/connect.php';

spl_autoload_register(function ($class) {
    require_once "../classes/$class.php";
});

$sql = "SELECT *
        FROM personnalities
        WHERE isPc = True
        ORDER BY characterName ASC";
$statement = $connection->prepare($sql);
$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);
$characterResults = $statement->fetchAll();

foreach ($characterResults as $result) {
    $perso = new Personnalities();
    $perso->setCharacterName($result['characterName']);
    $perso->setIsFemale($result['isFemale']);
    $perso->setKnownStory($result['knownStory']);
    $id = $result['idCharacter'];


    $sql = "SELECT *
        FROM characteridentity
        WHERE idCharacter = $id
        ORDER BY identityName ASC";
    $statement = $connection->prepare($sql);
    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $identityResults = $statement->fetchAll();

    foreach ($identityResults as $result) {
        $identity = new CharacterIdentity();
        $identity->setIdentityName($result['identityName']);
        $identity->setIdentityLevel($result['identityLevel']);
    }
}

echo '
<ul>
<li>Son nom : '.$perso->getCharacterName().' </li>
<li>Ses identités : '.$identity->getIdentityName().'';

 switch ($identity->getIdentityLevel()) {
     case 1:
         echo ' (Rumeur)';
         break;
     case 2:
         echo ' (Gloire)';
         break;
     case 4:
         echo ' (Légende)';
         break;
 }
echo ' 
    </li>
<li>Ses traits : </li>
<li>Son trésor : </li>
<li>Son histoire : '.$perso->getKnownStory().' </li>
</ul>';
