@extends('layouts.common')
@section('content')

<div class="item-page-wrapper">
    <div class="item-wrapper">
        <div class="item-header">
            <div class="date">{{$article->created_at}}</div>
        </div>
        <div class="item-title">{{$article->title}}</div>
        <div class="item-tags">
            <div class="item-tag">{{$article->tag1}}</div>
            @if ($article->tag2)
            <div class="item-tag">{{$article->tag2}}</div>
            @endif

            @if ($article->tag3)
            <div class="item-tag">{{$article->tag3}}</div>
            @endif
        </div>
        <div class="item-body">{{$article->body}}</div>
    </div>
    @if (Auth::check())
    @if ($like)
      {{ Form::model($post, array('action' => array('LikesController@destroy', $post->id, $like->id))) }}
        <button type="submit">
          <img src="/images/icon_heart_red.svg">
          Like {{ $post->likes_count }}
        </button>
      {!! Form::close() !!}
    @else
      {{ Form::model($post, array('action' => array('LikesController@store', $post->id))) }}
        <button type="submit">
          <img src="/images/icon_heart.svg">
          Like {{ $post->likes_count }}
        </button>
      {!! Form::close() !!}
    @endif
  @endif
</div>

@endsection