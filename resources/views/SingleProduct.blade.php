@extends('app')

@section('content')
<section class='wrapper' id='singleProduct'>
    <header>
        <strong>{{ $game->getTitleAttribute() }}</strong> <br />
        by <br />
        <span>{{ $game->getDeveloperAttribute() }}</span>
        <hr />
    </header>
    
    <article>
        <img src="{{ asset('/images/' . $game->getImageAttribute() )}}" 
             alt="{{ $game->getTitleAttribute() }}"
        />
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Price:</td>
                    <td> $ {{ $game->getPriceAttribute() }} </td>
                </tr>
                <tr>
                    <td>Console:</td>
                    <td> {{ $game->getConsoleAttribute() }} </td>
                </tr>
                <tr>
                    <td>Rating:</td>
                    <td> {{ $game->getRatingAttribute() }} </td>
                </tr>
                <tr>
                    <td>Comments:</td>
                    <td> {{ $game->getCommentsAttribute() }} </td>
                </tr>
            </tbody>
        </table>
    </article>
</section>
@endsection