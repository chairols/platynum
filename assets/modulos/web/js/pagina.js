$(".seleccionar").change(function() {
    //console.log(this);
    console.log(this.selectedOptions[0].value);
    id = this.selectedOptions[0].value;
    if(id != 0) {
        window.location.href = "/modelos/ver/" + id;
    }
});