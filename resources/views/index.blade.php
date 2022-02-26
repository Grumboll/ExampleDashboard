@extends('layouts.app')

@section('content')
    <div class="buttonGrid">
        @for($i = 0; $i < 9; $i++)
            <div class="btncell">
                @if(isset($links[$i]))

                <a target="_blank" href="{{ $links[$i]['Link'] }}">
                    <div style="background-color: {{ $links[$i]['Color'] }}">

                        {{ $links[$i]['Title'] }}

                        <a class="edit" href="dashboard/{{ $links[$i]['pos'] }}/edit"><i class="fas fa-edit"></i></a>
                        <a class="delete" href=""><i class="fas fa-trash"></i></a>

                    </div>

                </a>


                @else
                    <a href="{{route('position', ['pos' => $i])}}">
                         <div>
                            <img src="{{ asset("storage/plus.png") }}" alt="Add Symbol">
                        </div>
                    </a>
                @endif

            </div>
        @endfor
    </div>
@endsection

