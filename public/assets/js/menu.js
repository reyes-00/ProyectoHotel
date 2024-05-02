
// A $( document ).ready() block.
$( document ).ready(function() {
    var menuDesayunos = [
        { 
            nomGeneral: 'DESAYUNOS LIGEROS', 
            nomClass: 'desayuno', 
            descripPlatillo:[
                ['PAN TOSTADO','$50.00','4 piezas'],
                ['PAN FRANCÉS','$80.00','4 piezas'],
                ['PAN DULCE','$25.00','1 pieza'],
                ['AVENA','$60.00','Con leche o agua'],
                ['ENSALADA DE FRUTA','$65.00','Melón/Papaya/Sandía'],
                ['ENSALADA DE FRUTA CON YOGURT <br> NATURAL O QUESO COTTAGE','$95.00','Melón/Papaya/Sandía'],
                ['CEREAL CON PLÁTANO','$65.00',''],
                ['YOGURT NATURAL','$50.00',''],
                ['YOGURT CON GRANOLA','$60.00',''],
                ['NOPAL Y QUESO PANELA ASADOS','$80.00','']
            ]
        },
        { 
            nomGeneral: 'DE LA GRANJA', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['HUEVOS FRITOS','$100.00','2 piezas'],
                ['HUEVOS REVUELTOS','$100.00','2 piezas'],
                ['HUEVOS RANCHEROS','$100.00','2 piezas'],
                ['HUEVOS AL ALBAÑÍL','$100.00','2 piezas Revueltos bañados en salsa verde'],
                ['HUEVOS DIVORCIADOS','$100.00','2 piezas'],
                ['HUEVOS A LA MEXICANA','$100.00','2 piezas'],
                ['OMELETTE DE QUESO','$120.00','2 piezas'],
                ['HUEVOS APORREADOS','$195.00','2 piezas Revueltos con cecina de res fileteada bañados en salsa verde'],
            ]
        }
        ];
        

        // console.log(menuDesayunos[0].nomGeneral);
        // console.log(menuDesayunos[0].descripPlatillo);
        // console.log(menuDesayunos[0].descripPlatillo[0]);

       var htmlMenu="";
       contador=0;
       menuDesayunos.forEach((element, index, array) => {
        // console.log("entra"); // 100, 200, 300
        htmlMenu="";
        htmlMenu+="<div class='accordion accordion-flush "+element.nomClass+"' data-f="+element.nomClass+" id='accordionFlushExample"+index+"'><div class='accordion-item'><h6 class='accordion-header' id='flush-headingOne"+index+"'><button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapseOne"+index+"' aria-expanded='false' aria-controls='flush-collapseOne"+index+"'>"+element.nomGeneral+"</button></h6>";
        htmlMenu+="<div id='flush-collapseOne"+index+"' class='accordion-collapse collapse' aria-labelledby='flush-headingOne"+index+"' data-bs-parent='#accordionFlushExample"+index+"'><div class='accordion-body '><div class='row'>";


        element.descripPlatillo.forEach((element1, index1, array1) => {
            // console.log(element1); // 0, 1, 2
            // // console.log(array); // same myArray object 3 times

                htmlMenu+="<div class='col-lg-6 menu-item'><div class='menu-content'><a href='#'>"+element1[0]+"</a><span>"+element1[1]+"</span></div><div class='menu-ingredients'>"+element1[2]+"</div></div>";

            });
            htmlMenu+="</div></div></div></div></div>";
            $("#p_row").append(htmlMenu);

        });
        // menuDesayunos.forEach(element => {
        //     console.log(menuDesayunos[contador]);

        //     menuDesayunos[contador].forEach(element1 => {
        //         // htmlMenu+="<div class='col-lg-6 menu-item'><div class='menu-content'><a href='#'>PAN TOSTADO</a><span>$50.00</span></div><div class='menu-ingredients'>4 piezas</div></div>";
            
        //     });
        //     // htmlMenu+="</div></div></div></div></div>";
        //     contador++;
        // });

});
//  DESAYUNOS LIGEROS

function seleccionMenu(elementoid){
    
    // ;

    $("#p_row").find(".accordion-flush").each(function( index ) {
        console.log($(this).attr("data-f"));
        console.log($(elementoid).attr("data-filter"));
        if($(this).attr("data-f") == $(elementoid).attr("data-filter")){
            $(this).show();
        }else{
            $(this).hide();
        }
      });

}
                
    
                
