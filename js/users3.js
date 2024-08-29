const barraPesquisa = document.querySelector('#chatPesquisa'),
usersList = document.querySelector('.users-list');





barraPesquisa.onkeyup = ()=> {
    let searchTerm = barraPesquisa.value;
    
    if(searchTerm != ""){
        barraPesquisa.classList.add("active");
    } else {
        barraPesquisa.classList.remove("active");
    }
        let xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/pesquisa.php", true);

    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
    
}

setInterval(()=>{

    
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../php/contatos.php", true);

    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(!barraPesquisa.classList.contains("active")) {
                usersList.innerHTML = data;
                }
                
            }
        }
    }
    xhr.send();
}, 500);