    <?php
    $serveurname = 'localhost';
    $username = 'root';
    $password = '';
      $conn = new PDO("mysql:host=$serveurname;dbname=tp2", $username, $password); 
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //  echo 'Connexion réussie';
    ?>