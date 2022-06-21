<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro</title>
   <link rel="shortcut icon" type="image/x-icon" href="https://www.instagram.com/static/images/ico/favicon.ico/36b3ee2d91ed.ico">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
   <section>
      <div class="container">
        <div class="row">
           <div class="col-12">
             <div class="card mt-5 mx-auto card_cad">
               <div class="card-header card-header_cad">
                 <div class="div_logo_cad">
                   <img class="img_logo_cad" src="https://www.instagram.com/static/images/web/mobile_nav_type_logo-2x.png/1b47f9d0e595.png" width="102" alt="Logo do aplicativo Instagram"/>
                 </div>
                 <h2 class="h2-header mt-3 mx-auto">Cadastre-se para ver fotos e vídeos dos seus amigos.</h2>
                </div>

                <div class="btn_face mx-auto mb-3">
                     <button class="button_cad2 btn btn-primary mb-4"><svg viewBox="0 0 128 128"><path fill="#ffffff" d="M116.42 5.07H11.58a6.5 6.5 0 00-6.5 6.5v104.85a6.5 6.5 0 006.5 6.5H68V77.29H52.66V59.5H68V46.38c0-15.22 9.3-23.51 22.88-23.51a126 126 0 0113.72.7v15.91h-9.39c-7.39 0-8.82 3.51-8.82 8.66V59.5H104l-2.29 17.79H86.39v45.64h30a6.51 6.51 0 006.5-6.5V11.58a6.5 6.5 0 00-6.47-6.51z"></path></svg>  Entrar com o Facebook</button>
                </div>

                <div class="card-body card-body_cad">
                 <form action="cadastro.php" method="POST" class="form_cad mx-auto">
                   <div class="form-floating mb-2">
                     <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
                     <label class="mb-2" for="email">Número do celular ou email</label>
                   </div>

                   <div class="form-floating mb-2">
                     <input type="text" class="form-control" id="username" name="username" placeholder="Nome Usuário">
                     <label class="mb-2" for="username">Nome de usuário</label>
                   </div>

                   <div class="form-floating mb-2">
                     <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nome">
                     <label class="mb-2" for="fullname">Nome completo</label>
                   </div>

                   <div class="form-floating mb-3">
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                     <label for="password">Senha</label>
                   </div>

                    <button type="submit" name="submit" value="submit" class="button_cad btn btn-primary mb-3">Cadastre-se</button>
                    <?php
                    include "database/create_user.php"
                    ?>
                 </form>
                </div>

              <div class="card-footer card-footer_cad mb-3">
                 <p>Ao se cadastrar, você concorda com nossos <strong>Termos, Política de Dados e Política de Privacidade</strong></p>
              </div>
             </div>

            <div class="card mt-3 mb-1 mx-auto card2 card_cad">
              <div class="card-body card-body_cad">
                <p class="text_card2_cad mt-1">Tem uma conta? <a href="login.php">Conecte-se</a></p>
              </div>
            </div>

            <div class="card mt-1 mb-4 mx-auto card3 card_cad">
              <div class="card-body card-body_cad">
                <p class="text_card3 mt-1">Obtenha o aplicativo.</p>
                <div class="ms-3">
                  <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo" target="_blank"><img class="img_loja" src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_portuguese-brazilian-pt_br.png/68006a2bb372.png" alt="#"></a> 
                  <a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DCA89772E-FEB5-48AE-AB45-9A43A265129C%26utm_content%3Dlo%26utm_medium%3Dbadge" target="_blank"><img class="img_loja" src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_portuguese_brazilian-pt_BR.png/2f2a0c05b2f3.png" alt="#"></a> 
                </div>
              </div>
            </div>

           </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>