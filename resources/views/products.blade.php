@extends('app')

@section('content')
<section class="wrapper" id='allProducts'>
    <header>
        <h4>Products</h4>
        <hr />
    </header>

    <table class="table table-striped" id="productTable">
        <thead>
            <tr>
                <th>Title</th>
                <th>Studio</th>
                <th>Game Console</th>
                <th>Price</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gameList as $game)
                <tr>
                    <td>  {{ $game->getTitleAttribute()     }} </td>
                    <td>  {{ $game->getDeveloperAttribute() }} </td>
                    <td>  {{ $game->getConsoleAttribute()   }} </td>
                    <td>$ {{ $game->getPriceAttribute()     }} </td>
                    <td>  
                        <a href="{{ url('products/' . $game->getTitleAttribute()) }}" 
                           class="btn btn-primary">
                            Details
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection