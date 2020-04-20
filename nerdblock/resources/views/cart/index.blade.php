        @php
        $title = "Cart";
        @endphp
        @extends('layouts.master')
        @section('content')




        <div class="uk-section-default uk-section">
            <div class="uk-container">
                <div class="uk-grid-margin" uk-grid>
                    <div class="uk-width-1-1@m">
                        <h1 class="uk-text-center">Shopping Cart</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section-default uk-section">
            <div class="uk-container">
                <div class="uk-grid-margin" uk-grid>
                    <div class="uk-grid-item-match uk-width-large@m">
                        <div class="uk-tile-muted uk-tile">

                            @foreach ($Items as $item)
                            @php
                            $blocks = DB::table('blocks')
                            ->select(DB::raw('*'))
                            ->where('blockID',$item->id)
                            ->get()
                            @endphp
                            @foreach ($blocks as $block)
                            <div class="uk-card uk-card-default uk-card-body uk-margin-remove-first-child uk-margin"> 
                                <img class="el-image" alt                                     
                                data-src="/images/{{$block -> blockTheme}}_1.png"
                                data-srcset="/images/{{$block -> blockTheme}}_1.png"
                                data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                                uk-img>
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> {{$item->name}} </h3>
                                <div class="el-meta uk-text-meta uk-margin-top">${{$item->price}}</div>
                                <form method="POST" action="/cart/{{$item->rowId}}" class="uk-form-horizontal uk-margin">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                    <button class="uk-button uk-button-default" name="choice" value="remove" type="submit" 
                                    onclick="return confirm('Are you sure?')">Remove Block</button>
                                </form>
                            </div>
                            @endforeach               
                            @endforeach
                        </div>

                    </div>

                    <div class="uk-width-expand@m">
                        <div class="total uk-margin">
                            <div id="page#14" uk-sticky="offset: 50; bottom: #top" class="uk-width-expand@m">
                                <h1 class="uk-h3" data-id="page#15">Cart total</h1>
                                <table
                                class="uk-table uk-table-divider uk-table-large uk-table-middle uk-table-responsive uk-text-center"
                                data-id="page#16">
                                <tbody>
                                    <tr class="el-item">
                                        <td class="uk-text-nowrap uk-table-shrink">
                                            <div class="el-title uk-h4">Subtotal</div>
                                        </td>
                                        <td>
                                            <div class="el-content uk-panel">${{Cart::Subtotal()}}</div>
                                        </td>
                                    </tr>
                                    <tr class="el-item">
                                        <td class="uk-text-nowrap">
                                            <div class="el-title uk-h4">Tax</div>
                                        </td>
                                        <td>
                                            <div class="el-content uk-panel">${{Cart::Tax()}}</div>
                                        </td>
                                    </tr>
                                    <tr class="el-item">
                                        <td class="uk-text-nowrap">
                                            <div class="el-title uk-h4">Total</div>
                                        </td>
                                        <td>
                                            <div class="el-content uk-panel">${{Cart::Total()}}</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="uk-margin" data-id="page#17"><a href="/shipping" class="el-content uk-button uk-button-default">
                            Checkout </a></div>
                        </div>
                    </div>



                </div>
            </div>
        </div>



    </div>





</div>

@endsection