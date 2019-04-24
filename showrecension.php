 <?php
$dbc = mysqli_connect("localhost","root","","thai");
                    $query = "SELECT * FROM recension";

                    mysqli_query($dbc,"SET NAMES utf8");

                    $result = mysqli_query($dbc,$query);
                    
                    ?>
                    <table class="rec_container">
                    <?php
                    while($row = mysqli_fetch_array($result)){
                        
                        echo "<tr><td class=rec_name>Name:" . $row['name'] . "</td>";
                        echo "<td class=rec_mail>" . $row['mail'] . "</td>";
                        echo "<td class=rec_recension>" . $row['recension'] . "</td></tr>";
                                      
                    }
                    ?>
                    </table>
                