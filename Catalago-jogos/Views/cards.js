function carregar(){
    fetch('../dados.json').then(response=>response.json()).then(jogos=>{
        const conteiner = document.querySelector(".conteiner")

        jogos.map(jogo=>{
            const card = document.createElement("div")
            card.classList.add("card")

            const img = document.createElement("img")
            img.classList.add("img")
            img.src = jogo.nome_imagem
            img.alt = jogo.nome_imagem

            const btn = document.createElement('button')
            btn.classList.add(jogo.id)

            const conteiner_img = document.createElement("div")
            conteiner_img.classList.add("conteiner_img")

            btn.textContent = jogo.nome


            card.appendChild(conteiner_img)
            conteiner_img.appendChild(img)
            card.appendChild(btn)
            conteiner.appendChild(card)
            
        })
    })
}
carregar();

document.addEventListener("click",(e)=>{
    
   
    const conts = e.target.className
    console.log(conts)
 
     fetch('../dados.json')
     .then(response=>response.json())
     .then(jogos=>{
 
         
 
         const conteiner = document.querySelector(".conteiner")
        
         
         jogos.map(jogo=>{
             if(conts == jogo.id){
 
                 const card = document.createElement("div")
                 card.classList.add("con-jogo")
 
                 conteiner.appendChild(card)
 
                 const title = document.createElement("h1")
                 title.textContent = jogo.nome
                 title.classList.add("title-jogo")
                 card.appendChild(title)
 
 
                 const conteiner_desc = document.createElement("div");
                 conteiner_desc.classList.add("conteiner-desc")
                 
 
                 const img = document.createElement("img");
                 img.classList.add("img-jg")
                 img.src = jogo.nome_imagem
                 conteiner_desc.appendChild(img)
 
                 const desc = document.createElement("p");
                 desc.classList.add("desc-jg")
                 desc.textContent = jogo.descricao
                 conteiner_desc.appendChild(desc)
                 card.appendChild(conteiner_desc)
 
                 const fechar = document.createElement("div")
                 fechar.classList.add("fechar")
                 conteiner.appendChild(fechar)
                 
                 const X = document.createElement("h3")
                 X.classList.add("fx")
                 X.textContent = 'X'
 
                 fechar.appendChild(X)
                 card.appendChild(fechar)
                 
                 document.addEventListener("click",(e)=>{
                 const fexar = e.target.className
                 if(fexar == 'fx'){
                     conteiner.removeChild(card)
                     
                 }
 
                 })
 
 
 
 
 
 
             }
 
         })
 
     
     })
 
 })