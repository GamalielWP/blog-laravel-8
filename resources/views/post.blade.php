@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By. Gamaliel in
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        {{-- menjalankan tag html dalam body (tidak melakukan escaping) {!! !!} --}}
        {!! $post->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection
{{-- Post::create(['title' => 'Judul Pertama','category_id' => 1,'slug' => 'judul-pertama','excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihilmagni veritatis sit accusantium hic assumenda harum accusamus quo necessitatibus','body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihil magni veritatissit accusantium hic assumenda harum accusamus quo necessitatibus quia eaque unde facilis iusto explicabo error? Ullam magni sapiente distinctio omnis aliquam, excepturi doloribus voluptates illo sed. Placeat numquam, magni assumenda soluta tempore ex non tempora nemo asperiores quas provident atque commodi nihil quod eius odio odit exercitationem accusamus aut eligendi labore repellendus, aspernatur sint minima! Ex facere beatae voluptatem, sit totam ipsa, iste suscipit esse sed, hic itaque? Ullam, ratione.</p><p>Est dolore, odio quae, omnis inventore modi fugit quasi nobis ab, iste maiores placeat quas soluta. Facere dignissimos consequatur illum quia recusandae facilis obcaecati, laudantium ducimus odio labore at ipsam suscipit eos a exercitationem ex! Deleniti labore explicabo at adipisci neque facilis doloribus perferendis quidem tempore mollitia eveniet, dolores fuga suscipit! Neque architecto a sequi hic eligendi, facilis illum! Debitis, facilis explicabo. Officiis aliquam officia quisquam praesentium ut, quaerat sint earum? Perferendis voluptate natus quasi quibusdam similique veniam labore cum repellat amet quo. Alias at, delectus mollitia sed quaerat, ullam maxime soluta expedita exercitationem eveniet eius ratione reprehenderit accusantium.</p><p>Dolor neque minus ipsum vitae similique laudantium, temporibus excepturi numquam quaerat aliquam reiciendis libero eius atque, reprehenderit quos beatae earum quae. Commodi laborum aut, ut minus nesciunt labore cupiditate quod eligendi in dignissimos repudiandae dolor, eaque illum sint velit iusto qui consectetur voluptatem quisquam doloremque. Corporis, velit delectus. Quisquam quibusdam dolorum laborum pariatur voluptatibus assumenda quas labore deleniti cupiditate possimus iusto dolor unde, porro dicta laudantium sunt quo. Quae enim molestiae fuga corporis, atque modi ipsam, illum, necessitatibus nihil earum nam quam provident. Libero vel, facilis odit dignissimos voluptatibus nostrum quod rem? Hic a tenetur qui explicabo maxime. Rem saepe voluptates eveniet minima, eaque illo, expedita laborum asperiores assumenda et, adipisci repellat! Maxime, voluptas rerum?</p>'])
Post::create(['title' => 'Judul Kedua','category_id' => 1,'slug' => 'judul-kedua','excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihilmagni veritatis sit accusantium hic assumenda harum accusamus quo necessitatibus','body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihil magni veritatissit accusantium hic assumenda harum accusamus quo necessitatibus quia eaque unde facilis iusto explicabo error? Ullam magni sapiente distinctio omnis aliquam, excepturi doloribus voluptates illo sed. Placeat numquam, magni assumenda soluta tempore ex non tempora nemo asperiores quas provident atque commodi nihil quod eius odio odit exercitationem accusamus aut eligendi labore repellendus, aspernatur sint minima! Ex facere beatae voluptatem, sit totam ipsa, iste suscipit esse sed, hic itaque? Ullam, ratione.</p><p>Est dolore, odio quae, omnis inventore modi fugit quasi nobis ab, iste maiores placeat quas soluta. Facere dignissimos consequatur illum quia recusandae facilis obcaecati, laudantium ducimus odio labore at ipsam suscipit eos a exercitationem ex! Deleniti labore explicabo at adipisci neque facilis doloribus perferendis quidem tempore mollitia eveniet, dolores fuga suscipit! Neque architecto a sequi hic eligendi, facilis illum! Debitis, facilis explicabo. Officiis aliquam officia quisquam praesentium ut, quaerat sint earum? Perferendis voluptate natus quasi quibusdam similique veniam labore cum repellat amet quo. Alias at, delectus mollitia sed quaerat, ullam maxime soluta expedita exercitationem eveniet eius ratione reprehenderit accusantium.</p><p>Dolor neque minus ipsum vitae similique laudantium, temporibus excepturi numquam quaerat aliquam reiciendis libero eius atque, reprehenderit quos beatae earum quae. Commodi laborum aut, ut minus nesciunt labore cupiditate quod eligendi in dignissimos repudiandae dolor, eaque illum sint velit iusto qui consectetur voluptatem quisquam doloremque. Corporis, velit delectus. Quisquam quibusdam dolorum laborum pariatur voluptatibus assumenda quas labore deleniti cupiditate possimus iusto dolor unde, porro dicta laudantium sunt quo. Quae enim molestiae fuga corporis, atque modi ipsam, illum, necessitatibus nihil earum nam quam provident. Libero vel, facilis odit dignissimos voluptatibus nostrum quod rem? Hic a tenetur qui explicabo maxime. Rem saepe voluptates eveniet minima, eaque illo, expedita laborum asperiores assumenda et, adipisci repellat! Maxime, voluptas rerum?</p>'])
Post::create(['title' => 'Judul Ketiga','category_id' => 3,'slug' => 'judul-ketiga','excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihilmagni veritatis sit accusantium hic assumenda harum accusamus quo necessitatibus','body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihil magni veritatissit accusantium hic assumenda harum accusamus quo necessitatibus quia eaque unde facilis iusto explicabo error? Ullam magni sapiente distinctio omnis aliquam, excepturi doloribus voluptates illo sed. Placeat numquam, magni assumenda soluta tempore ex non tempora nemo asperiores quas provident atque commodi nihil quod eius odio odit exercitationem accusamus aut eligendi labore repellendus, aspernatur sint minima! Ex facere beatae voluptatem, sit totam ipsa, iste suscipit esse sed, hic itaque? Ullam, ratione.</p><p>Est dolore, odio quae, omnis inventore modi fugit quasi nobis ab, iste maiores placeat quas soluta. Facere dignissimos consequatur illum quia recusandae facilis obcaecati, laudantium ducimus odio labore at ipsam suscipit eos a exercitationem ex! Deleniti labore explicabo at adipisci neque facilis doloribus perferendis quidem tempore mollitia eveniet, dolores fuga suscipit! Neque architecto a sequi hic eligendi, facilis illum! Debitis, facilis explicabo. Officiis aliquam officia quisquam praesentium ut, quaerat sint earum? Perferendis voluptate natus quasi quibusdam similique veniam labore cum repellat amet quo. Alias at, delectus mollitia sed quaerat, ullam maxime soluta expedita exercitationem eveniet eius ratione reprehenderit accusantium.</p><p>Dolor neque minus ipsum vitae similique laudantium, temporibus excepturi numquam quaerat aliquam reiciendis libero eius atque, reprehenderit quos beatae earum quae. Commodi laborum aut, ut minus nesciunt labore cupiditate quod eligendi in dignissimos repudiandae dolor, eaque illum sint velit iusto qui consectetur voluptatem quisquam doloremque. Corporis, velit delectus. Quisquam quibusdam dolorum laborum pariatur voluptatibus assumenda quas labore deleniti cupiditate possimus iusto dolor unde, porro dicta laudantium sunt quo. Quae enim molestiae fuga corporis, atque modi ipsam, illum, necessitatibus nihil earum nam quam provident. Libero vel, facilis odit dignissimos voluptatibus nostrum quod rem? Hic a tenetur qui explicabo maxime. Rem saepe voluptates eveniet minima, eaque illo, expedita laborum asperiores assumenda et, adipisci repellat! Maxime, voluptas rerum?</p>'])
Post::create(['title' => 'Judul Keempat','category_id' => 2,'slug' => 'judul-keempat','excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihilmagni veritatis sit accusantium hic assumenda harum accusamus quo necessitatibus','body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihil magni veritatissit accusantium hic assumenda harum accusamus quo necessitatibus quia eaque unde facilis iusto explicabo error? Ullam magni sapiente distinctio omnis aliquam, excepturi doloribus voluptates illo sed. Placeat numquam, magni assumenda soluta tempore ex non tempora nemo asperiores quas provident atque commodi nihil quod eius odio odit exercitationem accusamus aut eligendi labore repellendus, aspernatur sint minima! Ex facere beatae voluptatem, sit totam ipsa, iste suscipit esse sed, hic itaque? Ullam, ratione.</p><p>Est dolore, odio quae, omnis inventore modi fugit quasi nobis ab, iste maiores placeat quas soluta. Facere dignissimos consequatur illum quia recusandae facilis obcaecati, laudantium ducimus odio labore at ipsam suscipit eos a exercitationem ex! Deleniti labore explicabo at adipisci neque facilis doloribus perferendis quidem tempore mollitia eveniet, dolores fuga suscipit! Neque architecto a sequi hic eligendi, facilis illum! Debitis, facilis explicabo. Officiis aliquam officia quisquam praesentium ut, quaerat sint earum? Perferendis voluptate natus quasi quibusdam similique veniam labore cum repellat amet quo. Alias at, delectus mollitia sed quaerat, ullam maxime soluta expedita exercitationem eveniet eius ratione reprehenderit accusantium.</p><p>Dolor neque minus ipsum vitae similique laudantium, temporibus excepturi numquam quaerat aliquam reiciendis libero eius atque, reprehenderit quos beatae earum quae. Commodi laborum aut, ut minus nesciunt labore cupiditate quod eligendi in dignissimos repudiandae dolor, eaque illum sint velit iusto qui consectetur voluptatem quisquam doloremque. Corporis, velit delectus. Quisquam quibusdam dolorum laborum pariatur voluptatibus assumenda quas labore deleniti cupiditate possimus iusto dolor unde, porro dicta laudantium sunt quo. Quae enim molestiae fuga corporis, atque modi ipsam, illum, necessitatibus nihil earum nam quam provident. Libero vel, facilis odit dignissimos voluptatibus nostrum quod rem? Hic a tenetur qui explicabo maxime. Rem saepe voluptates eveniet minima, eaque illo, expedita laborum asperiores assumenda et, adipisci repellat! Maxime, voluptas rerum?</p>'])
Post::create(['title' => 'Judul Kelima','category_id' => 2,'slug' => 'judul-kelima','excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihilmagni veritatis sit accusantium hic assumenda harum accusamus quo necessitatibus','body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, vero modi magnam architecto nihil magni veritatissit accusantium hic assumenda harum accusamus quo necessitatibus quia eaque unde facilis iusto explicabo error? Ullam magni sapiente distinctio omnis aliquam, excepturi doloribus voluptates illo sed. Placeat numquam, magni assumenda soluta tempore ex non tempora nemo asperiores quas provident atque commodi nihil quod eius odio odit exercitationem accusamus aut eligendi labore repellendus, aspernatur sint minima! Ex facere beatae voluptatem, sit totam ipsa, iste suscipit esse sed, hic itaque? Ullam, ratione.</p><p>Est dolore, odio quae, omnis inventore modi fugit quasi nobis ab, iste maiores placeat quas soluta. Facere dignissimos consequatur illum quia recusandae facilis obcaecati, laudantium ducimus odio labore at ipsam suscipit eos a exercitationem ex! Deleniti labore explicabo at adipisci neque facilis doloribus perferendis quidem tempore mollitia eveniet, dolores fuga suscipit! Neque architecto a sequi hic eligendi, facilis illum! Debitis, facilis explicabo. Officiis aliquam officia quisquam praesentium ut, quaerat sint earum? Perferendis voluptate natus quasi quibusdam similique veniam labore cum repellat amet quo. Alias at, delectus mollitia sed quaerat, ullam maxime soluta expedita exercitationem eveniet eius ratione reprehenderit accusantium.</p><p>Dolor neque minus ipsum vitae similique laudantium, temporibus excepturi numquam quaerat aliquam reiciendis libero eius atque, reprehenderit quos beatae earum quae. Commodi laborum aut, ut minus nesciunt labore cupiditate quod eligendi in dignissimos repudiandae dolor, eaque illum sint velit iusto qui consectetur voluptatem quisquam doloremque. Corporis, velit delectus. Quisquam quibusdam dolorum laborum pariatur voluptatibus assumenda quas labore deleniti cupiditate possimus iusto dolor unde, porro dicta laudantium sunt quo. Quae enim molestiae fuga corporis, atque modi ipsam, illum, necessitatibus nihil earum nam quam provident. Libero vel, facilis odit dignissimos voluptatibus nostrum quod rem? Hic a tenetur qui explicabo maxime. Rem saepe voluptates eveniet minima, eaque illo, expedita laborum asperiores assumenda et, adipisci repellat! Maxime, voluptas rerum?</p>']) --}}