@extends('app')

@section('content')
<section class='container wrapper' id='homePage'>
    <div class="content">
        <h4 class="title">GameMania</h4>
        <hr />
        <p>
            A new company where gamers can find the top 20 
            list of hottest Xbox One games on sale with little ads or 
            fluff. To view the latest list, visit 
            <a href="{{ url('/') }}">GameMania</a> for more information.
        </p>
    </div>
</section>
@endsection