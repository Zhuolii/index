<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
  <!--common link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32"class="pageLogo" href="./favicon/favicon-96x96.png">
  <link rel="stylesheet" href="phone_ver.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="menu.css">
<!--common link-->
<!--separate link-->
<link rel="stylesheet" href="diapo_contact.css">
<link rel="stylesheet" href="siteweb_contact.css">
<link rel="stylesheet" href="phone_ver_contact.css">
    <!--separate link-->
</head>
<body>
    
    <!--Barre de navigation-->
    <nav class="nav">  
        <a href="index.html"><h1 id="navTitle"style="border-bottom:none;">Château de Moliens</h1></a>
        <input type="checkbox" id="nav__checkbox" class="nav__checkbox">
        <label id="label_div" for="nav__checkbox" class="nav__toggle">
            <svg class="menu nav_button" fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" ><path d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z"/></svg>
            <svg class="close nav_button"fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" ><path d="M 25 2 C 12.309534 2 2 12.309534 2 25 C 2 37.690466 12.309534 48 25 48 C 37.690466 48 48 37.690466 48 25 C 48 12.309534 37.690466 2 25 2 z M 25 4 C 36.609534 4 46 13.390466 46 25 C 46 36.609534 36.609534 46 25 46 C 13.390466 46 4 36.609534 4 25 C 4 13.390466 13.390466 4 25 4 z M 32.990234 15.986328 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.990234 15.986328 z"/></svg>
        </label>
    <div class="sidebar">
        <a href="contact.html" ><button class="reserver_button">Réserver >></button></a> 
       
      <ul class="sidebarList" style="padding-left: 0;">
        <a href="index.html" class="imglink"><img class="imglogo" id="img_logo"src=".\image video/logochateau.jpg"/></a> 
       
        <p class ="headtitle"><a href="index.html">CHÂTEAU DE MOLIENS</a></p>
        <li><a href="index.html"  id="index"style="margin-top:80px;"class="menu_link">ACCUEIL</a></li>
        <li><a href="château.html"id="château"class="menu_link">LE CHÂTEAU</a></li>
        <li><a href="mariage.html"id="mariage"class="menu_link">MARIAGE</a></li>
        <li><a href="events.html" id="events"class="menu_link">ÉVÉNEMENTS/RÉCÉPTIONS</a></li>
        <li><a href="seminaires.html"id="seminaires"class="menu_link">SÉMINAIRES</a></li>
        <li><a href="hebergements.html"id="hebergements"class=" menu_link">HÉBERGEMENTS</a></li>
        <li><a href="contact.php"id="contact"class="menu_link current top">CONTACT</a></li>
       </ul>
       </div>

    </nav>

   <!--Barre de navigation-->
 <!--Code site web-->
 <div class="siteWeb">
  <?php
  include("contact_form.php");
  ?> 
    
  <div id="img_div" > 
  <div id="img_hebergement_background">
 
    
    <h1 id="heading_text">CONTACTEZ LE CHÂTEAU DE MOLIENS</h1>
        
    
   </div>
  </div> 
   
          
<article1 class="grid-container2" >
     
       <div class="grid--item item1"> 
           <h2>Château de Moliens</h2>
        <p> 17 Rue de picardie<br>   
        60220 MOLIENS <br>
        Tel : 01 12 12 12 12</p>
        <br>
        <br>
        <h2>accès</h2>
        
        
        </div>

    <div class="grid--item item2">
        <h2>ENVOYER UN E-MAIL</h2>
        <form>
        <label for="nom">Nom</label>
        <input type="text" name="Nom" id="nom" placeholder="Nom">
        <label for="prenom">Prénom</label>
        <input type="text" name="Prénom" id="prenom" placeholder="Prénom">
        <label for="email">E-mail</label>
        <input type="email" name="E-mail" id="email" placeholder="Adresse mail">
        <label for="tel">Téléphone</label>
        <input type="tel" name="Téléphone" id="tel" placeholder="Numéro de téléphone"> 
        <label for="objet">Objet</label>
        <input type="text" name="Objet" id="objet" placeholder="Objet du message">
        <label for="message">Message</label>
        <textarea name="Message" rows="8" cols="80" placeholder="Écrivez votre message ici"></textarea>
        <button type="submit" name="submit">ENVOYER MON MESSAGE</button>


        </form>
    </div>
      
    
