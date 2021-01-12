@extends('layouts.app')

@section('content')
    <a href="{{ route('notice.mail.make') }}">
        <button>
            メール
        </button>
    </a>
@endsection