@extends('layouts.app')

@section('content')
<div class="row">         
  <div class="index-content">
       <span class='form-group'>
            {!! Form::open(['route' => 'irais.search', 'method' => 'get']) !!}
            {!! Form::text('q', '', ['class' => 'form-control input-lg', 'placeholder' => 'キーワード(例:タイトル(引っ越し),駅(二子玉),時間(12日の場合12))', 'size' => 40,'style' => 'width:800px']) !!}
            {!! Form::submit('依頼を検索', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
        </span>
        <span class='form-group'>
        　　{!! Form::open(['route' => 'irais.create', 'method' => 'get']) !!}
            {!! Form::submit('投稿', ['class' => 'btn btn-danger btn-lg']) !!}
            {!! Form::close() !!}
        </span>
  </div>
</div>
 @include('irais.irai', ['irais' => $irais])
 
  
@endsection