</article1>
    
  
  
 


  




     
    <div id="footer_grid" class="grid-item">
          

             

        <div id="grid_footer">
          <div class="grid_footer_item">
            <img  id="img_logo_footer"src=".\image video/logochateau.jpg"style="width:20vw;height=20vw;border-radius:10vw;"> 
                   
            
        </div>
            <div class="grid_footer_item">

             
              <li><a href="https://www.google.fr/maps/place/Ch%C3%A2teau+De+Moliens/@49.667147,1.806854,17z/data=!4m12!1m6!3m5!1s0x47e7154f47ec7c97:0xb08384420e4f447d!2sCh%C3%A2teau+De+Moliens!8m2!3d49.6671329!4d1.8067643!3m4!1s0x47e7154f47ec7c97:0xb08384420e4f447d!8m2!3d49.6671329!4d1.8067643">
                <p class="footer_heading">Coordonnées</p>
                <p style="line-height: 2vw;"><img src=".\image video/logoadresse.png "style="width:2vwpx;height:2vw;">Château de Moliens <br>
                17 rue de Picardie<br>60220 Moliens</p></li></a>
                <div><a href="https://www.instagram.com/chateau_de_moliens?r=nametag"><img src=".\image video/instalogo2.png "style="width:2vw;height:2vw;position:relative;top:5px;">
                Instagram</a></div>
                 
            </div>



                <div class="grid_footer_item">
                     
                   <li>
                   
                  
                      <p class="footer_heading">Réserver </p>
                       <a href="tel:0644221786" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'})">
                  <p><img src=".\image video/logotelephone.png "style="width:2vwpx;height:2vw;"> 06 44 22 17 86</p></a>
                  <a href="mailto: lechateaudemoliens@gmail.com"><p> <img src=".\image video/logoemail.png "style="width:2vwpx;height:2vw;">lechateaudemoliens@gmail.com</p> </a></li>
                </div>



                <div class="grid_footer_item">

                <li>
                     
                    <p style="line-height:3vw;"><p class="footer_heading"> Nos prestations</p> 
                   

                   </li>
                   <a href="mariage.html"><li>Mariage ❯❯</li></a><br>
                   <a href="events.html"><li>Événements/Réceptions ❯❯</li></a><br>
                   <a href="seminaires.html"><li>Séminaires ❯❯</li></a><br>
                   <a href="hebergements.html"><li>Hébergements ❯❯</li></a><br>
                   
               </div>
     
          

               <div class="grid_footer_item">
                   
                    <ul style="padding:0;list-style: none;margin-top:0;z-index:-1;">
                   
                  <p  class="footer_heading">Liens utiles</p>
              
                  <a href="contact.html"><li>Contact ❯❯</li></a><br>
         
                   <a href="covid-19.html"> <li>Infos sur COVID-19 ❯❯</li></a><br>
                   <a href=""> <li>Mentions légales ❯❯</li></a><br>
                  <a href=""><li>Politique de confidentalité ❯❯</li></a>
                    <a href="https://icones8.fr/"><li>Icones </li></a>

                    </ul>
                </div>
      </div>
  </div>

</div>    
   

 
</div>
</div>
<!--Code site web--><!--Code site web--><!--Code site web--><!--Code site web--><!--Code site web--><!--Code site web--><!--Code site web--><!--Code site web--><!--Code site web-->
<!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile-->

