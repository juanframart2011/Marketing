jQuery( function($){

    $( "#form_contacto" ).submit( function( event ){

        event.preventDefault();

        $( ".code-err").html( 'Por favor complete el campo requerido' ).css( "color","black" );
        $( ":input, textarea" ).css( "border", "1px solid #ccc" );

        var nombre = $( "#nombre" );
        var email = $( "#email" );
        var estado = $( "#estado" );
        var comentario = $( "#comentario" );

        if( nombre.val() == null || nombre.val().length == 0 || /^\s+$/.test( nombre.val() ) ){

            nombre.css( "border", "red 1px solid" );
            nombre.focus();
            $( ".code-err").html( 'El Nombre es obligatorio' ).css( "color","red" );
        }
        else if( email.val() == null || email.val().length == 0 || /^\s+$/.test( email.val() ) ){

            email.css( "border", "red 1px solid" );
            email.focus();
            $( ".code-err").html( 'El email es obligatorio' ).css( "color","red" );
        }
        else if( estado.val() == null || estado.val().length == 0 || /^\s+$/.test( estado.val() ) ){

            estado.css( "border", "red 1px solid" );
            estado.focus();
            $( ".code-err").html( 'El estado es obligatorio' ).css( "color","red" );
        }
        else if( comentario.val() == null || comentario.val().length == 0 || /^\s+$/.test( comentario.val() ) ){

            comentario.css( "border", "red 1px solid" );
            comentario.focus();
            $( ".code-err").html( 'El Comentario es obligatorio' ).css( "color","red" );
        }
        else{

            var formulario = $( "#form_contacto" ).serialize();
            
            $.post( "form_recibidos.php", formulario, function( respuesta ) {

                alert(respuesta);
                document.form_contacto.reset();
            });
        }
    });

    $( "#form_reclutamiento" ).submit( function( event ){

        event.preventDefault();

        $( ".code-err").html( 'Por favor complete el campo requerido' ).css( "color","black" );
        $( ":input" ).css( "border", "1px solid #ccc" );

        var nombre = $( "#nombre" );
        var email = $( "#email" );
        var telefono = $( "#telefono" );
        var edad = $( "#edad" );
        var curriculum = $( "#curriculum" );
        var estado = $( "#estado" );
        var comentario = $( "#comentario" );

        if( nombre.val() == null || nombre.val().length == 0 || /^\s+$/.test( nombre.val() ) ){

            nombre.css( "border", "red 1px solid" );
            nombre.focus();
            $( ".code-err").html( 'El Nombre es obligatorio' ).css( "color","red" );
        }
        else if( email.val() == null || email.val().length == 0 || /^\s+$/.test( email.val() ) ){

            email.css( "border", "red 1px solid" );
            email.focus();
            $( ".code-err").html( 'El email es obligatorio' ).css( "color","red" );
        }
        else if( telefono.val() == null || telefono.val().length == 0 || /^\s+$/.test( telefono.val() ) ){

            telefono.css( "border", "red 1px solid" );
            telefono.focus();
            $( ".code-err").html( 'El telefono es obligatorio' ).css( "color","red" );
        }
        else if( isNaN( telefono.val() ) ){

            telefono.css( "border", "red 1px solid" );
            telefono.focus();
            $( ".code-err").html( 'El telefono solo son números' ).css( "color","red" );
        }
        else if( edad.val() == null || edad.val().length == 0 || /^\s+$/.test( edad.val() ) ){

            edad.css( "border", "red 1px solid" );
            edad.focus();
            $( ".code-err").html( 'La edad es obligatorio' ).css( "color","red" );
        }
        else if( isNaN( edad.val() ) ){

            edad.css( "border", "red 1px solid" );
            edad.focus();
            $( ".code-err").html( 'La edad solo son números' ).css( "color","red" );
        }
        else if( edad.val().length != 2 ){

            edad.css( "border", "red 1px solid" );
            edad.focus();
            $( ".code-err").html( 'La edad solo son 2 números' ).css( "color","red" );
        }
        else if( estado.val() == null || estado.val().length == 0 || /^\s+$/.test( estado.val() ) ){

            estado.css( "border", "red 1px solid" );
            estado.focus();
            $( ".code-err").html( 'El estado es obligatorio' ).css( "color","red" );
        }
        else{

            if( confirm( 'Seguro todos sus datos están bién y cargo su curriculum?' ) ){

                document.form_reclutamiento.submit();
            }
        }
    });
});   