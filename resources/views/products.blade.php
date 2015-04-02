@extends('app')

@section('content')
<section class="wrapper">
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
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gameList as $game)
                <tr>
                    <td>  {{ $game->getTitleAttribute()     }} </td>
                    <td>  {{ $game->getDeveloperAttribute() }} </td>
                    <td>  {{ $game->getConsoleAttribute()   }} </td>
                    <td>$ {{ $game->getPriceAttribute()     }} </td>
                    <td>  {{ $game->getRatingAttribute()    }} </td>
                    <td>  {{ $game->getCommentsAttribute()  }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection