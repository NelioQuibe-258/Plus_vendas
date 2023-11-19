//import { carrinhaCheckOut } from "./headerScript";
// Obtém o carrinho da localStorage
const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
var qty = 0;
var subtotal = 0;
var subtotal1 = 0;

function atualizarCarrinho() {
    const qtd_items_to_pay = document.getElementById('qtd_items_to_pay');
    const qtd_items = document.getElementById('qtd_items');
    const subtotal_to_pay = document.getElementById('subtotal_to_pay');
    const subtotall = document.getElementById('subtotal');
    let meus_itens = JSON.parse(localStorage.getItem('meus_itens')) || [];
    
    if (carrinho.length > 0) {

            const carrinhoLista = document.getElementById('cart-pricing');
            carrinhoLista.innerHTML = '';
            carrinho.forEach((item, index) => {
                //alert('in');
                
                const link = document.createElement('a');
                link.classList.add('cart-navlink');
                carrinhoLista.appendChild(link);
                const card = document.createElement('div');
                card.classList.add('cart-card');
                link.appendChild(card);

                const cardCont = document.createElement('div');
                cardCont.classList.add('cart-container04');
                card.appendChild(cardCont);

                const cardImg = document.createElement('img');
                cardImg.classList.add('cart-image');
                cardImg.src = item.image;
                cardCont.appendChild(cardImg);

                const cardCont1 = document.createElement('div');
                cardCont1.classList.add('cart-container05');
                card.appendChild(cardCont1);

                const cardSpan = document.createElement('span');
                cardSpan.classList.add('cart-text01');
                cardCont1.appendChild(cardSpan);

                const cardSpan1 = document.createElement('span');
                cardSpan1.textContent = item.nome;
                cardSpan.appendChild(cardSpan1);

                const cardSpan2 = document.createElement('span');
                cardSpan.appendChild(cardSpan2);

                const cardH2 = document.createElement('h2');
                cardH2.classList.add('cart-text04');
                cardH2.textContent = item.preco;
                subtotal += parseFloat(item.preco);
                cardCont1.appendChild(cardH2);

                const cardCont2 = document.createElement('div');
                cardCont2.classList.add('cart-container06');
                card.appendChild(cardCont2);
                //index += 1;
                const cardInput = document.createElement('input');
                cardInput.type = 'checkbox';
                cardInput.checked = 'true';
                
                cardInput.classList.add('cart-checkbox');
                cardCont2.appendChild(cardInput);

                const cardCont3 = document.createElement('div');
                cardCont3.classList.add('cart-btn-group');
                card.appendChild(cardCont3);

                const cardButtonLess = document.createElement('button');
                cardButtonLess.textContent = '-';
                // Função para incrementar o valor
                
                cardButtonLess.classList.add('cart-button');
                cardButtonLess.classList.add('cart-button', 'button');
                cardCont3.appendChild(cardButtonLess);

                const cardInput1 = document.createElement('input');
                cardInput1.type = 'text';
                cardInput1.value = '1';
                qty += parseInt(cardInput1.value);
                cardInput1.classList.add('cart-textinput', 'input');
                cardCont3.appendChild(cardInput1);

                const cardInput5 = document.createElement('input');
                cardInput5.type = 'hidden';
                cardInput5.value = item.preco;
                cardCont3.appendChild(cardInput5);

                const cardButtonNess = document.createElement('button');
                cardButtonNess.textContent = '+';
                cardButtonNess.classList.add('cart-button1', 'button');
                cardCont3.appendChild(cardButtonNess);

                cardInput.addEventListener('change', function() {
                    // Função a ser executada quando o estado do checkbox é alterado
                    if (cardInput.checked) {
                        console.log(index);
                        qtd_items_to_pay.textContent = parseInt(qtd_items_to_pay.textContent) + parseInt(cardInput1.value);
                        qtd_items.textContent = parseInt(qtd_items.textContent) + parseInt(cardInput1.value);
                        subtotal_to_pay.textContent = (parseFloat(subtotal_to_pay.textContent) + parseFloat(cardH2.textContent.substring(2))).toFixed(2);
                        subtotall.textContent = (parseFloat(subtotall.textContent) + parseFloat(cardH2.textContent.substring(2))).toFixed(2);
                        subtotal += parseFloat(cardH2.textContent.substring(2)).toFixed(2);
                        meus_itens.push({ image: item.icon, nome: item.nomeProduto, preco: item.precoProduto });
                        localStorage.setItem('meus_itens', JSON.stringify(meus_itens));

                    } else {
                        console.log(index);
                        qtd_items_to_pay.textContent = parseInt(qtd_items_to_pay.textContent) - parseInt(cardInput1.value);
                        qtd_items.textContent = parseInt(qtd_items.textContent) - parseInt(cardInput1.value);
                        subtotal_to_pay.textContent = (parseFloat(subtotal_to_pay.textContent) - parseFloat(cardH2.textContent.substring(2))).toFixed(2);
                        subtotall.textContent = (parseFloat(subtotall.textContent) - parseFloat(cardH2.textContent.substring(2))).toFixed(2);
                        subtotal -= parseFloat(cardH2.textContent.substring(2)).toFixed(2);
                        // Recupere o carrinho do localStorage
                        let carrinho1 = JSON.parse(localStorage.getItem('carrinho')) || [];

                        // Nome do produto que você deseja remover
                        const nomeProdutoARemover = item.image; // Nome do produto que deseja remover

                        // Encontre o índice do item com base no nome do produto
                        const indiceProduto = carrinho1.findIndex(items => items.image === nomeProdutoARemover);

                        // Se o produto for encontrado, remova-o do carrinho
                        if (indiceProduto !== -1) {
                            carrinho1.splice(indiceProduto, 1);
                            
                            // Atualize o localStorage com o carrinho atualizado
                            localStorage.setItem('carrinho', JSON.stringify(carrinho1));
                        } else {
                            console.log('Produto não encontrado no carrinho.');
                        }
                        carrinhaCheckOut();

                    }
                });
                
                cardButtonLess.addEventListener("click", function() {
                    qtd_items_to_pay.textContent = parseInt(qtd_items_to_pay.textContent) - 1;
                    qtd_items.textContent = parseInt(qtd_items.textContent) - 1;
                    subtotal_to_pay.textContent = (parseFloat(subtotal_to_pay.textContent) - parseFloat(cardInput5.value.substring(2))).toFixed(2);
                    subtotall.textContent = (parseFloat(subtotall.textContent) - parseFloat(cardInput5.value.substring(2))).toFixed(2);
                    subtotal -= parseFloat(cardInput5.value.substring(2)).toFixed(2);
                    cardH2.textContent ='MT' + (parseFloat(cardH2.textContent.substring(2)) - parseFloat(cardInput5.value.substring(2))).toFixed(2);
                    cardInput1.value = parseInt(cardInput1.value) - 1;
                });

                // Função para decrementar o valor
                cardButtonNess.addEventListener("click", function() {
                    qtd_items_to_pay.textContent = parseInt(qtd_items_to_pay.textContent) + 1;
                    qtd_items.textContent = parseInt(qtd_items.textContent) + 1;
                    subtotal_to_pay.textContent = (parseFloat(subtotal_to_pay.textContent) + parseFloat(cardInput5.value.substring(2))).toFixed(2);
                    subtotall.textContent = (parseFloat(subtotall.textContent) + parseFloat(cardInput5.value.substring(2))).toFixed(2);
                    subtotal += parseFloat(cardInput5.value.substring(2)).toFixed(2);
                    cardH2.textContent = 'MT' + (parseFloat(cardH2.textContent.substring(2)) + parseFloat(cardInput5.value.substring(2))).toFixed(2);
                    cardInput1.value = parseInt(cardInput1.value) + 1;
                });

            });
            qtd_items_to_pay.textContent = qty;
            qtd_items.textContent = qty;
            subtotal_to_pay.textContent = subtotal.toFixed(2);
            subtotall.textContent = subtotal.toFixed(2);
    }
}
// Chama a função inicialmente
atualizarCarrinho();

export function carrinhaCheckOut(){
        
    const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
  
    if (carrinho.length > 0) {
      carrinho.forEach((item, index) => {
      const cart_money = document.getElementById('money');
        const qtynr = document.getElementById('qtynr');
        
        qtynr.textContent = index + 1;
  
        if (parseInt(qtynr.textContent) > 0 ) {
          document.getElementById('qty').style.display = 'inline';
        } else {
          document.getElementById('qty').style.display = 'none';
        }
  
        cart_money.textContent = (parseFloat(cart_money.textContent) + parseFloat(item.preco.substring(2))).toFixed(2);
      });
    }
  }

// Chama a função a cada 2 segundos (2000 milissegundos)
//setInterval(atualizarCarrinho, 2000);