@extends('layouts.auth')


@section('content')
   <h1 class="text-xl font-bold mb-4">{{__('login.intro')}}</h1>

   <form method="POST" action="{{ route('login.store') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Login</button>
    </div>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</form>
   </form>
@endsection