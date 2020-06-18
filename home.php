<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="./imagenes/favicon.svg" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style.css" id="personal-css">


    <link rel="stylesheet" href="css/bootstrap.css" id="bootstrap-css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>


</head>

<body>







    <div id="divMain" class="full-height d-none d-md-block " style="background: black">
        <div class="row full-height">
            <div id="divNosotros" class="col-md-3 ">

                <a href="#modalNosotros" data-toggle="modal" data-backdrop="false" data-target="#modalNosotros">
                    <div class="row nosotros justify-content-center align-items-start">
                        <img style="padding-left: 50px;padding-right: 50px;padding-top: 15px;" width="100%" src="imagenes/nosotrosnue.svg" />
                        <img id="imgNosotros" class="image" height="300px" src="imagenes/ininosotros.svg" />
                    </div>
                </a>
            </div>


            <div id="divPortafolio" class="col-md-3 ">
                <a href="#modalPortafolio" data-toggle="modal" data-backdrop="false" data-target="#modalPortafolio">
                    <div class="row portafolio justify-content-center align-items-start">
                        <img style="padding-left: 50px;padding-right: 50px;padding-top: 80px;" width="100%" src="imagenes/portafolionue.svg" />
                        <img id="imgPortafolio" class="image" height="300px" src="imagenes/iniportafolio.svg" />
                    </div>
                </a>
            </div>
            <div id="divAlianza" class="col-md-3 ">
                <a href="#modalAlianza" data-toggle="modal" data-backdrop="false" data-target="#modalAlianza">
                    <div class="row alianza justify-content-center align-items-start">
                        <img style="padding-left: 50px;padding-right: 50px; padding-top: 80px;" width="100%" src="imagenes/alianzasnue.svg" />
                        <img id="imgAlianza" class="image" height="300px" src="imagenes/inialianza.svg" />
                    </div>
                </a>
            </div>
            <div id="divContacto" class="col-md-3 ">
                <a href="#modalContacto" data-toggle="modal" data-backdrop="false" data-target="#modalContacto">
                    <div class="row contacto justify-content-center align-items-start">
                        <img style="padding-left: 50px;padding-right: 50px;padding-top: 15px;" width="100%" src="imagenes/contactonue.svg" />
                        <img id="imgContacto" class="image" height="300px" src="imagenes/inicontacto.svg" />
                    </div>
                </a>
            </div>
        </div>


    </div>


    <div id="divMainM" class="full-height d-md-none " style="background: black">
        <div class="row medio-height">
            <div class="col-2 col-sm-3">
            </div>

            <div id="divNosotrosM" class="col-4 col-sm-3">
                <a href="#modalNosotros" data-toggle="modal" data-backdrop="false" data-target="#modalNosotros">
                    <div class="row nosotros justify-content-center align-items-start">
                        <img style="padding-top: 15px;" width="100%" src="imagenes/nosotrosnue.svg" />
                        <img id="imgNosotrosM" class="image" height="180px" src="imagenes/ininosotros.svg" />
                    </div>
                </a>
            </div>
            <div id="divPortafolioM" class="col-4 col-sm-3">
                <a href="#modalPortafolio" data-toggle="modal" data-backdrop="false" data-target="#modalPortafolio">
                    <div class="row portafolio justify-content-center align-items-start">
                        <img style="padding-top: 15px;" width="100%" src="imagenes/portafolionue.svg" />
                        <img id="imgPortafolioM" class="image" height="150px" src="imagenes/iniportafolio.svg" />
                    </div>
                </a>
            </div>
            <div class="col-2 col-sm-3 ">
            </div>
        </div>
        <div class="row separacion-height">
        </div>
        <div class="row horizontal-height">
            <div id="divAlianzaM" class="col-6 ">
                <a href="#modalAlianza" data-toggle="modal" data-backdrop="false" data-target="#modalAlianza">
                    <div class="row alianza justify-content-end">

                        <img class="imgAlianzaTitulo" height="50%" src="imagenes/alianzasnue.svg" />


                        <img id="imgAlianzaM" class="image" height="150px" src="imagenes/inialianza.svg" />

                    </div>
                </a>
            </div>


            <div id="divContactoM" class="col-6 ">
                <a href="#modalContacto" data-toggle="modal" data-backdrop="false" data-target="#modalContacto">
                    <div class="row contacto justify-content-start">
                        <img class="imgContactoTitulo" height="50%" src="imagenes/contactonue.svg" />
                        <img id="imgContactoM" class="image" height="150px" src="imagenes/inicontacto.svg" />
                    </div>
                </a>
            </div>
        </div>
        <div class="row separacion-height">
        </div>

    </div>

    <div class="modal fade modalPortafolio" tabindex="-1" role="dialog" aria-labelledby="modalPortafolio" aria-hidden="true" id="modalPortafolio">
        <div class="modal-dialog modal-xl">
            <div class="modal-content ">
                <img class="imgTituloAlianzas" src="imagenes/tituloportafolio.svg" />
                <a href="#modalPortafolio" data-toggle="modal" data-target="#modalPortafolio">
                    <img class="imgCerrarX" src="imagenes/botonxrosa.svg" />
                </a>

                <div class="modal-body border border-light portafolioscroll overflow-auto">


                    <div class="row">
                        <div class="col-12">
                            <img class="img-responsive" src="imagenes/WEB_FONDO.jpg" width="100%" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                            <img id="portafolio1" src="fotosportafolio/img1.jpg" style="width:100%">
                            <img id="portafolio2" src="fotosportafolio/img2.jpg" style="width:100%">
                            <img id="portafolio3" src="fotosportafolio/img3.jpg" style="width:100%">
                            <img id="portafolio4" src="fotosportafolio/img4.jpg" style="width:100%">
                            <img id="portafolio5" src="fotosportafolio/img5.jpg" style="width:100%">
                            <img id="portafolio6" src="fotosportafolio/img6.jpg" style="width:100%">
                        </div>
                        <div class="column">
                            <img id="portafolio7" src="fotosportafolio/img7.jpg" style="width:100%">
                            <img id="portafolio8" src="fotosportafolio/img8.jpg" style="width:100%">
                            <img id="portafolio9" src="fotosportafolio/img9.jpg" style="width:100%">
                            <img id="portafolio10" src="fotosportafolio/img10.jpg" style="width:100%">
                            <img id="portafolio11" src="fotosportafolio/img11.jpg" style="width:100%">
                            <img id="portafolio12" src="fotosportafolio/img12.jpg" style="width:100%">
                        </div>
                        <div class="column">
                            <img id="portafolio13" src="fotosportafolio/img13.jpg" style="width:100%">
                            <img id="portafolio14" src="fotosportafolio/img14.jpg" style="width:100%">
                            <img id="portafolio15" src="fotosportafolio/img15.jpg" style="width:100%">
                            <img id="portafolio16" src="fotosportafolio/img16.jpg" style="width:100%">
                            <img id="portafolio17" src="fotosportafolio/img17.jpg" style="width:100%">
                            <img id="portafolio18" src="fotosportafolio/img18.jpg" style="width:100%">
                        </div>
                        <div class="column">
                            <img id="portafolio19" src="fotosportafolio/img19.jpg" style="width:100%">
                            <img id="portafolio20" src="fotosportafolio/img20.jpg" style="width:100%">
                            <img id="portafolio21" src="fotosportafolio/img21.jpg" style="width:100%">
                            <img id="portafolio22" src="fotosportafolio/img22.jpg" style="width:100%">
                            <img id="portafolio23" src="fotosportafolio/img23.jpg" style="width:100%">
                            <img id="portafolio24" src="fotosportafolio/img24.jpg" style="width:100%">
                        </div>

                    </div>
                    <div class="row align-items-center">

                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-59.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-60.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-80.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-56.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-79.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-58.svg" />
                        </div>
                    </div>
                    <div class="row justify-content-center" style="height: 30px">
                    </div>


                    <div class="row align-items-center">

                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-61.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-62.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-63.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-64.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-65.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-66.svg" />
                        </div>
                    </div>



                    <div class="row justify-content-center" style="height: 30px">
                    </div>


                    <div class="row align-items-center">

                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-67.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-68.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-69.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-70.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-71.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-72.svg" />
                        </div>
                    </div>


                    <div class="row justify-content-center" style="height: 30px">
                    </div>


                    <div class="row align-items-center">

                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-73.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-74.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-75.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-76.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-77.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-78.svg" />
                        </div>
                    </div>


                    <div class="row justify-content-center" style="height: 30px">
                    </div>


                    <div class="row align-items-center">

                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-79.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-80.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-81.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-82.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-83.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-84.svg" />
                        </div>
                    </div>



                    <div class="row justify-content-center" style="height: 30px">
                    </div>


                    <div class="row align-items-center">

                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-85.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-86.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-87.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-88.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-89.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-90.svg" />
                        </div>
                    </div>




                    <div class="row justify-content-center" style="height: 30px">
                    </div>


                    <div class="row align-items-center">

                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-91.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-92.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-93.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-94.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-54.svg" />
                        </div>
                        <div class="col-2 ">
                            <img class="img-responsive logosportafolio" src="imagenes/WEB-57.svg" />
                        </div>
                    </div>



                </div>



            </div>
        </div>
    </div>



    <div id="modalImg" class="modal fade modalImg" tabindex="-1" role="dialog" aria-labelledby="modalImg" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">

                <a href="#modalImg" data-toggle="modal" data-target="#modalImg">
                    <img class="imgCerrarX" src="imagenes/botonxrosa.svg" />
                </a>

                <div class="modal-body border border-light">


                    <img id="imgMostrar" class="img-responsive" src="imagenes/botonxrosa.svg" width="100%" />


                </div>



            </div>
        </div>
    </div>


    <div class="modal fade modalAlianza" tabindex="-1" role="dialog" aria-labelledby="modalAlianza" aria-hidden="true" id="modalAlianza">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <img class="imgTituloAlianzas" src="imagenes/tituloalianzas.svg" />
                <a href="#modalAlianza" data-toggle="modal" data-target="#modalAlianza">
                    <img class="imgCerrarX" src="imagenes/botonxrosa.svg" />
                </a>

                <div class="modal-body border border-light">
                    <p class="letraBlancaAlianza">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    <div class="row">
                        <div class="col-8 ">
                            <img style="padding-left: 30px" src="imagenes/alianzas2.svg" />
                        </div>
                        <div class="col-4">

                        </div>

                    </div>
                    <div class="row justify-content-center" style="height: 40px">
                    </div>

                    <div class="row ">

                        <div class="col-12 text-center">
                            <img style="padding: 10px" height="60px" src="imagenes/aliado2.svg" />
                            <img style="padding: 10px" height="60px" src="imagenes/aliado2.svg" />
                            <img style="padding: 10px" height="60px" src="imagenes/aliado3.svg" />
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-12  d-flex justify-content-end">
                            <img height="60px" src="imagenes/alianzas3.svg" />

                        </div>


                    </div>

                </div>



            </div>
        </div>
    </div>




    <div class="modal fade modalNosotros" tabindex="-1" role="dialog" aria-labelledby="modalNosotros" aria-hidden="true" id="modalNosotros">
        <div class="modal-dialog modal-xl">
            <div class="modal-content ">
                <!--  <img id="idGrabaciones" class="imgGrabaciones" src="imagenes/nosotrosplay.svg" />
                <img id="idCamara" class="imgCamara" src="imagenes/nosotroscamara.svg" />
                <img id="idCafe" class="imgCafe" src="imagenes/nosotroscafe.svg" />-->
                <img class="imgTituloAlianzas" src="imagenes/titulonosotros.svg" />
                <a href="#modalNosotros" data-toggle="modal" data-target="#modalNosotros">
                    <img class="imgCerrarX" src="imagenes/botonxrosa.svg" />
                </a>

                <div class="modal-body border border-light">
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <button class="btn-btn primary" id="btnEspaniol" style="display: none;"> ES</button>
                            <button class="btn-btn primary" id="btnIngles" style="display: block;"> EN</button>
                        </div>


                        <div class="col-lg-1 d-none d-lg-block">
                            <img height="80%" style="padding-top: 90px" src="imagenes/lineavertical.svg" />
                        </div>

                        <div id="divEspaniol" class="col-lg-11 col-md-12 mt-5">
                            <div class="row align-items-center">
                                <div class="col-2">
                                   <span class="numeroBlanco">1 </span>
                                        
                                            <img height="20px" src="imagenes/triangulo.svg" />
                                       
                                    
                                </div>
                                <div class="col-10">
                                    <span class="numeroRosa">un </span>
                                    <span class="nosotrosTexto"> gran objetivo. Inspirar, vender, entretener, educar, informar y explotar cerebros con piezas audiovisuales increíbles.</span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-2"><span class="numeroBlanco">2 </span>
                                <img height="20px" src="imagenes/cuadrado.svg" /></div>
                                <div class="col-10">
                                    <span class="numeroAzul">dos </span>
                                    <span class="nosotrosTexto"> reglas fundamentales: Creatividad mata presupuesto y video que no provoque sonrisa, no esta terminado.</span>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"> <span class="numeroBlanco">3 </span>
                                    <img height="20px" src="imagenes/circulo.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroRosa">tres </span>
                                        <span class="nosotrosTexto"> socios fundamentales: Rodrigo Fierros Chavero (Rojo), María Villalobos Flota (Mary) y Jorge López Archundia(Chino).</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"><span class="numeroBlanco">4 </span>
                                    <img height="20px" src="imagenes/triangulo.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroAzul">cuatro </span>
                                        <span class="nosotrosTexto"> mandamientos de video: Optimizado para multiplataformas. Funciona sin sonido, pero impacta si lo escuchas. Con objetivo claro de comunicación. En duración: Menos es más.</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"> <span class="numeroBlanco">5 </span>
                                    <img height="20px" src="imagenes/cuadrado.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroRosa">cinco </span>
                                        <span class="nosotrosTexto"> años creando, jugando, imaginando, concursando, aprendiendo, colaborando e innovando (¡y vamos por más!).</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"> <span class="numeroBlanco">6 </span>
                                    <img height="20px" src="imagenes/circulo.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroAzul">seis </span>
                                        <span class="nosotrosTexto"> ciudades fuera de México donde se han presentado nuestros videos (hasta ahora): NY, Londres, Barcelona, San Diego, Madrid y Dallas.</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"> <span class="numeroBlanco">7 </span>
                                    <img height="20px" src="imagenes/triangulo.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroRosa">siete </span>
                                        <span class="nosotrosTexto"> cosas que nos motivan: un buen café, la buena onda entre nosotros, música que mueva, botana para compartir, retas de videojuegos, amor por lo que hacemos y cheves los viernes.</span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div id="divIngles" style="display: none;" class="col-lg-11 col-md-12 mt-5">
                            <div class="row align-items-center">
                                <div class="col-2"><span class="numeroBlanco">1 </span>
                                <img height="20px" src="imagenes/triangulo.svg" /> </div>
                                <div class="col-10">
                                    <span class="numeroRosa">one </span>
                                    <span class="nosotrosTexto"> big goal: to inspire, sell, entertain, educate, inform and blow minds away with awesome.</span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-2"><span class="numeroBlanco">2 </span>
                                <img height="20px" src="imagenes/cuadrado.svg" /></div>
                                <div class="col-10">
                                    <span class="numeroAzul">two </span>
                                    <span class="nosotrosTexto"> fundamental rules: Creativity before Budget and if a video doesn't provokes a smile it's not yet finished.</span>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"> <span class="numeroBlanco">3 </span>
                                    <img height="20px" src="imagenes/circulo.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroRosa">three </span>
                                        <span class="nosotrosTexto"> Founding partners: Rodrigo Fierros Chavero (Rojo), María Villalobos Flota (Mary) y Jorge López Archundia(Chino).</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"><span class="numeroBlanco">4 </span>
                                    <img height="20px" src="imagenes/triangulo.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroAzul">four </span>
                                        <span class="nosotrosTexto"> video commandments: Multiplataform optimization. Works on mute, amazes with volume. Accurate communication objective. Duration: Less is more.</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"> <span class="numeroBlanco">5 </span>
                                    <img height="20px" src="imagenes/cuadrado.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroRosa">five </span>
                                        <span class="nosotrosTexto"> years creating, playing, imagining, competing, learning, collaborating and innovating (and more to come!).</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"> <span class="numeroBlanco">6 </span>
                                    <img height="20px" src="imagenes/circulo.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroAzul">six </span>
                                        <span class="nosotrosTexto"> cities outside México(so far) in which our videos were displayed at events: NY, London, Barcelona, San Diego, Madrid and Dallas.</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-2"> <span class="numeroBlanco">7 </span>
                                    <img height="20px" src="imagenes/triangulo.svg" /></div>
                                    <div class="col-10">
                                        <span class="numeroRosa">seven </span>
                                        <span class="nosotrosTexto"> things in which we find motivation: a good cup of coffee, the good vibes between the team, nice music, crisps to share, videogames contests, love for what we do and beer on fridays.</span>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="row justify-content-center" style="height: 40px">
                        </div>



                       
                    </div>



                </div>
            </div>
        </div>
    </div>






    <div class="modal fade modalContacto" tabindex="-1" role="dialog" aria-labelledby="modalContacto" aria-hidden="true" id="modalContacto">
        <div class="modal-dialog modal-xl">
            <div class="modal-content ">
                <img class="imgTituloAlianzas" src="imagenes/titulocontacto.svg" />
                <a href="#modalContacto" data-toggle="modal" data-target="#modalContacto">
                    <img class="imgCerrarX" src="imagenes/botonxrosa.svg" />
                </a>

                <div class="modal-body border border-light">

                    <div class="row justify-content-center" style="height: 80px">
                    </div>
                    <div class="row align-items-center" style="height: 300px;">

                        <div class="col" align="center">
                            <a target="_blank" href="https://wa.me/4424468415?text=Quisiera%20informes%20sobre%20la%20siguiente%20plataforma"> <img id="idWhats" style="padding-left: 35px" height="60px" src="imagenes/whats.svg" /> </a>
                            <a target="_blank" href="https://m.facebook.com/messages/thread/87718079813/?entrypoint=web%3Atrigger%3Apage_profile_message_button&refid=17"> <img id="idMessenger" style="padding-left: 35px" height="60px" src="imagenes/messenger.svg" /></a>
                            <a target="_blank" href="mailto:dardo"> <img id="idMail" style="padding-left: 35px" height="60px" src="imagenes/mail.svg" /></a>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-9 ">
                            <img style="padding-left: 35px" src="imagenes/alianzas2.svg" />
                        </div>
                        <div class="col-md-3">

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-9  d-flex justify-content-end">
                            <div class="row">
                                <div class="col-md-12  d-flex justify-content-start">
                                    <p class="letraBlancaContacto">DIRECCIÓN.</p>
                                </div>
                                <div class="col-md-12  d-flex justify-content-start">
                                    <p class="letraBlancaContacto">Calle circuito Alamos no. 88 Alamos segunda sección. C.P. 76160 Santiago de Querétaro, Querétaro.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3  d-flex justify-content-end align-items-end">
                            <!-- <a href="https://twitter.com/dardo7" target="_blank"> <img height="25px" src="imagenes/contacto1.svg" /> </a>-->
                            <a href="https://www.instagram.com/dardo7vm/" target="_blank"> <img height="25px" style="padding-left: 10px" src="imagenes/contacto2.svg" /> </a>
                            <a href="https://www.facebook.com/Dardo7vm/" target="_blank"> <img height="25px" style="padding-left: 10px" src="imagenes/contacto3.svg" /></a>
                            <a href="https://www.youtube.com/channel/UCCEAdjS_6PU4ZEOH6fp-6Sw?view_as=subscriber" target="_blank"> <img height="25px" style="padding-left: 10px" src="imagenes/contacto4.svg" /> </a>

                        </div>


                    </div>

                </div>



            </div>
        </div>
    </div>




    <div id="modalMensajeError" class="modal fade modalMensajeError" tabindex="-1" role="dialog" aria-labelledby="modalMensajeError" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content ">

                <a href="#modalMensajeError" data-toggle="modal" data-target="#modalMensajeError">
                    <img class="imgCerrarX" src="imagenes/botonxrosa.svg" />
                </a>

                <div class="modal-body border border-light" style="font-size:large;color: white;background-color: black;">


                </div>



            </div>
        </div>
    </div>






    <script>
        <?php for ($i = 1; $i <= 24; $i++) { ?>
            $(function() {
                $("#portafolio<?php echo $i; ?>").click(
                    function() {

                        $('#imgMostrar').attr("src", $("#portafolio<?php echo $i; ?>").attr('src'));
                        $('#modalImg').modal('toggle');
                    }
                );
            });
        <?php } ?>


        $(document).on("show.bs.modal", function(e) {
            var modal_id = e.target.id;
            $("#divMain").addClass("blur");
            $("#divMainM").addClass("blur");

        });

        $(document).on("hide.bs.modal", function(e) {
            var modal_id = e.target.id;
            if (modal_id != 'modalImg' && modal_id != 'modalMensajeError') {
                $("#divMain").removeClass("blur");
                $("#divMainM").removeClass("blur");
            }
        });

        $(function() {
            $("#divAlianza").hover(
                function() {
                    $('#imgAlianza').attr("src", "imagenes/D7_VIDEO_ALIANZA_V01.gif");
                },
                function() {
                    $('#imgAlianza').attr("src", "imagenes/inialianza.svg");
                }
            );
        });


        $(function() {
            $("#divAlianzaM").hover(
                function() {
                    $('#imgAlianzaM').attr("src", "imagenes/D7_VIDEO_ALIANZA_V01.gif");
                },
                function() {
                    $('#imgAlianzaM').attr("src", "imagenes/inialianza.svg");
                }
            );
        });





        $(function() {
            $("#divPortafolio").hover(
                function() {
                    $('#imgPortafolio').attr("src", "imagenes/D7_VIDEO_PORTAFOLIO_V01.gif");
                },
                function() {
                    $('#imgPortafolio').attr("src", "imagenes/iniportafolio.svg");
                }
            );
        });

        $(function() {
            $("#divPortafolioM").hover(
                function() {
                    $('#imgPortafolioM').attr("src", "imagenes/D7_VIDEO_PORTAFOLIO_V01.gif");
                },
                function() {
                    $('#imgPortafolioM').attr("src", "imagenes/iniportafolio.svg");
                }
            );
        });

        $(function() {
            $("#divContacto").hover(
                function() {
                    $('#imgContacto').attr("src", "imagenes/D7_VIDEO_CONTACTO_V01.gif");
                },
                function() {
                    $('#imgContacto').attr("src", "imagenes/inicontacto.svg");
                }
            );
        });

        $(function() {
            $("#divContactoM").hover(
                function() {
                    $('#imgContactoM').attr("src", "imagenes/D7_VIDEO_CONTACTO_V01.gif");
                },
                function() {
                    $('#imgContactoM').attr("src", "imagenes/inicontacto.svg");
                }
            );
        });

        $(function() {
            $("#divNosotros").hover(
                function() {
                    $('#imgNosotros').attr("src", "imagenes/D7_VIDEO_NOSOTROS_V01.gif");
                },
                function() {
                    $('#imgNosotros').attr("src", "imagenes/ininosotros.svg");
                }
            );
        });

        $(function() {
            $("#divNosotrosM").hover(
                function() {
                    $('#imgNosotrosM').attr("src", "imagenes/D7_VIDEO_NOSOTROS_V01.gif");
                },
                function() {
                    $('#imgNosotrosM').attr("src", "imagenes/ininosotros.svg");
                }
            );
        });


        $(function() {
            $("#idGrabaciones").hover(
                function() {
                    $('#idGrabaciones').attr("src", "imagenes/nosotrosgrabaciones.svg");
                },
                function() {
                    $('#idGrabaciones').attr("src", "imagenes/nosotrosplay.svg");
                }
            );
        });

        $(function() {
            $("#idCamara").hover(
                function() {
                    $('#idCamara').attr("src", "imagenes/nosotros1milion.svg");
                },
                function() {
                    $('#idCamara').attr("src", "imagenes/nosotroscamara.svg");
                }
            );
        });

        $(function() {
            $("#idCafe").hover(
                function() {
                    $('#idCafe').attr("src", "imagenes/nosotrostazas.svg");
                },
                function() {
                    $('#idCafe').attr("src", "imagenes/nosotroscafe.svg");
                }
            );
        });

        $(function() {
            $("#idWhats").hover(
                function() {
                    $('#idWhats').attr("src", "imagenes/whatsazul.svg");
                },
                function() {
                    $('#idWhats').attr("src", "imagenes/whats.svg");
                }
            );
        });



        $(function() {
            $("#idMessenger").hover(
                function() {
                    $('#idMessenger').attr("src", "imagenes/messengerazul.svg");
                },
                function() {
                    $('#idMessenger').attr("src", "imagenes/messenger.svg");
                }
            );
        });


        $(function() {
            $("#idMail").hover(
                function() {
                    $('#idMail').attr("src", "imagenes/mailazul.svg");
                },
                function() {
                    $('#idMail').attr("src", "imagenes/mail.svg");
                }
            );
        });



        $(function() {
            $("#btnEspaniol").click(function() {
                $("#btnEspaniol").hide();
                $("#btnIngles").show();
                $("#divEspaniol").show();
                $("#divIngles").hide();
            });
        });


        $(function() {
            $("#btnIngles").click(function() {
                $("#btnEspaniol").show();
                $("#btnIngles").hide();
                $("#divEspaniol").hide();
                $("#divIngles").show();
            });
        });


        $(document).ready(function() {

            function alignModal() {

                var modalDialog = $(this).find(".modal-dialog");

                /* Applying the top margin on modal dialog to align it vertically center */

                modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));

            }

            // Align modal when it is displayed

            $(".modal").on("shown.bs.modal", alignModal);



            // Align modal when user resize the window

            $(window).on("resize", function() {

                $(".modal:visible").each(alignModal);

            });



            $('#btnEnviar').click(function() {

                var nombre = $('#txtNombre').val();
                var apellidos = $('#txtApellido').val();
                var empresa = $('#txtEmpresa').val();
                var telefono = $('#txtTelefono').val();
                var correo = $('#txtCorreo').val();
                var observaciones = $('#txtObservaciones').val();


                if (nombre === "" || apellidos === "" || empresa === "" || telefono === "" || observaciones === "" || correo === "") {
                    $('#modalMensajeError').find('.modal-body').text('Todos los campos son obligatorios').end().modal('show');
                } else {
                    if (IsEmail(correo)) {



                        $.ajax({
                            url: 'enviocorreo.php',
                            method: 'post',
                            data: {
                                nombre: nombre,
                                apellidos: apellidos,
                                empresa: empresa,
                                telefono: telefono,
                                correo: correo,
                                observaciones: observaciones
                            },
                            success: function(data) {
                                $('#modalMensajeError').find('.modal-body').text('Se envió con éxito el mensaje').end().modal('show');
                                $('#modalContacto').modal('toggle');
                                $('#txtNombre').val("");
                                $('#txtApellido').val("");
                                $('#txtEmpresa').val("");
                                $('#txtTelefono').val("");
                                $('#txtCorreo').val("");
                                $('#txtObservaciones').val("");

                            }
                        });
                    } else {
                        $('#modalMensajeError').find('.modal-body').text('Ingrese un correo válido').end().modal('show');
                    }
                }


            });





        });

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }
    </script>






</body>

</html>