@extends('layouts.app')

@section('content')

<form action="{{ route('notice.mail.confirm') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="subject">
        <label>件名</label>
        <input type="text" name="subject">
    </div>
    <div class="content">
        <label>内容</label>
        <textarea name="content" cols="30" rows="10"></textarea>
    </div>
    <div class="file">
        <label>添付ファイル</label>
        <input type="file" name="file">
    </div>
    <button type="submit">確認</button>
</form>
    
@endsection