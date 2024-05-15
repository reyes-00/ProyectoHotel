@extends('paginaHotelMetepec.layout.app')
@section('contenido')
	<!-- Page Banner Start -->
    <div class="page__banner" data-background="assets/img/banner/page-banner-7.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        {{-- <h1>Blog</h1>
                        <div class="page__banner-title-menu">
                           
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Page Banner End -->
			<!-- Blog Standard Start -->
			<div class="blog__standard  p-5">
        <div class="container">
            <div class="row">
                {{-- <a class="twitter-timeline" href="https://twitter.com/XDevelopers?ref_src=twsrc%5Etfw">Tweets by XDevelopers</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                <div class="col-xxl-12 col-xl-12 col-lg-12 lg-mb-30" style="text-align:justify">
                    <div class="page__banner-title pb-4">
                        <h3 class="text-center">Políticas del hotel</h3>
                    </div>  
                    <p>
                    <b>1.CHECK IN</b> – 15:00 hrs la habitación se le proporcionará a partir este horario en el cual ya debe estar pagada su noche, de lo contrario no se respetará su estancia.
                    <b>CHECK OUT</b> – 12:00 hrs Si desea cambiar la fecha de salida le recomendamos notificarlo en la recepción. Si desea un late check out, (15:00) deberá solicitarlo a recepción., tendrá un costo de $350.00 M.N y deberá verificarse la disponibilidad  de la habitación. En el caso de exceder este tiempo, se le hará un cargo del 50% de 1 noche. Lo anterior conforme a lo señalado en la NOM-010- TUR·2001.
                    ​</p>
                    <p >
                        <b>2.</b> Por su seguridad y la de todos los huéspedes, el hotel solicitará sin excepción alguna copia de identificación oficial vigente (INE, PASAPORTE, LICENCIA, VISA, etc.) al momento de su registro y en el momento de su pago.
                    ​​</p>
                    <p>
                        <b>3.</b> El huésped deberá hacer el pago completo de la estadía en el check in. Todo huésped al registrarse deberá establecer su forma de pago ya sea con algún medio electrónico o efectivo. Si el cliente paga con moneda extranjera, se le hará un cargo adicional por la conversión en moneda nacional.
                    ​​</p>
                    <p>
                        <b>4.</b> Por razones de seguridad, se prohíbe el acceso a las habitaciones a cualquier persona que no esté hospedada en el hotel. Únicamente podrá ingresar a las habitaciones la o las personas que se registren previamente en la recepción.
                    ​​</p>
                    <p>
                        <b>5.</b> En caso de alguna perdida de llave, este tendrá un costo de $200 MXN.
                    </p>
                    <p>
                        <b>6.</b> Se revisarán las habitaciones en el proceso del check out. En caso de algún faltante o daño en el inmueble, muebles, aparatos electrónicos o blancos, se le generará el cobro por el mismo.
                    ​​</p>
                    <p>
                        <b>7.</b> Todas las habitaciones e instalaciones interiores son áreas de no fumar, sólo se permite fumar en áreas determinadas.
                        El huésped se compromete a cumplir con esta norma, de lo contrario el hotel podrá solicitarle que desocupe la habitación por violar esta disposición
                    ​</p>
                    <p>
                        <b>8.</b> Por la seguridad y tranquilidad el horario de áreas públicas es de 8:00 hrs. a 22:00 hrs., fuera de este horario su estancia en las áreas comunes deberá ser exclusivamente ambulatoria.
                    ​</p>
                    <p>
                        <b>9.</b> Está prohibida la entrada y permanencia de animales en cualquiera de las dependencias del hotel.
                    ​​</p>
                    <p>
                        <b>10.</b> Al ingresar a su habitación reporte o avise cualquier anomalía o desperfecto a recepción, no trate de repararlo por su cuenta
                    ​</p>
                    <p>
                        <b>11.</b> El huésped se compromete a entregar cualquier objeto perteneciente al hotel que le haya sido prestado, en las condiciones que le fueron entregados. De lo contrario, tendrá que cubrir el costo de la reparación, o en su caso, de la pérdida total o parcial. El importe queda a criterio del hotel.
                    ​​</p>
                    <p>
                        <b>12.</b> El hotel no se hace responsable de ningún tipo de accidente y/o suceso, que el huésped sufra dentro de las instalaciones del hotel tales como caídas, golpes, entre otros. Los gastos que este accidente o suceso originen correrán por cuenta del huésped, eximiendo al hotel de cualquier responsabilidad de carácter legal.
                    ​​</p>
                    <p>
                        <b>13.</b> El hotel no se hace responsable por objetos de valor dejados u olvidados dentro de su habitación y/o en áreas comunes.
                    ​​</p>
                    <p>
                        <b>14.</b> Objetos olvidados encontrados en las habitaciones del hotel se guardarán por hasta 30 (treinta) días.
                    ​</p>
                    <p>
                        <b>15.</b> Política de cancelación: Todas las reservaciones se pueden cancelar 24 hrs previas (temporada baja) y 48 horas previas (temporada alta) a la llegada sin cargo; cancelaciones posteriores a las 24 ó 48 horas tendrán un cargo de no show por la primera noche. Habitaciones no garantizadas se vencen a las 18:00 hrs del día de llegada y el hotel podrá disponer de las mismas.
                    ​</p>
                    <p>
                        <b>16.</b> El hotel rescindirá el contrato de hospedaje y pedirá al huésped que desocupe la habitación en los siguientes casos:
                    ​</p>
                    <p>
                    <b>a.</b> Por violar las disposiciones de este reglamento.<br>
                    <b>b.</b> Cuando el huésped escandalice, cometa faltas a la moral o cause molestias a otros huéspedes del hotel.<br>
                    <b>c.</b> Si causa daños materiales al establecimiento, sin perjuicio del pago de indemnización correspondiente.<br>
                    <b>d.</b> Si el huésped cometiere delito o ingrese cualquier tipo de armas de fuego o armas blancas, explosivos, así como cualquier otra sustancia o producto prohibido por la ley.<br>
                    <b>e.</b> Si se ausenta del hotel por más de 48 hrs., sin previo aviso a la administración.<br>
                    <b>f.</b> Si el huésped padece de alguna enfermedad o conducta que ponga en riesgo a huéspedes o personal del hotel.<br>
                    <b>g.</b> Cuando se pretenda dar uso distinto al del servicio de hospedaje.<br>
                    ​</p>
                    <p>
                    El incumplimiento de este reglamento será causal de rescisión del contrato de servicio de hospedaje.
                    <br>
                    </p>
                    <div class="header__area-menubar-right-box-btn text-center" >
                        <a class="theme-btn" href="{{ asset('assets/pdf/POLITICAS_HOTEL_METEPEC_PLAZA.pdf') }}" style="font-size: 12px;padding: 10px 15px;" download>Descargar políticas<i class="fal fa-long-arrow-down"></i></a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
	<!-- Blog Standard End -->

@endsection

