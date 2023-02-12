<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Coordination Proposal 2 </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div>{{ Auth::user()->name }}さん</div>
        <h1>一緒に服選びしてみませんか？</h1>
            <h2>予算を入力してください</h2>
            {{Form::open(['method' => 'get', 'url' => 'proposal'])}}
                <p>予算：{{Form::number('budget', '', ['id' => 'budget'])}}</p>
                <p>{{ Form::button('入力', ['type' => 'submit'])}}</p>
            {{Form::close()}}
         <div class='categories'>
            @foreach($categories as $category)
             <fieldset>
    <legend>１着以上着てみたい服を選んでください、コーディネーションします。</legend>
       <input type="checkbox" id="{{ $category->id }}" name="{{ $category->id }}" checked>
      <label for="{{ $categoryy->id }}"></label>
</fieldset>
    @endforeach
    </div>
    </body>
</html>
