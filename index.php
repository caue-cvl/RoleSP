<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="utf-8">

      <link href="css/bootstrap.css" rel="stylesheet" />
      <link href="css/bootstrap-theme.css" rel="stylesheet" />
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap.bundle.js"></script>
      <script src="js/jquery-1.11.1.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Início</title>
  </head>
  <body>
    <div style="background-color: #f8f9fa" id="home">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#home">RoleSP</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="#home">Início
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sugest">Sugestões</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#suporte">Suporte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contato">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('1.jpg')">
              <div class="carousel-caption d-md-block">
                <center><h2 class="display-4" style="background-image: url('4.png'); width: 700px; height: 80px;">Destaque da Semana</h2></center>
                <center><p class="lead" style="background-image: url('4.png'); width: 300px; height: 30px;">Lolly Party</p></center>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('2.png')">
              <div class="carousel-caption d-none d-md-block">
                <center><h2 class="display-4" style="background-image: url('4.png'); width: 700px; height: 80px;">Destaque da Semana</h2></center>
                <center><p class="lead" style="background-image: url('4.png'); width: 300px; height: 30px;">Salvador Beer</p></center>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('3.png')">
              <div class="carousel-caption d-none d-md-block">
                <center><h2 class="display-4" style="background-image: url('4.png'); width: 700px; height: 80px;">Destaque da Semana</h2></center>
                <center><p class="lead" style="background-image: url('4.png'); width: 300px; height: 30px;">Cerveja Universitária</p></center>
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
      </header>
      <div id="sugest" style="background-color: #212529; ">
        <div class="container">
          <div>
            <br>
            <h2 style="background-color:">Sugestões</h2>
            <div class="row">
              <br>
              <div class="col-md-6" style="float:left;">
                <div class="recomendado" style="background-image: url('6.png');height: 474px;width: 474px;">
                </div>
                <br>
              </div>
              <div class="col-md-6" style="float:left;">
                <div class="recomendado" style="background-image: url('7.png');height: 474px;width: 475px;">
                </div>
                <br>
              </div>
              <br>
              <div class="col-md-6" style="float:left;">
                <div class="recomendado" style="background-image: url('8.png');height: 474px;width: 475px;">
                </div>
                <br>
              </div>
              <div class="col-md-6" style="float:left;">
                <div class="recomendado" style="background-image: url('9.png');height: 474px;width: 475px;">
                </div>
              </div>
              <br>
            </div>
            <br>
          </div>
        </div>
      </div>
      <div id="suporte">
        <form action="form.php" method="post" class="form">
          <label>
            <span>Seu Nome :</span>
            <input id="name" type="text" name="name" placeholder="Seu Nome Completo" />
           
            </label>
           
            <label>
                <span>Seu Email :</span>
                <input id="email" type="email" name="email" placeholder="Seu Endereço de Email" />
                 
            </label>
            
            <label>
                <span>Assunto :</span><input id="subject" type="text" name="subject" placeholder="Assunto" />
            </label>  
            
            <label>
                <span>Mensagem :</span>
                <textarea id="message" name="message" placeholder="Escreva Sua Mensagem"></textarea>
            </label>
               
             <label>
                <button type="submit">Send</button>
            </label>    
        </form>
      </div>
      <div class="foo_top_header_one section_padding_100_70" id="contato" >
         <div class="container">
           <div class="row">
             <div class="kilimanjaro_part m-top-15">
               <h5 class="fontfamily">Social Links</h5>
               <ul class="kilimanjaro_social_links">
                   <li><a href="https://www.instagram.com/caue_cvl/"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="container" style="background-color: #f8f9fa">
         <div class="row">
           <div class="col-sm-8">
             <p class="rodape">Copyright © Caue Projetos - Todos os direitos reservados</p>
           </div>
        </div>
      </div>
    </div>
  </body>
  <style type="text/css">
    .foo_top_header_one {
        background-color: #15151e;
        color: #fff;
    }
    .section_padding_100_70 {
        padding-top: 100px;
        padding-bottom: 70px;
    }
    .kilimanjaro_part {
        margin-bottom: 30px;
    }
    .m-top-15 {
        margin-top: 15px;
    }
    .kilimanjaro_social_links > li {
        display: inline-block;
    }
    .kilimanjaro_social_links a {
        border: 1px solid #333;
        border-radius: 6px;
        color: #888;
        display: inline-block;
        font-size: 13px;
        margin-bottom: 3px;
        padding: 7px 12px;
    }
  </style>
</html>
