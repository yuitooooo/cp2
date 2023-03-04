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
            <h2>予算を入力してください</h2>
            {{Form::open(['method' => 'get', 'url' => 'proposal'])}}
                <p>予算：{{Form::number('budget', '', ['id' => 'budget'])}}</p>
                <p>{{ Form::button('入力', ['type' => 'submit'])}}</p>
            {{Form::close()}}
            @foreach ($categories as $category)
            <div class="form-check">
            <input name="category[{{$category->id}}]" 
                   type="checkbox" 
                   value="{{ $category->id }}" 
                   {{ old(('category.'.$category->id) == $category->id) ? 'checked' : '' }}>
            <label class="form-check-label">{{ $category->name }}</label>
            </div>
            @endforeach
    </body>
</html>
