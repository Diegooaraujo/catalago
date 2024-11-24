const form = document.querySelector(".filtroForm")

const processador = document.querySelector("#processador")
const placa = document.querySelector("#placa")
const memoria = document.querySelector("#memoria")
const armazenamento = document.querySelector("#armazenamento")
const gereno = document.querySelector("#genero")
const generoSearch = document.querySelector("#generoSearch")

const requisitosSearch = document.querySelector("#requisitos")
requisitosSearch.addEventListener('click', (e) => {
    const valorRequisitos = requisitosSearch.value;
    if (valorRequisitos == "nao") {
        const forProcessador = document.querySelector("#forProcessador")
        const forPlaca = document.querySelector("#forPlaca")
        const forMemoria = document.querySelector("#forMemoria")
        const forArmazenamento = document.querySelector("#forArmazenamento")
        forProcessador.style.display = "none"
        forPlaca.style.display = "none"
        forMemoria.style.display = "none"
        forArmazenamento.style.display = "none"
        processador.style.display = "none"
        placa.style.display = "none"
        memoria.style.display = "none"
        armazenamento.style.display = "none"
    } else {
        const forProcessador = document.querySelector("#forProcessador")
        const forPlaca = document.querySelector("#forPlaca")
        const forMemoria = document.querySelector("#forMemoria")
        const forArmazenamento = document.querySelector("#forArmazenamento")
        forProcessador.style.display = "flex"
        forPlaca.style.display = "flex"
        forMemoria.style.display = "flex"
        forArmazenamento.style.display = "flex"
        processador.style.display = "flex"
        placa.style.display = "flex"
        memoria.style.display = "flex"
        armazenamento.style.display = "flex"
    }

})
generoSearch.addEventListener('click', (e) => {
    const valorGeneroSearch = generoSearch.value;
    if (valorGeneroSearch == 'nao') {
        const forGenero = document.querySelector("#forGenero")
        gereno.style.display = 'none'
        forGenero.style.display = 'none'
    } else {
        const forGenero = document.querySelector("#forGenero")
        gereno.style.display = 'flex'
        forGenero.style.display = 'flex'
    }
})




const ul = document.querySelector(".results")

let resul = false;
let clicou = false

if (clicou) {
    ul.style.display = "flex"

} else {
    ul.style.display = "none"
}

form.addEventListener("submit", (e) => {
    console.log(1 + 1)
    clicou = true
    e.preventDefault()
    ul.style.display = "flex"
    const valorProcessador = processador.value
    const valorPlaca = placa.value
    const valorArmazenamento = armazenamento.value
    const valorGenero = formatrString(genero.value)
    const valorRequisitos = requisitosSearch.value;
    if (valorRequisitos == 'sim') {
      

        const valorGenero = generoSearch.value
        if (valorGenero == 'sim') {
           
            const results = document.querySelectorAll(".results .result")
            results.forEach(result => {

                const resultDesc = result.querySelector(".resultDesc").textContent
                const generoValue = formatrString(genero.value)
                if (formatrString(resultDesc).indexOf(valorProcessador) !== -1 || formatrString(resultDesc).indexOf(valorArmazenamento) !== -1 || formatrString(resultDesc).indexOf(valorPlaca) !== -1) {
                    const itemRequisito = result.querySelector(".generoContent").textContent

                    if (formatrString(itemRequisito).indexOf(generoValue) !== -1) {
                        result.style.display = 'flex'
                        resul = true
                    }
                } else {
                    result.style.display = 'none'
                    resul = false

                }
            })
        } else {
            
           
            const results = document.querySelectorAll(".results .result")
            results.forEach(result => {

                const resultDesc = result.querySelector(".resultDesc").textContent

                if (formatrString(resultDesc).indexOf(valorProcessador) !== -1 || formatrString(resultDesc).indexOf(valorArmazenamento) !== -1 || formatrString(resultDesc).indexOf(valorPlaca) !== -1) {

                    result.style.display = 'flex'
                    resul = true


                } else {
                    result.style.display = 'none'
                    resul = false
                }


            })
        }
    } else {
        const generoValue = formatrString(genero.value)
        const valorGenero = generoSearch.value
        if (valorGenero == 'sim') {
            console.log('apenas o genero')
            const results = document.querySelectorAll(".results .result")
            results.forEach(result => {

                const itemRequisito = result.querySelector(".generoContent").textContent
               
                if (formatrString(itemRequisito).indexOf(generoValue) !== -1) {
                    result.style.display = 'flex'
                    resul = true
                }
                else {
                    result.style.display = 'none'
                    resul = false

                }
            })
        }
    }


})

function formatrString(value) {
    return value.toLowerCase().trim();

}
fetch("../pc.json").then(res => res.json()).then((json) => {
    const lista = document.querySelector(".results")

    json.forEach((item) => {
        const li = document.createElement("li");
        li.innerHTML = `
           
                <div class="resultImg">
                    <img class = "${item.fk_id}" src="../Midia/img/img_pc/${item.nome_imagem}" alt="">
                </div>
                <div class="resultContent">
                    <h2 class="resultTitle">${item.nome}</h2>
                    <p class="resultDesc"> Processador:${item.processador}, Placa de video: ${item.placa_video}, Memoria: ${item.memoria}, Armazenamento:${item.armazenamento}</p>

                     <div >Genero:<p class='generoContent'>${item.genero}</p></div>
                </div>
           
        `;
        li.classList.add("result")
        lista.appendChild(li);

    });
})


