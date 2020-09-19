@extends('layouts.app')
@section('content')
    <table id="laravel_crud" class="table table-striped table-bordered">
        <thead>
            <tr>

                <th>Nombre </th>
                <th>Puesto</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trabajadores as $trabajadores)
            <tr id="row_{{$trabajadores->id}}">

               <td>{{ $trabajadores->nombre }}</td>
               <td>{{ $trabajadores->puesto }}</td>
               <td><a href="vista-trabajadores/{{ $trabajadores->id }}" class="btn btn-info">Ver Datos</a></td>
               <td>
                <a href="javascript:void(0)" data-id="{{ $trabajadores->id }}" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
      @endsection
