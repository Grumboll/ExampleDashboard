@extends('layouts.app')

@section('content')

<div class="wrap">
    <div class="create">
        {{ Form::open(array('route' => array('dashboard.update', $link['pos']), 'method' => 'put')) }}
            <input type="hidden" name="pos" value="{{ $link['pos'] }}">
            <label for="Title"><b>Title:</b></label>
            <input class="inputs" required type="text" name="Title" id="Title" value="{{ $link['Title'] }}"><br><br>

            <label for="Link"><b>Link:</b></label>
            <input class="inputs" required type="url" name="Link" id="Link" value="{{ $link['Link'] }}"><br><br>

            <label for="Color"><b>Color:</b></label>

            {{ Form::select
                (
                    'Color',
                    [
                        '#ed493e' => 'Red',
                        '#40de40' => 'Green',
                        '#5062eb' => 'Blue',
                        '#a2a4b0' => 'Gray',
                        '#18181c' => 'Black',
                        '#8738a1' => 'Purple',
                        '#fa8d20' => 'Orange',
                        '#f7ee36' => 'Yellow',
                    ],
                    $link['Color'],
                    ['class' => 'inputs', 'required']
                )
            }}
            <br><br>

            <input class="button" type="submit" value="Submit">


        {{ Form::close() }}
        <br><br><br>

        @if ($errors->any())
            <div class="error">
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif

    </div>
</div>

@endsection
