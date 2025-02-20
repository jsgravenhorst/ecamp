<div class="container-fluid bg-light border">
    <div class="container clearfix">
        <div class="btn-group float-end p-2">
                <button class="btn btn-default btnView  bg-gray" attr-type="grid" attr-index="2">
                    <i class="fas fa-th fa-xs pe-1"></i>
                    <span class="col-xs-0 float-end small mt-1">GRID</span>
                </button>

                <button class="btn btn-default btnView" attr-type="list" attr-index="2">
                    <i class="fas fa-list fa-xs pe-1"></i>
                    <span class="col-xs-0 float-end small mt-1">LIST</span>
                </button>
        </div>
    </div>
</div>

<div class="container-fluid bg-white">
    <div class="container">
        <div class="clearfix pt-3 pb-0 px-2">
            <h6 class="float-start text-uppercase pt-2">Artículos más vistos</h6>
            <span class="float-end">
                <!-- 
                    Se ponen en comentario porque no esta cambiando el color de las letras 
                    <a href="#" class="btn btn-default templateColor">
                        <small>VER MÁS<i class="fas fa-chevron-right"></i></small>
                    </a>
                -->
                <a href="#">
                    <button class="btn btn-default templateColor">
                        <small>VER MÁS <i class="fas fa-chevron-right"></i></small>
                    </button>
                </a>
            </span>
        </div>

        <hr style="color: #666;">

        <!-- GRID -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 pt-3 pb-4 grid-2">
        <div class="col px-3 py-2 py-lg-0">
            <a href="#">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/1/curso01.jpg" class="img-fluid">
                </figure>
                <h6>
                    <small class="text-uppercase text-muted">PHP MVC</small>
                </h6>
            </a>
            <h6>
                <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>
            </h6>
            <div class="clearfix">
                <h6 class="float-start text-uppercase text-muted pt-2">  
                    <del class="small" style="color: #bbb;">USD $29</del> $11
                </h6>
                <span class="float-end">
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-light border">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-light border">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </span>
            </div>
        </div>

        <div class="col px-3 py-2 py-lg-0">
            <a href="#">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/2/curso02.jpg" class="img-fluid">
                </figure>
                <h6>
                    <small class="text-uppercase text-muted">jQuery</small>
                </h6>
            </a>
            <h6>
                <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>
            </h6>
            <div class="clearfix">
                <h6 class="float-start text-uppercase text-muted pt-2">  
                    <del class="small" style="color: #bbb;">USD $29</del> $11
                </h6>

                <span class="float-end">
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-light border">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-light border">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </span>
            </div>
        </div>

        <div class="col px-3 py-2 py-lg-0">
            <a href="#">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/3/curso03.jpg" class="img-fluid">
                </figure>
                <h6>
                    <small class="text-uppercase text-muted">Bootstrap</small>
                </h6>
            </a>
            <h6>
                <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>
            </h6>
            <div class="clearfix">
                <h6 class="float-start text-uppercase text-muted pt-2">  
                    <del class="small" style="color: #bbb;">USD $29</del> $11
                </h6>
                <span class="float-end">
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-light border">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-light border">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </span>
            </div>
        </div>

        <div class="col px-3 py-2 py-lg-0">
            <a href="#">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/4/curso04.jpg" class="img-fluid">
                </figure>
                <h6>
                    <small class="text-uppercase text-muted">JavaScript</small>
                </h6>
            </a>
            <h6>
                <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>
            </h6>
            <div class="clearfix">
                <h6 class="float-start text-uppercase text-muted pt-2">  
                    <del class="small" style="color: #bbb;">USD $29</del> $11
                </h6>
                <span class="float-end">
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-light border">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-light border">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </span>
            </div>
        </div>
        </div>
         <!-- LIST -->
         <div class="row list-2" style="display: none;">
            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/1/curso01.jpg" class="img-fluid" style="width:150px">
                </figure>
                <div class="media-body ps-3">
                    <h6>
                        <small class="text-uppercase text-muted">Vestido Dama</small>
                    </h6>
                    <h6>
                        <span class="badge badgeNew bg-warning text-uppercase text-white p-2">Nuevo</span>
                    </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error neque aspernatur 
                        animi ducimus autem vitae, sequi, impedit magnam sit mollitia perspiciatis eum.
                        Vero, sed blanditiis nemo fuga cumque doloremque molestiae.away. 
                    </p>
                    <div class="clearfix">
                        <h6 class="float-start text-uppercase text-muted pt-2">
                            <small>Gratis</small>
                        </h6>
                        <span class="float-end">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-light border">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="button" class="btn btn-light border">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>            
            </div>

            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/2/curso02.jpg" class="img-fluid" style="width:150px">
                </figure>
                <div class="media-body ps-3">
                    <h6>
                        <small class="text-uppercase text-muted">Mameluco</small>
                    </h6>
                    <h6>
                        <span class="badge badgeNew bg-warning text-uppercase text-white p-2">Nuevo</span>
                    </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error neque aspernatur 
                        animi ducimus autem vitae, sequi, impedit magnam sit mollitia perspiciatis eum.
                        Vero, sed blanditiis nemo fuga cumque doloremque molestiae.away. 
                    </p>
                    <div class="clearfix">
                        <h6 class="float-start text-uppercase text-muted pt-2">
                            <small>Gratis</small>
                        </h6>
                        <span class="float-end">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-light border">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="button" class="btn btn-light border">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>            
            </div>

            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/3/curso03.jpg" class="img-fluid" style="width:150px">
                </figure>
                <div class="media-body ps-3">
                    <h6>
                        <small class="text-uppercase text-muted">Vestido de baño</small>
                    </h6>
                    <h6>
                        <span class="badge badgeNew bg-warning text-uppercase text-white p-2">Nuevo</span>
                    </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error neque aspernatur 
                        animi ducimus autem vitae, sequi, impedit magnam sit mollitia perspiciatis eum.
                        Vero, sed blanditiis nemo fuga cumque doloremque molestiae.away. 
                    </p>
                    <div class="clearfix">
                        <h6 class="float-start text-uppercase text-muted pt-2">
                            <small>Gratis</small>
                        </h6>
                        <span class="float-end">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-light border">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="button" class="btn btn-light border">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>            
            </div>

            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/4/curso04.jpg" class="img-fluid" style="width:150px">
                </figure>
                <div class="media-body ps-3">
                    <h6>
                        <small class="text-uppercase text-muted">Sombrero hombre</small>
                    </h6>
                    <h6>
                        <span class="badge badgeNew bg-warning text-uppercase text-white p-2">Nuevo</span>
                    </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error neque aspernatur 
                        animi ducimus autem vitae, sequi, impedit magnam sit mollitia perspiciatis eum.
                        Vero, sed blanditiis nemo fuga cumque doloremque molestiae.away. 
                    </p>
                    <div class="clearfix">
                        <h6 class="float-start text-uppercase text-muted pt-2">
                            <small>Gratis</small>
                        </h6>
                        <span class="float-end">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-light border">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="button" class="btn btn-light border">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>            
            </div>
        </div>

    </div>    
</div>