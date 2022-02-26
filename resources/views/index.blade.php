@extends('layouts.app')

@section('content')
    <div class="buttonGrid">
        @for($i = 0; $i < 9; $i++)
            <div class="btncell">
                <a href="/Dashboard/create">
                    <div>
                        <img src="{{ asset("storage/plus.png") }}" alt="Add Symbol">
                    </div>
                </a>
            </div>
        @endfor
    </div>
@endsection

