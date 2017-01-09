@extends('layout.main')
{{-- ดึงคำสั่งจากlayout/main.blade.php --}}
@section('page_title','Hellopage')
{{-- ดึงส่วนpage_title แล้วใส่เป็นค่า Hellopage --}}
@section('content'){{-- ดึงส่วนcontent --}}
      <h1>Welcome Hello index </h1>
      <h1>{!!$title!!}</h1>
      <h1>{{$email}}</h1>
@stop
