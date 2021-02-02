@extends('layouts.app')

@section('content')

<form action="{{ route('notice.mail.confirm') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="subject">
        <label>件名</label>
        <input type="text" name="subject" value="{{ old('subject') }}">
    </div>

    @if ($errors->has('subject'))
        @foreach ($errors->get('subject') as $detail_errors)
            <p>{{$detail_errors}}</p>
            <br>
        @endforeach
    @endif

    <div class="content">
        <label>内容</label>
        <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea>
    </div>

    @if ($errors->has('content'))
        @foreach ($errors->get('content') as $detail_errors)
            <p>{{$detail_errors}}</p>
            <br>
        @endforeach
    @endif
    
    {{-- 下記を追記 --}}
    <div class="file">
        <label>添付ファイル</label>
        <input type="file" name="file">
    </div>
    @if ($errors->has('file'))
        @foreach ($errors->get('file') as $detail_errors)
            <p>{{$detail_errors}}</p>
            <br>
        @endforeach
    @endif
    {{-- 上記までを追記 --}}
    <button type="submit">確認</button>
</form>
    
@endsection