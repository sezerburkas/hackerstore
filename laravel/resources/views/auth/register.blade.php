@extends('layouts.blank')

@section('title', 'Login Account')

@section('content')
    <div class="login-form">
        <form name="register">
            @csrf
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <a href="/" class="underline-none">
                        <div class="logo p-0">
                            <h1 class="small">HACKER STORE</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row section d-flex justify-content-center">
                <div class="switch-container d-flex">
                    <a class="switch-link left" href="/login">Login</a>
                    <a class="switch-link right active" href="/register">Register</a>
                </a>
                </div>
            </div>
            <div class="alert">
            </div>
            <div class="row section">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">uname $></span>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
            </div>
            <div class="row my-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">email $></span>
                    <input type="email" class="form-control" name="email" id="">
                </div>
            </div>
            <div class="row my-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">passwd $></span>
                    <input type="password" class="form-control" name="password" id="">
                </div>
            </div>
            <div class="row my-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">confirm $></span>
                    <input type="password" class="form-control" name="password_confirmation" id="">
                </div>
            </div>
            <div class="row mb-2 d-flex justify-content-between">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="1" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Tems & Conditions
                        </label>
                    </div>          
                </div>
                <div class="col-md-4 p-0">
                    <button class="btn w-100 btn-custom">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection