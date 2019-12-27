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
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold ">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="# ">{{ $user->profile->url }}</a></div>  
       </div>
   </div>
   <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fhou1-2.fna.fbcdn.net/v/t51.2885-15/e35/c94.0.561.561a/79225007_186012015855932_2310000774829668783_n.jpg?_nc_ht=instagram.fhou1-2.fna.fbcdn.net&_nc_cat=108&_nc_ohc=i6E_6TALyNgAX-RidBF&oh=10ac5434d5c67a32ed4f4fd2341d7d6f&oe=5EB49066" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fhou1-1.fna.fbcdn.net/v/t51.2885-15/e35/c92.0.496.496a/76876296_2463502693772064_5406679365456228022_n.jpg?_nc_ht=instagram.fhou1-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=J4PiDC4z6GkAX_eG4qM&oh=66702a4d2b8879f9d39c7da3e1f2e802&oe=5EA9D160" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fhou1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.0.748.748a/s640x640/75458059_193034398548309_6670294561319117950_n.jpg?_nc_ht=instagram.fhou1-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=JqS7L5b-JroAX9LYwAU&oh=068e9e0ac820ab5289e43e251fb93466&oe=5E9C1FA3" class="w-100">
        </div>
   </div>
</div>
@endsection
