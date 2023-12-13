<x-guest-layout>
    <x-slot name="title">Sign Up</x-slot>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="d-flex align-items-center justify-content-between mb-3">
            <a href="{{ route('register') }}" class="">
                <h3 class="text-primary">Sign Up</h3>
            </a>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="floatingText" placeholder="jhondoe">
            <label for="floatingText">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-4">
            <input type="password"  name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-4">
            <input type="password" name="password_confirmation" class="form-control" id="floatingPasswordConfirm" placeholder="Password">
            <label for="floatingPasswordConfirm">Confirm Password</label>
        </div>
        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
        <p class="text-center mb-0">Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
    </form>
   
</x-guest-layout>
