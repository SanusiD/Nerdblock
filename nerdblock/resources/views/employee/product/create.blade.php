        @php
        $title = "Create Block";
        @endphp
        @extends('layouts.master')
        @section('content')
        <div class="uk-section-default uk-section">
            <div class="uk-container"><div class="uk-grid-margin" uk-grid>
                <div class="uk-width-1-1@m">
                    
                    
                    
                    <form class="uk-form-horizontal uk-margin-large" method="POST">
                        {{ csrf_field() }}
                        <h2> Create new Block</h2>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Block Name</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-horizontal-text" name="blockName"type="text" placeholder="Product X">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Block Description</label>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea" id="form-horizontal-text" name="blockDescription" type="text" placeholder="Description of the block">
                                </textarea>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-horizontal-text">Block Price</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-horizontal-text" name="blockPrice"type="text" placeholder="99.99">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-horizontal-text">Job Title</label>
                                <div class="uk-form-controls">
                                    @php
                                        $blocks = \App\Block::select('blockTheme')->groupBy('blockTheme')->get();
                                    @endphp
                                    <select>
                                        <option class="uk-input" selected="selected" id="form-horizontal-text" name="blockTheme" disabled="disabled">Block Theme</option>
                                        @foreach($blocks as $block)
                                        <option class="uk-input" id="form-horizontal-text" name="blockTheme">{{$block->blockTheme}}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <button class="uk-button uk-button-default" type="submit">Add Block</button>
                        </form>

                    </div></div></div>
                    @endsection