<x-app-layout>
        <h1 class = "text-center not-italic text-4xl font-bold">こんな服装はどうですか？</h1>
        <h3 class = "mt-9 text-2xl font-bold text-center">予算:{{ $budget }}</h3>
          <table class="table table-striped table-auto text-left font-medium">
            <thead>
             <tr>
              <th class = "w-72">カテゴリ</th>
              <th class = "w-72 ">商品名</th>
              <th class = "w-72">値段</th>
              <th class = "w-72">商品URL</th>
            </tr>
           </thead>
           <tbody>
           @foreach ($results as $result)
           <tr>
           <td class = "w-72">{{ $clothes->find($result->id)->category->name }}</td>
           <td class = "w-72">{{ $result->name }}</td>
           <td class = "w-72">{{ $result->price }}</td>
           <td class = "w-72"><a href = "{{ $result->url }}">商品を見に行く</a></td>
           </tr>
           @endforeach
          </table>
    </body>
</x-app-layout>
