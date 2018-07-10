@extends('layouts.app')

@section('content')

<h1>マイページの編集ページ</h1>

   
 <div class="row"> 
        <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
            
            <div class="form-group">
                    
                    {!! Form::label('content', '自己紹介:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                
            </div> 
    
        {!! Form::submit('更新', ['class' => 'btn btn-info btn-lg']) !!}
    </div>
</div>    
    {!! Form::close() !!}

@endsection