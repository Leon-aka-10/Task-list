@extends('layouts.master')

@section('title')
    leon's page
@endsection

@section('styles')
<style>
h2 {
    color:blue;
}
</style>
@endsection


@section('content')

<div class="col-md-12">
    <h2>welcome</h2>
    <p>This is my home page</p>

    @foreach ($data as $item)
       <li> {{$item}} </li>
    @endforeach

</div>

@endsection  

@section('scripts')

<script>
alert();
</script>

@endsection