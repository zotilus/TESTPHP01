var images = [], 
index = 0;

images[0] = "img/BG01.jpg";
images[1] = "img/BG02.jpg";
images[2] = "img/BG03.jpg";
images[3] = "img/BG04.jpg";

index = Math.floor(Math.random() * images.length);
document.body.style.background = "#fff url('"+images[index]+"') no-repeat center center fixed";