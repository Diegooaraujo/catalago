


 function pesquisa(){
    const no_result = document.querySelector("#no_result");
    const searchInput = document.querySelector("#serch")
    const valor = formatrString(searchInput.value);

    

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


fetch("../xbox.json").then(res=>res.json()).then((json)=>{
    const ul = document.querySelector(".items")

    json.forEach((item) => {
        const li = document.createElement("li");
        li.innerHTML = `
           
                <div class="item-img">
                    <img class = "${item.fk_id}" src="../Midia/img/img_xbox/${item.nome_imagem}" alt="">
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





