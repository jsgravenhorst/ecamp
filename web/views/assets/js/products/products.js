/*=============================================
                    Grid & List
=============================================*/
$(document).on("click",".btnView", function(){
    var type    = $(this).attr("attr-type"); /** Esta capturando si hizo click en el botón grid o list */
    var btnType = $("[attr-type]"); /** Esta capturando todos los componentes que tenga el atributo attr-type. Esto retorna varios valores */
    var index   = $(this).attr("attr-index"); /** Esta capturando en que bloque esta ubicado en articulos gratuitos, vistos, vendidos */

    if(type == "grid"){
        $(".grid-"+index).show();
        $(".list-"+index).hide();
    }

    if(type == "list"){
        $(".list-"+index).show();
        $(".grid-"+index).hide();
    }

    btnType.each(function(i){
        /** La etiqueta que trae btnType[i] en su atributo attr-index es igual a ... */
        /** Remueve el color solo del bloque donde me encuentro ubicado, donde esta ubicación es dada por el index */
        /** Esta validación se hace para que remueva la clase bg-gray de los dos componentes grid y list donde el index coincida*/
        if($(btnType[i]).attr("attr-index") == index) {
            $(btnType[i]).removeClass("bg-gray");
        }
    });
   /** Se adiciona la clase bg-gray ya que en el ciclo each anterior es eliminada de ambos componentes grid y list que coincide con el index
    *  La clase es agregada al componente que hizo click ya sea grid o list
    */
    $(this).addClass("bg-gray");
});
