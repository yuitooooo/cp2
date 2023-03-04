
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Coodination Proposal 2</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>こんな服装はどうですか？</h1>
        <h2>予算:{{ $budget }}</h2>
        <div class ='clothes'>
          <table class="table table-striped">
            <thead>
             <tr>
              <th>カテゴリ</th>
              <th>値段</th>
              <th>商品URL</th>
            </tr>
           </thead>
           <tbody>
           @foreach ($clothes as $clothes)
           <tr>
           <td>{{ $clothes->category->name }}</td>
           <td>{{ $clothes->price }}</td>
           <td>{{ $clothes->url }}</td>
           </tr>
           @endforeach
           
           
                    <h2>
                        <a href ='https://www.uniqlo.com/jp/ja/'></a>
                    </h2>
    </body>
</html>
