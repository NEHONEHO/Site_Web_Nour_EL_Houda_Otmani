<!DOCTYPE HTML>
<html>
    <head>
        <title>page d'inscription</title>
        <link rel="stylesheet" href="inscrire.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        
        <hr>

        <div class="log-sign">

        <form action="inscrire.php" method="POST" name="authentification">
            <div class="box">
                <div class="container">
                    <div><i class='bx bx-right-arrow-alt icon'></i></div>
                    <div class="box1">
                        <p>Already have an account?</p>
                        <h2>LOG IN HERE</h2>
                    </div>
                </div>
                <p><input type="text"     name="username-exist" id="username-exist" placeholder="Username" required></p>
                <p><input type="password" name="password-log"   id="password-log"   placeholder="Password" required></p>
                <p class="checkbox">
                    <input type="checkbox" name="keep-log" id="keep-log">
                    <label for="keep-log">Keep me logged in</label>
                </p>
                <button type="submit" value ="login" name="login" >LOG IN</button>
                <p>Forgot your password?</p>
            </div>
            </form>

            <?php 

           
           if(isset($_POST['login']))
           {
                if(isset($_POST['username-exist']) and isset($_POST['password-log']))
                {
                    try{
                        global $bdd;
                        $bdd = new PDO('mysql:host=localhost;dbname=zeroimpactshop;charset=utf8','root','');
                    }
                
                    catch(Exception $exp){
                        die('Erreur : '.$exp->getMessage());
                    }
    
                    $sql = "select * from loginpassword where username = '".$_POST['username-exist']."'and password = '".$_POST['password-log']."'";
                    $reponse = $bdd->query($sql);
                    $donnees = $reponse->fetch();
         
                    if(!empty($donnees)){
                     header("location: produit.html");
                    }
                    else{
                     echo "<center>utilisateur n'existe pas, veuillez verifier votre utilisateur ou mot de passe</center>";
                    }
                } 
           }           
        ?>


            <form action="inscrire.php" method="post">  
            <div class="box">
                    <div class="container">
                        <div><i class='bx bx-plus icon'></i></div>
                        <div class="box1">
                            <p>Don't have an account?</p>
                            <h2>REGISTER NOW</h2>
                        </div>
                    </div>
                    <p><input type="text" name="username-not-exist" id="username-not-exist" placeholder="Username" required></p>
                    <p><input type="password" name="password-register" id="password-register" placeholder="Password" required></p>
                    <p><input type="password" name="password-register-1" id="password-register-1" placeholder="Confirm Password" required></p>
                    <button type="submit" value ="register" name="register" >LOG IN</button>
                
            </div>   
            </form>
        </div>

        <?php 

           
           if(isset($_POST['register']))
           {
                if(isset($_POST['username-not-exist']) and isset($_POST['password-register']) and isset($_POST['password-register-1']))
                {
                    try{
                        global $bdd;
                        $bdd = new PDO('mysql:host=localhost;dbname=zeroimpactshop;charset=utf8','root','');
                    }
                
                    catch(Exception $exp){
                        die('Erreur : '.$exp->getMessage());
                    }

                    $sql1="select * from loginpassword where username='".$_POST['username-not-exist']."'";
                    $reponse = $bdd->query($sql1);
                    $donnees = $reponse->fetch();
            
                    if(empty($donnees))
                    {   
                    if($_POST['password-register'] == $_POST['password-register-1'])
                    {
                        $sql2="insert into loginpassword(username, password) values('".$_POST['username-not-exist']."','".$_POST['password']."')";
                        $bdd->exec($sql2);
                        echo"<center>Utilisateur ".$_POST['username-not-exist']." est ajouté avec succés</center>";
                        header("location: produit.html");
                    }
                    else{
                        echo"<center>les champs du mot de passe ne sont pas identique</center>";
                    }
                    }
                    else
                    echo "<center>Utilisateur existe déja !!!</center>";
                } 
           }           
        ?>
    </body>
</html>