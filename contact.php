<!DOCTYPE html>
<html>
    <head>
        <title>page d'Accueil</title>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
      <script src="panier-site.js"></script>
      <header>
        <div class="header2">
  
          <div class="shop-name">ZERO IMPACT SHOP</div>
  
          <div class="input-recherche">
            <div>
              <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5 19a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15ZM20.5 20.5 17 17" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </div>
            <div>
              <input type="text" name="recherche" id="recherche">
            </div>
          </div>
  
          <div class="icon-button-connect">
            <div>
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.5a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-7.5 5a7.5 7.5 0 1 1 15 0 7.5 7.5 0 0 1-15 0ZM20 24.375c-5.466 0-8.782 1.196-10.64 2.239-1.246.7-1.86 2.211-1.86 4.09V32.5h25v-1.795c0-1.88-.614-3.391-1.86-4.091-1.858-1.043-5.174-2.239-10.64-2.239Zm-11.863.059c2.273-1.276 6.02-2.559 11.863-2.559 5.844 0 9.59 1.283 11.863 2.559 2.388 1.34 3.137 3.982 3.137 6.27V32.5a2.5 2.5 0 0 1-2.5 2.5h-25A2.5 2.5 0 0 1 5 32.5v-1.795c0-2.29.749-4.93 3.137-6.271Z" fill="#ffffff"></path></svg>
          </div>
          <div>
            <a href="inscrire.html"><button>
              se connecter/s'inscrire
            </button></a>
          </div>
          </div>
  
          <div class="panier">
            <div>
              <i class='bx bx-cart' style='color:#fbf8f8' id="cart-icon"></i>
  <!--             <svg aria-hidden="true" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 10H35v21.25A3.75 3.75 0 0 1 31.25 35H8.75A3.75 3.75 0 0 1 5 31.25V10Zm2.5 2.5v18.75c0 .69.56 1.25 1.25 1.25h22.5c.69 0 1.25-.56 1.25-1.25V12.5h-25Z" fill="#ffffff"></path><path d="M20 3.75c-3.955 0-5.819 3.035-6.655 5.542-.079.237-.15.474-.215.708h2.615c.731-2.14 1.99-3.75 4.255-3.75 2.266 0 3.524 1.61 4.255 3.75h2.615c-.065-.234-.136-.47-.215-.708-.836-2.507-2.7-5.542-6.655-5.542ZM15.09 13.048c.02-.172.042-.356.07-.548h-2.523l-.032.272a18.37 18.37 0 0 0-.103 1.47l-.002.093V14.375a1.25 1.25 0 1 0 2.5 0v-.014l.001-.064c.002-.058.004-.149.01-.265.01-.235.034-.574.079-.984ZM27.486 13.913a18.37 18.37 0 0 0-.123-1.413H24.84a17.101 17.101 0 0 1 .15 1.532c.005.117.008.207.009.265v.064l.001.014v.002a1.25 1.25 0 0 0 2.5-.002v-.04a8.623 8.623 0 0 0-.014-.422Z" fill="#ffffff"></path></svg>
   -->      </div>
            <div>
              <button>Voir mon panier</button>
            </div>
          </div>
        </div>
  
        <nav class="section-0">
          <ul>
            <a href="accueil.html"><li>ACCUEIL</li></a>
            <a href="produit.html"><li>NOS PRODUIT</li></a>
            <a href="panier-site.html"><li>PANIER</li></a>
            <a href="contact.html"><li>CONTACTEZ NOUS</li></a>
          </ul>
        </nav>
        <div class="cart">
          <h2 class="cart-title">Votre Panier</h2>
          <div class="cart-content">
            <div class="cart-box">
              <img src="img/bee-wrap-xl-agrumes.jpeg.webp" alt="">
              <div class="detail-box">
                <div class="cart-product-title">Emballage alimentaire Bee Wrap XL</div>
                <div class="cart-price">185 DH</div>
                <input type="number" value="1" class="cart-quantity">
              </div>
              <box-icon name='trash-alt' type='solid' color='#fbf5f5' class="cart-remove"></box-icon>
            </div>
          </div>
          <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">0DH</div>
          </div>
          <button type="button" class="button-buy">Acheter</button>
          <box-icon name='x' color='#fbf5f5' class="close-cart"></box-icon>
        </div>
        <hr>
      </header>

        <hr>

        <section class="section-a">
            
          <center><h2>ZERO IMPACT SHOP GROUP</h2></center>
          <center><h1>CONTACTEZ NOUS</h1></center>

          <div class="contact-body">

            <div class="form">
              <form action="contact.php" method="POST">
                <h2>Notre Formulaire</h2>
                <p><input type="text" name="name" id="name" placeholder="Nom"></p>
                <p><input type="email" name="mail" id="mail" placeholder="Email"></p>
                <p><input type="number" name="tel" id="tel" placeholder="Téléphone"></p>
                <p><select name="interet" id="interet">
                  <option value="A">Quels est votre intérêts</option>
                  <option value="B">Préférences d'achat durable</option>
                  <option value="C">Engagement écologique</option>
                  <option value="D">Participation à des événements durables</option>
                  <option value="E">Inscription à la newsletter</option>
                </select></p>
                <p><textarea name="opinion" id="opinion" cols="30" rows="10" placeholder="Message"></textarea></p>
                <p><input type="submit" value="Envoyer" class="button-form"></p>
              </form>
            </div>

            <?php 
             try{
                global $bdd;
                $bdd = new PDO('mysql:host=localhost;dbname=zeroimpactshop;charset=utf8','root','');
                }
            
            catch(Exception $exp){
                    die('Erreur : '.$exp->getMessage());
                }
             
             $sql = "Insert into formulaire(nom, email, tel, interet, message) values ('".$_POST['name']."','".$_POST['mail']."','".$_POST['tel']."','".$_POST['interet']."','".$_POST['opinion']."')";
             $bdd -> exec($sql);
          ?>

            <div class="cont-det">
              <h2>CONTACT DETAILS</h2>
              <p>zeroimpactsop@gmail.com <br> +212 616113809</p>
              <p><h3>Westfieled</h3> <br> 233 North Avenue E.Westfieled, NJ 07090</p>
              <p><h3>Summit</h3> <br> 357 Springfield Ave.Short Hills, NJ 07901</p>
              <p><h3>Short Hills Office</h3> <br> 549 Millburn Ave.Short Hills, NJ 07078</p>
            </div>

          </div>


        </section>
