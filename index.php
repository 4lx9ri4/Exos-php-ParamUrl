<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo php ParamUrl</title>
  </head>
  <body>
      <?php
      //Exo 1
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        echo '/index.php?nom=Nemare&prenom=Jean';
        echo $nom.'</br>';
        echo $prenom. '</br>';

      //Exo 2
        $age = $_GET['age'];
        var_dump  (isset($age));

echo '</br>';
      //Exo 3
        $datdeb = $_GET['dateDebut'];
        $datfin = $_GET['dateFin'];
        echo 'index.php?dateDebut=2/05/2016&dateFin=27/11/2016</br>';
        echo $datdeb.'</br>';
        echo $datfin.'</br>';

      //Exo 4
        $lang = $_GET['langage'];
        $serv = $_GET['serveur'];
        echo 'index.php?langage=PHP&serveur=LAMP</br>';
        echo $lang.'</br>';
        echo $serv.'</br>';

      //Exo 5
        $sem = $_GET['semaine'];
        echo 'index.php?semaine=12</br>';
        echo $sem.'</br>';

      //Exo 6
        $bat = $_GET['batiment'];
        $sal = $_GET['salle'];
        echo 'index.php?batiment=12&salle=101';
        echo $bat.'</br>';
        echo $sal;
      ?>
  </body>
</html>
