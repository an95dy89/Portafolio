 <!DOCTYPE html>
 <html lang="sp" dir="ltr">

 <head>
   <meta charset="utf-8">
   <title>Portafolio</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!--Google Fonts-->
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
   <!--fon awesome-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <!--Mi estilo-->
   <link rel="stylesheet" href="assets/css/style.css">
 </head>

 <body>


  <!--navbar-->


   <section class="nav">
   <nav class="navbar navbar-expand-lg bg-dark text-white navbar-dark fixed-top">
     <div class="container">
       <h1>Francisco Zuñiga</h1>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon "></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item ">
             <a class="nav-link text-white" href="#about"> Sobre mi </a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-white" href="#knowledge"> Mis conocimiento </a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-white" href="#work"> Mis Trabajos </a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-white" href="#contact"> Contacto </a>
           </li>
         </ul>
       </div>
     </div>
   </nav>
   </section>


   <!-- <section sobre mi-->


   <section id="about" class="mt-6 mb-6 my-4text-center ">
     <div class="container-fluid">
       <img class="mi-foto" src="assets/img/imagen-portafolio.jpg" alt="">
<br>

     </div>
   </section>
  <section>
   <div class="text-center mt-5">
     <h2>    Estudiante de la en la academia de Desafio Latam de curso Desarrollador Full Stack  .</h2>
   </div>
   <div class="text-contac mt-5">
     <div>
       Soy un estudiante de la carrera desarrollador full stack en este periodo del curso  hemos hecho diferentes proyecto y aprendido a ocupar el lenguaje de HTML, CSS ,GIT , BOOSTRAP ,JQUERY y actualmente estoy  cursando ruby and rails el cual esta incompleto ya que aun no lo termino.


       Me considero  una persona con mucho entuciasmo y ganas de generar un cambio, me gusta aprender,con metas y objetivos muy claros .
      ademas de contar con la capacidad de poder trabajar en equipo
     </div>
   </div>
   </section>
<section >


<!--<section de conocimientos -->
<section>
   <div class="container  my-3 py- mt-6">
    <br>
    <br>
     <div class="row">
       <div class="col-3 p-4  text-center">
         <h2 class="font-weight-bold" ></h2>
       </div>
       <div class="col-6  bg-secondary text-white rounded pt-5 pb-1">
         <div id="blogCarousel" class="carousel slide" data-ride="carousel">

           <div class="carousel-inner">

             <div class="carousel-item active text-center">
               <div class="row">

                <div class="col-3">
                  <i class="fab fa-html5"data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="HTML"></i>
                </div>

                 <div class="col-3">
                   <i class="fab fa-css3-alt"data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="CSS"></i>
                 </div>
                 <div class="col-3">
                   <i class="fab fa-bootstrap" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="BOOSTRAP"></i>
                 </div>
                 <div class="col-3">
                   <i class="fab fa-github" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="GIT"></i>
                 </div>
               </div>
             </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <br>
   <br>
 </section>


<!--<section de mis trabajos -->


      <section class="jobs container-fluid bg-dark mt-6 mb-6 my-4"id ="work">
       <br>
       <h1  class="jobsh1 mt-5 mb-5" > MIS  TRABAJOS</h1>

        <!--seccion-->
        <div class="card-deck">
          <div class="card">
            <a href="index_cafe1.php"><img class="card-img-top" src="assets/img/coffe.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Meet&coffe</h5>
              <p class="card-text">Maqueta de cafetria realizadacon el objetivo de mostrar actividades y contactos que se realizan en la cafeteria </p>
              <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#coffe">Ver más</button>
            </div>
          </div>

          <div class="card">
            <a href="index_iguana.php"><img class="card-img-top" src="assets/img/iguana.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Iguana</h5>
              <p class="card-text">Maqueta realizada sobre caracteristicas de la iguana y mostrando imagenes de este animal</p>
              <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#iguana">Ver más</button>
            </div>
          </div>

          <div class="card">
            <a href="index_suricata.php"target="_blank"><img class="card-img-top" src="assets/img/suricata.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Suricata</h5>
              <p class="card-text">Maqueta esta orientada como formato de e-commerce ofreciendo productos atravez de imagenes y con descripciones.</p>
              <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#suricata">Ver más</button>
            </div>

          </div>
          <div class="card">
            <a href="index_oliva.ros.php"><img class="card-img-top" src="assets/img/olivia.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Oliva Ross</h5>
              <p class="card-text">Maqueta esta orientada al comercio de alimentos pero se aplica una mayor interaccion atravez de jquery con el objetivo de mejorar la experiencia  </p>
              <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#olivia">Ver más</button>
            </div>

          </div>
          <div class="card">
            <a href="index_ricomida.php"><img class="card-img-top" src="assets/img/ricomida.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ricomida</h5>
              <p class="card-text">Maqueta esta orientada al comercio de alimentos pero se aplica una mayor interaccion atravez de jquery con el objetivo de mejorar la experiencia</p>
              <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#ricomida">Ver más</button>
            </div>

          </div>
        </div>

        <br>
        <br>
