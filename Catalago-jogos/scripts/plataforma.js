

const tabela = document.querySelector('#tabela');
const plataforma  = document.querySelector("#plataforma")
const plataforma2 = document.querySelector("#plataforma2")
const selectPlataforma = document.querySelector("#selectPlataforma")
const selectPlataforma2 = document.querySelector("#selectPlataforma2")

const osPlataform = document.querySelector('#osPlataform');
const processadorPlataform = document.querySelector('#processadorPlataform');
const placaPlataform = document.querySelector('#placaPlataform');
const memoriaPlataform= document.querySelector('#memoriaPlataform');
const forMemoriaPlataform = document.querySelector('#forMemoriaPlataform');
const forOsPlataform = document.querySelector('#forOsPlataform');
const forProcessadorPlataform = document.querySelector('#forProcessadorPlataform');
const forPlacaPlataform = document.querySelector('#forPlacaPlataform');
const forArmazenamentoPlataform= document.querySelector('#forArmazenamentoPlataform');
const armazenamentoPlataform = document.querySelector("#armazenamentoPlataform")

//plataforma 2
const osPlataform2 = document.querySelector('#osPlataform2');
const processadorPlataform2 = document.querySelector('#processadorPlataform2');
const placaPlataform2 = document.querySelector('#placaPlataform2');
const memoriaPlataform2= document.querySelector('#memoriaPlataform2');
const forMemoriaPlataform2 = document.querySelector('#forMemoriaPlataform2');
const forOsPlataform2 = document.querySelector('#forOsPlataform2');
const forProcessadorPlataform2 = document.querySelector('#forProcessadorPlataform2');
const forPlacaPlataform2 = document.querySelector('#forPlacaPlataform2');
const forArmazenamentoPlataform2= document.querySelector('#forArmazenamentoPlataform2');
const armazenamentoPlataform2 = document.querySelector("#armazenamentoPlataform2")

//plataforma3
const osPlataform3 = document.querySelector('#osPlataform3');
const processadorPlataform3 = document.querySelector('#processadorPlataform3');
const placaPlataform3 = document.querySelector('#placaPlataform3');
const memoriaPlataform3= document.querySelector('#memoriaPlataform3');
const forMemoriaPlataform3 = document.querySelector('#forMemoriaPlataform3');
const forOsPlataform3 = document.querySelector('#forOsPlataform3');
const forProcessadorPlataform3 = document.querySelector('#forProcessadorPlataform3');
const forPlacaPlataform3 = document.querySelector('#forPlacaPlataform3');
const forArmazenamentoPlataform3= document.querySelector('#forArmazenamentoPlataform3');
const armazenamentoPlataform3 = document.querySelector("#armazenamentoPlataform3")
const plataforma3 = document.querySelector("#plataforma3")
const selectPlataforma3 = document.querySelector("#selectPlataforma3")


tabela.addEventListener('click',()=>{
   escolherTabela()
})

plataforma.addEventListener("click",()=>{
    
    multiPlataforma()
})
plataforma2.addEventListener("click",()=>{
    multiPlataforma2()
})
selectPlataforma.addEventListener("click",()=>{
    escolherPlataforma()
})
selectPlataforma2.addEventListener("click",()=>{
    escolherPlataforma2()
})
plataforma3.addEventListener("click",()=>{
    multiPlataforma3()
})
selectPlataforma3.addEventListener("click",()=>{
    escolherPlataforma3()
})

