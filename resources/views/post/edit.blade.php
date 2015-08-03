@extends('layouts.admin')

@section('content')

    <div class="form-group">

        <section>
            <h2>Corriger un post</h2>

            {!! Form::open(['url'=>'post/'.$post->id, 'method'=>'PUT']) !!}

            <div>
                {!! Form::label('title', 'Titre:', ['for'=>'title']) !!}<br />
                {!! Form::text('title', $post->title, ['id'=>'title', 'required']) !!}
            </div>

            <br/>

            <div>
                {!! Form::label('slug', 'Clef référencement:', ['for'=>'slug']) !!}<br />
                {!! Form::text('slug', $post->slug, ['id'=>'slug', 'required']) !!}
            </div>

            <br/>

            <div>
                {!! Form::label('url_site', 'Site web référent:', ['for'=>'url_site']) !!}<br />
                {!! Form::text('url_site', $post->url_site, ['id'=>'url_site', 'required']) !!}
            </div>

            <br/>

            <div>
                {!! Form::label('content', 'Contenu:') !!}<br />
                {!! Form::textarea('content', $post->content, ['cols'=>60, 'rows'=>20, 'id'=>'content']) !!}
            </div>

            <br/>

            <div>
                {!! Form::label('excerpt', 'Résumé:') !!}<br />
                {!! Form::textarea('excerpt', $post->excerpt, ['cols'=>60, 'rows'=>10, 'id'=>'excerpt']) !!}
            </div>

            <br/>

            <br/>

            <div>
                {!! Form::label('date_start', 'Date de début :',['for'=> 'date_start']) !!}
                {!! Form::text('date_start',$post->date_start,['placeholder'=>'format: aaaa-mm-jj hh:mm:ss', 'required']) !!}
                {!! Form::label('date_end', 'Date de fin :',['for'=> 'date_end']) !!}
                {!! Form::text('date_end',$post->date_end,['placeholder'=>'format: aaaa-mm-jj hh:mm:ss', 'required']) !!}
            </div>

            <br/>

            <div>
                {!! Form::submit('update') !!}
            </div>

            {!! Form::close() !!}
        </section>
    </div>

@endsection