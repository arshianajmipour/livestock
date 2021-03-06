@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <a href="/newDamRegistration">ثبت دام جدید</a>
                <a href="/damList">لیست دام ها</a>
                <a href="/newGaleRegistration">ثبت گله جدید</a>
                <a href="/newSalonRegistration">ثبت سالن جدید  </a>
            </div>
        </div>
    </div>
</div>
@endsection
