<?php
  require_once('./createform.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,700" rel="stylesheet">
    <title>Mon Questionnaire</title>
  </head>
  <body style="margin:0; font-family: 'Cairo', sans-serif;">
     <?php
        echo createHeader("flex-content", "justify-content: center; text-align: center;background : url(./image/riverdaleimage.jpg) no-repeat center; padding-top: 50px; overflow: hidden; background-size: cover;");
        echo createDiv("logo_anim", "");
        echo createImg("./image/logo.png", "logo", "logo", "display:block; justify-content:center; text-align:center; font-size: 20px;");
        echo closeTag("div");
        echo closeTag("header");

        echo createSection("titre", "color: #013E64; margin:0; text-align: center; text-transform: uppercase; font-size: 30px;");
        echo "<h1 style='margin:0;'>Quizz sur Riverdale Saison 1</h1>";
        echo "<h3 style='margin:0; font-size:20px;'>Connaissez-vous vraiment la série ?</h3>";
        echo closeTag("section");

        echo createSection("questions", "text-align:center; font-size: 20px;");
        echo openForm("./quizz/script.php", "container-flex");

        echo createDiv("question1", "display:block; background-color:#013E64; margin:20px; padding:20px; color:white; border:2px solid #2B7B9B;");
        echo "<p><strong>Question 1 : Quel personnage a été tué au début de la série ?</strong><p>";
        echo createInput("radio", "q1", "1", " Betty Cooper");
        echo createInput("radio", "q1", "2", "  Un élève du lycée");
        echo createInput("radio", "q1", "3", "  Jason Blossom");
        echo closeTag("div");

        echo createDiv("question2", "display:block; background-color:#013E64; margin:20px; padding:20px; color:white; border:2px solid #2B7B9B;");
        echo "<p><strong>Question 2 : Où et comment ce personnage est-il décédé ?</strong><p>";
        echo createInput("radio", "q2", "1", " Dans la forêt par une balle dans la tête");
        echo createInput("radio", "q2", "2", "  Dans une grange par un coup de pelle");
        echo createInput("radio", "q2", "3", "  Dans la rivière, mort noyé et d'une balle dans la tête");
        echo closeTag("div");

        echo createDiv("question3", "display:block; background-color:#013E64; margin:20px; padding:20px; color:white; border:2px solid #2B7B9B;");
        echo "<p><strong>Question 3 : Comment s'appellent les jumeaux de la série ?</strong><p>";
        echo createInput("radio", "q3", "1", "  Rayan et Émilie");
        echo createInput("radio", "q3", "2", "  Jason et Cheryl");
        echo createInput("radio", "q3", "3", "  Jade et Taylor");
        echo closeTag("div");

        echo createDiv("question4", "display:block; background-color:#013E64; margin:20px; padding:20px; color:white; border:2px solid #2B7B9B;");
        echo "<p><strong>Question 4 : De qui Betty Cooper est-elle amoureuse ?</strong><p>";
        echo createInput("radio", "q4", "1", " Jason Blossom");
        echo createInput("radio", "q4", "2", "  Jughead Jones");
        echo createInput("radio", "q4", "3", "  Archie Andrews");
        echo closeTag("div");

        echo createDiv("question5", "display:block; background-color:#013E64; margin:20px; padding:20px; color:white; border:2px solid #2B7B9B;");
        echo "<p><strong>Question 5 : Comment s'appelle la professeure de musique ?</strong><p>";
        echo createInput("radio", "q5", "1", " Miss Owen");
        echo createInput("radio", "q5", "2", "  Miss Oliver");
        echo createInput("radio", "q5", "3", "  Miss Grundy");
        echo closeTag("div");

        echo createDiv("question6", "display:block; background-color:#013E64; margin:20px; padding:20px; color:white; border:2px solid #2B7B9B;");
        echo "<p><strong>Question 6 : Qui est Pop ?</strong><p>";
        echo createInput("radio", "q6", "1", " Le père de Betty Cooper");
        echo createInput("radio", "q6", "2", "  Le gérant d'un magasin de vêtements");;
        echo createInput("radio", "q6", "3", "  Le gérant d'un bar/restaurant");
        echo closeTag("div");

        echo createSubmit("Envoyer", "bouton_perso", "background-color:#013E64; border:2px solid #2B7B9B; color:white; padding: 15px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 17px; margin: 4px 2px; cursor: pointer;");

        echo closeTag("form");
        echo closeTag("section");
      ?>
      <style>

      </style>
  </body>
</html>
