@extends('layouts.app')



@section('content')

    <form action="cgi-bin/example.cgi" method="post">
          <p>検索したいキーワードを入力してください。</p>
          <input type="search" name="search" placeholder="キーワードを入力">
          <input type="submit" name="submit" value="検索">
    </form>
<<<<<<< HEAD

   <p>@    include('irais.irais',['irais' => $irais])</p>
   

   
   

   <div>
=======
    
>>>>>>> 3c13483adeaf55bc84032c8ef428a69a89450b5b
        {!! link_to_route('irais.create', '新規メッセージの投稿') !!}
    
  </div>
  
  @include('irais.irai', ['irais' => $irais])
  

@endsection