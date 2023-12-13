<x-guest-layout>
    <x-slot name="title">Sign Up</x-slot>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="d-flex align-items-center justify-content-between mb-3">
            <a href="{{ route('login') }}" class="">
                <h3 class="text-primary">Sign In</h3>
            </a>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-4">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
        <p class="text-center mb-0">Don't have an Account? <a href="{{ route('register') }}">Sign Up</a></p>
    </form>
   
</x-guest-layout>

