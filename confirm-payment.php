<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Confirmar pagamento</title>
    <meta
      property="og:title"
      content="ConfirmPayment - Massive Light Cassowary"
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
      <link href="./confirm-payment.css" rel="stylesheet" />

      <div class="confirm-payment-container">
        <div class="header-container">
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
        <div class="navbar-container">
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
        <div class="confirm-payment-container01">
          <div class="confirm-payment-container02">
            <div class="confirm-payment-container03">
              <h2 class="confirm-payment-text">Detalhes da compra</h2>
            </div>
            <div class="confirm-payment-container04">
              <span class="confirm-payment-text1">Subtotal:</span>

              <span class="confirm-payment-text2" id="subtotal">
                <?php if(isset($_SESSION['subtotal'])){ echo $_SESSION['subtotal'];}else{ echo "0";}?>
              </span>
            </div>
            <div class="confirm-payment-container05">
              <span class="confirm-payment-text3" id="tax">Taxa:</span>
              
              <span class="confirm-payment-text4" id="tax_value">
                  <?php if(isset($_SESSION['taxa'])){ echo $_SESSION['taxa'];}else{ echo "0";}?>
              </span>
            </div>
            <div class="confirm-payment-container06">
              <span class="confirm-payment-text5">Total:</span>

              <span class="confirm-payment-text6" id="total">
                  <?php if(isset($_SESSION['total'])){ echo $_SESSION['total'];}else{ echo "0";}?>
              </span>
            </div>
          </div>
          <div class="confirm-payment-container07">

          <div id="confirm_payment_alert" class="confirm-payment-container80">
              <h4 id="text-confirm" class="confirm-payment-text07">
                Compra efectuada com êxito.
              </h4>
            </div>

            <div id="check_email_alert" class="confirm-payment-container90">
              <h4 id="text-alert" class="confirm-payment-text08">
                Consulte o seu email para mais detalhes.
              </h4>
            </div>
            
            <div class="confirm-payment-container08">
              <span class="confirm-payment-text7">Métodos de pagamento</span>
            </div>
            <div class="confirm-payment-container09">
              
              <img
                alt="image"
                src="public/external/download-200h-200h.png"
                class="confirm-payment-image"
              />
              <img
                alt="image"
                src="public/external/download%20(1)-200h-200h.png"
                class="confirm-payment-image1"
              />
              <img
                alt="image"
                src="public/external/unnamed-200h-200h.png"
                class="confirm-payment-image2"
              />
            </div>
            
                <select class="confirm-payment-select">
                  <option value="#">Escolha um metodo</option>
                  <option value="1">m-pesa</option>
                  <option value="2">e-mola</option>
                  <option value="3">mkesh</option>
                </select>
                <input
                  type="number"
                  placeholder="Número"
                  class="confirm-payment-textinput input"
                  name="numero_tel"
                  id="numero_tel"
                  value = "<?php if(isset($_SESSION['telefone'])){ echo $_SESSION['telefone']; }else {}?>"
                />
                <button type="button" id="submit_button" onclick="confirmar_pagamento()" class="confirm-payment-button button">
                  Confirmar
                </button>
        
           
          </div>
    
        </div>
        <div class="component1-container">
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
    <script src="js/headerScript.js"></script>
  </body>
  <script src="js/pre.js" charset="utf-8"></script>
</html>


<script>
  // Função para obter os parâmetros da URL
  function obterParametrosURL() {
    var parametros = {};
    var partes = window.location.search.substring(1).split('&');

    for (var i = 0; i < partes.length; i++) {
      var chaveValor = partes[i].split('=');
      parametros[decodeURIComponent(chaveValor[0])] = decodeURIComponent(chaveValor[1]);
    }

    return parametros;
  }

  // Recuperando os dados da URL
  var dadosURL = obterParametrosURL();
  
  if (dadosURL.dados) {
    // Convertendo a string JSON de volta para a lista
    var listaItensString = decodeURIComponent(dadosURL.dados);
    var listaItens = JSON.parse(listaItensString);
    
    //subtotal
    document.getElementById("subtotal").textContent = "MT " + listaItens['valor_pagar'];

    //taxa
     var taxa = (parseFloat(listaItens['valor_pagar'])  / 100).toFixed(2);
     document.getElementById("tax_value").textContent =  "MT " + taxa;

     var total =  (parseFloat(listaItens['valor_pagar']) + parseFloat(taxa)).toFixed(2);
     document.getElementById("total").textContent = "MT " + total;
    }


    //AJAX
