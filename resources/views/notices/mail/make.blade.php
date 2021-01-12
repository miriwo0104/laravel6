@extends('layouts.app')

@section('content')

<form action="{{ route('notice.mail.confirm') }}" method="get">
    @csrf
    <div class="subject">
        <p>件名</p>
        <input type="text" name="subject">
    </div>
    <div class="content">
        <p>内容</p>
        <textarea name="content" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">確認</button>
</form>
    
@endsection