ClassicEditor
    .create( document.querySelector( '#content' ) )

    .config(height = '300')

    .then( editor => {

        console.log( editor );

    } )

    .catch( error => {

        console.error( error );

    } );
