let radio = document.querySelector(".manual-btn")
let cont = 1
//marcar a primeira label
document.getElementById("radio1").checked = true
//tempo de amostra 
setInterval(()=>{
    proximaImg()
},4000)

function proximaImg(){
    cont++
    if(cont>3){
        cont=1
    }
    document.getElementById("radio"+cont).checked = true

}
 