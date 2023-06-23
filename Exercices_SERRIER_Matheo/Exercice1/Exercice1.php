<?php
$moutons = [['Danny', 75], ['Richard', 60]];
array_push($moutons, ['Gérard', 120]);

/**
 * @param $moutons
 * @return float|int
 * calcule la moyenne d'un tableau de moutons
 */
function calculerMoyenne($moutons) {
    $sumValMoutons = 0;
    foreach ($moutons as $mouton) {
        //ajout du += pour clarifier l'instruction
        $sumValMoutons += $mouton[1];
        //suppréssion du $i++, inutile avec count()
    }
    //l'utilisation de la fonction count() permet d'obtenir le nombre de motons dans le tableau, au lieu d'utiliser une variable manuellement incrémenté
    return $sumValMoutons / count($moutons);
}

//j'ai créé une methode afin d'éviter un duplication de code, cela simplifie le code et le rend plus clair
$moyValMoutons = calculerMoyenne($moutons);
echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . $moyValMoutons;

for ($j = 0; $j < 100; $j++) {
    $randNameMouton = "";
    $nbCharsNameMouton = rand(3, 15);
    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
    $nbChars = strlen($chaine);
    $randValMoutons = rand(10, 200);
    for ($k = 0; $k < $nbCharsNameMouton; $k++) {
        $randNameMouton .= $chaine[rand(0, ($nbChars - 1))];
    }
    array_push($moutons, [$randNameMouton, $randValMoutons]);
}
echo PHP_EOL;
//utilisation de la méthode calculerMoyenne() afin d'éviter une duplication de code
$moyValMoutons = calculerMoyenne($moutons);
echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . $moyValMoutons;
