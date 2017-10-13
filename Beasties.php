<?php


$messages = array();


if (!isset($_GET["hond"]) && !isset($_GET["kat"]) && !isset($_GET["hamster"])
    && !isset($_GET["mol"]) && !isset($_GET["eend"])) {
    $messages[] = "Je moet eerst het formulier nog invullen.";
}




if (!count($messages) == 0) {
    //messages
    $html = "<ul>";
    foreach ($messages as $message) {
        $html .= "<li>" . $message . "</li>";
    }
    $html .= "</ul>";
    echo $html;
}



if(isset($_GET["hond"])) {
    echo '<img src="img/hond.jpg" alt="hond" width="200" height="200"><br>';

}
if(isset($_GET["kat"])) {
    echo '<img src="img/kat.jpg" alt="kat" width="200" height="200"><br>';

}
if(isset($_GET["hamster"])) {
    echo '<img src="img/hamster.jpg" alt="hamster" width="200" height="200"><br>';

}
if(isset($_GET["mol"])) {
    echo '<img src="img/mol.jpg" alt="mol" width="200" height="200"><br>';

}
if(isset($_GET["eend"])) {
    echo '<img src="img/eend.jpg" alt="eend" width="200" height="200">';
}