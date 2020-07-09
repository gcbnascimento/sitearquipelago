<?php include ("../template/menu.php");?>

      <div id="page-wrapper">
         <!-- Jumbotron -->
         <div class="jumbotron jumbotron-fluid">
            <div class="container" >
               <div class="jumbo-heading" data-aos="fade-down">
                  <h1>Cursos</h1>
                  <!-- Breadcrumbs -->
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cursos </li>
                     </ol>
                  </nav>
                  <!-- /breadcrumb -->
               </div>
               <!-- /jumbo-heading -->
            </div>
            <!-- /container -->
         </div>
         <!-- /jumbotron -->
         <!-- ==== Page Content ==== -->
         <div class="page container">
            <div class="row">
               <div class="col-lg-6 text-center offset-lg-3 mb-5">
                  <h2>Confira nossos cursos</h2>
                  <p>Navegue entre os cursos e acesse-os para fazer uma aula.</p>
               </div>
               <!-- /col-lg -->
            </div>
            <?php include ("../template/cursos.php");?>
            	
         </div>
         <!-- /page -->
      </div>
      <!--/ page-wrapper -->
      <?php include ("../template/rodape.php");?>