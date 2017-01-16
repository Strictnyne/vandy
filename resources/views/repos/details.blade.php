@extends('index')

@section('content')
    <div id="app">

        <a href="/"><< Back</a>

        <div class="row">
            <div class="large-10 large-centered columns" style="min-height: 550px;">

                <div class="row">
                    <div class="large-12 columns">
                        <h3>
                            {!! @$repo->name !!}
                            <small>
                                {!! @$repo->full_repo_name !!}
                            </small>
                        </h3>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="large-12 columns">

                        <div class="row">
                            <div class="large-2 columns">
                                <img src="{!! @$repo->avatar_url !!}" alt="{!! @$repo->name !!}">
                            </div>

                            <div class="large-7 columns ">
                                <small>
                                    <a href="{!! @$repo->url !!}">
                                        {!! @$repo->url !!}
                                    </a>
                                </small>
                                <br />
                                {!! @$repo->description !!}
                            </div>

                            <div class="large-3 columns text-right">
                                <div>
                                    <i class="fa fa-star stars" aria-hidden="true"></i> {!! @$repo->stars !!}
                                </div>
                                <div>
                                    <i class="fa fa-code-fork" aria-hidden="true"></i> {!! @$repo->forks !!}
                                </div>
                                <div>
                                    <i class="fa fa-eye" aria-hidden="true"></i> {!! @$repo->watchers !!}
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@stop