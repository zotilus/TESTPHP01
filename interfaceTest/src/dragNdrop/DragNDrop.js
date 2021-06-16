
const img = new Image
let currentAngle = 0
// let posX = img.width
// let posY = 0
// let scale = 0

const canvas = document.querySelector("canvas")
const context = canvas.getContext("2d");
const dropZone = document.querySelector('#dropDiv')
// const $rotateButton = document.querySelector("#rotate-button")
// const $rotateLeftButton = document.querySelector("#ButtLeft")
const rotateRight = document.querySelector("#btnRT")
const rotateLeft = document.querySelector("#btnLT")
const moveLeft = document.querySelector("#btnLM")
const moveRight = document.querySelector("#btnRM")
const zoom = document.querySelector("#myRange")


const testFile = file => {
  return (file.type.indexOf("image/") == 0)
}

const imageDraw = (angle = 0) => {
    const ratio = img.width/img.height
 console.log(`ratio: ${ratio}`);

    if(ratio >= 1) {
        canvas.width = 300
        canvas.height = canvas.width / ratio
    } else {
        canvas.height = 300
        canvas.width = canvas.height * ratio
    }

    const w = canvas.width,
        h = canvas.height

  
    if(angle == 90 || angle == 270) {
        [canvas.width, canvas.height] = [canvas.height, canvas.width];
    }

    context.save()
 
    context.translate(canvas.width / 2, canvas.height / 2);
    context.rotate(angle * Math.PI / 180);
    context.drawImage(img,0,0,img.width, img.height, -w/2, -h/2, w, h)
    context.restore();
    currentAngle = angle
      }

      img.addEventListener('load', evt => {
        imageDraw(0)
    } )

//charge l'image
    const chargeImage = (e) => {
    e.preventDefault()
    dropZone.classList.remove('hover')
    
    const file = e.dataTransfer.files[0]
    
    if( testFile(file)) {
        img.src = URL.createObjectURL(file)
    } else {
        throw new Error("Erreur, pas d'image :(")
    }
    rotateRight.disabled = false   
}
dropZone.addEventListener('dragover', e => {
  e.preventDefault()

  if ( testFile(e.dataTransfer.items[0])) {
      dropZone.classList.add('hover')
  } else {
      dropZone.classList.add('error')
  }
})


 //tout les events drag n drop>>
dropZone.addEventListener('dragleave', e => {
  // e.preventDefault()
  dropZone.classList.remove('hover','error')
})

let actions = ['drop','change']
actions.forEach( action => {
    dropZone.addEventListener(action, chargeImage)
});


//couper les listeners 
actions = ['dragover', 'drop']
actions.forEach(action => {
    document.body.addEventListener(action, e => e.preventDefault())
})



rotateRight.addEventListener('click', e => {
  if(img.src == "") return
  currentAngle = (currentAngle + 90) % 360
  imageDraw(currentAngle)
})
rotateLeft.addEventListener('click', e => {
  if(img.src == "") return
  currentAngle = (currentAngle - 90) % 360
  imageDraw(currentAngle)
})

moveRight.addEventListener('click', e => {
  if(img.src == "") return
  //context.save()
  context.translate(+1, 0)
  context.clearRect(0, 0, canvas.width, canvas.height);
  //context.restore()
  imageDraw(img)
})

// zoom.addEventListener('click', e => {
//   if(img.src == "") return
//   //context.save()
//   let a=myrange.x
//   context.transform (a, b, c, d, e, f);
//   context.clearRect(0, 0, canvas.width, canvas.height);
//   //context.restore()
//   imageDraw(img)
// })

h = canvas.height
let x = h;
let y = 0;

img.onload = animate;


function animate() {
  w = canvas.width
  h = canvas.height
  // animate.preventDefault
  context.save()
  context.clearRect(0, 0, canvas.width, canvas.height);  // clear canvas
  //context.scale (width =0.7,height=0.5) 
  context.drawImage(img,x,y,w,h); // draw image at current position
  context.restore()
  x -= 10; //vitesse d'anim
  if (x >= 0) requestAnimationFrame(animate)        // loop
}


//slider
// canvas.width = document.querySelector("width");
// canvas.height = document.querySelector("height");
// originalHeight = document.getElementById("height").value;
// originalWidth = document.getElementById("width").value;
// context.drawImage(img, 0, 0, canvas.width, canvas.height);


originalHeight = 1;
originalWidth = 1;
// context.drawImage(img, 0, 0, canvas.width, canvas.height);

function scaleCanvas()
{
    var scale = document.getElementById("canvasScale").value;
    
    document.getElementById("height").value = Math.round(((originalHeight * ((scale * 10) / 100)) + originalHeight) * 100) / 100;
    document.getElementById("width").value = Math.round(((originalWidth * ((scale * 10) / 100)) + originalWidth) * 100) / 100;
    resizeCanvas();
}

function resizeCanvas()
{
    // var canvas = document.getElementById("canvas");
    // var context = canvas.getContext("2d");    
    
    canvas.height = document.getElementById("height").value;
    canvas.width = document.getElementById("width").value;
}