function escolherTabela(){
    if(tabela.value=='nitendo'){
        
        const os = document.querySelector('#os');
        const processador = document.querySelector('#processador');
        const placa = document.querySelector('#placa');
        const memoria = document.querySelector('#memoria');
        const forMemoria = document.querySelector('#forMemoria');
        const forOs = document.querySelector('#forOs');
        const forProcessador = document.querySelector('#forProcessador');
        const forPlaca = document.querySelector('#forPlaca');
        const forArmazenamento= document.querySelector('#forArmazenamento');

        memoria.classList.add("hide")
        placa.classList.add("hide")
        processador.classList.add("hide")
        forProcessador.classList.add("hide")
        forMemoria.classList.add("hide")
        forPlaca.classList.add("hide")
        
    }else if(tabela.value == 'xbox'){

        const os = document.querySelector('#os');
        const processador = document.querySelector('#processador');
        const placa = document.querySelector('#placa');
        const memoria = document.querySelector('#memoria');
        const forMemoria = document.querySelector('#forMemoria');
        const forOs = document.querySelector('#forOs');
        const forProcessador = document.querySelector('#forProcessador');
        const forPlaca = document.querySelector('#forPlaca');
        const forArmazenamento= document.querySelector('#forArmazenamento');

        memoria.classList.add("hide")
        placa.classList.add("hide")
        processador.classList.add("hide")
        forProcessador.classList.add("hide")
        forMemoria.classList.add("hide")
        forPlaca.classList.add("hide")

    }else if(tabela.value == "playstation"){
        const os = document.querySelector('#os');
        const processador = document.querySelector('#processador');
        const placa = document.querySelector('#placa');
        const memoria = document.querySelector('#memoria');
        const forMemoria = document.querySelector('#forMemoria');
        const forOs = document.querySelector('#forOs');
        const forProcessador = document.querySelector('#forProcessador');
        const forPlaca = document.querySelector('#forPlaca');
        const forArmazenamento= document.querySelector('#forArmazenamento');

        memoria.classList.add("hide")
        placa.classList.add("hide")
        processador.classList.add("hide")
        forProcessador.classList.add("hide")
        forMemoria.classList.add("hide")
        forPlaca.classList.add("hide")
    }else if(tabela.value == "pc"){
        const os = document.querySelector('#os');
        const processador = document.querySelector('#processador');
        const placa = document.querySelector('#placa');
        const memoria = document.querySelector('#memoria');
        const forMemoria = document.querySelector('#forMemoria');
        const forOs = document.querySelector('#forOs');
        const forProcessador = document.querySelector('#forProcessador');
        const forPlaca = document.querySelector('#forPlaca');
        const forArmazenamento= document.querySelector('#forArmazenamento');

        memoria.classList.remove("hide")
        placa.classList.remove("hide")
        processador.classList.remove("hide")
        forProcessador.classList.remove("hide")
        forMemoria.classList.remove("hide")
        forPlaca.classList.remove("hide")
    }
}
function multiPlataforma (){
   
    if(plataforma.value == 'sim'){
       
        
        selectPlataforma.classList.remove("hide")

        memoriaPlataform.classList.remove("hide")
        placaPlataform.classList.remove("hide")
        processadorPlataform.classList.remove("hide")
        forProcessadorPlataform.classList.remove("hide")
        forMemoriaPlataform.classList.remove("hide")
        forPlacaPlataform.classList.remove("hide")
        forArmazenamentoPlataform.classList.remove("hide")
        forOsPlataform.classList.remove("hide")
        osPlataform.classList.remove("hide")
        armazenamentoPlataform.classList.remove("hide")
        const titleAdicionar = document.querySelector(".titleAdicionar")
        titleAdicionar.classList.remove("hide")
        plataforma2.classList.remove("hide")
    
       
    }else if(plataforma.value == 'nao'){
        selectPlataforma.classList.add("hide")

      

        memoriaPlataform.classList.add("hide")
        placaPlataform.classList.add("hide")
        processadorPlataform.classList.add("hide")
        forProcessadorPlataform.classList.add("hide")
        forMemoriaPlataform.classList.add("hide")
        forPlacaPlataform.classList.add("hide")
        forArmazenamentoPlataform.classList.add("hide")
        forOsPlataform.classList.add("hide")
        osPlataform.classList.add("hide")
        armazenamentoPlataform.classList.add("hide")
        selectPlataforma2.classList.add("hide")
        plataforma2.classList.add("hide")
        memoriaPlataform2.classList.add("hide")
        placaPlataform2.classList.add("hide")
        processadorPlataform2.classList.add("hide")
        forProcessadorPlataform2.classList.add("hide")
        forMemoriaPlataform2.classList.add("hide")
        forPlacaPlataform2.classList.add("hide")
        const titleAdicionar = document.querySelector(".titleAdicionar")
        titleAdicionar.classList.add("hide")
        osPlataform2.classList.add("hide")
        forArmazenamentoPlataform2.classList.add("hide")
        armazenamentoPlataform2.classList.add("hide")
        forOsPlataform2.classList.add("hide")
        memoriaPlataform3.classList.add("hide")
        placaPlataform3.classList.add("hide")
        processadorPlataform3.classList.add("hide")
        forProcessadorPlataform3.classList.add("hide")
        forMemoriaPlataform3.classList.add("hide")
        forPlacaPlataform3.classList.add("hide")
        forArmazenamentoPlataform3.classList.add("hide")
        forOsPlataform3.classList.add("hide")
        osPlataform3.classList.add("hide")
        armazenamentoPlataform3.classList.add("hide")
        const titleAdicionar3 = document.querySelector(".titleAdicionar3")
        titleAdicionar3.classList.add("hide")
        plataforma3.classList.add("hide")
        selectPlataforma3.classList.add("hide")
        

    

      

    }
}
function escolherPlataforma(){
   
    if(tabela.value == selectPlataforma.value){
        const alert = document.querySelector('.alert')
        const btn = document.querySelector(".btnEnviar")
        btn.classList.add("hide")
        alert.innerHTML = "<h2>tabelas iguais </h2>"
        
    }else{
        const alert = document.querySelector('.alert')
        const btn = document.querySelector(".btnEnviar")
        btn.classList.remove("hide")
        alert.innerHTML = ""
        if (selectPlataforma.value == 'pc'){
            
    
            memoriaPlataform.classList.remove("hide")
            placaPlataform.classList.remove("hide")
            processadorPlataform.classList.remove("hide")
            forProcessadorPlataform.classList.remove("hide")
            forMemoriaPlataform.classList.remove("hide")
            forPlacaPlataform.classList.remove("hide")
            forArmazenamentoPlataform.classList.remove("hide")
            forOsPlataform.classList.remove("hide")
            osPlataform.classList.remove("hide")
            armazenamentoPlataform.classList.remove("hide")
    
        }else if(selectPlataforma.value == 'playstation'){
            
            memoriaPlataform.classList.add("hide")
            placaPlataform.classList.add("hide")
            processadorPlataform.classList.add("hide")
            forProcessadorPlataform.classList.add("hide")
            forMemoriaPlataform.classList.add("hide")
            forPlacaPlataform.classList.add("hide")
    
        }else if(selectPlataforma.value == 'nitendo'){
            
          
    
            memoriaPlataform.classList.add("hide")
            placaPlataform.classList.add("hide")
            processadorPlataform.classList.add("hide")
            forProcessadorPlataform.classList.add("hide")
            forMemoriaPlataform.classList.add("hide")
            forPlacaPlataform.classList.add("hide")
    
        }else if(selectPlataforma.value == 'xbox'){
            
           
    
            memoriaPlataform.classList.add("hide")
            placaPlataform.classList.add("hide")
            processadorPlataform.classList.add("hide")
            forProcessadorPlataform.classList.add("hide")
            forMemoriaPlataform.classList.add("hide")
            forPlacaPlataform.classList.add("hide")
        }
    }
   
    
}
function escolherPlataforma2(){
    if(tabela.value == selectPlataforma.value || selectPlataforma.value == selectPlataforma2.value||tabela.value == selectPlataforma2.value ){
        const alert = document.querySelector('.alert')
        const btn = document.querySelector(".btnEnviar")
        btn.classList.add("hide")
        alert.innerHTML = "<h2>tabelas iguais </h2>"
        
    }else{
        const alert = document.querySelector('.alert')
        const btn = document.querySelector(".btnEnviar")
        btn.classList.remove("hide")
        alert.innerHTML = ""
        if (selectPlataforma2.value == 'pc'){
            
    
            memoriaPlataform2.classList.remove("hide")
            placaPlataform2.classList.remove("hide")
            processadorPlataform2.classList.remove("hide")
            forProcessadorPlataform2.classList.remove("hide")
            forMemoriaPlataform2.classList.remove("hide")
            forPlacaPlataform2.classList.remove("hide")
            forArmazenamentoPlataform2.classList.remove("hide")
            forOsPlataform2.classList.remove("hide")
            osPlataform2.classList.remove("hide")
            armazenamentoPlataform2.classList.remove("hide")
    
        }else if(selectPlataforma2.value == 'playstation'){
            
            memoriaPlataform2.classList.add("hide")
            placaPlataform2.classList.add("hide")
            processadorPlataform2.classList.add("hide")
            forProcessadorPlataform2.classList.add("hide")
            forMemoriaPlataform2.classList.add("hide")
            forPlacaPlataform2.classList.add("hide")
    
        }else if(selectPlataforma2.value == 'nitendo'){
            
          
    
            memoriaPlataform2.classList.add("hide")
            placaPlataform2.classList.add("hide")
            processadorPlataform2.classList.add("hide")
            forProcessadorPlataform2.classList.add("hide")
            forMemoriaPlataform2.classList.add("hide")
            forPlacaPlataform2.classList.add("hide")
    
        }else if(selectPlataforma2.value == 'xbox'){
            
           
    
            memoriaPlataform2.classList.add("hide")
            placaPlataform2.classList.add("hide")
            processadorPlataform2.classList.add("hide")
            forProcessadorPlataform2.classList.add("hide")
            forMemoriaPlataform2.classList.add("hide")
            forPlacaPlataform2.classList.add("hide")
        }
    }
}


