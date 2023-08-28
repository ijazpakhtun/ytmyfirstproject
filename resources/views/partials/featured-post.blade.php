 <div class="row mb-2">
    <div class="col-md-12">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{$posts[0]->category->name}}</strong>
          <h3 class="mb-0">{{$posts[0]->title}}</h3>
          <div class="mb-1 text-muted">{{$posts[0]->updated_at->diffForHumans()}}</div>
          <p class="card-text mb-auto">{{Illuminate\support\str::limit($posts[0]->body, 150)}}</p>
          <a href="{{route('posts.show', ['post' => $posts[0]->id]);}}" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  
  </div>