function confirmar_pagamento(){

            


            var telefone = document.getElementById('numero_tel').value;
            var subtotal = document.getElementById('subtotal').textContent;
            var taxa = document.getElementById('tax_value').textContent;
            var total = document.getElementById('total').textContent;
            let list_itens = JSON.parse(localStorage.getItem('carrinho')) || [];
          
          if(telefone != "") {

            document.getElementById('submit_button').style.height="34px";
            
            document.getElementById('submit_button').textContent="";
            document.getElementById('submit_button').style.backgroundPosition = 'center';
            document.getElementById('submit_button').style.backgroundRepeat= 'no-repeat';
            document.getElementById('submit_button').style.backgroundImage="url('img/transparent.gif')";
            document.getElementById('submit_button').style.backgroundPosition = 'center';
            document.getElementById('submit_button').style.backgroundRepeat= 'no-repeat';
            
          $.ajax({
            method: "POST",
            url: "action.php",
            data: {
                    action: "confirmar",
                    telefone: telefone,
                    subtotal: subtotal,
                    taxa: taxa,
                    total: total,
                    list_itens: list_itens
                  },
            success: function(response){
            
              if(response  !== '' && response  === 'saved'){
              
                window.location.href = 'success.html';
                //document.getElementById('confirm_payment_alert').style.display="flex";
                //document.getElementById('check_email_alert').style.display="flex";
                  
                  list_itens.forEach(element => {
                    
                    // Nome do produto que você deseja remover
                    const nomeProdutoARemover = element.image; // Nome do produto que deseja remover

                    // Encontre o índice do item com base no nome do produto
                    const indiceProduto = list_itens.findIndex(items => items.image === nomeProdutoARemover);
                    

                    // Se o produto for encontrado, remova-o do carrinho
                    if (indiceProduto !== -1) {
                        list_itens.splice(indiceProduto, 1);
                        
                        // Atualize o localStorage com o carrinho atualizado
                        localStorage.setItem('carrinho', JSON.stringify(list_itens));
                    } else {
                        console.log('Produto não encontrado no carrinho.');
                    }

                    
                });
                //subtotal
                document.getElementById("subtotal").textContent = "MT 0.00";

                //taxa
                document.getElementById("tax_value").textContent =  "MT 0.00";

                document.getElementById("total").textContent = "MT 0.00";
                
                sessionStorage.setItem('total', '0');
                carrinhaCheckOut();
                const url = 'https://e2payments.explicador.co.mz/docs';

                //Abordagem 2 API de terceiros descomente e teste
                //window.location.href = url;
                window.location.href = 'success.html';
                             
                }else if(response =="not_saved"){
                  document.getElementById('check_email_alert').textContent = "A operação falhou. Verfique seus dados.";
                  document.getElementById('check_email_alert').style.display="flex";
                  document.getElementById('confirm_payment_alert').style.display="none";

                }else if(response =="session_unset"){
                  document.getElementById('check_email_alert').textContent="Registe-se e Incie a sessão para efectuar a compra.";
                  document.getElementById('check_email_alert').style.display="flex";

                  //Redirect after 5s
                  setTimeout(redirectToIndex, 5000);
                
                }
            },
            error: function(xhr, status, error){
              console.error(xhr);
              
            }
          });
          }else {
            document.getElementById('check_email_alert').textContent="Informe o número de telefone";
            document.getElementById('check_email_alert').style.display="flex";
            document.getElementById('numero_tel').focus();
          }
          }

          //method to redirect to another page
          function redirectToIndex() {
            var telefone = document.getElementById('numero_tel').value;
            var subtotal = document.getElementById('subtotal').textContent;
            var taxa = document.getElementById('tax_value').textContent;
            var total = document.getElementById('total').textContent;

            window.location.href = 'loginregistar.php?id=confirmPayment&subtotal=' + subtotal+ '&taxa=' + taxa +'&total=' + total + '&telefone=' + telefone;
          }

          function carrinhaCheckOut(){
              
              const cart_money = document.getElementById('money');
                
              cart_money.textContent = parseFloat(sessionStorage.getItem('total')).toFixed(2);
          }
    


</script>