function multiPlataforma2 (){
   
    if(plataforma2.value == 'sim'){
       
        
        selectPlataforma2.classList.remove("hide")

        memoriaPlataform2.classList.remove("hide")
        placaPlataform2.classList.remove("hide")
        processadorPlataform2.classList.remove("hide")
        forProcessadorPlataform2.classList.remove("hide")
        forMemoriaPlataform2.classList.remove("hide")
        forPlacaPlataform2.classList.remove("hide")
        forArmazenamentoPlataform2.classList.remove("hide")
        forOsPlataform2.classList.remove("hide")
        osPlataform2.classList.remove("hide")
        armazenamentoPlataform2.classList.remove("hide")
    
       
    }else if(plataforma2.value == 'nao'){
        selectPlataforma2.classList.add("hide")

      
        memoriaPlataform2.classList.add("hide")
        placaPlataform2.classList.add("hide")
        processadorPlataform2.classList.add("hide")
        forProcessadorPlataform2.classList.add("hide")
        forMemoriaPlataform2.classList.add("hide")
        forPlacaPlataform2.classList.add("hide")
        forArmazenamentoPlataform2.classList.add("hide")
        forOsPlataform2.classList.add("hide")
        osPlataform2.classList.add("hide")
        armazenamentoPlataform2.classList.add("hide")

      

    }
}

