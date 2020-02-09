@extends('layouts.admin')
@section('content')

     <div class="row">
         <div class="col-lg-12">
         <h1>Новый сеанс</h1>
         </div>
     </div>

       <div class="row">

           <div class="col-lg-12">
               <div class="grid">
                   <p class="grid-header">Input Types</p>
                   <div class="grid-body">
                       <div class="item-wrapper">
                           <div class="row mb-3">
                               <div class="col-md-8 mx-auto">
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Цена</h4>

                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p class="text-muted">{{$session -> price_final}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Тип игры</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> typegame-> name }}</p>
                                       </div>
                                   </div><div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Дата бронирования</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> date_booking}}</p>
                                       </div>
                                   </div><div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Дата посещения</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> date_visit}}</p>
                                       </div>
                                   </div><div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Время сеанса</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> time_visit}}</p>
                                       </div>
                                   </div><div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Игра</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> game-> name}}</p>
                                       </div>
                                   </div><div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Способ бронирования</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> bookmethod-> name}}</p>
                                       </div>
                                   </div><div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Количество игроков</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> amount_visitors}}</p>
                                       </div>
                                   </div><div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Начальная цена</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> price_start}}</p>
                                       </div>
                                   </div><div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Промокод</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> promocode}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Сертификат</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> sertificate}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Конечная цена</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> price_final}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Предоплата</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> prepaid}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Оплата на месте</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> local_payment}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Способ оплаты</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> PaymentMethod -> name ?? ''}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Телефон</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> phone}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Почта</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> email}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Как нас нашли</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> found_us}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Причина посещения</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> reason_visit}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Комментарий</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> comment}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Персонал</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> staff}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Дата создания</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> created_at}}</p>
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           <h4>Дата обновления</h4>
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           <p>{{$session -> updated_at}}</p>
                                       </div>
                                   </div>















                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>






           </div>
       </div>


@stop
