@include('header')

<form action="" method="POST">
    @csrf
    <div>
        <input type="text" name='title' value="{{ old('title') }}">
        @error('title')
            {{ $message }}
        @enderror
    </div>
    <div>
        <textarea name='content' >{{ old('content') }}</textarea>
        @error('content')
            <div>
            {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit">Envoyer</button>
</form>

@include('footer')