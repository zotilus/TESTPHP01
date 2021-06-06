// var images = [], 
// index = 0;

// images[0] = "img/BG01.jpg";
// images[1] = "img/BG02.jpg";
// images[2] = "img/BG03.jpg";
// images[3] = "img/BG04.jpg";

// index = Math.floor(Math.random() * images.length);
// document.body.style.background = "#fff url('"+images[index]+"') no-repeat center center fixed";

var elemet = document.getElementById(images);
var images = [], 
index = 0;

images[0] = "img/BG01.jpg";
images[1] = "img/BG02.jpg";
images[2] = "img/BG03.jpg";
// images[3] = "img/BG04.jpg";
function changeImg(){
  'use stict';
  setInterval(function(){
    // var RandomNum = Math.floor(Math.random() * images.length);
    index = Math.floor(Math.random() * images.length);
    document.body.style.background = "#fff url('"+images[index]+"') no-repeat center center fixed ";

    // elemet.src = images[RandomNum];
  }, 4000,);
  
}
changeImg(elemet,images);



// var elemet = document.getElementById('myimg1'),
//     imgs =["img/BG01.jpg","img/BG02.jpg","img/BG03.jpg","img/BG04.jpg"];
// function changeImg(elemet,imgs){
//   'use stict';
//   setInterval(function(){
//     var RandomNum = Math.floor(Math.random() * imgs.length);

//     elemet.src = imgs[RandomNum];
//   }, 4000);
// }
// changeImg(elemet,imgs);