@extends('index')

@section('content')

    <div id="app">
        <div class="row">
            <div class="large-11 large-centered columns">

                <div class="row">
                    <div class="large-3 columns">
                        <i class="fa fa-github-alt fa-5x" aria-hidden="true"></i>
                    </div>

                    <div class="large-9 columns text-right">
                        <v-paginator :resource_url="resource_url" ref="vpaginator" @update="updateResource"></v-paginator>
                    </div>
                </div>

                <hr>
            </div>
        </div>

        <div v-for="repo in repos">

            <div class="row">
                <div class="large-10 large-centered columns repo-contents">

                    <div class="row">
                        <div class="large-12 columns">
                            <h3>
                                <a :href="'/repo/' + repo.repo_id">
                                {{--<a v-link="/repo/@{{ repo.repo_id }}">--}}
                                    @{{ repo.full_repo_name }}
                                </a>
                                <small>
                                    Last update: @{{ moment(repo.last_push_date).format('MMMM Do YYYY, h:mm:ss a') }}
                                </small>
                            </h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="large-12 columns repo-desc">
                            <p>
                                @{{ repo.description }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="large-9 columns">
                            <small style="font-style: italic;">
                                Repo Created on: @{{ moment(repo.repo_created_date).format('MMMM Do YYYY, h:mm:ss a') }}<br />
                                <a v-bind:href="repo.url">
                                    @{{ repo.url }}
                                </a>
                            </small>
                        </div>
                        <div class="large-3 columns text-right">
                            <i class="fa fa-star stars" aria-hidden="true"></i> @{{ repo.stars }}
                        </div>
                    </div>

                    <hr>
                </div>
            </div>
        </div>

    </div>

@stop