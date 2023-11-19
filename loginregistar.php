<?php
  session_unset();
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>loginregistar - Login/Resgistar</title>
    <meta
      property="og:title"
      content="loginregistar - Massive Light Cassowary"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />

    <link rel="stylesheet" href="pre.css">

    <style>
      [data-thq="thq-dropdown"]:hover > [data-thq="thq-dropdown-list"] {
          display: flex;
        }

        [data-thq="thq-dropdown"]:hover > div [data-thq="thq-dropdown-arrow"] {
          transform: rotate(90deg);
        }
    </style>
  </head>
  <body>
    <link rel="stylesheet" href="./style.css" />
    <div>
      <link href="./loginregistar.css" rel="stylesheet" />

      <div class="loginregistar-container">
      <div class="header-container header-root-class-name">
          <div class="header-container1">
            <h1 id="logo" class="header-text"><span>Plus Vendas</span></h1>
            <div class="header-container2">
              <svg viewBox="0 0 1024 1024" class="header-icon">
                <path
                  d="M406 598q80 0 136-56t56-136-56-136-136-56-136 56-56 136 56 136 136 56zM662 598l212 212-64 64-212-212v-34l-12-12q-76 66-180 66-116 0-197-80t-81-196 81-197 197-81 196 81 80 197q0 42-20 95t-46 85l12 12h34z"
                ></path>
              </svg>
              <input
                type="text"
                id="search_bar"
                placeholder="Procure pelo Item..."
                class="header-textinput input"
              />
            </div>
          </div>
          <a
            href="loginregistar.php"
            id="entrar_registar_link"
            class="header-navlink"
          >
            <span>ENTRAR / REGISTAR-SE</span>
          </a>
          <a href="cart.html" class="header-navlink1">
            <div class="header-container3">
              <div class="header-container4">
                <svg
                  id="cart"
                  cursor="pointer"
                  viewBox="0 0 950.8571428571428 1024"
                  class="header-icon2"
                >
                  <path
                    d="M365.714 877.714c0 40-33.143 73.143-73.143 73.143s-73.143-33.143-73.143-73.143 33.143-73.143 73.143-73.143 73.143 33.143 73.143 73.143zM877.714 877.714c0 40-33.143 73.143-73.143 73.143s-73.143-33.143-73.143-73.143 33.143-73.143 73.143-73.143 73.143 33.143 73.143 73.143zM950.857 256v292.571c0 18.286-14.286 34.286-32.571 36.571l-596.571 69.714c2.857 13.143 7.429 26.286 7.429 40 0 13.143-8 25.143-13.714 36.571h525.714c20 0 36.571 16.571 36.571 36.571s-16.571 36.571-36.571 36.571h-585.143c-20 0-36.571-16.571-36.571-36.571 0-17.714 25.714-60.571 34.857-78.286l-101.143-470.286h-116.571c-20 0-36.571-16.571-36.571-36.571s16.571-36.571 36.571-36.571h146.286c38.286 0 39.429 45.714 45.143 73.143h686.286c20 0 36.571 16.571 36.571 36.571z"
                  ></path>
                </svg>
                <div id="qty" class="header-container5">
                  <span id="qtynr" class="header-text1"><span>0</span></span>
                </div>
              </div>
              <span class="header-text2"><span>MT</span></span>
              <span id="cart_money" class="header-text3">
                <span id="money">0.00</span>
              </span>
            </div>
          </a>
        </div>
        <div class="navbar-container navbar-root-class-name">
          <svg viewBox="0 0 1024 1024" class="navbar-icon">
            <path
              d="M86 234h852v86h-852v-86zM86 448h852v86h-852v-86zM86 662h852v84h-852v-84z"
            ></path>
          </svg>
          <div data-thq="thq-dropdown" class="navbar-thq-dropdown list-item">
            <div data-thq="thq-dropdown-toggle" class="navbar-dropdown-toggle">
              <span class="navbar-text"><span>EXPANDIR CATEGORIAS</span></span>
              <div data-thq="thq-dropdown-arrow" class="navbar-dropdown-arrow">
                <svg viewBox="0 0 1024 1024" class="navbar-icon2">
                  <path
                    d="M961.714 461.714l-424 423.429c-14.286 14.286-37.143 14.286-51.429 0l-424-423.429c-14.286-14.286-14.286-37.714 0-52l94.857-94.286c14.286-14.286 37.143-14.286 51.429 0l303.429 303.429 303.429-303.429c14.286-14.286 37.143-14.286 51.429 0l94.857 94.286c14.286 14.286 14.286 37.714 0 52z"
                  ></path>
                </svg>
              </div>
            </div>
            <ul data-thq="thq-dropdown-list" class="navbar-dropdown-list">
              <li data-thq="thq-dropdown" class="navbar-dropdown list-item">
                <div
                  data-thq="thq-dropdown-toggle"
                  class="navbar-dropdown-toggle1"
                >
                  <span class="navbar-text1"><span>Sub-menu Item</span></span>
                </div>
              </li>
              <li data-thq="thq-dropdown" class="navbar-dropdown1 list-item">
                <div
                  data-thq="thq-dropdown-toggle"
                  class="navbar-dropdown-toggle2"
                >
                  <span class="navbar-text2"><span>Sub-menu Item</span></span>
                </div>
              </li>
              <li data-thq="thq-dropdown" class="navbar-dropdown2 list-item">
                <div
                  data-thq="thq-dropdown-toggle"
                  class="navbar-dropdown-toggle3"
                >
                  <span class="navbar-text3"><span>Sub-menu Item</span></span>
                </div>
              </li>
            </ul>
          </div>
          <a href="index.html" class="navbar-navlink">
            <span>INÍCIO</span>
            <br />
          </a>
          <a
            href="https://example.com"
            target="_blank"
            rel="noreferrer noopener"
            class="navbar-link"
          >
            <span>PROMOÇÕES</span>
          </a>
          <a
            href="https://example.com"
            target="_blank"
            rel="noreferrer noopener"
            class="navbar-link1"
          >
            <span>LOJA</span>
          </a>
          <div data-thq="thq-dropdown" class="navbar-thq-dropdown1 list-item">
            <div data-thq="thq-dropdown-toggle" class="navbar-dropdown-toggle4">
              <span class="navbar-text6"><span>SOBRE</span></span>
              <div data-thq="thq-dropdown-arrow" class="navbar-dropdown-arrow1">
                <svg viewBox="0 0 1024 1024" class="navbar-icon4">
                  <path
                    d="M961.714 461.714l-424 423.429c-14.286 14.286-37.143 14.286-51.429 0l-424-423.429c-14.286-14.286-14.286-37.714 0-52l94.857-94.286c14.286-14.286 37.143-14.286 51.429 0l303.429 303.429 303.429-303.429c14.286-14.286 37.143-14.286 51.429 0l94.857 94.286c14.286 14.286 14.286 37.714 0 52z"
                  ></path>
                </svg>
              </div>
            </div>
            <ul data-thq="thq-dropdown-list" class="navbar-dropdown-list1">
              <li data-thq="thq-dropdown" class="navbar-dropdown3 list-item">
                <div
                  data-thq="thq-dropdown-toggle"
                  class="navbar-dropdown-toggle5"
                >
                  <span class="navbar-text7"><span>Sobre + Vendas</span></span>
                </div>
              </li>
              <li data-thq="thq-dropdown" class="navbar-dropdown4 list-item">
                <div
                  data-thq="thq-dropdown-toggle"
                  class="navbar-dropdown-toggle6"
                >
                  <span class="navbar-text8"><span>Sobre a QMZ</span></span>
                </div>
              </li>
              <li
                data-thq="thq-dropdown"
                class="navbar-dropdown5 list-item"
              ></li>
              <li
                data-thq="thq-dropdown"
                class="navbar-dropdown6 list-item"
              ></li>
            </ul>
          </div>
        </div>
         <!--Loader-->
         <div class="loader">
              <img src="img/dual_ring.gif" alt="">
        </div>
        <div class="loginregistar-container01">
          <div class="loginregistar-container02">
            <div id="access_granted_alert" class="loginregistar-container03">
              <h1 class="loginregistar-text">Acesso garantido</h1>
            </div>
            <div id="fill_inputs_alert_login" class="loginregistar-container04">
              <h1 class="loginregistar-text01">
                Preencha os campos correctamente
              </h1>
            </div>
            <h2 class="loginregistar-text02">Login</h2>
              <form id="loginForm">
              <label class="loginregistar-text03">
                <span>Utilizador or Email&nbsp;</span>
                <span class="loginregistar-text05">*</span>
              </label>
              <input
                type="text"
                id="username_input"
                class="loginregistar-textinput input"
                name="username_input"
              />
              <label class="loginregistar-text06">
                <span>Senha&nbsp;</span>
                <span class="loginregistar-text08">*</span>
              </label>
              <input
                type="text"
                id="password_input"
                class="loginregistar-textinput1 input"
                name="password_input"
              />
              <!-- <div class="loginregistar-container05">
                <input type="checkbox" id="remember_me_checkbox" checked="true" />
                <label class="loginregistar-text09">Lembrar-me</label>
              </div> -->

              <button
                id="signIn_btn"
                type="button"
                class="loginregistar-button button"
                onclick="login()"
                name="submit_login"
              >
                Entrar
              </button>
            </form>
            <a
              href="https://example.com"
              target="_blank"
              rel="noreferrer noopener"
              class="loginregistar-link"
            >
              Esqueceu a senha?
            </a>
          </div>
          <div class="loginregistar-container06">
                  <div id="access_register_alert" class="loginregistar-container07" style="display: none;">
                    <h1 class="loginregistar-text10">
                      Êxito ao registar. Verifique o seu email para confirmar
                    </h1>
                  </div>
            
            <div id="fill_fields_alert" class="loginregistar-container08" style="display: none;">
              <h1 class="loginregistar-text11">
                Preencha os campos correctamente
              </h1>
            </div>
            <h2 class="loginregistar-text12">Registar</h2>

            <form id="registerForm">
                <label class="loginregistar-text13">
                  <span>Utilizador&nbsp;</span>
                  <span class="loginregistar-text15">*</span>
                </label>
                <input
                  type="text"
                  id="new_username_input"
                  class="loginregistar-textinput2 input"
                  name="new_username_input"
                  required
                />
                <label class="loginregistar-text16">
                  <span>Email&nbsp;</span>
                  <span class="loginregistar-text18">*</span>
                </label>
                <input
                  type="text"
                  id="new_email_input"
                  class="loginregistar-textinput3 input"
                  name="new_email_input"
                  required
                />
                <label class="loginregistar-text19">
                  <span>Senha</span>
                  <span class="loginregistar-text21">*</span>
                </label>
                <input
                  type="text"
                  id="new_password_input"
                  class="loginregistar-textinput4 input"
                  name="new_password_input"
                  required
                />
                <label class="loginregistar-text22">
                  <span>
                    Os&nbsp; seu dados pessoais serão usados para garantir a sua
                    navegação neste website, para gerir o teu acesso no site, e para
                    outras finalidades que são descritas nas
                  </span>
                  <a
                    href="https://privacy_polices"
                    target="_blank"
                    rel="noreferrer noopener"
                    class="loginregistar-link1"
                  >
                    políticas de privacidade
                  </a>
                </label>
                <div class="loginregistar-container09">
                  <input
                    type="checkbox"
                    id="terms_conditions_checkbox"
                    checked="true"
                  />
                  <label class="loginregistar-text24">
                    <span>&nbsp; Lí e estou de acordo com as</span>
                    <a
                      href="https://privacy_policies.php"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="loginregistar-link2"
                    >
                      Políticas e Termos e Condições
                    </a>
                  </label>
                </div>
              
                <button
                  id="registar_button"
                  type="button"
                  class="loginregistar-button1 button"
                  name="submit_registration"
                  onclick="save_data()"
                />
                  Registar
                </button>
            </form>
          </div>
        </div>
        <div class="component1-container component1-root-class-name">
          <div class="component1-container1">
            <div class="component1-container2">
              <h1 class="component1-text"><span>Plus Vendas</span></h1>
              <span class="component1-text01">
                <span>A</span>
                <span class="component1-text03">Plus Vendas</span>
                <span></span>
                <span class="component1-text05">
                  é uma loja online especializada na venda de equipamentos
                  informáticos. Desde os equipamentos de casa até do
                  escritórios. A Plus Vendas tem as melhores soluções para ti.
                </span>
              </span>
            </div>
            <div class="component1-container3">
              <h1 class="component1-text06"><span>LINKS ÚTEIS</span></h1>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link"
              >
                <span>Íncio</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link01"
              >
                <span>Promoções</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link02"
              >
                <span>Loja</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link03"
              >
                <span>Sobre nós</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link04"
              >
                <span>Termos &amp; Privacidade</span>
              </a>
            </div>
          </div>
          <div class="component1-container4">
            <div class="component1-container5">
              <h1 class="component1-text07">
                <span>CATEGORIAS EM DESTAQUE</span>
              </h1>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link05"
              >
                <span>Promoções</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link06"
              >
                <span>Tóneis</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link07"
              >
                <span>Laptops</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link08"
              >
                <span>Desktops</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link09"
              >
                <span>PC's</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link10"
              >
                <span>Acessórios</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link11"
              >
                <span>Câmeras</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link12"
              >
                <span>Dispositivos de armazenamento</span>
              </a>
              <a
                href="https://example.com"
                target="_blank"
                rel="noreferrer noopener"
                class="component1-link13"
              >
                <span>Equipamentos de escritórios</span>
              </a>
            </div>
            <div class="component1-container6">
              <h1 class="component1-text08"><span>JUNTE-SE A NÓS</span></h1>
              <input
                type="text"
                placeholder="Seu Email"
                class="component1-textinput input"
              />
              <button
                type="button"
                cursor="pointer"
                class="component1-button button"
              >
                <span>Subscrever</span>
              </button>
              <h1 class="component1-text09">
                <span>MÉTODOS DE PAGAMENTO</span>
              </h1>
              <div class="component1-container7">
                <img
                  alt="mpesa"
                  src="public/external/download-200h.png"
                  class="component1-image"
                />
                <img
                  alt="mpesa"
                  src="public/external/download%20(1)-200h.png"
                  class="component1-image1"
                />
                <img
                  alt="mpesa"
                  src="public/external/unnamed-200h.png"
                  class="component1-image2"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script src="js/headerScript.js"></script>
