

const tabela = document.querySelector('#tabela');


tabela.addEventListener('click',()=>{
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
    }
})


