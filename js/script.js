function validarCadastro(){
    var campoNome = document.getElementById('nomePeca');
    var campoFab = document.getElementById('fabPeca');
    var campoDes = document.getElementById('desPeca');
    var campoQnt = document.getElementById('qntPeca');

    if(campoNome.value === ""){
        alert('Campo usuario obrigatorio');
        return false;
    }else if(campoFab.value === ""){
        alert('Campo email obrigatorio');
        return false;
    }else if(campoDes.value === ""){
        alert('Campo senha obrigatorio');
        return false;
    }else if(campoQnt.value === ""){
        alert('Campo confirmar senha obrigatorio');
        return false;
    }
}