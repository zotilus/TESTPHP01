var inputs = document.querySelectorAll( '.fileButton' );

Array.prototype.forEach.call( inputs, function( input )
{
    var label     = input.nextElementSibling,
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
    var image = document.getElementById('content').$_file;

    ctx.drawImage(image, 33, 71, 104, 124, 21, 20, 87, 104);
});