        <?php    
            $dbc_recension = mysqli_connect("localhost","siba@siba.kronhus.tk","nomis8899","siba");
            
            $query = "SELECT * FROM recension";
            $result = mysqli_query($dbc_recension,$query);
            while($row = mysqli_fetch_array($result)){
        ?>
            <div class="recensioner_container">
                    <table class="recension">
                        <tr><td class="rec_name">Name:<?php echo $row['name']; ?></td></tr>
                        <tr><td class="rec_mail">Mail:<?php echo $row['mail']; ?></td></tr>
                        <tr><td class="rec_recension"><?php echo $row['recension']; ?></td></tr>
                    </table>                 
            </div>
                <?php
                        }
                    ?> 