<div class="siteMobile" >
  
   
     
     <div id="image_grid_container1" class="grid-item">
         
            <div id="image_gradient_index" class="imageIndex">
           
            
             <p id="welcome2">HÉBERGEMENTS </p>
             <p id="welcome3"> <br>    </p>
             <button class="buttonPlus" id="reserver1"><a href="tel:0644221786" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'})"style="text-decoration:none;color:white;">RÉSERVER</a></button>
            </div>
  </div>
        
        
            
        <div id="accroche_grid" class="grid-item">
            <br><br><br><br>
                <div id="h0">
                <p id="pp">Découvrez le charme des chambres du château de Moliens</p></div>

                <br><br><br>

                <img src="./image video/image_heber.JPG" alt="image description" id="img_01"/>

                <br><br><br>


               <div class="p0_div"> <p1 class="p0">Vous souhaitez passer un moment hors du temps dans un lieu calme et majestueux, le Château de Moliens vous ouvre ses portes </p1></div>
                <br><br><br><br><div id="p1"></div><p>Le château de Moliens dispose de 5 chambres doubles qui bénéficient des meilleures prestations. Toutes ont été rénovées récemment de façon
                   à vous proposer des équipements de qualité qui comblent vos envies.<br><br> Meublées avec goût dans un style romantique, les murs recouverts de tapisserie et les authentiques cheminées en pierre dans les chambres  
                   de notre château en Picardie vous réservent un cadre idéal.<br><br> Toutes les chambres sont climatisées et équipées d’une literie neuve, du Wi-Fi gratuit et d'une salle de bain privative.
                   </p>
                   
                </div><!--accroche grid-->
                <br><br>
        <div >
            <p class="p0">Chambres et tarifs </p><br><br>
        </div><!--grid title-->


        <div class="grid-container">


<!--chambre 1-->
            
      <div ><p class="titre_chambre">CHAMBRE ROYALE </p></div>

       <div class="image_chambre">
           <!-- Code diapo-->
        <div class="slider_container">  
         <div class="showSlide26 fade "style="display: block;">  
             <div  class="grid-item" id="image_grid_container">
                  
                  <div id="image_royale1" class="imageIndex">
                    
                 
                  
                    
                  </div>
             </div>
         </div>  
         <div class="showSlide26 fade "style="display: none;">  
             <div id="image_grid_container" class="grid-item">
          
                 <div id="image_royale2" class="imageIndex">
         
                  
                 </div>
          </div>  
         </div>  
   
         <div class="showSlide26 fade "style="display: none;">  
             <div id="image_grid_container" class="grid-item">
          
                 <div id="image_royale3" class="imageIndex">
                 
                  
                 </div>
          </div> 
         </div>  
         <div class="showSlide26 fade "style="display: none;">  
             <div id="image_grid_container" class="grid-item">
          
                 <div id="image_royale4" class="imageIndex">
                  
                  
                 </div>
          </div> 
         </div>  
         <!-- Navigation arrows -->  
         <div id="left" onclick="nextSlide26(-1)"> <button id="button-Diapo11"><p>❮</p></button></div>
         <a id="right" onclick="nextSlide26(1)"><button id="button-Diapo12"><p>❯</p></button></a> 
        
     </div> 
     <!-- Code diapo-->
    </div>

       <div ><p class="texte_chambre">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum labore reprehenderit
            voluptatem soluta sapiente exercitationem, doloribus quo. Ratione, laudantium nesciunt.
        <br><br>
        <img src=".\image video/icone_personne.png" class="small_logos"/> 2 personnes
        <br><br>À partir de<br>
        <img src=".\image video/icone_billet.png" class="small_logos"/> <span>150 €</span> par nuit
    </p></div>
        <div class="button_chambre_div"> <a   href="index.html"><button class="chambre_button">Réserver >></button></a></div>
        
           
        
       
        
<!--chambre 1-->


