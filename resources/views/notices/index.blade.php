@extends('layouts.app')

@section('content')
    <a href="{{ route('notice.mail') }}">
        <button>
            メール
        </button>
    </a>
@endsection