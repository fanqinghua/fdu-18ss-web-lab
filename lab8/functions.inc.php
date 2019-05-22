<?php

    function outputOrderRow($file, $title, $quantity, $price) {
        echo "<tr>";
        echo"<td>".$file; echo"<td>";
         echo"<td>".$title;echo"<td>";
         echo"<td>".$quantity;echo"<td>";
          echo"<td>".$price;echo"<td>";
        echo "</tr>";
    }
?>