<!--chambre 2-->
       <div ><p class="titre_chambre">CHAMBRE ELIZABETH </p></div>

       <div class="image_chambre">
            <!-- Code diapo-->
        <div class="slider_container">  
            <div class="showSlide27 fade "style="display: block;">  
                <div  class="grid-item" id="image_grid_container">
                     
                     <div id="image_royale1" class="imageIndex">
                       
                    
                     
                       
                     </div>
                </div>
            </div>  
            <div class="showSlide27 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale2" class="imageIndex">
            
                     
                    </div>
             </div>  
            </div>  
      
            <div class="showSlide27 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale3" class="imageIndex">
                    
                     
                    </div>
             </div> 
            </div>  
            <div class="showSlide27 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale4" class="imageIndex">
                     
                     
                    </div>
             </div> 
            </div>  
            <!-- Navigation arrows -->  
            <div id="left2" onclick="nextSlide27(-1)"> <button id="button-Diapo13"><p>❮</p></button></div>
            <a id="right2" onclick="nextSlide27(1)"><button id="button-Diapo14"><p>❯</p></button></a> 
           
        </div> 
        <!-- Code diapo-->
       </div>

       <div><p class="texte_chambre">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum labore reprehenderit
        voluptatem soluta sapiente exercitationem, doloribus quo. Ratione, laudantium nesciunt.
        <br><br>
        <img src=".\image video/icone_personne.png" class="small_logos"/> 2 personnes
        <br><br>À partir de<br>
        <img src=".\image video/icone_billet.png" class="small_logos"/> <span>150 €</span> par nuit
    </p>
    </div>
    <div class="button_chambre_div"> <a   href="index.html"><button class="chambre_button">Réserver >></button></a></div>
<!--chambre 2-->
<!--chambre 3-->
       <div ><p class="titre_chambre">CHAMBRE CONSTANCE  </p></div>

       <div class="image_chambre">
            <!-- Code diapo-->
        <div class="slider_container">  
            <div class="showSlide28 fade "style="display: block;">  
                <div  class="grid-item" id="image_grid_container">
                     
                     <div id="image_royale1" class="imageIndex">
                       
                    
                     
                       
                     </div>
                </div>
            </div>  
            <div class="showSlide28 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale2" class="imageIndex">
            
                     
                    </div>
             </div>  
            </div>  
      
            <div class="showSlide28 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale3" class="imageIndex">
                    
                     
                    </div>
             </div> 
            </div>  
            <div class="showSlide28 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale4" class="imageIndex">
                     
                     
                    </div>
             </div> 
            </div>  
            <!-- Navigation arrows -->  
            <div id="left3" onclick="nextSlide28(-1)"> <button id="button-Diapo15"><p>❮</p></button></div>
            <a id="right3" onclick="nextSlide28(1)"><button id="button-Diapo16"><p>❯</p></button></a> 
           
        </div> 
        <!-- Code diapo-->
       </div>

       <div ><p class="texte_chambre">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum labore reprehenderit
        voluptatem soluta sapiente exercitationem, doloribus quo. Ratione, laudantium nesciunt.
        <br><br>
        <img src=".\image video/icone_personne.png" class="small_logos"/> 2 personnes
        <br><br>À partir de<br>
        <img src=".\image video/icone_billet.png" class="small_logos"/> <span>150 €</span> par nuit
    </p>
    </div>
    <div class="button_chambre_div"> <a   href="index.html"><button class="chambre_button">Réserver >></button></a></div>
<!--chambre 3-->
<!--chambre 4-->
       <div ><p class="titre_chambre">CHAMBRE ELEONORE </p></div>

       <div class="image_chambre">
            <!-- Code diapo-->
        <div class="slider_container">  
            <div class="showSlide29 fade "style="display: block;">  
                <div  class="grid-item" id="image_grid_container">
                     
                     <div id="image_royale1" class="imageIndex">
                       
                    
                     
                       
                     </div>
                </div>
            </div>  
            <div class="showSlide29 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale2" class="imageIndex">
            
                     
                    </div>
             </div>  
            </div>  
      
            <div class="showSlide29 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale3" class="imageIndex">
                    
                     
                    </div>
             </div> 
            </div>  
            <div class="showSlide29 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale4" class="imageIndex">
                     
                     
                    </div>
             </div> 
            </div>  
            <!-- Navigation arrows -->  
            <div id="left4" onclick="nextSlide29(-1)"> <button id="button-Diapo17"><p>❮</p></button></div>
            <a id="right4" onclick="nextSlide29(1)"><button id="button-Diapo18"><p>❯</p></button></a> 
           
        </div> 
        <!-- Code diapo-->
       </div>

       <div ><p class="texte_chambre">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum labore reprehenderit
        voluptatem soluta sapiente exercitationem, doloribus quo. Ratione, laudantium nesciunt.
        <br><br>
        <img src=".\image video/icone_personne.png" class="small_logos"/> 2 personnes
        <br><br>À partir de<br>
        <img src=".\image video/icone_billet.png" class="small_logos"/> <span>150 €</span> par nuit
    </p>
    </div>
    <div class="button_chambre_div"> <a   href="index.html"><button class="chambre_button">Réserver >></button></a></div>
