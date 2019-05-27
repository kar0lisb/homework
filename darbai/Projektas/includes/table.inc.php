 <?php
    include_once 'includes/db.inc.php';
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
                } 
        if($_SESSION['user_type'] == 1) {
//jeigu adminas
            echo "<th>Būsena</th></tr></thead>";
            $sql = "SELECT id, date_created, miestas, gedimas, aprasymas, telefonas FROM gedimai";
            $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                   echo "<tbody><tr><td data-column='Reg. Nr'>" . $row["id"] . "</td><td data-column='Data'>" . $row["date_created"] . "</td><td data-column='Miestas'>" . $row["miestas"] . "</td><td  data-column='Gedimas rūšis'>"  . $row["gedimas"] . "</td><td  data-column='Gedimo aprašymas'>" . $row["aprasymas"] . "</td><td  data-column='Telefono Nr.'>"  . $row["telefonas"] . "</td><td  data-column='Būsena'><input id='busena_id' type='checkbox' name='busena'></td></tr></tbody>";
                }
                    echo "</table>";
                    echo "<input class='submit_busena' type='button' name='submit_busena' value='Išsaugoti'>";
            }} else {
//jeigu paprastas useris
            echo "</thead>";
                $sql = "SELECT id, date_created, miestas, gedimas, aprasymas, telefonas FROM gedimai";
                $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        echo "<tbody><tr><td data-column='Reg. Nr'>" . $row["id"] . "</td><td data-column='Data'>" . $row["date_created"] . "</td><td data-column='Miestas'>" . $row["miestas"] . "</td><td data-column='Gedimas rūšis'>"  . $row["gedimas"] . 
                        "</td><td data-column='Gedimo aprašymas'>" . $row["aprasymas"] . "</td><td data-column='Telefono Nr.'>"  . $row["telefonas"] . "</td></tr></tbody>";
                    }
                    echo "</table>";
                    }  
                  }
                $conn->close();
                ?>