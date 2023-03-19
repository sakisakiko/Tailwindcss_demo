<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  	<!--<link href="/css/app.css" rel="stylesheet">-->
  	
  	<!--Tailwindcssを読み込む記述-->
  	<script src="https://cdn.tailwindcss.com"></script>
  	
      
      <title>Tailwindcss</title>
      
  </head>
  
  <body class="font-['Georgia']">
      <!--header start-->
      <header class="flex justify-center items-center bg-no-repeat bg-cover bg-center bg-[url('img/imag5.jpeg')] h-32">ヘッダー</header>
      <!--header endー-->
      
      <!--main start-->
      <main>
        <h1 class="flex justify-center items-center bg-blue-300 text-3xl h-12"><strong>メインコンテンツ作成</strong></h1>
        <section class="sm:flex h-screen">
          <section id="left" class="w-full sm:w-1/4 p-2">
            <nav>
              <h2>メニュー</h2>
              <ul>
                <li ><a href="" class="hover:bg-blue-500 hover:text-white">HOME</a></li>
                <li><a href="" class="hover:bg-blue-500 hover:text-white">ACCESS</a></li>
                <li><a href="" class="hover:bg-blue-500 hover:text-white">CONTENT</a></li>
              </ul>
            </nav>
          </section>
          
          <section id="right" class="flex flex-wrap justify-around items-start w-full p-2 sm:border-t-0 border-t-4  sm:border-l-4 border-slate-100">
            <section>
              <h2>コンテンツ１</h2>
              <p>小樽</p>
              <img src="img/imag1.jpeg" alt="" class="w-64">
            </section>
            <section>
              <h2>コンテンツ２</h2>
              <p>小樽２</p>
              <img src="img/imag2.jpeg" alt="" class="w-64">
            </section>
            <section>
              <h2>コンテンツ３</h2>
              <p>北海道大学</p>
              <img src="img/imag3.jpeg" alt="" class="w-64">
            </section>
            <section>
              <h2>コンテンツ４</h2>
              <p>北海道大学２</p>
              <img src="img/imag4.jpeg" alt="" class="w-64">
            </section>
            
          </section>
        </section>
      </main>
      <!--main end-->
      
      <!--footer start-->
      <footer class="flex justify-center bg-green-300">フッター</footer>
      <!--footer end-->
          
  </body>

</html>