<!--chambre 4-->
<!--chambre 5-->
       <div ><p class="titre_chambre">CHAMBRE CHARLOTTE </p></div>

       <div class="image_chambre">
            <!-- Code diapo-->
        <div class="slider_container">  
            <div class="showSlide30 fade "style="display: block;">  
                <div  class="grid-item" id="image_grid_container">
                     
                     <div id="image_royale1" class="imageIndex">
                       
                    
                     
                       
                     </div>
                </div>
            </div>  
            <div class="showSlide30 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale2" class="imageIndex">
            
                     
                    </div>
             </div>  
            </div>  
      
            <div class="showSlide30 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale3" class="imageIndex">
                    
                     
                    </div>
             </div> 
            </div>  
            <div class="showSlide30 fade "style="display: none;">  
                <div id="image_grid_container" class="grid-item">
             
                    <div id="image_royale4" class="imageIndex">
                     
                     
                    </div>
             </div> 
            </div>  
            <!-- Navigation arrows -->  
            <div id="left5" onclick="nextSlide30(-1)"> <button id="button-Diapo19"><p>❮</p></button></div>
            <a id="right5" onclick="nextSlide30(1)"><button id="button-Diapo20"><p>❯</p></button></a> 
           
        </div> 
        <!-- Code diapo-->
       </div>

       <div ><p class="texte_chambre">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum labore reprehenderit
        voluptatem soluta sapiente exercitationem, doloribus quo. Ratione, laudantium nesciunt.<br><br>
        <img src=".\image video/icone_personne.png" class="small_logos"/> 2 personnes
        <br><br>À partir de<br>
        <img src=".\image video/icone_billet.png" class="small_logos"/> <span>150 €</span> par nuit
    </p>
    </div>
    <div class="button_chambre_div"> <a   href="index.html"><button class="chambre_button">Réserver >></button></a></div>
 <!--chambre 5-->     

 

        </div>

      <br><br><br><br><br><br>

