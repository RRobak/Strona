<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Rafał Robak, Kacper Płusa 3ID13A</title>

</head>

<body class="body-img">

<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $country = $_POST['country'];
    if(isset($_POST["submit"])) {
      if ($name && $surname && $day && $month && $year && $country) {
        echo '<h5>Imię: ' . $name .'</h5>';
        echo '<h5>Nazwisko: '. $surname .'</h5>';
        echo '<h5>Data urodznia: '. $day .' '.$month.' '.$year .'</h5>';
        if (isset($_POST['male'])){
          echo '<h5>Mężczyzna.</h5>';
        }else{
          echo '<h5>Kobieta.</h5>';
          if (isset($_POST['newsletter'])){
          echo '<h5>Subskrybuję newsletter e-mail z ofertami oraz informacjami na temat tytułów
          XYZ. Subskrypcję mogę anulować w dowolnym momencie..</h5>';
          }
          if (isset($_POST['statue'])){
            echo '<h5>Akceptuję Warunki użytkowania, Warunki sprzedaży oraz Politykę prywatności
            firmy XYZ.</h5>';
          }
        }
      }
    }else {
      echo '<p>Pozostały puste pola</p>';
      echo '<p><a href="/strona3.html">Formularz</a></p>'; 
    }
?>
</body>
</html>