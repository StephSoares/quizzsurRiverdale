<?php

$compteur = 0;
echo "<div class='reponses'>";
if ($_GET['question1'] == 3) {
  echo'<p>Question 1 : Votre réponse est correcte.</p>';
  $compteur= $compteur+5;

}
else
{
  echo'<p>Question 1 : Votre réponse est erronée. Testez à nouveau.</p>';
}
if ($_GET['question2'] == 3) {
  echo'<p>Question 2 : Votre réponse est correcte.</p>';
  $compteur= $compteur+5;

}
else
{
  echo'<p>Question 2 : Votre réponse est erronée. Testez à nouveau.</p>';
}
if ($_GET['question3'] == 2) {
  echo'<p>Question 3 : Votre réponse est correcte.</p>';
  $compteur= $compteur+5;
}
else
{
  echo'<p>Question 3 : Votre réponse est erronée. Testez à nouveau.</p>';
}
if ($_GET['question4'] == 2) {
  echo'<p>Question 4 : Votre réponse est correcte.</p>';
  $compteur= $compteur+5;
}
else
{
  echo'<p>Question 4 : Votre réponse est erronée. Testez à nouveau.</p>';
}

if ($_GET['question5'] == 3) {
  echo'<p>Question 5 : Votre réponse est correcte.</p>';
  $compteur= $compteur+5;
}
else
{
  echo'<p>Question 5 : Votre réponse est erronée. Testez à nouveau.</p>';
}
if ($_GET['question6'] == 3) {
  echo'<p>Question 6 : Votre réponse est correcte.</p>';
  $compteur= $compteur+5;
}
else
{
  echo'<p>Question 6 : Votre réponse est erronée. Testez à nouveau.</p>';
}
echo "<div class='note'>";
echo "<p>Vous avez une note de " . $compteur . "/30</p>";
echo "<div class='commentaire'>";
if ($compteur > 20) {
  echo "\xF0\x9F\x98\x89 \xF0\x9F\x99\x8C Vous en savez beacoup sur Riverdale ! \xF0\x9F\x99\x8C \xF0\x9F\x98\x89";
} else {
  echo "\xF0\x9F\x98\xA1 \xF0\x9F\x98\xA5 Vous ne savez rien de Riverdale ! \xF0\x9F\x98\xA5 \xF0\x9F\x98\xA1";
}
echo"</div>";
echo "</div>";
echo "</div>";
?>
<style>
.reponses {
    font-family: 'Cairo', sans-serif;
    font-size: 20px;
    background-color: #013E64;
    border: 2px solid #2B7B9B;
    color: white;
    text-align: center;
}
.reponses p {
  margin: 10px;
}
p {
  padding: 10px;
}
.note {
  font-size: 40px;
}
.note p {
  margin:0;
}
.commentaire {
  font-size: 20px;
  padding: 0;
}
</style>
