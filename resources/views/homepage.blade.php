@include('header')
<div class="container d-flex justify-content-between py-5">
  <div class="">
    <h1>Ouvres les portes de l'opportunité</h2>
    <p>Ceci est la page d'accueil publique du projet d’atelier.</p>

  </div>

  <form action="/register" method="POST" id="registration-form">
    @csrf
    <div class="mb-3">
      <label for="username" class="form-label">Nom d'utilisateur</label>
      <input type="text" class="form-control" id="username" name="username">
      @error('username')
        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp">
      @error('email')
        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
      @enderror
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
      @error('password')
        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password-repeat" class="form-label">Repeat Password</label>
      <input type="password" class="form-control" id="password-repeat" name="password_confirmation">
      @error('password_confirmation')
        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
  </form>
</div>

@include('footer')
