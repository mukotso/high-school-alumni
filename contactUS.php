<?php //include('contactServer.php') ?>
<!DOCTYPE html>
<html>
	<html lang="en">
    <head>
        <meta charset="utf-8">
					<title> home Page</title>
        <style>
            #contactus {
                top:25%;
                bottom: 5%;
                display: flex;
            }
            #contacts {
                flex: 1 1 30%;
                order: 3;
            }
            #break{
                flex: 1 1 10%;
                order: 2;
            }
            #contactsection {
                flex: 1 1 60%;
                order: 1;
                bottom: 5%;
                top: 40%;
            }
           
        </style>
        
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <!-- <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="homepage.css">  -->
        
      <style>
section fieldset{
	padding: 40px;
	border: solid 4px black;
}
section legend{
	background: black;
	color: white;
}
input[type="text"],
input[type="tel"],
input[type="email"],
textarea{
    padding: 2%;;
    margin: 0 0 20px;
    border: solid 1px #454545;
    border-top: none;
    display: block;
    width: 80%;
    font-size: 14px;
    text-transform: uppercase;
}

label{
    padding: 0 2%;
    font-size: 12px;
    border: solid 1px black;
    display: block;
    width: 80%;
}

textarea{
    resize: none;
}
.row{
    margin-bottom: 35px;
}
input[type="submit"]:hover{
    cursor: pointer;
    border-color: #444;
}
section{
    background-color: #F9C08E;
}
      </style>
        
    </head>
    <body>
    <?php include_once('includes/topnavigation.php');?>
        <header>
           
        
        <main id="contactus" class="row">
        <div class="col-md-1"></div>
            <section id="contactsection " class="col-md-7">
              <h1>CONTACT US PAGE</h1>		
												
               <!-- <form name="ContForm" action="contactUS.php" onsubmit="return VALIDATECONTACT()" method="post"> -->
               <form name="ContForm">
                   <?php //include('errors.php'); ?>
                   <fieldset>
                       <legend> Fill out the form below </legend>
                       
                       <label> Your name </label>
                       <input type="text" name="name" id="form-name" <?php //echo $name; ?>>
                       
                        <label> Your email </label>
                       <input type="email" name="email" id="form-email" <?php //echo $email; ?>>
                       
                        <label> Your address </label>
                       <input type="text" name="address" id="address-name" <?php //echo $address; ?>>
                       
                        <label> Your phone number </label>
                       <input type="tel" name="phone" id="phone-number" <?php //echo $phone; ?>>
                       
                        <label> Your message </label>
                       <textarea name="message" id="form-message" <?php //echo $message; ?>></textarea>
                       
                   
                       <input type="submit" name="send_message" value="Send Message">
                       
                   </fieldset>
               </form>
           </section> 
            <div id="contacts " class="col-md-3">
                <br><br><br><br>
                <img src="images/alumnianswer.jpg" height="180px" width="250px">
                <h1>Links</h1>
                <ul>
                <li><a href="mailto:admin@baraka.ac.ke">Email the Administrator</a><br><br></li>
                <li><a href="mailto:alumnichairsbc@baraka.ac.ke">Email Alumni Chair</a><br><br></li>
                <li><a href="tel:+254 720 334 555">Call Us</a></li>
                </ul>
            </div>
												
				<div class="col-md-1"></div>					
												
												
        </main>
     <?php include_once('includes/outerfooter.php'); ?>
    </body>
</html>