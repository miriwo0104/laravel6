@extends('layouts.app')

@section('content')

<form action="{{ route('notice.mail.send') }}" method="post">
    @csrf
    <div class="subject">
        <p>件名</p>
        <p>{{ $viewData['postData']['subject'] }}</p>
        <input type="hidden" name="subject" value="{{ $viewData['postData']['subject'] }}">
    </div>
    <div class="content">
        <p>内容</p>
        <p>{{ $viewData['postData']['content'] }}</p>
        <input type="hidden" name="content" value="{{ $viewData['postData']['content'] }}">
    </div>
    <button type="submit">送信</button>
</form>
    
@endsection