var inputs = document.querySelectorAll( '.fileButton' );

Array.prototype.forEach.call( inputs, function( input )
{
    var label = input.nextElementSibling,
        labelVal = label.innerHTML;
        // label.querySelector( 'span' ).innerHTML = fileName;

    input.addEventListener( 'change', function( e )
    {
        var fileName =  '';
      
        // var variable = 'span';
        if( this.files && this.files.length > 1 )
            fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );  
            
        else     
            fileName = e.target.value.concat();
            

        if( fileName )
            // label.querySelector('span').innerHTML = fileName; 
            // document.querySelectorAll("content").value.replace().innerHTML = fileName;
            
            document.getElementById('content').innerHTML = fileName;
 
        else
            label.innerHTML = labelVal;
            
    });
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var image = document.getElementById('content').$_FILES;
  

    ctx.drawImage(image, 33, 71, 104, 124, 21, 20, 87, 104);

});

/**

<input type="file" onchange="previewFile()"/>

    <canvas id="preview-canvas"></canvas>

*/

// const canvas = document.querySelector('#preview-canvas') ;

// const context = canvas.getContext('2d') ;

function previewFile() {

var preview = document.querySelector('img');

var file = document.querySelector('input[type=file]').files[0];

var reader = new FileReader();

    // ici devrait vérifier si le fichier et une image

    // console.log( file.type ) ; // log le type MIME du fichier

    // le type MIME du fichier doit servir et testé si le fichier et une image

    // car l'utilisateur peut envoyé n'importe quel fichier

reader.addEventListener("load", function () {

const blob = reader.result ;

        const image = new Image() ;

        image.src = blob ;

        image.addEventListener('load', function() {

       // ici l'image que l'utilisateur à send ( si c'est un image )

            // à finit d'être charger

            // tu peut dessiner l'image dans ton canvas avec:

            // context.drawImage

            // reference:

            // https://developer.mozilla.org/fr/docs/Web/API/CanvasRenderingContext2D/drawImage

            // adapte la taille du canvas à la taille de l'image envoyé

            canvas.width = image.width ;

            canvas.height = image.height; 

            ctx.drawImage(

           image,

                0,0,image.width,image.height, // copie toutes les dimension de l'image

                0,0,canvas.width,canvas.height // remplie entierement le canvas avec l'image

            ) ;

            // ici le canvas devrait être "paint" avec l'image de l'utilisateur

            // si jamais le canvas et vide

            // peut être les dimension de l'image

            // devrait être récupéré avec:

            // image.offsetWidth et image.offsetHeight

            // plutôt que: image.width et image.height 

        } ) ;

}, false);

if (file) {

reader.readAsDataURL( file );

}

}