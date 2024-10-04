
function carregar(){
    fetch('../Views/nitendo.json').then(response=>response.json()).then(jogos=>{
        const conteiner = document.querySelector(".conteiner")

        jogos.map(jogo=>{
            const card = document.createElement("div")
            card.classList.add("card")

            const caminhoImg = '../Midia/img/img_nitendo/' + jogo.nome_imagem
            const img = document.createElement("img")
            img.classList.add("img")
            img.src = caminhoImg
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
    
 
     fetch('../Views/nitendo.json')
     .then(response=>response.json())
     .then(jogos=>{
 
         
 
         const conteiner = document.querySelector(".conteiner")
        
         
         jogos.map(jogo=>{
             if(conts == jogo.id){
 
                 const card = document.createElement("div")
                 card.classList.add("con-jogo")
 
                 conteiner.appendChild(card)

                 const img = document.createElement("img");
                 img.classList.add("img-jg")
                 img.src = '../Midia/img/img_nitendo/' + jogo.nome_imagem
                 
                 const conteiner_img = document.createElement("div");
                 conteiner_img.classList.add('imagem')
                 conteiner_img.appendChild(img)
                 card.appendChild(conteiner_img)

                 
 
                 const title = document.createElement("h1")
                 title.textContent = jogo.nome
                 title.classList.add("title-jogo")
                //  card.appendChild(title)
                 const conteiner_desc = document.createElement("div");
                 conteiner_desc.classList.add("conteiner-desc")
                 conteiner_desc.appendChild(title)

                 //genero
                 const divGeneroJogo = document.createElement('div')
                 divGeneroJogo.classList.add('divGeneroJogo')
                

                 const generoJogoTitle = document.createElement('h3')
                 generoJogoTitle.classList.add('generoJogoTitle')
                 generoJogoTitle.textContent= 'Gêneros:'
                 divGeneroJogo.appendChild(generoJogoTitle)

                 const generoJogo = document.createElement('p')
                 generoJogo.classList.add('generoJogo')
                 generoJogo.textContent= jogo.genero
                 divGeneroJogo.appendChild(generoJogo)
                 conteiner_desc.appendChild(divGeneroJogo)


                 //generofim

                 //descrição
                 const divDescricao = document.createElement('div')
                 divDescricao.classList.add('divDescricao')

                 const titleDescricao = document.createElement('h3')
                 titleDescricao.classList.add('titleDescricao')
                 titleDescricao.textContent = 'Descrição:'

                 const desc = document.createElement("p");
                 desc.classList.add("desc-jg")
                 desc.textContent = jogo.descricao
                 divDescricao.appendChild(titleDescricao)
                 divDescricao.appendChild(desc)
                 conteiner_desc.appendChild(divDescricao)
                 //fim descrição

                

                 const conteiner_requistos = document.createElement("div");
                 conteiner_requistos.classList.add("requisitos")
                 conteiner_desc.appendChild(conteiner_requistos)

                 const titulo_requisitos =document.createElement('h3')
                 titulo_requisitos.textContent = 'Requisitos Recomendados'
                 conteiner_requistos.appendChild(titulo_requisitos)


                 const processador = document.createElement('p')
                 const placa_video = document.createElement('p')
                 const memoria = document.createElement('p')
                 const armazenamento = document.createElement('p')
                 const os = document.createElement('p')

                 os.textContent = jogo.OS
                 placa_video.textContent = jogo.placa_video
                 processador.textContent = jogo.processador
                 memoria.textContent = jogo.memoria
                 armazenamento.textContent = jogo.armazenamento
                 
                 const title_Processador = document.createElement('strong')
                 title_Processador.textContent = 'Processador: '

                 const title_PlacaDeVideo = document.createElement('strong')
                 title_PlacaDeVideo.textContent = 'Placa De Video: '

                 const title_memoria = document.createElement('strong')
                 title_memoria.textContent = 'Memoria: '

                 const title_armazenamento = document.createElement('strong')
                 title_armazenamento.textContent = 'Armazenamento: '

                 const title_os = document.createElement('strong')
                 title_os.textContent = 'Os: '
                 
                
                
                //title do rquisito
                //processador
                const divProcessador = document.createElement('div')
                divProcessador.classList.add('divRequisitos')
                const topicoProcessador  = document.createElement('div');
                topicoProcessador.classList.add('topico')
                topicoProcessador.appendChild(title_Processador)
                divProcessador.appendChild(topicoProcessador)
                const divdados = document.createElement('div')
                divdados.classList.add('divdados')
                divdados.appendChild(processador)
                divProcessador.appendChild(divdados)
                conteiner_requistos.appendChild(divProcessador)
                //processador fim
                //placa de video
                const topicoPlacaDeVideo = document.createElement('div');
                topicoPlacaDeVideo.classList.add('topico')
                topicoPlacaDeVideo.appendChild(title_PlacaDeVideo)
                const divPlacaDeVideo = document.createElement('div')
                divPlacaDeVideo.classList.add('divRequisitos')
                divPlacaDeVideo.appendChild(topicoPlacaDeVideo )
                divPlacaDeVideo.appendChild(placa_video)
                conteiner_requistos.appendChild(divPlacaDeVideo)
                //placa de video fim
                //armazenamento
                const topicoArmazenamento = document.createElement('div');
                topicoArmazenamento.classList.add('topico')
                topicoArmazenamento.appendChild(title_armazenamento)
                const divArmazenamento = document.createElement('div')
                divArmazenamento.classList.add('divRequisitos')
                conteiner_requistos.appendChild(divArmazenamento)
                divArmazenamento.appendChild(topicoArmazenamento )
                divArmazenamento.appendChild(armazenamento)
                conteiner_requistos.appendChild(divArmazenamento)
                //fimArmazenamento
                //memoria
                const topicoMemoria = document.createElement('div');
                topicoMemoria.classList.add('topico')
                topicoMemoria.appendChild(title_memoria)
                const divMemoria = document.createElement('div')
                divMemoria.classList.add('divRequisitos')
                conteiner_requistos.appendChild(divMemoria)
                divMemoria.appendChild(topicoMemoria )
                divMemoria.appendChild(memoria)
                conteiner_requistos.appendChild(divMemoria)
                //memoria fim
                //sismeta operacional
                const topicoOs = document.createElement('div');
                topicoOs.classList.add('topico')
                topicoOs.appendChild(title_os)
                const divOs = document.createElement('div')
                divOs.classList.add('divRequisitos')
                conteiner_requistos.appendChild(divOs)
                divOs.appendChild(topicoOs )
                divOs.appendChild(os)
                conteiner_requistos.appendChild(divOs)
                //sistema operacional

                //fim title requisito
                

                 

                 
                 
                 

                
                //  divrequisitos.appendChild(processador)
                //  divrequisitos.appendChild(memoria)
                //  divrequisitos.appendChild(armazenamento)
                //  divrequisitos.appendChild(os)
                 


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

const menuOculto = document.querySelector(".menuOculto")
const abrirMenu = document.querySelector("#list")
abrirMenu.addEventListener("click",()=>{
    menuOculto.style.width = '500px';
})
const fecharMenu = document.querySelector(".btnFechar")
fecharMenu.addEventListener("click",(e)=>{
    e.preventDefault()
    menuOculto.style.width='0px';
})