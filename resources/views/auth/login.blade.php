@extends('layout.app')
@section('content')
<section class="hero is-warning is-fullheight">
    <div class="hero-body">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                    @if($errors->any())
                    <div class="notification is-warning">
                        <button class="delete"></button>
                        {{$errors->first()}}
                    </div>
                    @endif
                    <form action="{{ route('login_execute')}}" method="POST" class="box">
                        @csrf

                        <div class="field">
                            <label for="" class="label">Email</label>
                            <div class="control has-icons-left">
                                <input type="email" placeholder="e.g. bobsmith@gmail.com" class="input"
                                    value="{{ request('email') }}" name="email" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="label">Password</label>
                            <div class="control has-icons-left">
                                <input name="password" type="password" placeholder="*******" class="input" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="checkbox">
                                <input type="checkbox" name="remember">
                                Remember me
                            </label>
                        </div>
                        <div class="field">
                            <button class="button is-success">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection