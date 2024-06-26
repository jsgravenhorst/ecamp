<div class="container-fluid bg-dark small">

    <div class="container py-5 text-light">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
             <!-- **********************************************************CATEGORĪAS******************************************************************* -->
            <div class="col row">

                <div class="col-12 col-sm-4 col-md-3 col-lg-6">

                    <h4 class="lead">

                        <a href="#" class="text-uppercase">Ropa</a>

                    </h4>

                    <hr class="border-white">

                    <ul>

                        <li>
                            <a href="#">Ropa para dama</a>
                        </li>
                        <li>
                            <a href="#">Ropa para hombre</a>
                        </li>
                        <li>
                            <a href="#">Ropa deportiva</a>
                        </li>
                        <li>
                            <a href="#">Ropa infantil</a>
                        </li>

                    </ul>


                </div>


                <div class="col-12 col-sm-4 col-md-3 col-lg-6">

                    <h4 class="lead">

                        <a href="#" class="text-uppercase">Calzado</a>

                    </h4>

                    <hr class="border-white">

                    <ul>

                        <li>
                            <a href="#">Calzado para dama</a>
                        </li>
                        <li>
                            <a href="#">Calzado para hombre</a>
                        </li>
                        <li>
                            <a href="#">Calzado deportiva</a>
                        </li>
                        <li>
                            <a href="#">Calzado infantil</a>
                        </li>

                    </ul>

                </div>


                <div class="col-12 col-sm-4 col-md-3 col-lg-6">

                    <h4 class="lead">

                        <a href="#" class="text-uppercase">Tecnología</a>

                    </h4>

                    <hr class="border-white">

                    <ul>

                        <li>
                            <a href="#">Telofonía Móvil</a>
                        </li>
                        <li>
                            <a href="#">Tablets</a>
                        </li>
                        <li>
                            <a href="#">Computadoras</a>
                        </li>
                        <li>
                            <a href="#">Audífonos</a>
                        </li>

                    </ul>

                </div>



                <div class="col-12 col-sm-4 col-md-3 col-lg-6">

                    <h4 class="lead">

                        <a href="#" class="text-uppercase">Cursos</a>

                    </h4>

                    <hr class="border-white">

                    <ul>

                        <li>
                            <a href="#">Desarrollo Web</a>
                        </li>
                        <li>
                            <a href="#">Aplicaciones Móviles</a>
                        </li>
                        <li>
                            <a href="#">Diseño Gráfico</a>
                        </li>
                        <li>
                            <a href="#">Marketing Digital</a>
                        </li>

                    </ul>

                </div>
            </div>
             <!-- **********************************************************DATOS CONTACTO******************************************************************* -->
            <div class="col my-3 my-lg-0 px-lg-6 text-light">

                <h1 class="lead small">Dudas e inquietudes, contáctanos en:</h1>

                <br>

                <h1 class="lead small">
                    <i class="fa fa-phone-square pe-2"></i> (57) 777-77-77
                    
                    <br><br>

                    <i class="fa fa-envelope pe-2"></i> info@ecamp.com
                    
                    <br><br>

                    <i class="fa fa-map-marker pe-2"></i> Calle 7 #17-7 Local 7

                    <br><br>

                    Cali | Colombia
               
                </h1>

                <iframe 
                    class="mt-3"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5632.3992365270815
                    !2d-76.55318012765673
                    !3d3.4212082014425387
                    !2m3!1f0!2f0!3f0!3m2
                    !1i1024!2i768!4f13.1
                    !3m3!1m2!1s0x8e30a41efdfc0387%3A0x9cb2232b75b70bf9!2sCl.+2+%2343-86%2C+Cali%2C+Valle+del+Cauca%2C+Colombia!5e0!3m2!1ses-419!2sus!4v1447952638570" 
                    width="100%"
                    height="50%" 
                    frameborder="0"
                    style="border: 0" 
                    scrolling="no" 
                    marginheight="0" 
                    marginwidth="0"  
                    allowfullscreen="">
                </iframe>					
			

              



            </div>    
            <!-- **********************************************************ENVIAR CORREO******************************************************************* -->
            <div class="col small my-3 my-lg-0">
                <h4>RESUELVA SU INQUIETUD</h4>
                <!-- **********************************************************FORMULARIO DE CORREO******************************************************************* -->
                <form role="form" method="post">
                    <input 
                        type="text" 
                        id="nombreContactenos" 
                        name="nombreContactenos" 
                        class="form-control"
                        placeholder="Escriba su nombre"
                        required>
                    <br>

                    <input 
                        type="text" 
                        id="emailContactenos" 
                        name="emailContactenos" 
                        class="form-control"
                        placeholder="Escriba su correo electrónico"
                        required>
                    <br>

                    <textarea 
                        id="mensajeContactenos" 
                        name="mensajeContactenos" 
                        class="form-control" 
                        placeholder="Escriba su mensaje" 
                        rows="5" 
                        required></textarea>

                    <br>

                    <input
                        type="submit" 
                        value="Enviar" 
                        class="btn btn-default templateColor float-end border-0 topColor">
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer topColor">
    <div class="container">
        <!-- To the right -->
        <div class="float-end">
            <div class="d-flex justify-content-center" style="line-height:0px;">
                <?php foreach ($socials as $key => $value ): ?>
                    <div class="p-2 ">
                        <a href="<?php echo $value->url_social ?>" target="_blank">
                            <i class="<?php echo $value->icon_social?> <?php echo $value->color_social?>"></i>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <!-- Default to the left -->
        <small>&copy; <?php echo date("Y")?> Todos los derechos reservados. Sitio elaborado por Olontech</small>
    </div>
</footer>