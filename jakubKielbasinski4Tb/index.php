<!DOCTYPE html>
<html>
      <head>
      </head>
      <body>
            <?php
                  $number = 2;
                  
                  if([$number] > 0)
                  {
                        echo "<p>$number jest liczba dodatnia</p>";
                  }
                  elseif([$number] < 0)
                  {
                        echo "<p>$number jest liczba ujemna</p>";
                  }
                  elseif([$number] == '0')
                  {
                        echo "<p>Zero</p>";
                  }
                  else
                  {
                        echo "<p>Podaj liczbę</p>";
                  }
                  
                  $i = 0;
                  while ($i <= 20) {
                        $i++;
                        if ($i % 2 == 1) continue;
                        echo $i . "<br>";
                        if ($i >= 10) break;                        
                  }

                  switch ($_GET['kolor']) 
                  {
                        case "czerwony":
                        echo "Twój ulubiony kolor to czerwony!";
                        break;
                        case "niebieski":
                        echo "Twój ulubiony kolor to niebieski!";
                        break;
                        case "zielony":
                        echo "Twój ulubiony kolor to zielony!";
                        break;
                        default:
                        echo "Twój ulubiony kolor to nie czerwony, niebieski ani zielony!";
                  }
            ?>
      </body>
</html>