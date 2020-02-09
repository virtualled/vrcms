@extends('layouts.admin')
@section('content')

     <div class="row">
         <div class="col-lg-12">
         <h1>Редактирование способа оплаты</h1>
         </div>
     </div>

       <div class="row">
           <div class="col-lg-6 equel-grid">
               <div class="grid">
                   <p class="grid-header">Horizontal Elements</p>
                   <div class="grid-body">
                       <div class="item-wrapper">


                               </div>

                               {!! Form::model($typeGames, ['method'=>'PATCH', 'action' => ['AdminTypeGamesController@update', $typeGames->id]]) !!}
                               <div class="col-md-3 showcase_text_area">
                                   {!! Form::label('name', 'Название') !!}

                               </div>
                               <div class="col-md-9 showcase_content_area">
                                   {!! Form::text('name', null, ['class'=>'form-control'], ['placeholder'=> 'Название способа оплаты']) !!}
                               </div>

                                 {!! Form::submit('Изменить', ['class'=>'btn btn-sm btn-primary']) !!}

                               {!! Form::close() !!}



                       </div>
                   </div>
               </div>
           </div>
       </div>


@stop
