@extends('layouts.app')
@section('V3R')
@section('content')

<div class="notif-main">
   <h1>Liens utiles</h1>
   <table class="notif-table">
      @foreach($liens as $lien)
         <tr>
               <td>
                  <a href="{{$lien->lien}}" target="blank">{{$lien->nom}}</a>
               </td>
         </tr>
      @endforeach
   </table>
</div>

@endsection