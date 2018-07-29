@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
   @parent
   ボード・ページ
@endsection

@section('content')
   <table>
   <tr><th>Id</th><th>Messgae</th><th>Name</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->message}}</td>
           <td>{{$item->person['name']}}</td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