<br>
 </section>
<section>
 <!--boton ver mas de meet & cofe-->
 <div class="modal fade " id="coffe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Meet & coffe</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <img class="img-fluid mb-3" src="assets/img/coffe.png" alt="Card image cap">

         <p>Maqueta esta realizada en lenguaje HTML y tambien cuenta con lenguaje de diseño CSS con un framework llamado  BOOSTRAP, ademas se integro JQuery para mejorar la experiencia.</p>

       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
<!--boton ver mas de Iguana-->
<div class="modal fade" id="iguana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iguana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid mb-3" src="assets/img/iguana.png" alt="Card image cap">

        <p>Maqueta esta realizada en lenguaje HTML y tambien cuenta  con lenguaje de diseño CSS con un framework llamado  BOOSTRAP, ademas se integro JQuery para mejorar la experiencia</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      <!--boton ver mas de suricata-->
      <div class="modal fade" id="suricata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Suricata</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
     <img class="img-fluid mb-3" src="assets/img/suricata.png" alt="Card image cap">

              <p>Maqueta esta realizada en lenguaje HTML y tambien cuenta con  lenguaje de diseño CSS con un framework llamado  BOOSTRAP, ademas se integro JQuery para mejorar la experiencia</p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <!--boton ver mas de oliva ros-->
      <div class="modal fade" id="olivia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Olivia Ross</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="img-fluid mb-3" src="assets/img/olivia.png" alt="Card image cap">

              <p>Maqueta esta realizada en lenguaje HTML y tambien cuenta con lenguaje de diseño CSS con un framework llamado  BOOSTRAP tambien se integro JQuery para mejorar la experiencia</p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!--boton ver mas de ricomida-->
      <div class="modal fade" id="ricomida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ricomida</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="img-fluid mb-3" src="assets/img/ricomida.png" alt="Card image cap">

              <p>Maqueta esta realizada en lenguaje HTML y tambien cuenta con  lenguaje de diseño CSS con un framework llamado  BOOSTRAP, ademas se integro JQuery para mejorar la experiencia. </p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
<br>
<br>

</section>


<!--Section de contac-->


 <section class="contac mt-6" id="contact">
   <h3>Contacto</h3>
 <br>
   <h4>¿Que quieres conoces de mi?</h4>
 <br>
   <div class="typeform-widget" data-url="https://franciscozuiga.typeform.com/to/ThDcgM" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"> powered by <a href="https://admin.typeform.com/signup?utm_campaign=ThDcgM&utm_source=typeform.com-13868780-Basic&utm_medium=typeform&utm_content=typeform-embedded-poweredbytypeform&utm_term=ES" style="color: #999" target="_blank">Typeform</a> </div>
   </section>





     <footer class="foo bg-dark text-center text-light mt-5 p-3">
       <p>Francisco
 <a href="https://github.com/an95dy89"><i class="fab fa-github ml-5"></i></a>
 <a  href="https://www.linkedin.com/in/francisco-andres-zuniga-pina-a65897112/"> <i class="fab fa-linkedin-in ml-3"></i></a>

       </p>
     </footer>







     <!--jQuery 3.4.0 version no slim-->
     <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
     <!--Popper JS 1.14.3-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <!--bootstrap JS 4.2.1-->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <!--Mi script-->
     <script src="assets/js/script.js"></script>

 </body>

 </html>
