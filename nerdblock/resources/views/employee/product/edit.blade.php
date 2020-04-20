        @php
        $title = "Edit Block";
        @endphp
        @extends('layouts.master')
        @section('content')

        <div class="uk-section ">
            <div class="uk-container">
               <a href="/view-products/" class="btn btn-default">Go Back</a>
               @if (session('alert'))
               <div class="alert alert-success">
                {{ session('alert') }}
            </div>
            @endif
            <h3>Edit {{$items -> blockName}}</h3>

            <div class="uk-grid-match" uk-grid>
                <form method="POST" action="/edit/{{$items-> blockID}}" class="uk-form-horizontal uk-margin">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="blockName" type="text" value="{{$items -> blockName}}">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Description</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="blockDescription" type="textarea" value="{{$items -> blockDescription}}">
                        </div>
                    </div>

                    <div class="uk-margin-small">
                        <label class="uk-form-label" for="form-horizontal-text">Price</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="blockPrice" type="text" value="{{$items -> blockPrice}}">
                        </div>
                    </div>

                    <button class="uk-button uk-button-default" type="submit">Update Item</button>

                </form>      
            </div>

        </div>
    </div>
    @endsection