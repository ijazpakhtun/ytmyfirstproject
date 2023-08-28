
<article class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta">{{$post->updated_at->diffForHumans()}} by <a href="#">{{$post->user->name}}</a></p>


       {{$post->body}}  

      </article>
