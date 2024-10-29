function pesquisa(){
    const processador = document.querySelector("#processador")
    const placa = document.querySelector("#placa")
    const memoria = document.querySelector("#memoria")
    const armazenamento = document.querySelector("#armazenamento")
    const gereno = document.querySelector("#genero")
    const valor = formatrString(genero.value);
    const buttonForm = document.querySelector("#botao-form")
    const form = document.querySelector(".filtroForm")
    
    console.log(form)
    form.addEventListener("submit",(e)=>{
        
        e.preventDefault()
        const valorPlaca = placa.value
        console.log(valorPlaca)
        
    })


    console.log(processador.value)
    let items = document.querySelectorAll(".items .item")
      
    let resultados = false;
    const ul = document.querySelector(".items")

    if(valor !== ''){
    
        ul.style.display = "flex"
        items.forEach(item=>{
            const itemTitle = item.querySelector(".item-title").textContent
            if(formatrString(itemTitle).indexOf(valor)!== -1) {
                item.style.display = 'flex'
                resultados=true
            }else{
                item.style.display = 'none'
                resultados=false
            }
        })
        // if(resultados){
        //     no_result.style.display = "none"
        // }else{
        //     no_result.style.display = "flex"
        // }
    }else{
        ul.style.display = 'none'
    }
}

function formatrString(value){
    return value.toLowerCase().trim();

}


fetch("../pc.json").then(res=>res.json()).then((json)=>{
    const ul = document.querySelector(".items")

    json.forEach((item) => {
        const li = document.createElement("li");
        li.innerHTML = `
           
                <div class="item-img">
                    <img class = "${item.fk_id}" src="../Midia/img/img_pc/${item.nome_imagem}" alt="">
                </div>
                <div class="item-content">
                    <h2 class="item-title">${item.nome}</h2>
                    <p class="item-desc">descrição</p>
                </div>
           
        `;
        li.classList.add("item")
        ul.appendChild(li);

    });
})