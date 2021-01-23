@extends('layouts.default', ['title' => 'About'])
    
@section('content')
    <div class="container">
        <h2>What is {{ config('app.name') }} ?</h2>  
        <p>{{ config('app.name') }} is a clone app of <a href="https://Laramap.com" target="_blank">Laramap</a></p>
        
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                   <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 
                    This app has been built by <a href="@amardarmanko">@amardarmanko</a>
                    for learning purposes.</strong>
                </p>
            </div>
        </div>

        <p>
            Feel free to help to improve the <a href="https://github.com/darmanko-dev/laracarte-tdn/tree/master">source code </a>.
        </p>
        
        <hr>

        <h2>What is Laramap?</h2>

        <p>Laramap is the website by which {{ config('app.name') }} was inspired :).</p>
        <p>More info <a href="https://Laramap.com/p/about">here.</a></p>

        <hr>

        <h2>Which tools and service are used in {{ config('app.name') }} ?</h2>

        <p>Basically it'is built on laravel &amp; bootstrap.But there's a bunch of service used for email and other section. </p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Map</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fundation's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>

    </div>      


@stop


