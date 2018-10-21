<!DOCTYPE html>
<html lang="en">
<head>
    <!--Metas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Links-->
    <link href="https://fonts.googleapis.com/css?family=Charmonman|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <!--Icon ans Title-->
    <title>YocelinGR | Front-end Developer</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#home">YocelinGR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about-me">Conoceme</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#my-skills">Mis habilidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#my-projects">Lo que he hecho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#contact-me">Contactame</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#traslate" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-language"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#español">Español</a>
                  <a class="dropdown-item" href="#english">English</a>
                  <a class="dropdown-item" href="#english"><i class="fa fa-eye-slash"></i></a>
                  <a class="dropdown-item" href="#english"><i class="fa fa-assistive-listening-systems"></i> / <i class="fa fa-asl-interpreting"></i></a>
                  <a class="dropdown-item" href="#"><i class="material-icons">accessible</i></a>
                </div>
              </li>
          </ul>
        </div>
      </nav>
    <header id="home">
        <div class="container-career">
            <div class="gradient-label"></div>
            <div class="container-text">
                <div class="content">
                    <div class="row">
                        <div class="col-5"><h2>Front-end Developer</h2></div>
                        <div class="col-2"></div>
                        <div class="col-5"><h2>Ingeniera en Comunicaciones y Electrónica</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about-me">
        <div class="container">
            <div class="row">
                <h2>Conoceme</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="about-me-left mt-5">
                        <h3>¿Quien soy?</h3>
                        <p class="mt-3">Hola, mi nombre es Yocelin y soy una Front-End Developer e Ingeniera en Comunicaciones y Electrónica apasionada por la programación y fiel creyente de la mejora continua.
                            Tras terminar la carrera en ingeniería, descubrí que, aunque amo las redes de datos, necesitaba hacer más, tener más libertad creativa y poder impactar de una manera más evidente y humana. 
                            Así es como decidí ingresar al bootcamp de Laboratoria, donde descubrí que la programación es el sector Tech más humano que había conocido. 
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-me-center">
                        <img src="./assets/fondo1.jpg" alt="Mumin character.Animated gif from presentate me" style="width: 100%;" class="mt-4">
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="about-me-right">
                    <div id="accordion">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Y ahora, ¿qué sigue?
                                  </button>
                                </h5>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                        Seguir aprendiendo. El mundo se detiene, yo tampoco &lt; S&iacute;, mientras descanse haré adobes... &gt;</p>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Mis intereses
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                        Estoy en la busqueda que un lugar en el cual pueda ejercer como Front-end Developer y en el que pueda seguir aprendiendo cada vez más.
                                        Me gustan los retos y aprendo rápido, disfruto trabajar en equipo y también sola. Me encantaría ayudar al desarrallo de nuevas tecnologías y poder impactar de manera positiva a nuestra sociedad por medio del código.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Yocelin en un futuro...
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                        Estoy interesada en desarrollarme como Full Stack Developer y JavaScript Engineer. Quiero aprender tecnologías relacionadas con Inteligencia Artificial, Machine Learning y Redes Neuronales. 
                                        Estoy en la busqueda de adquirir conocimientos sobre Framaworks &lt; como Angular y Vue &gt; y continuar con mi preparación en React.js y llevarlo un paso más con React Native
                                    </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id = "my-skills">
        <div class="container">
            <div class="row">
                <h2>Mis habilidades</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="hard-skills">
                        <div class="img-hard-skills"><div class="gradient-circle"></div></div>
                        <h3>HardSkills</h3>
                        <!--Carousel Skills-->
                            <div class="carouselExampleIndicators carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
                                </ol>
                                <div class="carousel-inner">
                                <div class="carousel-item active"><img class="d-block w-100 adjust-size" src="./assets/js.png" alt="JavaScript icon" data-toggle="tooltip" data-placement="top" title="JavaScript"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/html.png" alt="HTML icon" data-toggle="tooltip" data-placement="top" title="HTML"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/css.png" alt="CSS icon" data-toggle="tooltip" data-placement="top" title="CSS"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/firebase.svg" alt="FireBase icon" data-toggle="tooltip" data-placement="top" title="FireBase"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/materialize.png" alt="Materialize icon" data-toggle="tooltip" data-placement="top" title="Materialize & Bootstrap"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/reactjs.png" alt="React.js icon" data-toggle="tooltip" data-placement="top" title="ReactJS"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/nodejs.png" alt="Node.js icon" data-toggle="tooltip" data-placement="top" title="NodeJS"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/api.png" alt="Manejo de RESTfull API icon" data-toggle="tooltip" data-placement="top" title="Manejo de RestFull API´s"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/cplusplus.png" alt="C++ icon" data-toggle="tooltip" data-placement="top" title="C++"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/matlab.png" alt="MatLab icon" data-toggle="tooltip" data-placement="top" title="MatLab"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/github.png" alt="GitHub icon" data-toggle="tooltip" data-placement="top" title="Github"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/git.png" alt="Git icon" data-toggle="tooltip" data-placement="top" title="Git"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/heroku.png" alt="Heroku icon" data-toggle="tooltip" data-placement="top" title="Heroku"></div>
                                <div class="carousel-item"><img class="d-block w-100 adjust-size" src="./assets/jest.png" alt="Jest icon" data-toggle="tooltip" data-placement="top" title="Jest"></div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="soft-skills">
                            <div class="img-soft-skills"><div class="gradient-circle"></div></div>
                        <h3>SoftSkills</h3>
                        <!--Soft skills carousel-->
                            <div class="carouselExampleIndicators carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                    <div class="carousel-item active"><img class="d-block w-100" src="./assets/slack.png" alt="Slack icon" data-placement="right" title="Slack"></div>
                                    <div class="carousel-item"><img class="d-block w-100" src="./assets/trello.png" alt="Trello icon" data-placement="right" title="Trello"></div>
                                    <div class="carousel-item"><img class="d-block w-100" src="./assets/agile-icon.png" alt="Agile icon" data-placement="right" title="Metodologias agiles"></div>
                                    <div class="carousel-item"><img class="d-block w-100" src="./assets/icon_english.png" alt="Idioma inglés icon" data-placement="right" title="Idioma inglés"></div>
                                    <div class="carousel-item"><img class="d-block w-100" src="./assets/ruso.png" alt="Idiona ruso icon" data-placement="right" title="Idioma Ruso"></div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section of my projects-->
    <section id = "my-projects">
        <div class="container">
            <div class="row">
                <h1>Lo que he hecho</h1>
            </div>
            <div class="row">
                <div class="col-md-6" style="background: pink;">
                    <h4>DataDasboard</h4>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" style="background: red;">
                            <h1>quesobi</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col md-12" style="background: salmon;">
                            <h1>qenobi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 1000
        })
        $('#element').tooltip('toggle')
    </script>
</body>
</html>