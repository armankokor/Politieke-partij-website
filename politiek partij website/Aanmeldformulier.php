<?php
//XAMMPP moet aan zijn voor dit onderdeel!
//en aanmeldformulier.sql moet worden geimporteerd in phpmyadmin zodat je de data kan sturen die je hebt opgeschreven
//als het is gelukt om XAMPP aan te doen. Gebruik dan deze link http://localhost/politiek%20partij%20website/Aanmeldformulier.php

    include 'database.php';
    if(isset($_POST['button'])){
        $naam=$_POST['naam'];
        $adres=$_POST['adres'];
        $postcode=$_POST['postcode'];
        $woonplaats=$_POST['woonplaats'];
        $straat=$_POST['straat'];
        $geslacht=$_POST['geslacht'];
        $opleiding=$_POST['opleiding'];
        $werk=$_POST['werk'];
        $rekeningnummer=$_POST['rekeningnummer'];
        $aanmelden_voor_nieuwsbrief=$_POST['aanmelden_voor_nieuwsbrief'];

    
        $sql="insert into `aanmeldformulier_inhoud` (naam,adres,postcode,woonplaats,straat,geslacht,opleiding,werk,rekeningnummer,aanmelden_voor_nieuwsbrief)
        values('$naam' , '$adres' , '$postcode' , '$woonplaats' , '$straat' , '$geslacht' , '$opleiding' , '$werk' ,  '$rekeningnummer' , '$aanmelden_voor_nieuwsbrief')";
        $result=mysqli_query($connect,$sql);
        if($result){
            header('location:home.html');
        }
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanmeldformulier</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/Aanmeldformulier.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    
</head>  
<body>
    <header> 
        <div class="logo"><a href="home.html"><img src="foto/partij foto 2.JPG"    height="100"/></div></a>
        
    
        <nav>
            <ul class="main-menu">
                    
                <b>
                    <li class="menu-item"><a href="home.html">Home</a></li>
                    <li class="menu-item"><a href="Politiek juridisch.html">Politiek juridisch</a></li>
                    <li class="menu-item"><a href="Sociaaleconomisch.html">Sociaaleconomisch </a></li>
                    <li class="menu-item"><a href="Sociaal cultureel.html">Sociaal cultureel </a></li>
                    <li class="menu-item"><a href="Activiteiten.html">Activiteiten</a></li>
                    <li class="menu-item"><a href="Politici.html">Politici</a></li>
    
                </b>
    
            </ul>
            
        </nav>
        <ul class="aanmeldformulier">
                    
                <b>
                    <li class="menu-item">                                    
                        <a class="Knop-formulier" href="Aanmeldformulier.php">Meld je aan!</a>
    
                    </li>
                </b>
    
            </ul>
    </header>  
        
        
    <div class="vlag">
    
        <img src="foto/vlag.png"    width="1519" height="150">
        <b>
            <div class="vlag-tekst">Samen zijn we sterker!</div>
        </b>
    </div>
    <div class="Aanmeldformulier-box">


        <h2 style="     padding: 14px 10px;" class="tekst">Aanmeldformulier</h2>

        <form class="cursusform" method="post" action="Aanmeldformulier.php">

            <div class="formulier">
            <label for="naam">Naam: </label>
                <input type="text" class="form-control" id="naam" name="naam" required>
            </div>
            <div class="formulier">

            <label for="postcode">Postcode: </label>
                <input type="text" class="form-control" id="postcode" name="postcode" required>
            </div>

            <div class="formulier">
            <label for="adres">Adres: </label>
                <input type="text" class="form-control" id="adres" name="adres" required>
            </div>

            <div class="formulier">
            <label for="woonplaats">Woonplaats: </label>
                <input type="text" class="form-control" id="woonplaats" name="woonplaats" required>
            </div>

             <div class="formulier">
            <label for="straat">Straat: </label>
                <input type="text" class="form-control" id="straat" name="straat" required>
            </div>
            
            <div class="formulier">
            <label for="geslacht">Geslacht: </label>
            <input type="checkbox" class="form-control checkbox_required" name="geslacht" value="Man" required>Man
            <input type="checkbox" class="form-control checkbox_required" name="geslacht" value="Vrouw"required>Vrouw
            </div>
            <div class="formulier">
            <label for="opleiding">Opleiding: </label>
                <input type="text" class="form-control" id="opleiding" name="opleiding" required>
            </div>
            <div class="formulier">
            <label for="werk">Werk: </label>
                <input type="text" class="form-control" id="werk" name="werk" required>
            </div>
           
            <div class="formulier">
                <label for="rekeningnummer">Rekeningnummer: </label>
                <input type="text" class="form-control" id="rekeningnummer" name="rekeningnummer" required>
            </div>
            <div class="formulier">
            <label for="aanmelden_voor_nieuwsbrief">Aanmelden voor nieuwsbrief: </label>
                <input type="checkbox" class="form-control checkbox_required2" id="aanmelden_voor_nieuwsbrief" name="aanmelden_voor_nieuwsbrief" value="Ja" required>Ja
                <input type="checkbox" class="form-control checkbox_required2" id="aanmelden_voor_nieuwsbrief" name="aanmelden_voor_nieuwsbrief" value="Nee" required>Nee
            </div>
            <button onclick="return alertmessage()" style="text-align: center; color=white;" type="submit" class="knop-sturen" name="button" >Versturen</button>
            
        </form>
    </div>
    </body>
        
    </html>
    <script>
      function alertmessage(){
            return alert("Jou aanmeldforumlier is bij ons ontvangen. Je word nu terug gestuurd naar het home menu. Als dat niet gebeurt dan moet je nog iets invullen!");
      }

        $('.checkbox_required').change((e) => {
            $('.checkbox_required').each((index, obj)=>{
                if(!obj.checked){
                    obj.required = false;
                }else{
                    e.required = true;
                }
            })
        })
        $('.checkbox_required2').change((e) => {
            $('.checkbox_required2').each((index, obj)=>{
                if(!obj.checked){
                    obj.required = false;
                }else{
                    obj.required = true;
                }
            })
        })

  </script>