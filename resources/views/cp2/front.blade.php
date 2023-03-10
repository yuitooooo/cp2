<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Coordination Proposal 2 </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div>さん</div>
        <h1>一緒に服選びしてみませんか？</h1>
          <form action="/cp2/proposal" method='POST'>
              @csrf
            <h2>カテゴリを選択してください</h2>
            @foreach ($categories as $category)
            <div class="form-check">
            <input name="checkbox_array[]" 
                   type="checkbox" 
                   value="{{ $category->id }}" 
                   {{ old(('category.'.$category->id) == $category->id) ? 'checked' : '' }}>
            <label class="form-check-label">{{ $category->name }}</label>
            </div>
            @endforeach
            <h2>予算を入力してください</h2>
           
                予算:<br>
                <input name='budget'>
                <br>
                <input type='submit' value='検索'>
                <a href='/cp2/proposal'></a>
                <!--<button href='/cp2/proposal'>検索</button>-->
            </form>
    </body>
</html>
