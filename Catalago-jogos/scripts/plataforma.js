

const tabela = document.querySelector('#tabela');
const plataforma  = document.querySelector("#plataforma")
const selectPlataforma = document.querySelector("#selectPlataforma")

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



tabela.addEventListener('click',()=>{
   escolherTabela()
})

plataforma.addEventListener("click",()=>{
    
    multiPlataforma()
})
selectPlataforma.addEventListener("click",()=>{
    escolherPlataforma()
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
    console.log(plataforma.value)
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

      

    }
}
function escolherPlataforma(){
    console.log(selectPlataforma.value)
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



