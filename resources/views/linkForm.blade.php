@extends('layouts.app')

@section('content')

<div class="wrap">
    <div class="create">
        {{ Form::open(array('route' => 'Dashboard.store')) }}

            <label for="Title"><b>Title:</b></label>
            <input class="inputs" type="text" name="Title" id="Title" value="{{ old('Title') }}"><br><br>

            <label for="Link"><b>Link:</b></label>
            <input class="inputs" type="text" name="Link" id="Link" value="{{ old('Link') }}"><br><br>

            <label for="Color"><b>Color:</b></label>
            <select class="inputs" name="colors" id="colors">
                <option value="#ed493e" style="color: #ed493e">Red</option>
                <option value="#40de40" style="color: #40de40">Green</option>
                <option value="#5062eb" style="color: #5062eb">Blue</option>
                <option value="#a2a4b0" style="color: #a2a4b0">Gray</option>
                <option value="#18181c" style="color: #18181c">Black</option>
                <option value="#8738a1" style="color: #8738a1">Purple</option>
                <option value="#fa8d20" style="color: #fa8d20">Orange</option>
                <option value="#f7ee36" style="color: #f7ee36">Yellow</option>
              </select><br><br>

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
