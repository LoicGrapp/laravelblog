@include('header')

<div class="container py-md-5 container--narrow">
    <div class="text-center">
        <h2>Bonjour <strong>username</strong>, Vous n'avez pas d'article !</h2>
        <p class="lead text-muted">Ici vous aurez vos dernières publications</p>
    </div>
</div>

<div class="container">
@foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{$post->content}}</p>    
@endforeach
</div>

@include('footer')