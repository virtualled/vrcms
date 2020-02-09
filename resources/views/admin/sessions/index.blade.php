@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-lg-2 offset-lg-10">
        <div class="btn btn-success has-icon">
            <a href="{{ route('admin.sessions.create') }}"><i class="mdi mdi-account-plus-outline"></i>Добавить</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="grid">
            <p class="grid-header">Сеансы</p>
            <div class="item-wrapper">
                <div class="table-responsive">
                    <table class="table info-table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Дата сеансы</th>
                            <th>Время</th>
                            <th>Тип игры</th>
                            <th>Игра</th>
                            <th>Способ оплаты</th>
                            <th>Стоимость</th>
                            <th>Телефон</th>
                            <th>Почта</th>
                            <th>Персонал</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($sessions)
                            @foreach($sessions as $session)
                                <tr>
                                    <td><a href="{{ route('admin.sessions.show', $session->id) }}">{{ $session->id }}</a></td>
                                    <td>{{ $session->date_booking }}</td>
                                    <td>{{ $session->time_visit }}</td>
                                    <td>{{ $session->TypeGame->name }}</td>
                                    <td>{{ $session->game->name }}</td>
                                    <td>{{ $session->BookMethod->name }}</td>
                                    <td>{{ $session->price_start }}</td>
                                    <td>{{ $session->phone }}</td>
                                    <td>{{ $session->email }}</td>
                                    <td>{{ $session->staff }}</td>
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
</div>
@stop