<!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container-->
  
    <div class="grid-container"id="footer_grid_container" >
     
        
           
        

            
               
   
   
           <div id="footer_grid" class="grid-item">
            <div> <img src=".\image video/logochateau.jpg" alt=""id="footer_img">
              <h1 id="titrefooter" >CHÂTEAU DE MOLIENS</h1>
              <ul style="padding:0;list-style: none;margin-left:20px;"> 
                

                 

                  

                  <li style="text-decoration:underline white 5px;text-underline-offset: 25px;">CONTACTEZ-NOUS :</li><br><br>


                  <li><a href="https://www.google.fr/maps/place/Ch%C3%A2teau+De+Moliens/@49.667147,1.806854,17z/data=!4m12!1m6!3m5!1s0x47e7154f47ec7c97:0xb08384420e4f447d!2sCh%C3%A2teau+De+Moliens!8m2!3d49.6671329!4d1.8067643!3m4!1s0x47e7154f47ec7c97:0xb08384420e4f447d!8m2!3d49.6671329!4d1.8067643"
                   class="logo_contract">

                    <img src=".\image video/logoadresse.png "class="logo_contract_image"><br>

                    <p1 class="text_footer"> 17 rue de Picardie<br>
                    60220 Moliens</p><br><br></a></li>

                   <li> 
                <a href="https://www.instagram.com/chateau_de_moliens?r=nametag"class="logo_contract">
                <img src=".\image video/instalogo2.png "class="logo_contract_image">
                <p1 class="text_footer">
                    Suivez nous sur Instagram
                </p>
                 </a>
                 </li>



                    <li> <a href="tel:0644221786" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'})"
                        class="logo_contract"  > 

                         <img src=".\image video/logotelephone.png "class="logo_contract_image"><br>

                         <p1 class="text_footer"> 06 44 22 17 86 </p><br><br></a></li>



                    <li><a href="mailto: lechateaudemoliens@gmail.com"class="logo_contract">

                         <img src=".\image video/logoemail.png "class="logo_contract_image"><br>

                    <p1 class="text_footer">lechateaudemoliens@gmail.com</p></a>

               </li>
               <li><a href="covid-19.html"class="logo_contract">

                <!--<img src=".\image video/logoemail.png "class="logo_contract_image"><br>-->

               <p1 class="text_footer">Infos sur COVID-19</p></a>

              </li>
              <li><a href="mailto: lechateaudemoliens@gmail.com"class="logo_contract">

                <!--<img src=".\image video/logoemail.png "class="logo_contract_image"><br>-->

               <p1 class="text_footer">Mentions légales</p></a>

              </li>
              <li><a href="mailto: lechateaudemoliens@gmail.com"class="logo_contract">

                 <!--<img src=".\image video/logoemail.png "class="logo_contract_image"><br>-->

               <p1 class="text_footer">Politique de confidentalité</p></a>

              </li>
              <li><a href="https://icones8.fr/"class="logo_contract">

                 <!--<img src=".\image video/logoemail.png "class="logo_contract_image"><br>-->

               <p1 class="text_footer">Icones</p></a>

              </li>
               <br>



                  
              </ul>
              
               
           </div>

<!--

           <div class="grid-item flex-item" >
            <p class="menu_title" >Coordonnées </p>     
            
           
             <input type="checkbox" id="checkbox_menu1" >
              <label for="checkbox_menu1" >
              <img class="up" src=".\image video/up.png" >
                <img class="down"src=".\image video/down.png" >
              </label> 
        
      <div class="menu1">
        <a href="https://www.google.fr/maps/place/Ch%C3%A2teau+De+Moliens/
        @49.667147,1.806854,17z/data=!4m12!1m6!3m5!1s0x47e7154f47ec7c97:0xb08384420e4f447d!
        2sCh%C3%A2teau+De+Moliens!8m2!3d49.6671329!4d1.8067643!3m4!1s0x47e7154f47ec7c97:0xb08384420e4f447d!8m2!3d49.6671329!4d1.8067643">
            
            <p class="menu_text" >Château de Moliens <br><br>
            17 rue de Picardie
            <br>60220 Moliens</p>
        </a>
            <div><a href="https://www.instagram.com/chateau_de_moliens?r=nametag"><img src=".\image video/instalogo2.png "style="width:2vw;height:2vw;position:relative;top:5px;">
            Instagram
        </a>
    </div>

          

      </div>

        </div>

       

     <div class="grid-item flex-item" >
            <p class="menu_title" >Conditions d'hébergement </p>     
            
           
             <input type="checkbox" id="checkbox_menu2" >
              <label for="checkbox_menu2" >
              <img class="up" src=".\image video/up.png" >
                <img class="down"src=".\image video/down.png" >
              </label> 
        
      <div class="menu2">
          <h5>Arrivée</h5>
          <p1>Entre 17h00 à 21h00</p1>
          <h5>Départ</h5>
          <p1>Jusqu'à 11h00</p1>
          <h5>Animaux domestiques</h5>
          <p1>Les animaux domestiques ne sont pas admis au sein de l'établissement.</p1>
          <h5>Cartes de crédit acceptées</h5>
          <p1>Visa,Mastercard,et quoi d'autres???</p1>

          

      </div>

        </div>-->

      </div>
   </div>
       

     

<!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container--><!--Footer_grid_container-->


   
   
   
   
   
   
   
</div>

        
        
<!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile--><!--Code mobile-->
  
 
 <script type="text/javascript" src="hebergement.js"></script>







</body>






</html>