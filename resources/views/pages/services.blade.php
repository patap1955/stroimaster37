@extends('layouts.without-carousel-master')
@section('title', $service->title . ' от компании Строймастер37')
@section('description', $service->description)
@section('content')
    <div class="col-sm-3">
        <div>
            @include('layouts.sidebar')
        </div>
    </div>
    <div class="col-sm-9">
        <main class="col-xs-12" role="main">
            <div class="row">
                <div class="col-xs-12">
                    <article class="post-2573 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div id="pl-2573" class="panel-layout">
                                <hr>
                                <h1>{{ $service->title }}<small> от компании Строймастер37</small></h1>

                                <hr>
                            </div>
                            {!! $service->text !!}
                        </div>
                    </article>
                </div>
            </div>
        </main>
    </div>
@endsection


