 @extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
            <img src="https://instagram.fhou1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fhou1-1.fna.fbcdn.net&_nc_ohc=XLzVWEYW1VcAX8-mmW0&oh=14889ff140399d9fcd7252c89d17ce3a&oe=5EAA2DD7" class="rounded-circle">
       </div>
       <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user -> username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>  
       </div>
   </div>
   <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
   </div>
</div>
@endsection
