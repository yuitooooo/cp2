    <x-app-layout>
       
    <body class="antialiased">
        <div class = "text-left not-italic text-xl ml-20">
            {{ Auth::user()->name }}さん
        </div>
        <h1 class="text-center not-italic text-4xl font-bold">一緒に服選びしてみませんか？</h1>
          <form action="/proposal" method='POST'>
              @csrf
            <h2 class = "text-2xl mt-8 ml-20">カテゴリを選択してください</h2>
            @foreach ($categories as $category)
            <div class="form-check  text-4xl font-medium mt-2 ml-20  justify-between items-center ">
            <input name="checkbox_array[]" 
                   type="checkbox" 
                   value="{{ $category->id }}" 
                   {{ old(('category.'.$category->id) == $category->id) ? 'checked' : '' }}>
            <label class="form-check-label">{{ $category->name }}</label>
            </div>
            @endforeach
            @foreach($prices as $price)
            <
            <h2 class = "text-center text-2xl mt-5 ">予算を入力してください</h2>
            <div class = "flex w-60 mx-auto">
                <input name='budget'>
                <div class = "text-2xl font-normal">
                    円
                </div>
                    <div class = "text-xl bg-blue-400 w-12 font-semibold rounded ">
                       <input type='submit' value='検索'>
                       <a href='/proposal'></a>
                    </div>
            </div>
          </form>
    </body>
</html>
</x-app-layout>