import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone',{
    dicDefaultMessage: 'Sube aqui tu imagen',
    acceptedFiles: '.png, .jpg , .jpeg, .gif',
    addedfiles: true,
    dictRemoveFile: 'Borrar archivo',
    maxFiles: 1,
    uploadMultiple: false,
});
