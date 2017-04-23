@extends('app')
@section('content')
    <h1>Articles</h1>
    <hr>
    @foreach($articles as $article)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ url('articles',$article->id) }}">{{ $article->title }}</a></div>
                    <div class="panel-body">
                        <article>
                            {{ $article->content }}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop