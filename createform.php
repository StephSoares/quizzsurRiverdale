<?php
// Une ouverture de balise "Form"
  // Définir une action
function openForm($action = "#", $class)
{
  return "<form action='" . $action . "' class='" . $class . "'>";
}

// Une fermeture de balise "Form"
function closeTag($tag)
{
  return "</" . $tag . ">";
}

// Mise en place d'un input
  // Avec un label
  /*
    $type = string
    $name = string
    $value = string
    $label = string
  */
function createInput($type, $name, $value, $label)
{
  return "<input type='" . $type . "' name='" . $name . "' value='" . $value . "'><label>" . $label . "</label><br>";
}
// Mise en place d'un select
function createSelect($name, $label, $options)
{

  $html = "<label>" . $label . "</label>";
  $html .= "<select name='" . $name . "'>";
  foreach ($options as $key => $value) {
    $html .= "<option value'" . $value['value'] . "'>" . $value['content'] . "</option>";
  }
  $html .= "</select>";
    return $html;
}
// Générer un boutton submit
function createSubmit($value, $class, $style)
{
  return "<br><input type='submit' value='" . $value . "' class='" . $class . "' style='" . $style . "'>";
}

function createSection($class, $style)
{
  return "<section class='" . $class . "' style='" . $style . "'>";
}

function createDiv($class, $style)
{
  return "<div class='" . $class . "' style='" . $style  . "'>";
}
function createImg($src, $class, $alt)
{
  return "<img src='" . $src . "' class='" . $class . "' alt='" . $alt . "'>";
}
function createHeader($class, $style)
{
  return "<header class='" . $class . "' style='" . $style  . "'>";
}

/* Array multidimentionnelle :
$options = [
  [
    'value' => 'fr',
    'content' => 'Français',
  ],
  [
    'value' => 'en',
    'content' => 'Anglais',
  ],
  [
    'value' => 'de',
    'content' => 'Allemand',
  ],
];*/
