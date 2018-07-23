@extends('layouts.app')
@include('commons.auto')

@section('content')

<div class='containermypage'>
		<div class="introduction_momo">
        <img src="{{ Gravatar::src($user->email, 100) . '&d=mm' }}" alt="" class="img-circle" width='30%'>
        <div id=momo_name>
        <h3>{{ $user->name }}</h3>
    </div>
    <div class='col-md-5 text-center'>
		<div class="balloon">
			<div id="hensyuu_contents">
      		{{$user->content}}
      		</div>
      		<div id="hensyuu2">
                        {!! Form::open(['route' => ['users.edit', $user->id], 'method' => 'get']) !!}
                            {!! Form::submit('編集', ['class' => 'btn center-block']) !!}
                        {!! Form::close() !!}
                    </div>
		</div>
	</div>
  </div>
<!--<div class="col-xs-12">-->
<!--    <ul class="nav nav-tabs nav-justified">-->
<!--		<li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">出した依頼 <span class="badge">{{ $count_irais }}</span></a></li>-->
<!--        <li role="presentation" class="{{ Request::is('users/*/finishings') ? 'active' : '' }}"><a href="{{ route('users.finishings', ['id' => $user->id]) }}">お助け完了！<span class="badge">{{ $count_finishings }}</span></a></li>-->
<!--        <li role="presentation" class="{{ Request::is('users/*/finished') ? 'active' : '' }}"><a href="{{ route('users.finished', ['id' => $user->id]) }}">助けられた <span class="badge"></span></a></li> </ul>-->
<!--</div>--> 
<div class='container'>
    <div class='maepage'>
    	{!! $irais->render() !!}
    </div> 
</div>
<div role="document" data-spy="scroll" data-target="#sampleScrollSpy">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
			</div>

<div class="col-xs-12" id='tatesen'>
	<div id="sampleMainContents">
		<h2 class="text-center">
			<div class='ribbon3'>
				<h2>出した依頼</h2>
			</div>
						@if($count_irais==0)
						<br>
						 <h4 class='text-center'>投稿がありません</h4><br>
						@else
						<ol>
							@include('irais.irai', ['irais' => $irais])
						</ol>
						@endif
						
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

 <?php 
        $v =$_COOKIE["data1"]??"";
    
    ?>
 	
 	
    <div class="wrap-1 ball">
@if($v == "")
                	<div class="alert alert-warning alert-dismissible fade in" role="alert" id='alert'>
                	<button type="button" data-dismiss="alert" class="close" onclick="document.cookie = 'data1=123';">&times;</button>
                	<p><strong>新規投稿は↓<br>をクリック</strong></p>
                    </div>
@endif
        <a href="{{ route('irais.create') }}">
                <button class="btn-post"><i class="fa fa-hand-peace" id='peace'></i><br>New Post</button>
            </div>
        </a>
    </div>

    <div class="text-center">
        <ul class="paginate">
            <p>{{ $irais->links() }}</p>
        </ul>
    </div>
</div>


</a>
@endsection
