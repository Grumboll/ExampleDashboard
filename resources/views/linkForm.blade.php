@extends('layouts.app')

@section('content')

<div class="wrap">
    <div class="create">
        {{ Form::open(array('route' => 'dashboard.store')) }}

            {{ Form::hidden('pos', $pos) }}
            {{ Form::label('Title', 'Title') }}
            {{ Form::text('Title', null, ['class' => 'inputs', 'required']) }}<br><br>

            {{ Form::label('Link', 'Link') }}
            {{ Form::url('Link', null, ['class' => 'inputs', 'required']) }}<br><br>

            {{ Form::label('Color', 'Color') }}

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
                    null,
                    ['class' => 'inputs', 'required']
                )
            }}
            <br><br>

            {{ Form::submit('Submit', ['class' => 'button'])}}


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