<script src="js/pre.js" charset="utf-8"></script>
<script>

  /*Registar*/
     function save_data(){

      var utilizador= $("input[name='new_username_input']").val();
      var email= $("input[name='new_email_input']").val();
      var senha= $("input[name='new_password_input']").val();

      if(utilizador != "" && email != "" && senha != "") {
        document.getElementById("fill_fields_alert").style.display = 'none';
    
      $.ajax({
        method: "POST",
        url: "action.php",
        data: {
                action: "registar",
                utilizador: utilizador,
                email: email,
                senha: senha
              },
        success: function(response){
        
          if(response  !== '' && response  === 'YES'){
              document.getElementById("access_register_alert").style.display = 'flex';
              document.getElementById("fill_fields_alert").style.display = 'none';
             
            }else{
              document.getElementById("access_register_alert").style.display = 'none';
            
            }
        },
        error: function(xhr, status, error){
          console.error(xhr);
        }
      });
    }else {
      document.getElementById("fill_fields_alert").style.display = 'flex';
      document.getElementById("access_register_alert").style.display = 'none';
    }
  }

  /*Login*/

  function login(){

var utilizador= $("input[name='username_input']").val();
var senha= $("input[name='password_input']").val();


if(utilizador != "" && senha != "") {
  document.getElementById("fill_inputs_alert_login").style.display = 'none';

$.ajax({
  method: "POST",
  url: "action.php",
  data: {
          action: "logar",
          utilizador: utilizador,
          senha: senha
        },
  success: function(response){
    
    if(response  !== '' && response  == "ACTIVE"){
        document.getElementById("access_granted_alert").style.display = 'flex';
        document.getElementById("fill_fields_alert").style.display = 'none';
      
       
      }else if(response == "NON-EXIST"){
        document.getElementById("fill_inputs_alert_login").textContent = "Credenciais inválidas.";
        document.getElementById("fill_inputs_alert_login").style.display = 'flex';
      
      }else if(response == "INACTIVE") {
        document.getElementById("fill_inputs_alert_login").textContent = "Utilizador não activo.";
        document.getElementById("fill_inputs_alert_login").style.display = 'flex';
      }
  },
  error: function(xhr, status, error){
    console.error(xhr);
  }
});
}else {
  document.getElementById("fill_inputs_alert_login").style.display = 'flex';

  }
}

      

</script>
