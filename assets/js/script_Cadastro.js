const form = document.getElementById("form");
const username = document.getElementById("username")
const email = document.getElementById("email")
const password = document.getElementById("password")
const passwordConfirmation = document.getElementById("password-confirmation");


form.addEventListener("submit", (event) => {
    event.preventDefault();

    checkForm(); //VERIFICANDO FORMULÁRIO
})




email.addEventListener("blur", () => {
    checkInputEmail();
})

username.addEventListener("blur", () => {
    checkInputUsername();
})




/*VALIDAÇÕES*/
//nome do usuário
function checkInputUsername(){
    const usernameValue = username.value;

    if (usernameValue === ""){
        errorInput(username, "Preencha um username!") //mostrar o aviso e mostrar a mensagem de erro...
    }
    else{ //para nao mostrar o aviso mesmo se a pessoa colocar os dados depois de mostrar o aviso pra ela
        const formItem = username.parentElement;
        formItem.className = "form-content"
    }
}

//email
function checkInputEmail(){
    const emailValue = email.value;

    if (emailValue === ""){
        errorInput (email, "O email é obrigatório.")
    }
    else{
        const formItem = email.parentElement;
        formItem.className = "form-content"
    }
}

//senha
function checkInputPassword(){
    const passwordValue = password.value;

    if (passwordValue === ""){
        errorInput (password, "A senha é obrigatória.")
    }
    else if (passwordValue.length < 8){
        errorInput (password, "A senha precisa ter no mínimo 8 caracteres.")
    }
    else{
        const formItem = password.parentElement;
        formItem.className = "form-content"
    }
}

//confirmação de senha
function checkInputPasswordConfirmation(){
    const passwordValue = password.value;
    const confirmationPasswordValue = passwordConfirmation.value;

    if (confirmationPasswordValue === ""){
        errorInput (passwordConfirmation, "A confirmação de senha é obrigatória!")
    }
    else if (confirmationPasswordValue !== passwordValue){
        errorInput (passwordConfirmation, "As senhas não são iguais.")
    }
    else{
        const formItem = passwordConfirmation.parentElement;
        formItem.className = "form-content"
    }
}


/*MENSAGEM DE ERRO*/
/*criando função de mensagem de error para as validações*/
function errorInput(input, message){
    const formItem = input.parentElement;
    const textMessage = formItem.querySelector("a")

    textMessage.innerText = message;

    formItem.className = "form-content error"
}


/*VERIFICANDO FORMULÁRIO */
/*Confirmando se nao tem nenhum erro no formulario antes de enviar*/
function checkForm(){
    checkInputUsername();
    checkInputEmail();
    checkInputPassword();
    checkInputPasswordConfirmation();

    const formItems = form.querySelectorAll(".form-content") //querySelectorAll vai pegar todos os elementos que tiver a classe dentro do parenteses

    /*aqui vai verificar se toda array passa na condição que colocar todos os elementos que tem a className um de cada vez e verifica se esta igual a class form-content
    
    - o que esta entre [] é um array
    - .every verifica se TODOS os elementos que tem o array passa na condição
    - no caso, se todos os elementos com a className for igual a class form-content ele vai seguir e enviar o formulario
    - pois se tiverem a class form-content error o formulario tem um error e não vai enviar o formulario
    */
    const isValid = [...formItems].every( (item) => {
        return item.className === "form-content" //<=a condição
    });

    if(isValid){
        alert("CADASTRADO COM SUCESSO!")
    }
}