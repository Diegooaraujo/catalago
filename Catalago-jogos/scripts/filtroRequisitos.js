const form = document.querySelector(".filtroForm")
const os = document.querySelector("#os")
const armazenamento = document.querySelector("#armazenamento")
const gereno = document.querySelector("#genero")
// const tabela = document.querySelector('.tabela')
// const nomeTabela = tabela.classList[1]
// const nomeJson = '../'+ nomeTabela +'.json'

const ul = document.querySelector(".results")

let resul = false;
let clicou = false

if(clicou){
    ul.style.display = "flex"

}else{
    ul.style.display ="none"
}

form.addEventListener("submit", (e) => {
    e.preventDefault()
    clicou = true
    ul.style.display = 'flex'
    
    const valorOs = os.value
    const valorArmazenamento = armazenamento.value
    const valorGenero = formatrString(genero.value)
    
    const results = document.querySelectorAll(".results .result")

    results.forEach(result=>{
        
        const resultDesc = result.querySelector(".resultDesc").textContent
        
        if(formatrString(resultDesc).indexOf(valorOs)!== -1 || formatrString(resultDesc).indexOf(valorArmazenamento)!== -1  ){
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
fetch('../playstation.json').then(res=>res.json()).then((json)=>{

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
                    <p class="resultDesc"> Os: ${item.OS}, Armazenamento:${item.armazenamento}, Genero:${item.genero}</p>
                </div>
           
        `;
        li.classList.add("result")
        lista.appendChild(li);

    });
})


