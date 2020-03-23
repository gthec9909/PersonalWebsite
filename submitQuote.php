<?php
session_start();

$quote = $_POST['quote'];
$quotes = fopen("quotes", "a") or die ("Unable to open file.");

fwrite($quotes, "\n$quote");

fclose($quotes);

$person = $_POST['person'];
$people = fopen("people", "a") or die ("Unable to open file.");

fwrite($people, "\n$person");

fclose($people);

$both = fopen("both", "a") or die ("Unable to open file.");

fwrite($both, "\n$person said \"$quote\"");

$_SESSION['submitted'] = true;
echo "<script>window.location = 'http://localhost:63342/PhraseSubmitter/PhraseSubmission.php?_ijt=6cksmfbeb4h2vkgl38bbkjkg6q'</script>";