@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @include('irais.index')
    @else

    <div class="content">
        <div class="content1">
            <div class=saki>  <h1>困ったときは同期に助けを</h1> </div>
            <div class="maintitle">
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="cp_btn">Helpfulを始める</a>
                @endif
            </div>
        </div>
    </div>
    @endif
    
     <div class="introduction">
        <h2>Helpfulでは、自分ではどうしようもないことを、<br>安心して同期に依頼することができます。</h2>
     </div>
  
        <div id="sampleCarousel" class="carousel slide" data-ride="carousel"data-pause="false" data-interval="2500">
         <a href="{{ route('irais.index') }}">   
        	<div class="carousel-inner" role="listbox">
        		<div class="item active">
        			<img src="../images/feed2.png" alt="First slide" height='100'>
        		</div>
        		<div class="item">
        			<img src="../images/feed1.png" alt="Second slide">
        		</div>
        		<div class="item">
        			<img src="../images/feed2.png" alt="Third slide">
        		</div>
        	</div>
          </a>	
        </div>
        
        
        
         <hr class="featurette-divider">
        
        　　<h2 class='text-center'>Helpfulとは？</h2>
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4 text-center">
            <img  src="images/komaru.png" alt="Generic placeholder image" width="160" height="150">
            <h2>困ったことがあったら</h2>
            <p>「一人暮らしだから野菜やお肉を買っても余る」「充電器わすれた！スマホが死んじゃう！」「知らない同期と飲んでみたいけど機会がない」そんな時ありますよね、、、</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 text-center">
            <img src="images/shiraberu.png" alt="Generic placeholder image" width="170" height="150">
            <h2>HelpfulにPost！</h2>
            <p>Helpfulとはそんなお悩みをお持ちの方が同期に助けを求めることができるプラットフォームです。</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 text-center">
            <img src="images/kanpai.png" alt="Generic placeholder image" width="195" height="150">
            <h2>同期が助けてくれる！</h2>
            <p>自分の「困った」を投稿すると興味を持った同期とその場でコメントのやり取りができ、すぐに助けてもらえます。</p>
            <p><a class="cp_btn" href="/hatsu" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-5 order-md-2">
            <h2 class="featurette-heading">知らない子も多いけどみんな助けてくれるの？<br> <div class="text-muted"><br>Don't Worry!</div></h2>
            <p class="lead">同期104名に対してアンケートを行ったところ右記のような結果に。Helpfulなら同期同士だから安心して頼める上に 話したいと思っていた人に声をかけるorかけられるチャンス！困ったことを解決するとともに同期とのつながりもゲットすることができます。</p>©2018 Google
          </div>
          <div class="col-md-7 order-md-1">
            <img src="images/graph.jpg" alt="Generic placeholder image" width='350' height='450'>
            <img src="images/tomodachi.jpg" alt="Generic placeholder image" width='270' height='450'>
          </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-12 text-center">
            <h2 class="featurette-heading">さあ登録しよう！<br><br><p class="text-muted">知らない間に他の同期の輪は広がっているかも？</p></h2><br>
            <p class="lead"></p>
          </div>
<div class="text-center">    
      <div class="animation">
        <div class="effect" style='pointer-events:none;'>
        </div>
        @if (!Auth::check())
        <div class="effect-background">
          <a href="{{ route('signup.get') }}" style='z-index:1000;'> <h1>HELPFULを始める</h1></a>
        </div>
        @endif
      </div>
　  </div>
          

        </div>
</div>
        <!-- /END THE FEATURETTES -->

<div class="demo demo3">
   <div class="heading"><span>取引の流れ</span></div>
</div>
        <div class="sakiko">
          <img src="/images/signin3.PNG" width="480px" height="300px"></div>
          
        <div class="iraishitai">
                <div class="person_1">
                    <p>依頼したい人</p>
                </div>
             <div class='naiyou'>   
                <div class="touroku_1">
                    <p> <span class="top-introduction-numm">1</span>New postボタンをクリック!</p>
                    <img src="/images/newpost.jpg" width="240px" height="170px">
                    
                </div>
                
                <div class="flow_06">
                      <p> <span class="top-introduction-numm">2</span>依頼内容を入力</p>
                     <img src="/images/irao2.jpg" width="270px" height="180px">
                </div>
                
                <div class="flow_09">
                    <p><span class="top-introduction-numm">3</span>
                        投稿後、トップページに戻り<br>自分の投稿が掲載されていたら完了!</p>
                　 <img src="/images/yo.jpg" width="270px" height="150px">    
                </div>
                
                 <div class="flow_19">
                    <p><span class="top-introduction-numm">4</span>
                        投稿した後、助ける側から<br>通知が来たら、さっそく返信!</p>
                　 <img src="/images/comment1.jpg" width="270px" height="150px">    
                </div>
            </div>
        </div>
        
        <div class="tasuketai">
            <div class="person_2">
                <p>助けたい人</p>
            </div>

                <div class='naiyou'>
                    <div class="flow_04">
                        <p> <span class="top-introduction-numn">1</span>手伝いたいと思う投稿を選択!</p>
                         <img src="/images/hikkoshi.PNG" width="250px" height="170px">
                    </div>
                    
                    <div class="flow_07">
                          <p> <span class="top-introduction-numn">2</span>依頼者の投稿の<br>手伝いを完了するボタンをクリック</p>
                        <img src="/images/taxi3.PNG" width="250px" height="150px">
                    </div>
                    
                    <div class="flow_10">
                          <p> <span class="top-introduction-numn">3</span>依頼完了済になると取引完了！</p><br>
                        <img src="/images/taxi4.PNG" width="250px" height="150px"><br>
                    </div>
                    
                    <div class="flow_08">
                        <p> <span class="top-introduction-numn">4</span>依頼者から問い合わせが<br>きたらコメント欄で返信!</p><br>
                        <img src="/images/tetsudau.jpg" width="250px" height="120px">
                    </div>
                </div>
        </div>
    </div>
    @if (!Auth::check())
　  <a href="{{ route('irais.create')}}">
　  <div class="wrap-1">
         <button class="btn-post"><i class="fa fa-hand-peace" id='peace'> </i> <br>New Post</button></div></a>
    @endif
    </div>
　  
@endsection