 <!DOCTYPE html>
 <html>

 <head>
   <title>avocat</title>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="JsLocalSearch.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
   <link href="assets/css/style.css" rel="stylesheet">
   <!-- <link href="css/style.css" rel="stylesheet"> -->
   <style>
     body {
       background-color: ;
     }

     .bande {
       height: 3%;
       background-color: #34495e;
     }

     div.ex1 {
       background-color: black;
       width: 510px;
       height: 220px;
       overflow: scroll;
     }
   </style>
 </head>

 <body>
   <!-- ****************************************************************************************** -->

   <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
     <div class="container d-flex">
       <div class="contact-info mr-auto">
         <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">avocatrapide@gmail.com</a>
         <i class="icofont-phone"></i> +225 02000202
       </div>
       <div class="social-links">
         <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
         <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
         <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
         <a href="#" class="skype"><i class="icofont-skype"></i></a>
         <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
       </div>
     </div>
   </div>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top ">
     <div class="container d-flex align-items-center">

       <h1 class="logo mr-auto"><a href="index.html">Avocat rapide</a></h1>
       <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

       <nav class="nav-menu d-none d-lg-block">
         <ul>
           <li class="active"><a href="index.php">Acceuil</a></li>
           <!-- <li><a href="#rdv">Mes Rendez_Vous</a></li> -->

           <li><a href="rdv_tchat.php">Prendre un rendez-vous</a></li>
           <!-- <li><a href="#portfolio">Portfolio</a></li> -->
           <!-- <li><a href="#pricing">Pricing</a></li> -->
           <li><a href="#footer">Contacter nous </a></li>
           <li><a href="tchat/index.php">Se connecter</a></li>
           <li><a href="tchat/index.php">Admin</a></li>

       </nav><!-- .nav-menu -->

     </div>
   </header><!-- End Header -->

   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">
     <div class="container position-relative" data-aos="fade-up" data-aos-delay="500" style="border-radius: 25px">

       <div class="container">
         <div class="text-center">
         </div>
         <div class="row mt-4">
           <div class="col-md-8 mx-auto rounded p-4">
             <!-- <h5 class="text-center text-secondary">Que Rechercher-Vous</h5> -->
             <form action="details.php" method="post" class="p-3">
               <div class="input-group">
                 <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Votre préoccupation..." autocomplete="off" required>
                 <div class="input-group-append">
                   <input type="submit" name="submit" value="Recherche" class="btn btn-info btn-lg rounded-0">
                 </div>
               </div>
             </form>
           </div>
           <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
             <div class="list-group" id="show-list">
               <!-- Here autocomplete list will be display -->
             </div>
             <!-- <br>
        <div>
          <a href="#">Ma préocupation n'est pas lister</a><br>
          <a href="appointment.php">Prendre un rendez-vous avec un avocat</a><br>
          <a href="#">Nos partenaires</a><br>
          <a href="acces.php">Vos rendez-vous</a><br>
        </div> -->
           </div>
         </div>
       </div>

     </div>
   </section><!-- End Hero -->

   <!-- ======= Footer ======= -->
   <section id="footer">
     <footer id="footer">
       <div class="footer-top">
         <div class="container">
           <div class="row">

             <div class="col-lg-4 col-md-6">
               <div class="footer-info">
                 <h3>Avocat Rapide</h3>
                 <p>
                   cocody-abidjan <br>
                   , Cote D'Ivoire<br><br>
                   <strong>Phone:</strong> +225 02000202<br>
                   <strong>Email:</strong> avocatrapide@gmail.com<br>
                 </p>
                 <div class="social-links mt-3">
                   <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                   <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                   <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                   <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                   <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                 </div>
               </div>
             </div>

             <div class="col-lg-2 col-md-6 footer-links">
               <h4>Liens Rapide</h4>
               <ul>
                 <li><i class="bx bx-chevron-right"></i> <a href="#">Acceuil</a></li>
                 <li><i class="bx bx-chevron-right"></i> <a href="#">Se connecter</a></li>
                 <li><i class="bx bx-chevron-right"></i> <a href="rdv_tchat.php">Prendre un Rendez_Vous</a></li>
                 <li><i class="bx bx-chevron-right"></i> <a href="#">Nous contacter</a></li>
               </ul>
             </div>

             <div class="col-lg-2 col-md-6 footer-links">
               <h4>Nos Services</h4>
               <ul>
                 <li><i class="bx bx-chevron-right"></i> <a href="#">Divorce</a></li>
                 <li><i class="bx bx-chevron-right"></i> <a href="#">Mariage</a></li>
                 <li><i class="bx bx-chevron-right"></i> <a href="#">Suivie de votre demande</a></li>
                 <li><i class="bx bx-chevron-right"></i> <a href="#">Avocat Spécialisé</a></li>
                 <li><i class="bx bx-chevron-right"></i> <a href="#">Domaine</a></li>
               </ul>
             </div>



           </div>
         </div>
       </div>

       <div class="container">
         <div class="copyright">
           &copy; Copyright <strong><span>Avocat Rapide</span></strong>. Tout droit reservé
         </div>
         <div class="credits">

           Fait par <a href="https://bootstrapmade.com/">Avocat Rapide</a>
         </div>
       </div>
     </footer><!-- fin du footer -->
   </section>

   <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
   <div id="preloader"></div>

   <!-- Vendor JS Files -->
   <script src="assets/js/main.js"></script>
   <!-- ***************************** -->






 </body>

 </html>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
   $(document).ready(function() {
     // Send Search Text to the server
     $("#search").keyup(function() {
       let searchText = $(this).val();
       if (searchText != "") {
         $.ajax({
           url: "action.php",
           method: "post",
           data: {
             query: searchText,
           },
           success: function(response) {
             $("#show-list").html(response);
           },
         });
       } else {
         $("#show-list").html("");
       }
     });
     // Set searched text in input field on click of search button
     $(document).on("click", "a", function() {
       $("#search").val($(this).text());
       $("#show-list").html("");
     });
   });
 </script>