@extends('layouts.app')

@section('content')

<form action="{{ route('notice.mail.send') }}" method="post">
    @csrf
    <div class="subject">
        <label>件名</label>
        <p>{{ $viewData['postData']['subject'] }}</p>
        <input type="hidden" name="subject" value="{{ $viewData['postData']['subject'] }}">
    </div>
    <div class="content">
        <label>内容</label>
        <p>{!! nl2br(e($viewData['postData']['content'])) !!}</p>
        <input type="hidden" name="content" value="{{ $viewData['postData']['content'] }}">
    </div>
    {{-- 下記を追記 --}}
    @if (isset($viewData['postData']['putFileInfo']))
        <div class="file">
            <label>添付ファイル</label>
            <p>{{ $viewData['postData']['putFileInfo']['fileName'] }}</p>
            <input type="hidden" name="filePath" value="{{ $viewData['postData']['putFileInfo']['filePath'] }}">
            <input type="hidden" name="fileName" value="{{ $viewData['postData']['putFileInfo']['fileName'] }}">
        </div>
    @endif
    {{-- 上までを追記 --}}
    <button type="submit">送信</button>
</form>

@endsection