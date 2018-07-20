@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
 
        <div class='ribbon3'>
           <h2>新規投稿</h2>
        </div>
    <div class='toukou'>
    <div class="row"> 
        <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($irai, ['route' => 'irais.store','files'=>true]) !!}

            <h4>※は必須です</h4>            
            <br>
                <div class="form-group">
                    {!! Form::label('title', '※ タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control' ,'placeholder' => '例:○○をシェアしましょう']) !!}
                
                    {!! Form::label('content', '※ 理由:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control','placeholder' => '例:○○を買いすぎたので分けたいです']) !!}
                    
                    <div class="container">
                        <div class="row">
                            <div class='col-sm-6'>
                                <div class="form-group">
                                    <label for="start">開始時刻(任意):</label><br>
                                        <div class='input-group date' id='datetimepicker'>
                                            <input type='text' name="start" value="{{ old('start') }}" class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    <label for="finish">終了時刻(任意):</label><br>
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' name="finish" value="{{ old('finish') }}" class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                               $(function () {
                               $('#datetimepicker').datetimepicker();
                                });
                               $(function () {
                               $('#datetimepicker1').datetimepicker();
                                });
                    </script>
                    
                    {!! Form::label('station', '※ 場所:') !!}
                    {!! Form::text('station', null, ['class' => 'form-control','placeholder' => '例:都内、神奈川なら可です！/会社内でお願いします']) !!}
                    
                    {!! Form::label('reward', '※ お礼:') !!}
                    {!! Form::text('reward', null, ['class' => 'form-control','placeholder' => '例:100円お渡しします/○○が■円で買えます']) !!}
            </div> 
   
                    {!! Form::submit('依頼を投稿する', ['class' => 'btn btn-info btn-lg']) !!}
                    
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection