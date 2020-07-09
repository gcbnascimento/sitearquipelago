<!DOCTYPE html>
<html lang="en">

   

   <?php include ("../template/menu.php");?>

      <!-- /nav -->
      <!-- page wrapper starts -->
      <div id="page-wrapper">
         <!-- ==== Slider ==== -->
         <div class="container-fluid p-0">
            <!-- Parallax Slider -->
            <div id="slider" class="parallax-slider" style="width:1200px;margin:0 auto;margin-bottom: 0px;">
               <!-- Slide 1 -->
               <div class="ls-slide" data-ls="duration:4000; transition2d:7;">
                  <!-- background image  -->
                  <img src="../img/slider/parallaxslider/slide1.jpg" class="ls-bg" alt="" />
                  <!-- clouds  -->
                  <img  src="../img/slider/parallaxslider/clouds.png" class="ls-l" alt="" style="top:56px;left:-100px;" data-ls="parallax:true; parallaxlevel:-5;">
                  <!-- butterflies  -->
                  <img  src="../img/slider/parallaxslider/butterflies.png" class="ls-l" alt="" style="top:16px;left:0px;" data-ls=" parallax:true; parallaxlevel:4;">
                  <!-- sun  -->
                  <img  src="../img/slider/parallaxslider/sun.png" class="ls-l" alt="" style="top:-190px;left:650px;" data-ls="parallax:true; parallaxlevel:-3;">
                  <!--child image  -->
                  <img  src="../img/slider/parallaxslider1.png" class="ls-l" alt="" style="top:166px;left:520px;" data-ls="offsetxin:10; offsetyin:120; durationin:1100; rotatein:5; transformoriginin:59.3% 80.3% 0; offsetxout:-80; durationout:400; parallax:true; parallaxlevel:10;">
                  <!-- text  -->
                  <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400;">
                     <div class="header-text">
                        <span>Bem-vindo ao</span> 
                        <h1> Arquipélago do Saber</h1>
                        <!--the div below is hidden on small screens  -->
                        <div class="hidden-small">
                           <p class="header-p">Em nossa escola a criança vem para ver os amiguinhos, interagir com os personagens,
                               brincar, passar horas divertidas, se socializar e ao mesmo tempo <b>APRENDER</b>.</p>
                           <a class="btn btn-secondary" href="contact.html">Saiba mais</a>
                        </div>
                        <!--/hidden-small -->
                     </div>
                     <!-- header-text  -->
                  </div>
                  <!-- ls-l  -->
               </div>
               <!-- ls-slide -->
            </div>
            <!-- /slider -->
            <svg version="1.1" id="divider"  class="slider-divider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 1440 126" preserveAspectRatio="none slice" xml:space="preserve">
               <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
            </svg>
         </div>
         <!-- /container-fluid -->
         <!-- ==== Page Content ==== -->
         <div class="container">
            <!-- section -->  
            <section id="intro-cards"  class="row pb-0">
               <!-- card 1 -->  
               <div class="col-lg-4" data-aos="zoom-out">
                  <div class="card card-flip">
                     <!-- front of card  -->  
                     <div class="card bg-secondary text-light ">
                        <div class="p-5">
                           <h4 class="card-title text-light">Revolucionamos a maneira de ensinar</h4>
                           <p class="card-text">
                              Nossa metodologia  oferece ao aluno <b>desenvolvimento pessoal</b>, <b>qualidade</b>, <b>igualdade</b> e <b>aprendizagem diferenciada</b>.
                           </p>
                           <!-- button show on mobile only,where flip is disabled -->
                           <a href="contact.html" class="btn d-lg-none">Contact us</a>
                        </div>
                        <!-- /p-5 -->
                        <!-- image -->
                        <img class="card-img" src="../img/intro1.jpg" alt="">
                     </div>
                     <!-- /card -->
                     <!-- back of card -->  			
                     <div class="card bg-secondary text-light card-back">
                        <div class="card-body d-flex justify-content-center align-items-center">
                           <div class="p-4">
                              <h5 class="card-title text-light">Nosso propósito</h5>
                              <p class="card-text">Que todas as crianças consigam aprender, tendo respeitadas as suas diferenças,
                                  peculiaridades e habilidades, sendo trabalhados da forma correta.
                              </p>
                              <!-- button -->
                              <a href="contact.html" class="btn">contact us</a>
                           </div>
                           <!-- /p-4 -->
                        </div>
                        <!-- /card-body -->
                     </div>
                     <!-- /card -->
                  </div>
                  <!--/col-lg -->
               </div>
               <!--/card 1 -->  
               <!-- card 2-->  
               <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                  <div class="card card-flip ">
                     <!-- front of card  -->  
                     <div class="card bg-primary text-light">
                        <div class="p-5">
                           <h4 class="card-title text-light">Tecnologias mais que Inovadoras</h4>
                           <p class="card-text">
                              Os alunos estudam com tecnologias como, 3D, gamificação, realidade aumentada, jogos para tablets, celulares e muito mais.
                           </p>
                           <!-- button show on mobile only,where flip is disabled -->
                           <a href="services.html" class="btn d-lg-none">Confira</a>
                        </div>
                        <!-- /p-5 -->
                        <!-- image -->
                        <img class="card-img" src="../img/intro2.jpg" alt="">
                     </div>
                     <!-- /card -->
                     <!-- back of card -->  			
                     <div class="card bg-primary text-light card-back">
                        <div class="card-body d-flex justify-content-center align-items-center">
                           <div class="p-4">
                              <h5 class="card-title text-light">Além disso</h5>
                              <p class="card-text">Tudo foi desenvolvido
                                 utilizando uma metodologia única e de acordo com a BNCC e as normas do MEC.
                                 
                              </p>
                              <!-- button -->
                              <a href="services.html" class="btn">Confira</a>
                           </div>
                           <!-- /p-4 -->
                        </div>
                        <!-- /card-body -->
                     </div>
                     <!-- /card -->
                  </div>
                  <!--/card 2 -->
               </div>
               <!--/col-lg -->
               <!-- card 3-->  
               <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="600">
                  <div class="card card-flip ">
                     <!-- front of card  -->  
                     <div class="card bg-tertiary text-light">
                        <div class="p-5">
                           <h4 class="card-title text-light">Inclusão Social</h4>
                           <p class="card-text">
                              
                              Metodologia testada e aprovada em crianças com 
                              <b>dificuldade de aprendizagem</b>, <b>autismo</b>, <b>dislexia</b>, <b>discalculia</b>,
                              <b>paralisia cerebral</b> e 
                              <b>síndrome de down</b>.
                     
                           </p>
                           <!-- button show on mobile only,where flip is disabled -->
                           <a href="team.html" class="btn d-lg-none">Our Team</a>
                        </div>
                        <!-- /p-5 -->
                        <!-- image -->
                        <img class="card-img" src="../img/intro3.jpg" alt="">
                     </div>
                     <!-- /card -->
                     <!-- back of card -->  			
                     <div class="card bg-tertiary text-light card-back">
                        <div class="card-body d-flex justify-content-center align-items-center">
                           <div class="p-4">
                              <h5 class="card-title text-light">Você sabia?</h5>
                              <p class="card-text">Que mais de 30% das crianças apresentam dificuldades de aprendizagem e 
                                 não existe NADA no mercado para auxiliá-los, por isso a nossa solução vem revolucionando o mercado de ensino infantil.

                              </p>
                              <!-- button -->
                              <a href="team.html" class="btn">Confira</a>
                           </div>
                           <!-- /p-4 -->
                        </div>
                        <!-- /card-body -->
                     </div>
                     <!-- /card -->
                  </div>
                  <!--/card 3 -->
               </div>
               <!--/col-lg -->
            </section>
            <!-- #intro-cards --> 
         </div>
         <!-- /container -->  
         <!-- section -->
         <section id="about-home" class="container-fluid pb-0">
            <div class="container">
               <!-- section heading -->  
               <div class="section-heading text-center">
                  <h3>"Tenha esta clareza, nós não vendemos cursos, muito menos reforço escolar."</h3>
                  <p class="subtitle">Somos muito mais do que isso!</p>
               </div>
             </div>
            <!-- /container-->

            <!--/ whale in water scene ends -->
         </section>
         <img src="../img/ornaments/whale.png" class="floating-whale" alt="">
         <!-- waves -->
         <div class="waveHorizontals">
            <div id="waveHorizontal1" class="waveHorizontal"></div>
            <div id="waveHorizontal2" class="waveHorizontal"></div>
            <div id="waveHorizontal3" class="waveHorizontal"></div>
         </div>
         <!-- sea -->
         <div class="sea"></div>
         <!--/ whale in water scene ends -->

         <section id="features" class="bg-secondary text-light">
            <div class="container">
               <!-- section heading -->  
               <div class="section-heading text-center">
                  <h2>O que torna nossa escola exclusiva</h2>
                  <p class="subtitle">Benefícios para os alunos</p>
               </div>
               <!-- /section-heading -->
               <!-- features -->
               <div class="row ">
                  <div class="col-lg-6">
                     <div class="row ">
                        <div class="col-md-6 col-lg-6">
                           <!-- feature -->
                           <div class="feature-with-icon">
                              <div class="icon-features">
                                 <!-- icon -->
                                 <i class="flaticon-maternity text-primary"></i>
                              </div>
                              <h5>Motivação</h5>
                              <p>Aqui seu filho quer voltar.</p>
                           </div>
                           <!-- /feature-with-icon-->
                           <!-- feature -->
                           <div class="feature-with-icon mt-5">
                              <div class="icon-features">
                                 <!-- icon -->
                                 <i class="flaticon-open-book-1 text-primary"></i>
                              </div>
                              <h5>Inovação</h5>
                              <p>Metodologia única e exclusiva.</p>
                           </div>
                           <!-- /feature-with-icon-->
                        </div>
                        <div class="col-md-6 col-lg-6">
                           <!-- feature -->
                           <div class="feature-with-icon">
                              <div class="icon-features">
                                 <!-- icon -->
                                 <i class="flaticon-classroom-1 text-primary"></i>
                              </div>
                              <h5>Apoio</h5>
                              <p>Apoio em marketing, gestão e todos os processos da unidade.</p>
                           </div>
                           <!-- /feature-with-icon-->
                           <!-- feature -->
                           <div class="feature-with-icon mt-5">
                              <div class="icon-features">
                                 <!-- icon -->
                                 <i class="flaticon-baby-boy text-primary"></i>
                              </div>
                              <h5>Segurança</h5>
                              <p>Segurança de um grupo que está há mais de 20 anos no mercado.</p>
                           </div>
                           <!-- /feature-with-icon-->
                        </div>
                        <!-- /col-l -->
                     </div>
                     <!-- /row-->
                  </div>
                  <!-- /col-l -->
                  <div class="col-lg-6 features-bg">
                     <!-- image -->
                     <img src="../img/features.png" alt="" class="img-fluid"  data-aos="zoom-out"   data-aos-delay="300"/>
                  </div>
                  <!-- /col-l -->
               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </section>

         <section id="about-home" class="container-fluid pb-0">
            <div class="container">
               <!-- section heading -->  
                              <!-- /row -->
               <h3 class="mt-5 text-center">O que os pais dizem:</h3>
               <div class="row">
                  <!-- testimonials -->
                  <!-- testimonial carousel -->
                  <div class="carousel-2items owl-carousel owl-theme col-md-12">
                     <!-- testimonial -->
                     <div class="testimonial">
                        <div class="content">
                           <p class="description">
                              Scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
                           </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                           <img src="../img/team/team1.jpg" class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                           <h5 class="testimonial-title">Lucianna Smith</h5>
                           <span class="post">Teacher</span>
                        </div>
                        <!-- /testimonial-review -->
                     </div>
                     <!-- /testimonial -->
                     <!-- testimonial -->
                     <div class="testimonial">
                        <div class="content">
                           <p class="description">
                              Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
                           </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                           <img src="../img/team/team2.jpg" class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                           <h5 class="testimonial-title">John Sadana</h5>
                           <span class="post">Doctor</span>
                        </div>
                        <!-- /testimonial-review -->
                     </div>
                     <!-- /testimonial -->
                     <!-- testimonial -->
                     <div class="testimonial">
                        <div class="content">
                           <p class="description">
                              Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
                           </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                           <img src="../img/team/team3.jpg" class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                           <h5 class="testimonial-title">Jane Janeth</h5>
                           <span class="post">Librarian</span>
                        </div>
                        <!-- /testimonial-review -->
                     </div>
                     <!-- /testimonial -->
                  </div>
                  <!-- /owl-testimonial -->      
               </div>
               <!-- /row -->
            </div>
            <!-- /container-->
            <!-- whale in water scene -->
            <!-- whale -->

         </section>

         <div class="container block-padding">
               <!-- Team style 3 -->
               <h3 class="text-center">O que os alunos dizem:</h3>
               <!-- team carousel -->  
               <div class="carousel-3items owl-carousel owl-theme mt-5 col-md-12">
                  <!-- Team member 1 -->
                  <div class="col-lg-12 team-style3 bg-secondary pattern2">
                     <!-- image -->
                     <a href="team-single.html">
                     <img src="../img/team/team1.jpg" class="img-fluid rounded" alt="" />
                     </a>
                     <!-- caption -->
                     <div class="team-caption">
                        <a href="team-single.html">
                           <h4>Laura Smith</h4>
                        </a>
                        <h6>Teacher</h6>
                        <p>
                           Incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosa    
                        </p>
                     </div>
                     <!-- social icons -->
                     <div class="icons bg-primary">
                        <a href="#"><i class="fa fa-envelope"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                     </div>
                  </div>
                  <!-- /team-style3 -->
                  <!-- Team member 2 -->
                  <div class="col-lg-12 team-style3 bg-secondary pattern2">
                     <!-- image -->
                     <a href="team-single.html">
                     <img src="../img/team/team2.jpg" class="img-fluid rounded" alt="" />
                     </a>
                     <!-- caption -->
                     <div class="team-caption">
                        <a href="team-single.html">
                           <h4>John Doe</h4>
                        </a>
                        <h6>Administrator</h6>
                        <p>
                           Incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosa    
                        </p>
                     </div>
                     <!-- social icons -->
                     <div class="icons bg-tertiary">
                        <a href="#"><i class="fa fa-envelope"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                     </div>
                  </div>
                  <!-- /team-style3 -->
                  <!-- Team member 3 -->
                  <div class="col-lg-12 team-style3 bg-secondary pattern2">
                     <!-- image -->
                     <a href="team-single.html">
                     <img src="../img/team/team3.jpg" class="img-fluid rounded" alt="" />
                     </a>
                     <!-- caption -->
                     <div class="team-caption">
                        <a href="team-single.html">
                           <h4>Meghan Smith</h4>
                        </a>
                        <h6>Assistant Teacher</h6>
                        <p>
                           Incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosa    
                        </p>
                     </div>
                     <!-- social icons -->
                     <div class="icons bg-primary">
                        <a href="#"><i class="fa fa-envelope"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                     </div>
                  </div>
                  <!-- /team-style3 -->
                  <!-- Team member 4 -->
                  <div class="col-lg-12 team-style3 bg-secondary pattern2">
                     <!-- image -->
                     <a href="team-single.html">
                     <img src="../img/team/team4.jpg" class="img-fluid rounded" alt="" />
                     </a>
                     <!-- caption -->
                     <div class="team-caption">
                        <a href="team-single.html">
                           <h4>Mika Doe</h4>
                        </a>
                        <h6>Teacher</h6>
                        <p>
                           Incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosa    
                        </p>
                     </div>
                     <!-- social icons -->
                     <div class="icons bg-tertiary">
                        <a href="#"><i class="fa fa-envelope"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                     </div>
                  </div>
                  <!-- /team-style3 -->
                  <!-- Team member 5-->
                  <div class="col-lg-12 team-style3 bg-secondary pattern2">
                     <!-- image -->
                     <a href="team-single.html">
                     <img src="../img/team/team5.jpg" class="img-fluid rounded" alt="" />
                     </a>
                     <!-- caption -->
                     <div class="team-caption">
                        <a href="team-single.html">
                           <h4>Jillian Smith</h4>
                        </a>
                        <h6>Assistant teacher</h6>
                        <p>
                           Incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosa    
                        </p>
                     </div>
                     <!-- social icons -->
                     <div class="icons bg-primary">
                        <a href="#"><i class="fa fa-envelope"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                     </div>
                  </div>
                  <!-- /team-style3 -->
               </div>
               <!-- /owl-carousel -->   
            </div>
         <!-- /section ends -->
         <!-- section --> 
         
         <!-- /section ends -->
         <!-- section -->
         <section id="services-home" class="container-fluid">
            <div class="container pb-5">
               <!-- section heading -->  
               <div class="section-heading text-center">
                  <h2>DEFERENCIAIS</h2>
                  <p class="subtitle">MAIS DE 27 ANOS DE EXPERIÊNCIA ENSINANDO COM AMOR E CARINHO</p>
               </div>
               <!-- /section heading -->
               <!-- row -->
               <div class="row vertical-tabs">
                  <div class="col-lg-12">
                     <!-- navigation -->
                     <div class="tabs-with-icon">
                        <nav>
                           <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"><i class="flaticon-abc-block"></i>HORÁRIO FLEXÍVEIS</a>
                              <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" ><i class="flaticon-kids-1"></i>Summer Camp</a>
                              <a class="nav-item nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" ><i class="flaticon-smiling-baby"></i>Infant care</a>
                              <a class="nav-item nav-link" id="tab4-tab" data-toggle="tab" href="#tab4"><i class="flaticon-blackboard"></i>Classes</a>
                              <a class="nav-item nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" ><i class="flaticon-kids"></i>Activities</a>
                           </div>
                        </nav>
                        <!-- tab-content -->
                        <div class="tab-content block-padding bg-light" id="nav-tabContent">
                           <div class="tab-pane active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                              <!-- row -->
                              <div class="row">
                                 <div class="col-lg-6">
                                    <!-- image -->
                                    <img src="../img/services/service1.jpg" alt="" class="rounded img-fluid">
                                    <!-- ornament starts-->
                                    <div class="ornament-rainbow" data-aos="fade-right"></div>
                                 </div>
                                 <!-- col-lg -->
                                 <div class="col-lg-6">
                                    <h3>Daycare</h3>
                                    <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                    <ul class="custom pl-0">
                                       <li>Over 30 Qualified professionals</li>
                                       <li>We offer you our quality services since 2002</li>
                                       <li>Educational activities in our daily plan</li>
                                    </ul>
                                    <!-- Button -->	 
                                    <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                                 </div>
                                 <!-- /col-lg -->
                              </div>
                              <!-- row -->
                           </div>
                           <!-- ./Tab-pane -->
                           <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <h3>Summer Camp</h3>
                                    <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                    <ul class="custom pl-0">
                                       <li>Over 30 Qualified professionals</li>
                                       <li>We offer you our quality services since 2002</li>
                                       <li>Educational activities in our daily plan</li>
                                    </ul>
                                    <!-- Button -->	 
                                    <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                                 </div>
                                 <!-- /col-lg -->
                                 <div class="col-lg-6 res-margin">
                                    <!-- image -->
                                    <img src="../img/services/service2.jpg" alt="" class="rounded img-fluid">
                                    <!-- ornament starts-->
                                    <div class="ornament-stars" data-aos="fade-right"></div>
                                 </div>
                                 <!-- col-lg -->
                              </div>
                              <!-- row -->
                           </div>
                           <!-- ./Tab-pane -->
                           <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <!-- image -->
                                    <img src="../img/services/service3.jpg" alt="" class="rounded img-fluid">
                                    <!-- ornament starts-->
                                    <div class="ornament-bubbles" data-aos="fade-right"></div>
                                 </div>
                                 <!-- col-lg -->
                                 <div class="col-lg-6">
                                    <h3>Infant Care</h3>
                                    <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                    <ul class="custom pl-0">
                                       <li>Over 30 Qualified professionals</li>
                                       <li>We offer you our quality services since 2002</li>
                                       <li>Educational activities in our daily plan</li>
                                    </ul>
                                    <!-- Button -->	 
                                    <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                                 </div>
                                 <!-- /col-lg -->
                              </div>
                              <!-- row -->
                           </div>
                           <!-- ./Tab-pane -->
                           <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <h3>Classes</h3>
                                    <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                    <ul class="custom pl-0">
                                       <li>Over 30 Qualified professionals</li>
                                       <li>We offer you our quality services since 2002</li>
                                       <li>Educational activities in our daily plan</li>
                                    </ul>
                                    <!-- Button -->	 
                                    <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                                 </div>
                                 <!-- /col-lg -->
                                 <div class="col-lg-6 res-margin">
                                    <!-- image -->
                                    <img src="../img/services/service4.jpg" alt="" class="rounded img-fluid">
                                    <!-- ornament starts-->
                                    <div class="ornament-stars" data-aos="fade-right"></div>
                                 </div>
                                 <!-- col-lg -->
                              </div>
                              <!-- row -->
                           </div>
                           <!-- ./Tab-pane -->
                           <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <!-- image -->
                                    <img src="../img/services/service5.jpg" alt="" class="rounded img-fluid">
                                    <!-- ornament starts-->
                                    <div class="ornament-rainbow" data-aos="fade-right"></div>
                                 </div>
                                 <!-- col-lg -->
                                 <div class="col-lg-6">
                                    <h3>Activities</h3>
                                    <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                    <ul class="custom pl-0">
                                       <li>Over 30 Qualified professionals</li>
                                       <li>We offer you our quality services since 2002</li>
                                       <li>Educational activities in our daily plan</li>
                                    </ul>
                                    <!-- Button -->	 
                                    <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                                 </div>
                                 <!-- /col-lg -->
                              </div>
                              <!-- row -->
                           </div>
                           <!-- ./Tab-pane -->
                        </div>
                        <!-- ./Tab-content -->
                     </div>
                     <!-- vertical-tabs -->
                  </div>
                  <!-- /col-lg-6 -->
               </div>
               <!-- /row --> 
            </div>
            <!-- /container -->
         </section>
         <!-- /section ends -->
         <!-- Section  -->
         <section id="counter-section" class="container-fluid counter-calltoaction bg-fixed overlay"  data-100-bottom="background-position: 50% 100px;"
            data-top-bottom="background-position: 50% -100px;" >
            <div id="counter" class="container">
               <div  class="row col-lg-10 offset-lg-1">
                  <!-- Counter -->
                  <div class="col-xl-4 col-md-4">
                     <div class="counter">
                        <div class="counter-wrapper bg-primary">
                           <i class="counter-icon flaticon-teacher"></i>
                           <!-- insert your final value on data-count= -->
                           <div class="counter-value" data-count="40">0</div>
                           <h3 class="title">Professionais</h3>
                        </div>
                     </div>
                     <!-- /counter -->
                  </div>
                  <!-- /col-lg -->
                  <!-- Counter -->
                  <div class="col-xl-4 col-md-4">
                     <div class="counter">
                        <div class="counter-wrapper bg-secondary">
                           <i class="counter-icon  flaticon-family"></i>
                           <!-- insert your final value on data-count= -->
                           <div class="counter-value" data-count="500">0</div>
                           <h3 class="title">Familiares Felizes</h3>
                        </div>
                     </div>
                     <!-- /counter -->
                  </div>
                  <!-- /col-lg -->
                  <!-- Counter -->
                  <div class="col-xl-4 col-md-4">
                     <div class="counter">
                        <div class="counter-wrapper bg-tertiary">
                           <i class="counter-icon flaticon-children"></i>
                           <!-- insert your final value on data-count= -->
                           <div class="counter-value" data-count="1000">0</div>
                           <h3 class="title">Estudantes</h3>
                        </div>
                     </div>
                     <!-- /counter -->
                  </div>
                  <!-- /col-lg -->		 
               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </section>
         <!-- /section ends--><!-- section-->
         <section id="team-home" class="container">
            <!-- section heading -->  
            <div class="section-heading text-center">
               <h2>Nosso Time</h2>
               <p class="subtitle">Profissionais qualificados</p>
            </div>
            <!-- /section-heading -->  
            <div class="row">
               <div class="col-lg-7">
                  <h3>Conheça nossa equipe talentosa</h3>
                  <p>Nosso propósito é que todas as crianças consigam aprender,
                     tendo respeitadas as suas diferenças, peculiaridades e
                      habilidades, sendo trabalhadas da forma correto.
                  </p>
                  <ul class="checkmark pl-0 font-weight-bold">
                     <li>Mais de 40 profissionais qualificados.</li>
                     <li>Oferecemos nossos serviços de qualidade desde 2002.</li>
                     <li>Atividades divertidas e educacionais em nosso plano diário.</li>
                  </ul>
                  <!-- /ul-->
               </div>
               <!-- /col-lg-->
               <div class="col-lg-5 res-margin">
                  <img src="../img/team/team-home.jpg" alt="" class="img-fluid blob2">
                  <!-- ornament starts-->
                  <div class="ornament-stars" data-aos="fade-down"></div>
               </div>
               <!-- /col-lg-->
               <div class="col-lg-12">
                  <!-- team carousel -->  
                  <div class="carousel-4items owl-carousel owl-theme mt-5">
                     <!-- Team member 1 -->
                     <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                           <a href="team-single.html">
                           <img src="../img/team/team1.jpg" class="img-fluid" alt="">
                           </a>
                           <!-- social icons -->
                           <ul class="social">
                              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                           <a href="team-single.html">
                              <h5 class="title">Daniel Bichiatto</h5>
                           </a>
                           <span class="post">CEO</span>
                           <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                        </div>
                        <!-- /team-content -->
                     </div>
                     <!-- /team-style1 -->
                     <!-- Team member 2 -->
                     <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                           <a href="team-single.html">
                           <img src="../img/team/team2.jpg" class="img-fluid" alt="">
                           </a>
                           <!-- social icons -->
                           <ul class="social">
                              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                           <a href="team-single.html">
                              <h5 class="title">Vivian Tieso</h5>
                           </a>
                           <span class="post">Professora</span>
                           <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                        </div>
                        <!-- /team-content -->
                     </div>
                     <!-- /team-style1 -->
                     <!-- Team member 3 -->
                     <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                           <a href="team-single.html">
                           <img src="../img/team/team3.jpg" class="img-fluid" alt="">
                           </a>
                           <!-- social icons -->
                           <ul class="social">
                              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                           <a href="team-single.html">
                              <h5 class="title">Meghan Smith</h5>
                           </a>
                           <span class="post">Assitant Teacher</span>
                           <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                        </div>
                        <!-- /team-content -->
                     </div>
                     <!-- /team-style1 -->
                     <!-- Team member 4 -->
                     <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                           <a href="team-single.html">
                           <img src="../img/team/team4.jpg" class="img-fluid" alt="">
                           </a>
                           <!-- social icons -->
                           <ul class="social">
                              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                           <a href="team-single.html">
                              <h5 class="title">Mika Doe</h5>
                           </a>
                           <span class="post">Teacher</span>
                           <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                        </div>
                        <!-- /team-content -->
                     </div>
                     <!-- /team-style1 -->
                     <!-- Team member 5 -->
                     <div class="col-md-12 team-style1 notepad">
                        <div class="team_img">
                           <a href="team-single.html">
                           <img src="../img/team/team5.jpg" class="img-fluid" alt="">
                           </a>
                           <!-- social icons -->
                           <ul class="social">
                              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                        <!-- /team_img -->
                        <div class="team-content">
                           <a href="team-single.html">
                              <h5 class="title">Jillian Smith</h5>
                           </a>
                           <span class="post">Asssitant Teacher</span>
                           <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                        </div>
                        <!-- /team-content -->
                     </div>
                     <!-- /team-style1 -->
                  </div>
                  <!-- /owl-team--> 
               </div>
               <!-- /col-lg-->
            </div>
            <!-- /row-->
         </section>
         <!-- /section ends-->
         <!-- section --> 
         <section id="gallery-home" class="container-fluid bg-tertiary no-bg-sm">
            <div class="container">
               <!-- section heading -->  
               <div class="section-heading text-center text-light">
                  <h2>Cursos</h2>
                  <p class="subtitle">Navegue entre os cursos e acesse-os para fazer uma aula.</p>
               </div>
               <!-- /section-heading -->
               <!-- centered Gallery navigation -->
               <?php include ("../template/cursos.php");?>
            </div>

         </section>
         <?php include ("../template/contato.php");?>

      </div>


      <?php include ("../template/rodape.php");?>
     