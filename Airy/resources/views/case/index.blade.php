@extends('layouts.master')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col l8 offset-l2">
      <div class="card large">
        <div class="card-content blue-text">
          <span class="card-title">Case Management</span>
          <a href="{{route('case.create')}}"><button class="btn blue white-text right">Tambah</button></a>
          <table class="bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Target</th>
                <th>Kota</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $index => $row)
                <tr>
                  <td>{{++$index}}</td>
                  <td>{{$row->title}}</td>
                  <td>{{$row->desc}}</td>
                  <td>Rp. {{number_format($row->target)}}</td>
                  <td>{{$row->city}}</td>
                  <td>
                    <a href="{{route('case.edit',['case' => $row->id])}}">
                      <button type="button" class="btn amber btn-small"><i class="material-icons right">edit</i></button>
                    </a>
                    <form class="" action="index.html" method="post">
                      {{ csrf_field() }}
                      {{method_field('DELETE')}}
                      <button type="submit" class="btn red btn-small"><i class="material-icons right">delete</i></button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
