const show = function(id){
    document.getElementById(`modal${id}`).classList.toggle("modal-active");
    document.getElementById(`filter${id}`).classList.toggle("modal-active");
}