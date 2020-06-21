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
                             <div class="card-header" style="color: mediumslateblue;font-size: 4em ;font-style: oblique ">
                                        <strong>ENREGISTREMENT</strong> Maison
                                    </div>
                             <form action="" method="post" class="">
                                    <div class="card-body card-block">
                                        
                                            
                                         <div class="col-12 col-md-12"style="font-style: italic;font-size: xx-large">
                                           <label for="nf-libelle" class=" form-control-label"><strong>type maison</strong></label>

                                           <select  id="selectLg" class="form-control-label form-control" name="sai_type">
                                                <option value="">----choisir----</option>
                                               <?php
                                               if(isset($type_maison_listen)){
                                               foreach ($type_maison_listen as $key => $value) {

                                                       ?>
                                              
                                        <option value="<?php echo $value['id_typ'];?>"><?php echo $value['libelle'];?></option>
                                <?php                  
                                               }
                                                   
                                               }
                                                    ?>     
                                                        
                                                    </select>
                                                </div>
                                             
                                        
                                         <div class="col-12 col-md-12"style="font-style: italic;font-size: xx-large">
                                           <label for="nf-libelle" class=" form-control-label"><strong>quartier</strong></label>

                                           <select  id="selectLg" class="form-control-label form-control" name="sai_quartier">
                                                <option value="">----choisir----</option>
                                               <?php
                                               if(isset($quatier_liste)){
                                               foreach ($quatier_liste as $key => $value) {

                                                       ?>
                                              
                                        <option value="<?php echo $value['id_quart'];?>"><?php echo $value['libelle'];?></option>
                                <?php                  
                                               }
                                                   
                                               }
                                                    ?>     
                                                        
                                                    </select>
                                                </div>
                                        <div class="form-group" style="font-style: italic;font-size: xx-large">
                                            <label for="nf-libelle" class=" form-control-label"><strong>prix</strong></label>
                                                <input type="text" id="nf-libelle" name="sai_prix" placeholder="saisir prix" class="form-control">
                                               
                                            </div>
                                        <div class="form-group" style="font-style: italic;font-size: xx-large">
                                            <label for="nf-libelle" class=" form-control-label"><strong>description</strong></label>
                                            <textarea id="nf-libelle" rows="10" cols="30" name="desc" placeholder="saisir description" class="form-control"></textarea>>
                                               
                                            </div>
                                      
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="envoyer">
                                            <i class="fa fa-dot-circle-o"></i> Enregistrer
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

