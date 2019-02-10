<!DOCTYPE html lang="ru">
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Healthy diet</title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="Style.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>




  <div class="container">
    <!-- Header -->
    <?php 
    include('nav.php');
    ?>
    <!--
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand brand-logo" href="index.html"><img class ="logo" src="images/HLogo.png" alt="logo" width="100px" height="87px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Главная </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Расчет калорий</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Новости</a>
                </li> 
                \\\\\\\\\\\\\\\\
                 <div id="slow_nav">
                <li>
                    <a class="nav-link" href="#">пункт 1</a>
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="#">Выпадающий пункт 1</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Выпадающий пункт 2</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Выпадающий пункт 3</a></li>
                    </ul>
                  </li>
                  </div> 
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Продукция
                  </a> 
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>           \\\\\\\\\\\\\   -
                <li class="nav-item">
                  <a class="nav-link" href="#">Поддержка</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contacts">Контакты</a>
                </li>
              </ul>
              <div class="box">
                <div class="container-4">
                  <input type="search" id="search" placeholder="Поиск..." />
                  <button class="icon"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>            
          </nav> -->
          <!-- Slider -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 carousel-imgs" src="images/algunos-motivos-por-los-cuales-engordamos_1100x500.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                      <h1 class = "carousel-font">Похудение</h1>
                      <p class = "carousel-font carousel-text"><b>Уменьшите свой вес на 3 кг всего за одну неделю!</b></p>
                    </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 carousel-imgs" src="images/tips-to-stick-to-dieting-amp-exercising-without-failing-or-getting-discouraged1400-1527597291_1100x513.jpg"  alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                      <h1 class = "carousel-font">Набор массы</h1>
                      <p class = "carousel-font carousel-text"><b> Мечтаете нарастить 5 - 7 килограммов качественной мускулатуры, но не знаете как?</b></p>
                    </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 carousel-imgs" src="Images/preventive-big (1).jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                      <h1 class = "carousel-font">Здоровое питание</h1>
                      <p class = "carousel-font carousel-text"><b>Сохранение здоровья, профилактика болезней и укрепление организма в целом</b></p>
                    </div>
                </div>
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
            <!-- main content -->
  </div>
  
  <div class="container">
    <h1 id="main-h">С помощью healthy diet вы:</h1>
    <div class="grid">
      <div><img class="small-images-main" src="images/imgonline-com-ua-Replace-color-XApSsBBLqPu6pfO0.png" alt="">
        <h4><span class="main-text">Начнете питаться правильно</span></h4>
       Наш сайт поможет вам составить идеальный рацион соответствующий вашим целям. Будь то похудение, набор мышечной массы или же просто поддержание своего организма в здоровом состоянии.</div>
        <div><img class="small-images-main" src="images/imgonline-com-ua-Replace-color-HG8N1i2Ync.png" alt="">
        <span class="main-text"> <h4>Повысите эффективность тренировок</h4></span>Белки – основной «строительный» компонент, необходимый для наращивания и поддержания мышечной массы. Специально сбалансированные белковые рационы питания для спортсменов помогут получить вам максимальную пользу от тренировок.</div>
      <div><img class="small-images-main" src="images/imgonline-com-ua-Replace-color-l3NCOHXT5q3.png" alt="">
        <span class="main-text">  <h4>Не будете тратить время</h4></span> Вам больше не нужно рыться в интернете в поиске подходящей для вас диеты, с помощью Healty diet вы получите индивидуализированный рацион питания, расчитанный по формулам выведенными профессиональными нутрицистами.</div>
        <div><img class="small-images-main" src="images/imgonline-com-ua-Replace-color-U182VDioQLgcsx.png" alt="">
          <span class="main-text"> <h4>Станете выглядеть лучше </h4></span>Все, что от вас потребуется, - это придерживаться индивидуального рациона от Healty diet!</div>     
    </div>   
   </div>
  </div>
  <div class="main2-bg mgmt">
  <div class="card col-md-6 mt-5 mb-5">
  <!-- Main content 2 -->
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
      <div class="w-100 carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="carousel-caption">
            <div class="row">
              <div class="col-sm-3">
                <img src="Images/c02f2badaa8e9f8c2ee6c97d1ac989b4_200.jpg" alt="" class="rounded-circle img-fluid hide"/>
              </div>
              <div class="col-sm-9">
                <h4>Алексей Иванов</h4>
                <span class ="otziv-face"><h5>Программист</h5></span>
                <small class="font-rec">Составив рацион питания на сайте healhy diet, я начал придерживаться его. Спустя месяц, я понял, что не стоит останавливаться только на диете. Я начал посещать спортзал, возможно, healthy diet изменил мою жизнь в лучшую сторону.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption">
            <div class="row">
              <div class="col-sm-3">
                <img  src="Images/200x200_4WtjLiCFbhc7SPxJ4K2iG5z3YHo8c46A___jpg____0_6c52dbde.jpg" alt="" class="rounded-circle img-fluid hide">
              </div>
              <div class="col-sm-9">
                <h4>Анастасия Навратилова</h4>
                <span class ="otziv-face"><h5>Бывшая теннисистка</h5></span>
                <small class="font-rec">Здоровое питание - главное условие полноценной и счастливой жизни. Данный сайт позволяет мне составлять рацион без каких-либо заморочек за одну минуту.Удобно и просто!</small>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-sm-3">
                  <img  src="Images/main-thumb-297095976-200-abacptppoxraxdehzkqmybwtprjxuxyi.jpeg" alt="" class="rounded-circle img-fluid hide">
                </div>
                <div class="col-sm-9">
                    <h4>Виталий Кузнецов</h4>
                    <span class ="otziv-face"><h5>Офисный работник</h5></span>
                    <small class="font-rec">Мне срочно нужна была диета для похудения, ведь скоро лето!И healthy diet помог мне в этом, спустя месяц, следуя инструкциям я уменьшил свой вес на целых 10 кг!</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="float-right navi">
        <a class="" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        </a>
        <a class="" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon " aria-hidden="true"></span>
        </a>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Main block 3 -->
      <div class="container">
          <h1 id="main-h">5 преимуществ healthy diet:</h1>
          <div class="grid1">
            <div><img class="small-images-main" src="images/imgonline-com-ua-Replace-color-xPyMCpmUak8.jpg" alt="">
              <h4><span class="main-text">Отзывы</span></h4>
             Отзывы, говорящие сами за себя. Большое количество отзывов на разных платформах доказывают работоспособность Healthy diet.
            </div>
            <div><img class="small-images-main" src="images/imgonline-com-ua-Replace-color-AzXNkaDKnSujsf.jpg" alt="">
              <span class="main-text"> <h4>Продуманный состав</h4></span>
              Вычисление идеального, индивидуализированного рациона происходит по выведенными, профессиональными диетологами, формулами.Это позволяет поддерживать организм, насыщая его энергией до тренировки, и восстанавливая после.
            </div>
            <div><img class="small-images-main" src="images/imgonline-com-ua-Replace-color-TQwY3BZp01Qr.jpg" alt="">
              <span class="main-text">  <h4>Стабильная работа организма</h4></span>
              Благодаря правильно организованному питанию,налаживается правильная работа всей пищеварительной системы
            </div>
            <div id = "hide"></div>
           
              <div><img class="small-images-main" src="images/imgonline-com-ua-Replace-color-PhPLRYgNusqx7j.jpg" alt="">
                <h4><span class="main-text">Быстро и полезно</span></h4>
               Получите результат уже через неделю использования рационов Healthy diet. 
              </div>
              <div><img class="small-images-main" src="images/imgonline-com-ua-Replace-color-O5GCkUikrP6qI.jpg" alt="">
                <span class="main-text"> <h4>Высшее качество</h4></span>Сертифицированные технологии подсчета. Работоспособность доказанная на практике. <br><br><br><br>
              </div>              
        </div>   
      </div>

<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #00ff68;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 col-white">
          <h6 class="mb-0">Присоединяйтесь к нам в социальных сетях!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fa fa-facebook white-text mr-4 col-white"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fa fa-twitter white-text mr-4 col-white"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fa fa-google-plus white-text mr-4 col-white"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fa fa-linkedin white-text mr-4 col-white"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fa fa-instagram white-text col-white"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Healthy diet</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>КНИТУ-КХТИ <br>
          Юридический адрес:420245, г.Казань,
          Карла Маркса 68,<br>
          ИНН 2549574523,<br> КПП 204968544,
          Расчетный счет 48204894839498395
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Сделано на</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Bootstrap</a>
        </p>
        <p>
          
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Полезные ссылки</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Your Account</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Shipping Rates</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Контакты</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p ><a name = "contacts" href="#"></a>
          <i class="fa fa-home mr-3"></i> Россия, Казань, ул.Карла Маркса 68</p>
        <p>
          <i class="fa fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fa fa-phone mr-3"></i> + 79 234 567 88</p>
        <p>
          <i class="fa fa-print mr-3"></i> + 55 664 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2019 
    <a class="dark-grey-text" href="index.html"> Healthy diet.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer --> 

<script src="Script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>