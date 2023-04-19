/* validations */
//Constantes do form com os ids
const form = document.getElementById('form')
const nomeEmpresa = document.getElementById('nome-empresa')
const emailEmpresa = document.getElementById('email-empresa')
const telefone = document.getElementById('telefone')
const nif = document.getElementById('nif')
const criarSenha = document.getElementById('criar-senha')
const confirmarSenha = document.getElementById('confirmar-senha')

form.addEventListener('submit', e => {
    e.preventDefault()
    validadeInputs()
})

//Função que seta o erro
const setError = (element, message) =>{
    const inputBox = element.parentElement()
    const errorDisplay = inputBox.querySelector('.error')

    errorDisplay.innerText = message
    inputBox.classList.add('error')
    inputBox.classList.remove('sucess')
}

const setSucess = element =>{
    const inputBox = element.parentElement()
    const errorDisplay = inputBox.querySelector('.error')

    errorDisplay.innerText = ''
    inputBox.classList.add('sucess')
    inputBox.classList.remove('error')
}

//Função que validade os inputs
const validadeInputs = () => {
    const nomeEmpresaValue = nomeEmpresa.value.trim()
    const emailEmpresaValue = emailEmpresa.value.trim()
    const telefoneValue = telefone.value.trim()
    const nifValue = nif.value.trim()
    const criarSenhaValue = criarSenha.value.trim()
    const confirmarSenhaValue = confirmarSenha.value.trim()

    if(nomeEmpresaValue === ''){
        setError(nomeEmpresa, 'Username is required')
    } else{
        setSucess(nomeEmpresa)
    }

}