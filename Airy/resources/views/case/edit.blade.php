@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col l8 offset-l2">
      <div class="card large ">
        <div class="card-content blue-text">
          <span class="card-title">Ubah Kasus</span>
          <form action="{{route('case.update',['case' => $data->id])}}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <input type="hidden" name="userId" value="{{Auth::id()}}">
            <div class="input-field col s12">
              <input id="icon_prefix" type="text" class="validate" name="title" value="{{$data->title}}">
              <label for="icon_prefix">Nama Kasus</label>
            </div>
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" name="desc">{{$data->desc}}</textarea>
              <label for="textarea1">Deskripsi</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" type="text" class="validate" name="target" value="{{$data->target}}">
              <label for="icon_prefix">Dana Target</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" type="text" class="validate" name="city" value="{{$data->city}}">
              <label for="icon_prefix">Kota</label>
            </div>
        </div>
        <div class="card-action">
          <button type="submit" class="btn waves-effect waves-light amber"><i class="material-icons right">send</i> Kirim</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
