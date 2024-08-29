var select = document.querySelector('#select');

var formOutro = document.querySelector('#formOutro');

var botao = document.querySelector('#botao1');

var titulo = document.querySelector('#nomeProblema');
var descricao = document.querySelector('#descricao');




function insert(estado) {

    console.log(select.value);
    switch(select.value) {

        case '1':

            
        formOutro.innerHTML = `<div class="input-field col s12">
        <input id="nomeOutro" type="text" name="txtOutro" class="" pattern="^[^-\s][a-zA-ZÀ-ú ]*" minlength="2" maxlength="30" data-length="30" required>
         <label for="nomeOutro">Digite sua necessidade</label>
        </div>`;

        break;

          

        default:
            formOutro.innerHTML = ` `;
        break;
    }

   
}







select.addEventListener('change', insert);

botao.addEventListener('click', funcionar);


