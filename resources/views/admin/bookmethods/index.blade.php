@extends('layouts.admin')
@section('content')

       <div class="row">
           <div class="col-lg-6">
               <div class="grid">
                   <p class="grid-header">Basic Table</p>
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
                               @if($bookMethods)
                                   @foreach($bookMethods as $bookMethod)
                                       <tr>
                                           <td>{{$bookMethod-> id}}</td>
                                           <td>{{$bookMethod-> name}}</td>
                                           <td><a href="{{route('admin.bookmethods.edit', $bookMethod->id)}}">edit</a></td>

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

                       {!! Form::open(['method'=>'POST', 'action' => 'AdminBookMethodController@store']) !!}
                       <div class="col-md-3 showcase_text_area">
                           {!! Form::label('name', 'Название') !!}

                       </div>
                       <div class="col-md-9 showcase_content_area">
                           {!! Form::text('name', null, ['class'=>'form-control'], ['placeholder'=> 'Способ оплаты']) !!}
                       </div>

                       {!! Form::submit('Добавить', ['class'=>'btn btn-sm btn-primary']) !!}

                       {!! Form::close() !!}



                   </div>
               </div>
           </div>
       </div>


@stop
