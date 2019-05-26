    <footer class="footer">
            <p>Copyright © 2019 Thai Tanic AB. Alla rättigheter reserverade. <br/>Org.nummer: 565432181-32159 </p> 
            <p><i class="fas fa-user-lock"></i> Enter password:</p> <input id='password' type='password'/>
            <a class="admin" href="admin.php" onclick="javascript:return validatePass()">Admin Panel</a>
        <script> // Script som kräver lösenord för att komma till admin panelen
            function validatePass(){
            if(document.getElementById('password').value == 'admin'){
            return true;
            }else{ // om an skriver fel lösenord 
            alert('Fel Lösenord, försök igen!!');
            return false;
            }
                }
        </script>
    </footer>