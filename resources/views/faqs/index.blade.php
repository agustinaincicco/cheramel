@extends('layouts.app')
@section('content')

<section id="faq" class="">
<div class="preguntas row justify-content-center">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <ul id="faq-list">

            <li>
              <a data-toggle="collapse" class="collapsed" href="#faq1">¿Qué formas de pago puedo aprovechar para realizar mi compra?<i class="fa fa-minus-circle"></i></a>
              <div id="faq1" class="collapse" data-parent="#faq-list">
                <p>
                    <p>Disponemos de los siguientes medios de pago:</p>
                    <img src="images/visa@2x.png" alt="">
                    <img src="images/amex@2x.png" alt="">
                    <img src="images/banelco@2x.png" alt="">
                    <img src="images/cabal@2x.png" alt="">
                    <img src="images/diners@2x.png" alt="">
                    <img src="images/mastercard@2x.png" alt="">
                    <img src="images/mercadopago@2x.png" alt="">
                    <img src="images/pagofacil@2x.png" alt="">
                    <img src="images/rapipago@2x.png" alt="">
                    <img src="images/tarjeta-shopping@2x.png" alt="">
                </p>
              </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">¿Cuál es el costo de envío?<i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                      El costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra.
                  </p>
                </div>
              </li>
              <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">¿Dónde puedo recibir mi pedido?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                        Realizamos envíos a todo el país.
                    </p>
                  </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#faq4" class="collapsed">¿Cuánto tarda en llegar el pedido?<i class="fa fa-minus-circle"></i></a>
                    <div id="faq4" class="collapse" data-parent="#faq-list">
                      <p>
                          El tiempo de entrega dependerá del tipo de envío seleccionado. En general la demora se encuentra entre 3 y 7 días hábiles luego de acreditado el pago.
                      </p>
                    </div>
                  </li>
                  <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">¿Cuál es el plazo para realizar un cambio?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                    Puedes solicitar un cambio hasta 15 días luego de realizada la compra.
                    </p>
                  </div>
                </li>
      
                  <li>
                      <a data-toggle="collapse" href="#faq6" class="collapsed">Mi cuenta está bloqueada, ¿cómo la habilito?<i class="fa fa-minus-circle"></i></a>
                      <div id="faq6" class="collapse" data-parent="#faq-list">
                        <p>
                            Luego de cinco intentos fallidos de intentar ingresar a tu cuenta de Todo Pago tu contraseña será bloqueada y recibirás un correo con la opción de recuperarla. Deberás completar la pregunta de seguridad, ingresar una nueva clave y quedará restablecida.
                        </p>
                      </div>
                    </li>
            </ul>
  </div>
</div>
</section>
@endsection
