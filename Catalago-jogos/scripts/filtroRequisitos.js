const form = document.querySelector(".filtroForm")
const os = document.querySelector("#os")
const armazenamento = document.querySelector("#armazenamento")
const gereno = document.querySelector("#genero")
const generoSearch = document.querySelector("#generoSearch")
const requisitosSearch = document.querySelector("#requisitos")
const tabela = document.querySelector('.plataforma')
const nometabela = tabela.classList[1]




// const tabela = document.querySelector('.tabela')
// const nomeTabela = tabela.classList[1]
// const nomeJson = '../'+ nomeTabela +'.json'


requisitosSearch.addEventListener('click', (e) => {
    const valorRequisitos = requisitosSearch.value;
    if (valorRequisitos == 'nao') {
        const ForOs = document.querySelector("#forOs")
        const ForArmazenamento = document.querySelector("#forArmazenamento")
        os.style.display = 'none'
        armazenamento.style.display = "none"
        ForOs.style.display = 'none'
        ForArmazenamento.style.display = 'none'


    } else {
        const ForOs = document.querySelector("#forOs")
        const ForArmazenamento = document.querySelector("#forArmazenamento")
        os.style.display = 'flex'
        
        ForOs.style.display = 'flex'
        ForArmazenamento.style.display = 'flex'
        armazenamento.style.display = 'flex'

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
    e.preventDefault()
    clicou = true
    ul.style.display = 'flex'
    const valorGenero = formatrString(genero.value)
    const valorOs = os.value
    const valorArmazenamento = armazenamento.value;

    const valorRequisitos = requisitosSearch.value;
    if (valorRequisitos == 'sim') {
        const valorGeneroSearch = generoSearch.value;
        if (valorGeneroSearch == 'sim') {
            const results = document.querySelectorAll(".results .result")
            results.forEach(result => {
                const valorGenero = formatrString(genero.value)
                const resultDesc = result.querySelector(".resultDesc").textContent
               
                if (formatrString(resultDesc).indexOf(valorOs) !== -1 || formatrString(resultDesc).indexOf(valorArmazenamento) !== -1 ) {
                    const itemRequisito = result.querySelector(".generoContent").textContent
                    if(formatrString(itemRequisito).indexOf(valorGenero) !== -1 ){ 
                        result.style.display = 'flex'
                        resul = true
                    }
                } else {
                    result.style.display = 'none'
                    resul = false

                }
            })
        }else{
            const results = document.querySelectorAll(".results .result")
            results.forEach(result => {

                const resultDesc = result.querySelector(".resultDesc").textContent
               
                if (formatrString(resultDesc).indexOf(valorOs) !== -1 || formatrString(resultDesc).indexOf(valorArmazenamento) !== -1 ) {
                    
                    result.style.display = 'flex'
                    resul = true
                
                    result.style.display = 'none'
                    resul = false
                }

            
            })
        }
      
    } else {
        const valorGenero = formatrString(genero.value)
        const valorGeneroSearch = formatrString(generoSearch.value);

        if (valorGeneroSearch == 'sim') {
            
            const results = document.querySelectorAll(".results .result")

            results.forEach(result => {
                const itemRequisito = result.querySelector(".generoContent").textContent

                if (formatrString(itemRequisito).indexOf(valorGenero) !== -1) {
                    result.style.display = 'flex'
                    resul = true
                } else {
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
if(nometabela == "playstation"){
    fetch('../playstation.json').then(res => res.json()).then((json) => {

        // const tets = json[2].OS
        // const sempontoevirgula = tets.replace(/[^\d]+/g,'');
        // console.log(sempontoevirgula)
    
        const lista = document.querySelector(".results")
    
        json.forEach((item) => {
            const li = document.createElement("li");
            li.innerHTML = `
                    
                    <div class="resultImg">
                        <img class = "${item.fk_id}" src="../Midia/img/img_playstation/${item.nome_imagem}" alt="">
                    </div>
                    <div class="resultContent">
                        <h2 class="resultTitle">${item.nome}</h2>
                        <p class="resultDesc"> Os: ${item.OS}, Armazenamento:${item.armazenamento}</p>
    
                    
                        <div >Genero:<p class='generoContent'>${item.genero}</p></div>
                    </div>
               
            `;
            li.classList.add("result")
            lista.appendChild(li);
    
        });
    })
    
}else if(nometabela == 'xbox'){
    fetch('../xbox.json').then(res => res.json()).then((json) => {

        // const tets = json[2].OS
        // const sempontoevirgula = tets.replace(/[^\d]+/g,'');
        // console.log(sempontoevirgula)
    
        const lista = document.querySelector(".results")
    
        json.forEach((item) => {
            const li = document.createElement("li");
            li.innerHTML = `
                    
                    <div class="resultImg">
                        <img class = "${item.fk_id}" src="../Midia/img/img_xbox/${item.nome_imagem}" alt="">
                    </div>
                    <div class="resultContent">
                        <h2 class="resultTitle">${item.nome}</h2>
                        <p class="resultDesc"> Os: ${item.OS}, Armazenamento:${item.armazenamento}</p>
    
                    
                        <div >Genero:<p class='generoContent'>${item.genero}</p></div>
                    </div>
               
            `;
            li.classList.add("result")
            lista.appendChild(li);
    
        });
    })
    
}else if(nometabela == "nitendo"){
    fetch('../nitendo.json').then(res => res.json()).then((json) => {

        // const tets = json[2].OS
        // const sempontoevirgula = tets.replace(/[^\d]+/g,'');
        // console.log(sempontoevirgula)
    
        const lista = document.querySelector(".results")
    
        json.forEach((item) => {
            const li = document.createElement("li");
            li.innerHTML = `
                    
                    <div class="resultImg">
                        <img class = "${item.fk_id}" src="../Midia/img/img_nitendo/${item.nome_imagem}" alt="">
                    </div>
                    <div class="resultContent">
                        <h2 class="resultTitle">${item.nome}</h2>
                        <p class="resultDesc"> Os: ${item.OS}, Armazenamento:${item.armazenamento}</p>
    
                    
                        <div >Genero:<p class='generoContent'>${item.genero}</p></div>
                    </div>
               
            `;
            li.classList.add("result")
            lista.appendChild(li);
    
        });
    })
}


