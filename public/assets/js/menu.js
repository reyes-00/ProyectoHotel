
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
            nomClass: 'desayuno', 
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
        },{
            nomGeneral: 'DESAYUNOS MEXICANOS', 
            nomClass: 'desayuno', 
            descripPlatillo:[
                ['FAJITAS DE ARRACHERA','$ 200.00',''],
                ['FAJITAS DE POLLO','$ 170.00',''],
                ['PUNTAS DE FILETE A LA MEXICANA','$ 200.00',''],
                ['PUNTAS DE FILETE AL CHIPOTLE','$ 200.00',''],
                ['FILETE DE RES RANCHERO','$ 250.00',''],
                ['CARNE ASADA CON CHILAQUILES','$ 180.00','Chilaquiles Verdes o Rojos'],
                ['CHILAQUILES','$ 90.00','Verdes o Rojos'],
                ['CHILAQUILES CON POLLO','$ 130.00','Chilaquiles Verdes o Rojos'],
                ['CHILAQUILES CON HUEVO','$ 130.00','Chilaquiles Verdes o Rojos'],
                ['CHICHARRÓN EN SALSA','$ 100.00','Salsa Verde o Roja'],
                ['ENCHILADAS DE MOLE','$130.00','3 piezas'],
                ['ENCHILADAS VERDES','$120.00','3 piezas'],
                ['ENCHILADAS ROJAS','$120.00','3 piezas'],
                ['TACOS DORADOS','$ 120.00','Orden de cuatro'],
                ['HUARACHE CON BISTEC','$ 160.00',''],
                ['SOPES CON CHORIZO','$ 130.00','2 piezas'],
                ['SOPES CON POLLO','$ 130.00','2 piezas'],
            ]
        },{
            nomGeneral: 'AGREGUE A SUS PLATILLOS ORDENES EXTRA', 
            nomClass: 'desayuno', 
            descripPlatillo:[
                ['PIEZA DE HUEVO','$ 35.00',''],
                ['ORDEN DE GUACAMOLE','$ 80.00',''],
                ['ORDEN DE FRIJOLES','$ 70.00',''],
                ['ORDEN DE TOCINO','$ 70.00',''],
            ]
        }
        ,{
            nomGeneral: 'PAQUETES DE DESAYUNOS', 
            nomClass: 'desayuno', 
            descripPlatillo:[
                ['JUNIOR','$ 140.00','JUGO NATURAL<br>HOT CAKES CON MANTEQUILLA Y MIEL MAPLE<br>UNA TAZA DE CAFÉ O UN VASO DE LECHE'],
                ['EJECUTIVO','$ 180.00','FRUTA O JUGO NATURAL<br>OMELETTE DE QUESO<br>UNA TAZA DE CAFÉ O DE TÉ'],
                ['CONTINENTAL','$ 150.00','JUGO NATURAL<br>FRUTA CON YOGURT O QUESO COTTAGE<br>PAN TOSTADO CON MANTEQUILLA Y MERMELADA<br>UNA TAZA DE CAFÉ O DE TÉ'],
                ['HUASTECO','$ 180.00','FRUTA O JUGO NATURAL<br>ENCHILADAS HUASTECAS<br>Rellenas de frijol y pollo, bañadas en salsa roja y gratinadas<br>UNA TAZA DE CAFÉ O DE TÉ'],
                ['AMERICANO','$ 170.00','FRUTA O JUGO NATURAL<br>HUEVOS FRITOS O REVUELTOS AL NATURAL<br>UNA TAZA DE CAFÉ O DE TÉ'],
                ['CAMPESINO','$ 200.00','FRUTA O JUGO NATURAL<br>CECINA A LA PARRILLA<br>Con cebolla fileteada y guarnición de frijoles refritos<br>UNA TAZA DE CAFÉ O DE TÉ'],
                ['RANCHERO','$ 170.00','FRUTA O JUGO NATURAL<br>HUEVOS RANCHEROS O CHILAQUILES<br>UNA TAZA DE CAFÉ O DE TÉ'],
                ['DE LA CASA','$ 200.00','FRUTA O JUGO NATURAL<br>COSTILLA ENCEBOLLADA<br>A la plancha con cebolla fileteada y guarnición de frijoles refritos<br>UNA TAZA DE CAFÉ O DE TÉ'],
            ]
        }
        ,{
            nomGeneral: 'ENTRADAS', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['ESTREMÉS DE CARNES FRÍAS','$ 150.00','Rica combinación de jamón de pavo, queso de puerco,chiles en vinagre, salchicha, aceitunas y quesos panela,manchego y americano.'],
                ['ORDEN DE PAPAS A LA FRANCESA','$ 70.00',''],
                ['ORDEN DE JAMÓN SERRANO','$ 190.00','100 gramos'],
                ['TORTILLA ESPAÑOLA','$ 110.00','Se prepara al momento por lo que nos lleva 35 minutos ponerla en su mesa'],
                ['TOSTADA DE PULPO','$ 80.00','1 pieza'],
                ['TOSTADA DE CAMARÓN','$ 80.00','1 pieza'],
                ['ORDEN DE PULPO A LA GALLEGA','$ 160.00','Bañado con aceite de oliva y con un toque de pimentón Únicamente los jueves'],
                ['TACOS DE CAMARÓN','$ 150.00','3 piezas'],
                ['QUESADILLAS DE MARLIN','$ 120.00','3 piezas'],
                ['QUESO FUNDIDO CON CHORIZO','$ 100.00',''],
                ['POLLO TOLUCA','$ 105.00','Queso fundido con chorizo, pollo y cilantro'],
                ['CHAMPIÑONES CON CAMARÓN AL AJILLO','$ 150.00',''],
                ['ALITAS DE POLLO ADOBADAS','$ 120.00','6 piezas'],
                ['EMPANADAS','$ 60.00','1 pieza <br>Queso/Elote con queso/Camarón/Espinacas con queso'],
                ['DEDOS DE QUESO','$ 90.00','6 piezas']
            ]
        }
        ,{
            nomGeneral: 'ENSALADAS', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['ENSALADA CÉSAR','$ 140.00',''],
                ['ENSALADA DE ATÚN','$ 115.00',''],
                ['ENSALADA DE POLLO','$ 110.00',''],
                ['ENSALADA MIXTA','$ 90.00','Lechuga, jitomate, cebolla, aguacate, pimiento morrón verde y rojo, granos de elote y zanahoria rayada'],
            ]
        }
        ,{
            nomGeneral: 'SOPAS Y CREMAS', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['SOPA AZTECA','$ 80.00',''],
                ['SOPA DE CEBOLLA','$ 70.00',''],
                ['SOPA DE HONGOS','$ 70.00',''],
                ['CONSOMÉ DE POLLO','$ 70.00',''],
                ['CREMA DE CHAMPIÑONES','$ 80.00',''],
                ['CREMA DE ELOTE','$ 80.00',''],
                ['ARROZ CON MARISCOS','$ 150.00','Camarón y pulpo'],
                
            ]
        }
        ,{
            nomGeneral: 'PASTAS', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['ESPAGUETI ALFREDO','$ 100.00','A la crema con trocitos de jamón de pierna'],
                ['ESPAGUETI A LA BOLOÑESA','$ 120.00','El clásico con salsa italiana y carne molida de res'],
                ['ESPAGUETI A LA MARINERA','$ 160.00','Con camarones, pulpo y trocitos de pescado sazonados con salsa de jitomate'],
                ['ESPAGUETI A LA MANTEQUILLA','$ 100.00',''],
                ['FETUCCINI A LA ITALIANA','$ 100.00',''],
                
            ]
        }
        ,{
            nomGeneral: 'CARNES Y CORTES AMERICANOS', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['FILETE DE RES A LA PLANCHA','$ 250.00','230 gramos'],
                ['FILETE DE RES RANCHERO','$ 250.00','Un huevo estrellado montado sobre filete de 230 gramos bañados con salsa ranchera y guarnición de arroz'],
                ['BROCHETA DE FILETE','$ 250.00','230 gramos'],
                ['FILETE MIGNON','$ 250.00','230 gramos'],		
                ['FILETE MAR Y TIERRA','$ 260.00','Camarón gigante montado sobre filete de 230 gramos y guarnición de verduras al vapor'],
                ['PUNTAS DE FILETE AL CHIPOTLE. O A LA MEXICANA','$ 200.00','230 gramos'],
                ['MEDALLONES DE FILETE AL GUSTO','$ 250.00','250 gramos'],
                ['MEDALLONES DE LA CASA','$ 260.00','Tres piezas de medallón de filete de res a la plancha sobre un espejo de salsa de la casa y montados respectivamente con flor de calabaza, huitlacoche y queso filadelfia. <br>250 gramos'],
                ['ARRACHERA DE RES','$ 230.00','250 gramos'],	
                ['CARNE ASADA A LA TAMPIQUEÑA.','$ 230.00','80 gramos'],
                ['MILANESA DE RES','$ 140.00','230 gramos'],		
                ['NEW YORK','$ 300.00','350 gramos'],			
                ['RIB EYE','$ 300.00','350 gramos'],			
                ['T-BONE','$ 300.00','350 gramos'],			
            ]
        }
        ,{
            nomGeneral: 'PESCADOS Y MARISCOS', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['COCKTEL DE PULPO','$ 90.00',''],
                ['CEVICHE DE MARLIN','$ 150.00',''],
                ['AGUACATE RELLENO DE ATÚN','$ 130.00',''],
                ['COCKTEL DE CAMARÓN CHICO','$ 90.00',''],
                ['COCKTEL DE CAMARÓN GRANDE','$ 180.00',''],
                ['AGUACHILE DE CAMARÓN','$ 200.00','Platillo elaborado con camarón crudo'],
                ['AGUACHILE MIXTO','$ 230.00','Platillo elaborado con camarón y callo de hacha crudos'],
                ['FILETE DE PESCADO AL GUSTO','$ 200.00',''],
                ['FILETE DE PESCADO DE LA CASA','$ 230.00','Filete hervido y bañado con salsa bechamel, acompañado de camarones, champiñones y espinacas, gratinado y con guarnición de arroz blanco. <br>180 gramos '],
                ['RUEDA DE ROBALO AL GUSTO','$ 230.00','180 gramos'], 
                ['SALMÓN A LA PLACHA','$ 240.00','180 gramos'], 
                ['CAMARONES GIGANTES AL GUSTO','$ 260.00','6 piezas'],
            ]
        }
        ,{
            nomGeneral: 'POLLO', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['PECHUGA A LA PLANCHA','$ 160.00',''],
                ['PECHUGA DE LA CASA','$ 170.00','Servida sobre una cama de espagueti y gratinada'],
                ['PECHUGA EN SALSA DE CHAMPIÑONES','$ 170.00',''],
                ['PECHUGA CORDON BLEU','$ 170.00',''],
                ['PECHUGA A LA PARMESANA','$ 180.00',''],
                ['PECHUGA A LA CAMPESINA','$ 170.00','En tres trozos rellenos de champiñones, cebolla, jitomate y queso manchego, respectivamente bañados con salsa roja, crema y salsa verde'],
                ['PIERNA Y MUSLO ESTILO SALTILLO','$ 150.00','A la plancha bañados con salsa de chile guajillo y acompañados con arroz'],
                ['PIERNA Y MUSLO A LA PLANCHA','$ 150.00',''],
                ['MILANESA DE POLLO','$ 170.00',''],
                ['FAJITAS DE POLLO','$ 170.00',''],
        
            ]
        }
        ,{
            nomGeneral: 'TACOS', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['TACOS DE BISTEC','$ 135.00','Orden de 3'],	
                ['TACOS DE BISTEC CON QUESO','$ 175.00','Orden de 3'],
                ['TACOS CAMPECHANOS','$ 145.00','Bistec con chorizo Orden de 3'],
                ['TACOS DE COSTILLA','$ 135.00','Orden de 3	'],
                ['TACOS DE COSTILLA CON QUESO','$ 175.00','Orden de 3'],	
                ['TACOS DE ARRACHERA','$ 160.00','Orden de 3'],	
                ['TACOS DE ARRACHERA CON QUESO','$ 200.00','Orden de 3'],	
                ['ALAMBRE DE COSTILLA CON QUESO','$ 200.00','150 gramos'],
            ]
        }
        ,{
            nomGeneral: 'SANDWICHES Y ALGO MÁS', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['SÁNDWICH DE JAMÓN','$ 100.00',''],
                ['SÁNDWICH DE POLLO','$ 100.00',''],
                ['SÁNDWICH DE QUESO','$ 100.00',''],
                ['SÁNDWICH DE ATÚN','$ 110.00',''],
                ['CLUB SÁNDWICH','$ 180.00',''],
                ['MOLLETES CON QUESO','$ 70.00',''],
                ['MOLLETES ESPECIALES','$ 95.00','Con queso y chorizo'], 
                ['HAMBURGUESA DE LA CASA','$ 125.00',''],
                ['HAMBURGUESA DE ARRACHERA','$ 160.00',''],
                ['HOT DOGS','$ 75.00','2 piezas'],	
                ['HOT DOGS CON TOCINO','$ 90.00','2 piezas'],	
                ['QUESADILLAS DE QUESO','$ 75.00','3 piezas'],	
                ['SINCRONIZADAS','$ 120.00',''],
                ['TORTA DE PIERNA','$ 80.00',''],
                ['TORTA DE MILANESA','$ 80.00',''],
                ['PEPITO DE FILETE','$ 170.00',''],
                ['PEPITO DE PECHUGA DE POLLO','$ 150.00',''],
                ['PIZZA INDIVIDUAL','$ 100.00','Pepperoni o Hawaiana/20 centímetros de diámetro'],
            ]
        }
        ,{
            nomGeneral: 'AGREGUE A SUS PLATILLOS ORDENES EXTRA', 
            nomClass: 'comida', 
            descripPlatillo:[
                ['ORDEN DE FRIJOLES','$ 70.00',''],
                ['ORDEN DE ARROZ','$ 70.00',''],
                ['ORDEN DE GUACAMOLE','$ 80.00',''],
                ['ORDEN DE TOCINO','$ 70.00',''],
            ]
        }
        ,{
            nomGeneral: 'POSTRES', 
            nomClass: 'postre', 
            descripPlatillo:[
                ['CREPAS DE CAJETA','$ 80.00','3 piezas'],	
                ['FLAN NAPOLITANO','$ 75.00',''],
                ['DURAZNOS EN ALMIBAR','$ 75.00','2 mitades'],
                ['CHONGOS ZAMORANOS','$ 75.00',''],
                ['ATE CON QUESO','$ 75.00',''],
                ['PASTEL','$ 75.00',''],
                ['PAY DE QUESO','$ 75.00',''],
                ['HELADO 3 bolas','$ 75.00','Fresa/Vainilla/Chocolate'],
            ]
        }
        ,{
            nomGeneral: 'HELADOS NATURLICH', 
            nomClass: 'postre', 
            descripPlatillo:[
                ['COCO','$ 65.00','Servido en cáscara'],
                ['ELOTE','$ 65.00','Servido en cáscara'],
                ['MANGO','$ 65.00','Servido en cáscara'],
                ['NARANJA','$ 65.00','Servido en cáscara (Sólo en temporada)'],
                ['VAINILLA CHIPS','$ 65.00',''],
                ['CHOCOLATE','$ 65.00',''],
                ['MOKA','$ 65.00',''],
                ['DULCE DE LECHE','$ 65.00',''],
                ['YOGHURT DE FRESA','$ 65.00',''],
                ['YOGHURT NATURAL CON ZARZAMORA','$ 65.00',''],
            ]
        }
        ,{
            nomGeneral: 'CAFÉS Y TÉS', 
            nomClass: 'bebida', 
            descripPlatillo:[
                ['CAFÉ AMERICANO','$ 30.00',''],
                ['CAFÉ EXPRESSO','$ 30.00',''],
                ['CAFÉ CON LECHE','$ 30.00',''],
                ['CAFÉ CAPUCHINO','$ 50.00',''],
                ['CAFÉ SOLUBLE','$ 30.00',''],
                ['INFUSIONES Y TÉS','$ 30.00',''],
            ]
        }
        ,{
            nomGeneral: 'JUGOS', 
            nomClass: 'bebida', 
            descripPlatillo:[
                ['JUGO NATURAL','$ 40.00','Naranja/Zanahoria'],
                ['JUGO NATURAL COMBINADO','$ 40.00','De naranja con zanahoria'],
                ['JUGO NATURAL COMBINADO','$ 55.00','De naranja con papaya'],
                ['JUGO DE CAJA','$ 40.00','Piña/Manzana/Uva/Tomate/Toronja'],
            ]
        }
        ,{
            nomGeneral: 'CON LECHE', 
            nomClass: 'bebida', 
            descripPlatillo:[
                ['CHOCOLATE CALIENTE','$ 35.00',''],
                ['CHOCOLATE FRÍO','$ 50.00',''],
                ['VASO DE LECHE','$ 30.00',''],
                ['LICUADO','$ 50.00','Plátano/Papaya'],	
                ['MALTEADA','$ 60.00','Fresa/Vainilla/Chocolate'],
                ['HIELERA','$ 25.00',''],
            ]
        }
        ,{
            nomGeneral: 'BEBIDAS', 
            nomClass: 'bebida', 
            descripPlatillo:[
                ['AGUA EMBOTELLADA','$ 20.00','500 ml'],	
                ['AGUA EMBOTELLADA','$ 30.00','1 lt'],
                ['REFRESCO','$ 35.00',''],
                ['NARANJADA','$ 40.00',''],
                ['LIMONADA','$ 40.00',''],
                ['JARRA DE NARANJADA O LIMONADA GRANDE','$ 100.00','2 litros'],	
                ['JARRA DE NARANJADA O LIMONADA CHICA','$ 70.00','1 litro'],
                ['JARRA DE AGUA DE FRUTA GRANDE','$ 100.00','2 litros'],	
                ['JARRA DE AGUA DE FRUTA CHICA','$ 70.00','1 litro'],
                ['JARRA DE CLERICOT','$ 240.00','2 lt/375 ml de vino tinto'],
            ]
        }
        ,{
            nomGeneral: 'CERVEZAS', 
            nomClass: 'bebida', 
            descripPlatillo:[
                ['CORONA','$ 45.00','355 ml'],
                ['VICTORIA','$ 45.00','355 ml'],
                ['STELLA ARTOIS','$ 55.00','330 ml'],
                ['PACÍFICO','$ 45.00','355 ml'],
                ['NEGRA MODELO','$ 45.00','355 ml'],
                ['MODELO ESPECIAL','$ 45.00','355 ml'],
                ['MODELO LATA','	$ 45.00','355 ml'],
                ['BOHEMIA CLARA','$ 45.00','355 ml'],
                ['BOHEMIA OSCURA','$ 45.00','355 ml'],
                ['XX LAGER','$ 45.00','325 ml'],		
                ['HEINEKEN','$ 50.00','330 ml'],	
                ['INDIO','$ 45.00','325 ml'],	
                ['TECATE LATA','$ 45.00','355 ml'],
                ['TECATE LIGHT LATA','$ 45.00','355 ml'],
                ['CARIBE COOLER','$ 45.00',''],
                ['RED BULL','$ 65.00',''],
                ['CERVEZA CON CLAMATO','$ 60.00',''],
                ['AMSTEL ULTRA','$ 50.00',''],
                ['MICHELOB ULTRA','$ 50.00',''],
            ]
        }
        ,{
            nomGeneral: 'VINOS DE MÉXICO', 
            nomClass: 'vinotinto', 
            descripPlatillo:[
                ['PEDRO DOMEQ XA','$ 160.00','VALLE DE CALAFIA B.C./Tipo de uva: Cabernet Sauvignon y Grenache/Botella de 375 ml'],
                ['PEDRO DOMEQ XA','$ 290.00','VALLE DE CALAFIA B.C./ Tipo de uva: Cabernet Sauvignon y Grenache/Botella de 750 ml'],
            ]
        }
        ,{
            nomGeneral: 'VINOS DE ESPAÑA', 
            nomClass: 'vinotinto', 
            descripPlatillo:[
                ['SANGRE DE TORO','$ 240.00','RESERVA/D.O. CATALUÑA/Tipo de uva: Garnacha Tinta y Cariñena/Botella de 375 ml'],
                ['GRAN SANGRE DE TORO','$ 500.00','RESERVA/D.O. CATALUÑA/Tipo de uva: Garnacha Tinta y Syrah/Botella de 750ml'],
                ['PROTOS','$ 500.00','ROBLE/RIBERA DEL DUERO/Tipo de uva: Tempranillo Botella de 750 ml'],
                ['MARQUÉS DE CÁCERES','$ 550.00','CRIANZA/D.O. RIOJA/Tipo de uva: Tempranillo, Garnacha Tinta y Graciano/Botella de 750 ml'],
            ]
        }
        ,{
            nomGeneral: 'VINOS DE CHILE', 
            nomClass: 'vinotinto', 
            descripPlatillo:[
                ['RESERVADO CONCHA Y TORO','$ 160.00','VALLE CENTRAL/Tipo de uva: Cabernet Sauvignon y Carmenere/Botella de 375 ml'],
                ['RESERVADO CONCHA Y TORO','$ 310.00','VALLE CENTRAL/Tipo de uva: Cabernet Sauvignon y Carmenere/Botella de 750 ml'],
                ['CASILLERO DEL DIABLO','$ 250.00','VALLE CENTRAL/Tipo de uva: Cabernet Sauvignon Botella de 375 ml'],
                ['CASILLERO DEL DIABLO','$ 450.00','VALLE CENTRAL/Tipo de uva: Cabernet Sauvignon Botella de 750 ml'],
            ]
        }
        ,{
            nomGeneral: 'VINOS DE ARGENTINA', 
            nomClass: 'vinotinto', 
            descripPlatillo:[
                ['FINCA LAS MORAS','$ 300.00','CRIANZA/VALLE DEL PEDERNAL/Tipo de uva: Malbec Botella de 750 ml'],
                ['LAS MORAS','$ 400.00','RESERVA/VALLE DEL PEDERNAL/Tipo de uva: Cabernet Sauvignon y Shyra/Botella de 750 ml'],
            ]
        }
        ,{
            nomGeneral: 'VINOS BLANCOS', 
            nomClass: 'vino', 
            descripPlatillo:[
                ['DIAMANTE','$ 340.00','VINO SEMIDULCE<br>D.O. RIOJA/Tipo de uva: Viura y Malvasía<br>Botella de 750 ml'],
                ['RICCADONNA/VINO ESPUMOSO','$ 430.00','ASTI ITALIANO DULCE, ENVASADO DE ORIGEN<br>Botella de 750 ml'],
                ['CAPETTA/VINO ESPUMOSO','$ 320.00','ASTI ITALIANO DULCE, ENVASADO DE ORIGEN<br>Botella de 750 ml'],
            ]
        }
        ,{
            nomGeneral: 'VINOS TINTOS', 
            nomClass: 'vino', 
            descripPlatillo:[
                ['LA REDONDA TINTO RUBY','$ 250.00','VINO DE MESA DULCE<br>EZEQUIEL MONTES QRO. MEXICO<br>Botella de 750 ml'],
                ['RIUNITE/ESPUMOSO','$ 250.00','LAMBRUSCO, VINO TINTO ITALIANO<br>Botella de 750 ml'],
            ]
        }
        ,{
            nomGeneral: 'TEQUILA COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['100 AÑOS REPOSADO','$ 60.00',''],
                ['HORNITOS','$ 75.00',''],
                ['EL JIMADOR','$ 70.00',''],
                ['CORRALEJO','$ 75.00',''],
                ['CAZADORES','$ 75.00',''],
                ['DON JULIO BLANCO','$ 115.00',''],
                ['DON JULIO REPOSADO','$ 140.00',''],
                ['DON JULIO 70','$ 160.00',''],
                ['HERRADURA REPOSADO','$ 140.00',''],
                ['TRADICIONAL REPOSADO','$ 75.00',''],
                ['CENTENARIO REPOSADO','$ 75.00',''],
                ['1800 REPOSADO','$ 100.00',''],
            ]
        }
        ,{
            nomGeneral: 'MEZCAL COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['400 CONEJOS ESPADIN','$ 125.00',''],

            ]
        }
        ,{
            nomGeneral: 'RON COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['BACARDÍ BLANCO','$ 60.00',''],
                ['BACARDÍ AÑEJO','$ 60.00',''],
                ['BACARDÍ SOLERA','$ 65.00',''],
                ['APPLETON BLANCO','$ 60.00',''],
                ['APPLETON SPECIAL','$ 65.00',''],
                ['APPLETON STATE','$ 75.00',''],
                ['HABANA CLUB 7 AÑOS','$ 95.00',''],
                ['FLOR DE CAÑA 7 AÑOS','$ 85.00',''],
                ['FLOR DE CAÑA 12 AÑOS','$ 140.00',''],
            ]
        }
        ,{
            nomGeneral: 'BRANDY COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['PRESIDENTE','$ 60.00',''],
                ['DON PEDRO','$ 60.00',''],
                ['AZTECA DE ORO','$ 60.00',''],
                ['FUNDADOR','$ 65.00',''],
                ['TORRES 5','$ 60.00',''],
                ['TORRES 10','$ 70.00',''],
                ['TORRES 15','$ 115.00',''],
                ['TORRES 20','$ 160.00',''],
                ['TERRY','$ 75.00',''],
                ['MAGNO','$ 75.00',''],
                ['CARLOS I','$ 190.00',''],
                ['GRAN DUQUE DE ALBA','$ 190.00',''],
                ['CARDENAL DE MENDOZA','$ 190.00',''],
                ['LEPANTO','$ 190.00',''],
            ]
        }
        ,{
            nomGeneral: 'GINEBRA COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['BEEFEATER','$ 90.00',''],
                ['TANQUERAY','$ 90.00',''],
            ]
        }
        ,{
            nomGeneral: 'VODKA COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['SMIRNOFF TONIC','$ 60.00',''],
                ['SMIRNOFF C/JUGO','$ 65.00',''],
                ['STOLICHNAYA TONIC','$ 70.00',''],
                ['ABSOLUT TONIC','$ 70.00',''],
                ['ABSOLUT C/JUGO','$ 75.00','']
            ]
        }
        ,{
            nomGeneral: 'VODKA COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['SMIRNOFF TONIC','$ 60.00',''],
                ['SMIRNOFF C/JUGO','$ 65.00',''],
                ['STOLICHNAYA TONIC','$ 70.00',''],
                ['ABSOLUT TONIC','$ 70.00',''],
                ['ABSOLUT C/JUGO','$ 75.00','']
            ]
        }
        ,{
            nomGeneral: 'WHISKY COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['JOHNNIE WALKER RED LABEL','$ 85.00',''],
                ['JOHNNIE WALKER BLACK LABEL','$ 160.00',''],
                ['CHIVAS REGAL','$ 160.00',''],
                ['BUCHANAN´S','$ 160.00',''],
                ['BUCHANAN´S 18 AÑOS','$ 280.00',''],
                ['J.B.','$ 80.00',''],
                ['BALLANTINE´S','$ 80.00',''],
            ]
        }

        ,{
            nomGeneral: 'LICORES COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['AGAVERO','$ 70.00',''],
                ['ANÍS DOMEQ','$ 70.00',''],
                ['ANÍS CHINCHÓN','$ 70.00',''],
                ['ANÍS CADENAS','$ 80.00',''],
                ['AMARETTO','$ 100.00',''],
                ['LICOR 43','$ 100.00',''],
                ['GALLIANO','$ 100.00',''],
                ['BAILEY´S','$ 90.00',''],
                ['SAMBUCA VACCARI NEGRO','$ 75.00',''],
                ['SAMBUCA VACCARI BLANCO','$ 75.00',''],
                ['MALIBÚ','$ 75.00',''],
            ]
        }

        
        
        ,{
            nomGeneral: 'COGNAC COPA CON 2 ONZAS', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['MARTEL V.S.','$ 150.00',''],
                ['COURVOISIER','$ 170.00',''],
                ['MARTEL V.S.O.P.','$ 170.00',''],
                ['RÉMY MARTIN','$ 190.00',''],
                ['HENNESSY','$ 190.00',''],
            ]
        }
        ,{
            nomGeneral: 'COCKTELERÍA', 
            nomClass: 'cocktail', 
            descripPlatillo:[
                ['ALFONSO XIII','$ 70.00',''],
                ['BESO DE ÁNGEL','$ 70.00',''],
                ['BLOODY MARY','$ 70.00',''],
                ['CONGA','$ 70.00',''],
                ['DESARMADOR','$ 70.00',''],
                ['MARGARITA','$ 75.00',''],
                ['MEDIAS DE SEDA','$ 70.00',''],
                ['PIÑA COLADA','$ 80.00',''],
                ['RUSO BLANCO','$ 70.00',''],
                ['RUSO NEGRO','$ 70.00',''],
                ['SANGRÍA','$ 80.00',''],
                ['CLAMATO','$ 75.00',''],
                ['VAMPIRO','$ 80.00',''],
                ['PIEDRA','$ 80.00',''],
                ['BULL','$ 90.00',''],
                ['SPLASH','$ 100.00',''],
                ['CARAJILLO','$ 120.00',''],
                ['JARRA DE CLERICOT','$ 240.00','2 lt/375 ml de vino tinto'],
            ]
        }

        ,{
            nomGeneral: 'TEQUILA POR BOTELLA', 
            nomClass: 'botella', 
            descripPlatillo:[
                ['100 AÑOS REPOSADO','$ 600.00','700 ml'],
                ['HORNITOS','$ 750.00','700 ml'],
                ['EL JIMADOR','$ 650.00','700 ml'],
                ['CORRALEJO','$ 750.00','700 ml'],
                ['CAZADORES','$ 750.00','750 ml'],
                ['DON JULIO REPOSADO','$ 1,400.00','750 ml'],
                ['DON JULIO 70','$ 1,900.00','750 ml'],
                ['HERRADURA REPOSADO','$ 1,400.00','700 ml'],
                ['TRADICIONAL REPOSADO','$ 750.00','695 ml'],
                ['CENTENARIO REPOSADO','$ 750.00','700 ml'],
            ]
        }
        ,{
            nomGeneral: 'MEZCAL POR BOTELLA', 
            nomClass: 'botella', 
            descripPlatillo:[
                ['400 CONEJOS','750 ml','$ 1300.00'],
      
            ]
        }
        
        ,{
            nomGeneral: 'RON POR BOTELLA', 
            nomClass: 'botella', 
            descripPlatillo:[
                ['BACARDÍ BLANCO','750 ml','$ 650.00'],
                ['APPLETON STATE','750 ml','$ 750.00'],
                ['HABANA CLUB 7 AÑOS','750 ml','$ 900.00'],
      
            ]
        }
        
        ,{
            nomGeneral: 'BRANDY POR BOTELLA', 
            nomClass: 'botella', 
            descripPlatillo:[

                ['FUNDADOR','$ 650.00','700 ml'],
                ['TORRES 5','$ 650.00','700 ml'],
                ['TORRES 10','$ 750.00','700 ml'],
                ['TERRY','$ 750.00','700 ml'],
            ]
        }

        ,{
            nomGeneral: 'WHISKY POR BOTELLA', 
            nomClass: 'botella', 
            descripPlatillo:[
                ['JOHNNIE WALKER RED LABEL','$ 800.00','700 ml'],
                ['JOHNNIE WALKER BLACK LABEL','$ 1,900.00','750 ml'],
                ['CHIVAS REGAL','$ 1,900.00','750 ml'],
                ['BUCHANAN´S','$ 1,900.00','750 ml'],
                ['J.B.','$ 700.00','750 ml'],
                ['BALLANTINE´S','$ 700.00','750 ml'],

            ]
        }
        ,{
            nomGeneral: 'COGNAC POR BOTELLA', 
            nomClass: 'botella', 
            descripPlatillo:[
                ['MARTEL V.S.','$ 1,500.00','700 ml'],
                ['COURVOISIER','$ 1,900.00','700 ml'],
                ['MARTEL V.S.O.P.','$ 1,900.00','700 ml'],
                ['RÉMY MARTIN','$ 2,100.00','700 ml'],
                ['HENNESSY','$ 2,100.00','700 ml']

            ]
        }
        ,{
            nomGeneral: 'GINEBRA POR BOTELLA', 
            nomClass: 'botella', 
            descripPlatillo:[
                ['BEEFEATER','$ 900.00','750 ml'],
                ['TANQUERAY','$ 900.00','750 ml']
            ]
        }
        ,{
            nomGeneral: 'VODKA POR BOTELLA', 
            nomClass: 'botella', 
            descripPlatillo:[
                ['SMIRNOFF','$ 700.00','750 ml'],
                ['ABSOLUT','$ 750.00','750 ml']
            ]
        }
        
  
        			
        
       
        
        
        

        
        


        



 
        ];

        
        

        	 
        






        

       var htmlMenu="";
       contador=0;
       menuDesayunos.forEach((element, index, array) => {
            // console.log("entra"); // 100, 200, 300
            htmlMenu="";
            htmlMenu+="<div class='accordion accordion-flush "+element.nomClass+"' data-f="+element.nomClass+" id='accordionFlushExample"+index+"'><div class='accordion-item'><h6 class='accordion-header' id='flush-headingOne"+index+"'><button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapseOne"+index+"' aria-expanded='false' aria-controls='flush-collapseOne"+index+"'>"+element.nomGeneral+"</button></h6>";
            htmlMenu+="<div id='flush-collapseOne"+index+"' class='accordion-collapse collapse' aria-labelledby='flush-headingOne"+index+"' data-bs-parent='#accordionFlushExample"+index+"'><div class='accordion-body '><div class='row'>";
            element.descripPlatillo.forEach((element1, index1, array1) => {
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
    $(".botonMenu").removeClass("filter-active");
    $(elementoid).addClass("filter-active");
    $(elementoid).attr("data-filter")
    if($(elementoid).attr("data-filter") == "botella"){
        $("#notas").html("EL SERVICIO POR BOTELLA INCLUYE:<br>5 REFRESCOS DE 235 ML<br>1 HIELERA");
    }else{
        $("#notas").html("");
    }

    $("#p_row").find(".accordion-flush").each(function( index ) {
        if($(elementoid).attr("data-filter") == "todos"){
            $(this).show();
        }else{
            if($(this).attr("data-f") == $(elementoid).attr("data-filter")){
                $(this).show();
            }else{
                $(this).hide();
            }
        }

    });

}
                
    
                
