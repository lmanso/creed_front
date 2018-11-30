@extends('layouts.app')
@section('title', 'Personnages')
@section('content')
<div>
    <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Rareness</th>
      <th scope="col">Weapon</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
@endsection