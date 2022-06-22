@extends('template')
@section('content')
    
<div class="jumbotron">
    <table class="table table-striped">
@foreach ($user->toArray() as $key=>$val)
    <tr>
        <td>{{ $key }}</td>
        <td>{{ $val }}</td>
    </tr>
@endforeach
    </table>
</div>

@endsection