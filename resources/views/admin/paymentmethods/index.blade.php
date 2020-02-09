@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1>Способ оплаты</h1>
        </div>
    </div>
       <div class="row">
           <div class="col-lg-6">
               <div class="grid">
                   <p class="grid-header">Список игр</p>
                   <div class="item-wrapper">
                       <div class="table-responsive">
                           <table class="table info-table">
                               <thead>
                               <tr>
                                   <th>id</th>
                                   <th>Способ оплаты</th>

                               </tr>
                               </thead>
                               <tbody>
                               @if($paymentMethods)
                                   @foreach($paymentMethods as $paymentMethod)
                                       <tr>
                                           <td>{{$paymentMethod-> id}}</td>
                                           <td>{{$paymentMethod-> name}}</td>
                                           <td><a href="{{route('admin.paymentmethods.edit', $paymentMethod->id)}}">edit</a></td>

                                           <td class="actions">
                                               <i class="mdi mdi-dots-vertical"></i>
                                           </td>
                                       </tr>
                                   @endforeach
                               @endif

                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="grid">
                   <p class="grid-header">Добавить игру</p>
                   <div class="grid-body">
                       <div class="item-wrapper">


                       </div>

                       {!! Form::open(['method'=>'POST', 'action' => 'AdminPaymentMethodController@store']) !!}
                       <div class="col-md-3 showcase_text_area">
                           {!! Form::label('name', 'Название') !!}

                       </div>
                       <div class="col-md-9 showcase_content_area">
                           {!! Form::text('name', null, ['class'=>'form-control'], ['placeholder'=> 'Название игры']) !!}
                       </div>

                       {!! Form::submit('Добавить', ['class'=>'btn btn-sm btn-primary']) !!}

                       {!! Form::close() !!}



                   </div>
               </div>
           </div>
       </div>


@stop
