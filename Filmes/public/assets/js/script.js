
function alerta(){
    let x = document.querySelector('#delete1')
    let confirm = window.confirm('Você realmente deseja deletar o filme?')

    if (confirm){
        alert('Filme excluido com sucesso')
    }
    else{ 
        x.addEventListener('submit', (event) => event.preventDefault())
        document.location.reload(true)
    }   
}



