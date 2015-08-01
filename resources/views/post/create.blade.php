@extends('layouts.admin')

@section('content')

    <div class="form-group">

        <section>
            <h2>Créez un post</h2>

            <br/>

            {!! Form::open(['url'=>'post', 'files' =>'true']) !!}

            <div>
                {!! Form::label('title', 'Titre:', ['for'=>'title']) !!}<br />
                {!! Form::text('title', old('title'), ['id'=>'title', 'required']) !!}
            </div>

            <br/>

            <div>
                {!! Form::label('slug', 'Clef référencement:', ['for'=>'slug']) !!}<br />
                {!! Form::text('slug', '', ['id'=>'slug', 'required']) !!}
            </div>

            <br/>

            <div>
                {!! Form::label('url_site', 'Site web référent:', ['for'=>'url_site']) !!}<br />
                {!! Form::text('url_site', 'http://', ['id'=>'url_site', 'required']) !!}
            </div>

            <br/>

            <div>
                {!! Form::label('content', 'Contenu:') !!}<br />
                {!! Form::textarea('content', '', ['cols'=>60, 'rows'=>20, 'id'=>'content']) !!}
            </div>

            <br/>

            <div>
                {!! MyHtml::radio('status',['value'=>'publish','title'=>'publier immédiatement:'])!!}
                <br/>
                {!! MyHtml::radio('status',['value'=>'unpublish','title'=>'publication en attente','checked'])!!}
            </div>

            <br/>

            <div>
                {!! Form::label('date_start', 'Date de début :',['for'=> 'date_start']) !!}
                {!! Form::text('date_start','',['placeholder'=>'format: aaaa-mm-jj hh:mm:ss', 'required']) !!}
                {!! Form::label('date_end', 'Date de fin :',['for'=> 'date_end']) !!}
                {!! Form::text('date_end','',['placeholder'=>'format: aaaa-mm-jj hh:mm:ss', 'required']) !!}
            </div>

            <br/>

            <div>
                {!! MyHtml::thumb('Image d\'illustration', ['name'=>'thumbnail_link']) !!}
            </div>

            <br/>

            <div>
                <strong>Tags de l'article :</strong>
                @if($tags)
                    @foreach($tags as $tag)
                        <p>
                            {!!Form::checkbox('tag_id[]', $tag->id, false, ['title'=> $tag->name])!!}
                            {!!Form::label('tag_id', ucfirst($tag->name), ['title'=> $tag->name])!!}
                        </p>
                    @endforeach
                @endif
            </div>

            <div>
                {!! Form::submit('create') !!}
            </div>

            {!! Form::close() !!}
        </section>
    </div>

@endsection