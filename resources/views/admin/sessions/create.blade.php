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
                                   {!! Form::open(['method'=>'POST', 'action' => 'AdminSessionsController@store']) !!}


                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           {!! Form::label('type_game_id', 'Тип игры' ) !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::select('type_game_id', [''=>'Не выбрано'] + $typeGame, null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           {!! Form::label('book_method_id', 'Способ бронирования' ) !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::select('book_method_id', [''=>'Не выбрано'] + $bookMethod, null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           {!! Form::label('payment_method_id', 'Способ оплаты' ) !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::select('payment_method_id', [''=>'Не выбрано'] + $paymentMethod, null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           {!! Form::label('game_id', 'Игра' ) !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::select('game_id', [''=>'Не выбрано'] + $game, null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('amount_visitors', 'Количество игроков') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::number('amount_visitors', 0, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           {!! Form::label('date_booking', 'Дата бронирования' ) !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::date('date_booking', null,['class'=> 'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           {!! Form::label('date_visit', 'Дата посещения' ) !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::date('date_visit', null,['class'=> 'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">
                                           {!! Form::label('time_visit', 'Время сеанса' ) !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::time('time_visit',null, ['class' => 'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('price_start', 'Начальная цена') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::text('price_start', null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('promocode', 'Промокод') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::text('promocode', null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>
                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('sertificate', 'Сертификат') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::text('sertificate', null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>

                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('price_final', 'Конечная цена') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::text('price_final', null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>

                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('prepaid', 'Предоплата') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::text('prepaid', null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>

                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('local_payment', 'Оплата на месте') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::text('local_payment', null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>

                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('phone', 'Телефон') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>

                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('email', 'Почта') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::email('email', null, ['class'=>'form-control']) !!}
                                       </div>
                                   </div>

                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('found_us', 'Как нас нашли') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::textarea('found_us', null, ['class'=>'form-control', 'rows'=>2]) !!}
                                       </div>
                                   </div>

                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('reason_visit', 'Повод визита') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::textarea('reason_visit', null, ['class'=>'form-control', 'rows'=>2]) !!}
                                       </div>
                                   </div>

                                   <div class="form-group row showcase_row_area">
                                       <div class="col-md-3 showcase_text_area">

                                           {!! Form::label('comment', 'Комментарий') !!}
                                       </div>
                                       <div class="col-md-9 showcase_content_area">
                                           {!! Form::textarea('comment', null, ['class'=>'form-control', 'rows'=>4]) !!}
                                       </div>
                                   </div>

                                   <div class="form-group row showcase_row_area">
                                       {!! Form::submit('Создать', ['class'=>'btn btn-sm btn-primary']) !!}

                                   </div>
                                   {!! Form::close() !!}






                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>






           </div>
       </div>


@stop
