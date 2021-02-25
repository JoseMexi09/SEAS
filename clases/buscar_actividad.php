<?php
  require_once 'config.php';

  if (isset($_POST['query'])) {
	  
    $inpText = $_POST['query'];
	
    //$sql = 'SELECT country_name FROM countries WHERE country_name LIKE :country';


    

    $sql = 'SELECT Desc_act FROM actividadsat WHERE Desc_act LIKE :Desc_';
    $stmt = $conn->prepare($sql);

    $stmt->execute(['Desc_' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        //echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['Desc_act'] . '</a>';

        echo '<a  class="list-group-item list-group-item-action border-1">' . $row['Desc_act'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Existen Registros</p>';
    }
  }
?>