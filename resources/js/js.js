const opciones = document.getElementById('opciones');
const a = document.querySelectorAll('#opciones input');


let status_add = 0;
let status_edit = 0;
let status_drop =0;
const Validar =(e) =>{
    switch (e.target.name){
        case 'agregar':

        if (status_add == 0)
        {
            document.getElementById("input_add").classList.add('Visible');
            document.getElementById("input_add").classList.remove('Oculto');
            document.getElementById("agregar").value = "Esconder Formulario";
            status_add = 1;

            // REGRESA LA SECCIÓN EDITAR A SU ESTADO POR DEFECTO OCULTANDOLO
            document.getElementById("editar_section").classList.remove('Visible');
            document.getElementById("editar_section").classList.add('Oculto');
            document.getElementById("editar").value = "Editar Agencia";
            status_edit = 0;


            // REGRESA LA SECCIÓN AGREGAR A SU ESTADO POR DEFECTO OCULTANDOLO
            document.getElementById("drop_section").classList.remove('Visible');
            document.getElementById("drop_section").classList.add('Oculto');
            document.getElementById("eliminar").value = "Suspender Agencia";
            status_drop = 0;

        }else{
            document.getElementById("input_add").classList.remove('Visible');
            document.getElementById("input_add").classList.add('Oculto');
            document.getElementById("agregar").value = "Agregar Agencia";
            status_add = 0;
        }

        break;

        case 'editar':

        if (status_edit == 0)
        {
            document.getElementById("editar_section").classList.add('Visible');
            document.getElementById("editar_section").classList.remove('Oculto');
            document.getElementById("editar").value = "Esconder Formulario";

            status_edit = 1;

             // REGRESA LA SECCIÓN AGREGAR A SU ESTADO POR DEFECTO OCULTANDOLO
            document.getElementById("input_add").classList.remove('Visible');
            document.getElementById("input_add").classList.add('Oculto');
            document.getElementById("agregar").value = "Agregar Agencia"
            status_add = 0;

            // REGRESA LA SECCIÓN AGREGAR A SU ESTADO POR DEFECTO OCULTANDOLO
            document.getElementById("drop_section").classList.remove('Visible');
            document.getElementById("drop_section").classList.add('Oculto');
            document.getElementById("eliminar").value = "Susspender Agencia"
            status_drop = 0;
        }else{
            document.getElementById("editar_section").classList.remove('Visible');
            document.getElementById("editar_section").classList.add('Oculto');
            document.getElementById("editar").value = "Editar Agencia"
            status_edit = 0;
        }
        break;

        case 'eliminar':
            if (status_drop == 0)
            {
                document.getElementById("drop_section").classList.add('Visible');
                document.getElementById("drop_section").classList.remove('Oculto');
                document.getElementById("eliminar").value = "Esconder Formulario";

                status_drop = 1;

                 // REGRESA LA SECCIÓN AGREGAR A SU ESTADO POR DEFECTO OCULTANDOLO
                document.getElementById("input_add").classList.remove('Visible');
                document.getElementById("input_add").classList.add('Oculto');
                document.getElementById("agregar").value = "Agregar Agencia"
                status_add = 0;

                // REGRESA LA SECCIÓN AGREGAR A SU ESTADO POR DEFECTO OCULTANDOLO
                document.getElementById("editar_section").classList.remove('Visible');
                document.getElementById("editar_section").classList.add('Oculto');
                document.getElementById("editar").value = "Editar Agencia"
                status_edit = 0;
            }else{
                document.getElementById("drop_section").classList.remove('Visible');
                document.getElementById("drop_section").classList.add('Oculto');
                document.getElementById("eliminar").value = "Suspender Agencia"
                status_drop = 0;
            }
        break;
    }
 }


a.forEach((a) => {

    a.addEventListener('click', Validar);
});
