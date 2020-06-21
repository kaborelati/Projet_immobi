<?php 
    include 'includes/dashbord.php';
    ?>

<?php 
    include 'includes/sidebar.php';
    ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
        
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <div class="card">
                             <div class="card-header" style="color: turquoise;font-size: 4em ; ">
                                        <strong>ENREGISTREMENT</strong> quartier
                                    </div>
                             <form action="http://localhost/Projet_immobi/router.php?c=quartier&m=ajout" method="POST" class="">
                                    <div class="card-body card-block">
                                        
                                            
                                        <div class="form-group" style="font-style: italic;font-size: xx-large">
                                            <label for="nf-libelle" class=" form-control-label"><strong>Libelle</strong></label>
                                                <input type="text" id="nf-libelle" name="libel" placeholder="saisir quartier" class="form-control">
                                               
                                            </div>
                                      
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="enregistre">
                                            <i class="fa fa-dot-circle-o"></i> Envoyer
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Annuler
                                        </button>
                                    </div>
                               </form>
                                </div>
                      
                     
                  
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="http://localhost/Projet_immobi/frame/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="http://localhost/Projet_immobi/frame/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="http://localhost/Projet_immobi/frame/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="http://localhost/Projet_immobi/frame/vendor/slick/slick.min.js">
    </script>
    <script src="http://localhost/Projet_immobi/frame/vendor/wow/wow.min.js"></script>
    <script src="http://localhost/Projet_immobi/frame/vendor/animsition/animsition.min.js"></script>
    <script src="http://localhost/Projet_immobi/frame/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="http://localhost/Projet_immobi/frame/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="http://localhost/Projet_immobi/frame/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="http://localhost/Projet_immobi/frame/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="http://localhost/Projet_immobi/frame/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="http://localhost/Projet_immobi/frame/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="http://localhost/Projet_immobi/frame/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="http://localhost/Projet_immobi/frame/js/main.js"></script>

</body>

</html>
<!-- end document-->

