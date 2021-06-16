const inpFile = document.getElementById("inpFile");
const btnUpload = document.getElementById("submit_btn");
let canvas = document.getElementById("myCanvas");
let msg = document.getElementById("msg")
let y = 25;

btnUpload.addEventListener("click", function(e){
    e.preventDefault()

    let formData = new FormData();
    console.log(inpFile.files); //inpFile.files chargement fichier
   
    for(let i=1; i < inpFile.files.length+1; i++ ){

        if (inpFile.files.length == 1 ){
            canvas.height = i * 80;  
        }else{
            canvas.height = i * 40;  
        }
    }
    
    formData.append("message", msg.value); 
    formData.append("send_mail","test"); 

    for (const file of inpFile.files){
        formData.append("myFiles", file);  //ajoute un champ de formulaire avec le name et value donnés
        y =y + 27;
        let ctx = canvas.getContext("2d");
        ctx.font = "25px Comic Sans MS";
        ctx.fillText(file.name,10,y);
    }
    fetch ("http://wetransfer/wetransfer.php", {
        method:"post",
        body: formData,
    })
    .then (response=>response.text())
    .then (data =>console.log(data))
    .catch(error =>console.log(error));
});

//fonction de clic pour parcourir à partir d'une image

$('.newbtn').bind("click" , function () {
    $('#inpFile').click();
});
