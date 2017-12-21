@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col l8 offset-l2">
      <div class="card large ">
        <div class="card-content blue-text">
          <span class="card-title">Tambah</span>
          <form action="{{route('case.store')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="userId" value="{{Auth::id()}}">
            <div class="input-field col s12">
              <input id="icon_prefix" type="text" class="validate" name="title">
              <label for="icon_prefix">Nama Kasus</label>
            </div>
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" name="desc"></textarea>
              <label for="textarea1">Deskripsi</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" type="text" class="validate" name="target">
              <label for="icon_prefix">Dana Target</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" type="text" class="validate" name="city">
              <label for="icon_prefix">Kota</label>
            </div>
        </div>
        <div class="card-action">
          <button type="submit" class="btn waves-effect waves-light blue"><i class="material-icons right">send</i> Kirim</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
