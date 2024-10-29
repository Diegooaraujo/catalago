const form = document.querySelector(".filtroForm")

const processador = document.querySelector("#processador")
const placa = document.querySelector("#placa")
const memoria = document.querySelector("#memoria")
const armazenamento = document.querySelector("#armazenamento")
const gereno = document.querySelector("#genero")

const buttonForm = document.querySelector("#botao-form")
const ul = document.querySelector(".results")

let resul = false;
let clicou = false

if(clicou){
    ul.style.display = "flex"

}else{
    ul.style.display ="none"
}

form.addEventListener("submit", (e) => {
    let clicou = true
    e.preventDefault()
     ul.style.display = "flex"
    const valorProcessador = processador.value
    const valorPlaca = placa.value
    const valorArmazenamento = armazenamento.value
    const valorGenero = formatrString(genero.value)
    
    const results = document.querySelectorAll(".results .result")

    results.forEach(result=>{
        const resultDesc = result.querySelector(".resultDesc").textContent

     
        
        if(formatrString(resultDesc).indexOf(valorProcessador)!== -1 || formatrString(resultDesc).indexOf(valorArmazenamento)!== -1 ||formatrString(resultDesc).indexOf(valorPlaca)!== -1 ){
            result.style.display = 'flex'
            resul=true
        }else{
            result.style.display = 'none'
            resul=false
            
        }
    })

})

function formatrString(value){
    return value.toLowerCase().trim();

}
fetch("../pc.json").then(res=>res.json()).then((json)=>{
    const lista = document.querySelector(".results")

    json.forEach((item) => {
        const li = document.createElement("li");
        li.innerHTML = `
           
                <div class="resultImg">
                    <img class = "${item.fk_id}" src="../Midia/img/img_pc/${item.nome_imagem}" alt="">
                </div>
                <div class="resultContent">
                    <h2 class="resultTitle">${item.nome}</h2>
                    <p class="resultDesc"> Processador:${item.processador }, Placa de video: ${ item.placa_video}, Memoria: ${item.memoria}, Armazenamento:${item.armazenamento}</p>
                </div>
           
        `;
        li.classList.add("result")
        lista.appendChild(li);

    });
})