<hr><br>
        <section class="section-2">
            <h1>
              ÉCOLOGIE, DURABLE <br>
              ENGAGEMENT VERS ZÉRO DÉCHET
            </h1>
            <p>
              Il est réalisable de faire la transition du tout jetable au tout renouvelable, lavable et biologique !
              Les créations que vous découvrez ici résultent de la fusion de ma passion et de mes compétences. 
              Ce sont des accessoires qui reflètent mes convictions en faveur 
              d'une consommation plus durable et d'un respect accru envers notre planète.
            </p>
          </section>
      
          <br>
      
          <section class="section-3">
            <div>
              <img class="img1" src="img/reinsurance-8-1.jpg" alt="">
              <h2>Paiement 100% sécurisé</h2>
              <p>CB, Paypal,virement bancaire ou chèque</p>
            </div>
            <div>
              <img src="img/reinsurance-11-1.jpg" alt="">
              <h2>Livraison gratuite</h2>
              <p>En point relais dès 400 dh d'achats</p>
            </div>
            <div>
              <img src="img/reinsurance-10-1.jpg" alt="">
              <h2>Engagements qualité</h2>
              <p>des produits 100% BIO et contrôlés</p>
            </div>
            <div>
              <img src="img/reinsurance-9-1.jpg" alt="">
              <h2>Un services client réactif</h2>
              <p>Une solution pour chaque problème</p>
            </div>
          </section>
      
          <footer>
              <div class="footer-listes">
                <div class="liste1">
                  <h2>INFORMATIONS</h2>
                  <ul>
                    <li><a href="">Nos services</a></li>
                    <li><a href="">Nos valeurs</a></li>
                    <li><a href="">Notre histoire</a></li>
                    <li><a href="">Questions fréquentes</a></li>
                  </ul>
                </div>
      
                <div class="liste2">
                  <h2>NOS SERVICES</h2>
                  <ul>
                    <li><a href="">Paiement</a></li>
                    <li><a href="">Suivi de commande</a></li>
                    <li><a href="">Livraison</a></li>
                    <li><a href="">Conseils</a></li>
                    <li><a href="">Retours</a></li>
                    <li><a href="">Nous contacter</a></li>
                  </ul>
                </div>
                
                <div class="liste3">
                  <h2>CATEGORIES</h2>
                  <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Commandes</a></li>
                    <li><a href="">Panier</a></li>
                    <li><a href="">Formulaires</a></li>
                  </ul>
                </div>
              </div>
      
              <p class="copyright">&copy;2023 Zero Impact Shop</p>
          </footer>
    </body>
</html>