function multiPlataforma3(){
    if(plataforma3.value == 'sim'){
       
        
        selectPlataforma3.classList.remove("hide")

        memoriaPlataform3.classList.remove("hide")
        placaPlataform3.classList.remove("hide")
        processadorPlataform3.classList.remove("hide")
        forProcessadorPlataform3.classList.remove("hide")
        forMemoriaPlataform3.classList.remove("hide")
        forPlacaPlataform3.classList.remove("hide")
        forArmazenamentoPlataform3.classList.remove("hide")
        forOsPlataform3.classList.remove("hide")
        osPlataform3.classList.remove("hide")
        armazenamentoPlataform3.classList.remove("hide")
    
       
    }else if(plataforma3.value == 'nao'){
        selectPlataforma3.classList.add("hide")

      
        memoriaPlataform3.classList.add("hide")
        placaPlataform3.classList.add("hide")
        processadorPlataform3.classList.add("hide")
        forProcessadorPlataform3.classList.add("hide")
        forMemoriaPlataform3.classList.add("hide")
        forPlacaPlataform3.classList.add("hide")
        forArmazenamentoPlataform3.classList.add("hide")
        forOsPlataform3.classList.add("hide")
        osPlataform3.classList.add("hide")
        armazenamentoPlataform3.classList.add("hide")

      

    }
}


function escolherPlataforma3(){
    if(selectPlataforma3.value == selectPlataforma2.value || selectPlataforma3 == tabela.value || selectPlataforma3.value == tabela.value || selectPlataforma3.value == selectPlataforma.value ){
        const alert = document.querySelector('.alert')
        const btn = document.querySelector(".btnEnviar")
        btn.classList.add("hide")
        alert.innerHTML = "<h2>tabelas iguais </h2>"
        
    }else{
        const alert = document.querySelector('.alert')
        const btn = document.querySelector(".btnEnviar")
        btn.classList.remove("hide")
        alert.innerHTML = ""
        if (selectPlataforma3.value == 'pc'){
            
    
            memoriaPlataform3.classList.remove("hide")
            placaPlataform3.classList.remove("hide")
            processadorPlataform3.classList.remove("hide")
            forProcessadorPlataform3.classList.remove("hide")
            forMemoriaPlataform3.classList.remove("hide")
            forPlacaPlataform3.classList.remove("hide")
            forArmazenamentoPlataform3.classList.remove("hide")
            forOsPlataform3.classList.remove("hide")
            osPlataform3.classList.remove("hide")
            armazenamentoPlataform3.classList.remove("hide")
    
        }else if(selectPlataforma3.value == 'playstation'){
            
            memoriaPlataform3.classList.add("hide")
            placaPlataform3.classList.add("hide")
            processadorPlataform3.classList.add("hide")
            forProcessadorPlataform3.classList.add("hide")
            forMemoriaPlataform3.classList.add("hide")
            forPlacaPlataform3.classList.add("hide")
    
        }else if(selectPlataforma3.value == 'nitendo'){
            
          
    
            memoriaPlataform3.classList.add("hide")
            placaPlataform3.classList.add("hide")
            processadorPlataform3.classList.add("hide")
            forProcessadorPlataform3.classList.add("hide")
            forMemoriaPlataform3.classList.add("hide")
            forPlacaPlataform3.classList.add("hide")
    
        }else if(selectPlataforma3.value == 'xbox'){
            
           
    
            memoriaPlataform3.classList.add("hide")
            placaPlataform3.classList.add("hide")
            processadorPlataform3.classList.add("hide")
            forProcessadorPlataform3.classList.add("hide")
            forMemoriaPlataform3.classList.add("hide")
            forPlacaPlataform3.classList.add("hide")
        }
    }
}





