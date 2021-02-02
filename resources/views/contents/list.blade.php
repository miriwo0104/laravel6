@extends('layouts.app')

@section('content')
@if ($errors->has('content'))
    @foreach ($errors->get('content') as $content_errors)
        <p>{{$content_errors}}</p>
        <br>
    @endforeach
@endif

<form action="{{ route('content.save') }}" method="post">
    @csrf
    <input type="text" name="content" value="{{ old('content')}}">
    <input type="submit" value="登録">
</form>

@foreach ($viewData as $info)
    <div class="content_infos">
        <div class="content_id">id: {{ $info->id }}</div>
        <div class="content">content: {{ $info->content }}</div>
    </div>
    <hr>
@endforeach
@endsection