@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('content.list') }}">
                        <button>投稿</button>
                    </a>
                    <a href="{{ route('notice.index') }}">
                        <button>通知</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
