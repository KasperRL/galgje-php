<?php
session_start();
session_unset();
$_SESSION['words'] = [
    "output",
    "comfortable",
    "driver",
    "urgency",
    "import",
    "acute",
    "agency",
    "insure",
    "hell",
    "unfortunate",
    "beg",
    "function",
    "guess",
    "engineer",
    "fastidious",
    "relevance",
    "cellar"
];
$_SESSION['word'] = str_split($_SESSION['words'][array_rand($_SESSION['words'])]);
header('Location: game.php');