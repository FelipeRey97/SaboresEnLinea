import Dropzone from "dropzone";

const dropzone = new Dropzone('#dropzone',{

    dictDefaultMessage: 'Sube aquí tu imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar Archivo",
    maxFiles: 1,
    uploadMultiple: false,

    init: function(){

        if(document.querySelector('[name="recip_Image"]').value.trim()){

            const imagenPublicada = {}
            imagenPublicada.size = 2000;
            imagenPublicada.name = document.querySelector('[name="recip_Image"]').value;

            this.options.addedfile.call(this, imagenPublicada);
            this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`);
            
            imagenPublicada.previewElement.classList.add("dz-success", "dz-complete");
        }
    },
});

dropzone.on("success", function(file, response){

    //console.log(response.Imagen);
    document.querySelector('[name="recip_Image"]').value = response.Imagen;

});

dropzone.on("removedfile", function(file, response){

    document.querySelector('[name="recip_Image"]').value = "";

});