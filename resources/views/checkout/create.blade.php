@extends('layouts.app')
@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        YOUR FUTURE CAREER
                    </p>
                    <h2 class="primary-header">
                        Start Invest Today
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="{{asset('images/baru belajar.png')}}" alt="" class="cover">
                                <h1 class="package text-uppercase">
                                    {{$Camp->title}}
                                </h1>
                                <p class="description">
                                    Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{route('checkout.store', $Camp->id)}}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                    <input name="name" type="text" class="form-control {{$errors->first('name') ? 'is-invalid' : ''}}" value="{{Auth::user()->name}}">
                                    @if ($errors->has('name'))
                                        <p class="text-danger fw-light">{{$errors->first('name')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                    <input name="email" type="email" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}" value="{{Auth::user()->email}}">
                                    @if ($errors->has('email'))
                                        <p class="text-danger fw-light">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Occupation</label>
                                    <input name="occupation" type="text" class="form-control {{$errors->first('occupation') ? 'is-invalid' : ''}}" value="{{old('occupation') ?: Auth::user()->occupation}}">
                                    @if ($errors->has('occupation'))
                                        <p class="text-danger fw-light">{{$errors->first('occupation')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Card Number</label>
                                    <input name="card_number" type="number" class="form-control {{$errors->first('card_number') ? 'is-invalid' : ''}}" value="{{old('card_number')}}">
                                    @if ($errors->has('card_number'))
                                        <p class="text-danger fw-light">{{$errors->first('card_number')}}</p>
                                    @endif
                                </div>
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <label for="exampleInputEmail1" class="form-label">Expired</label>
                                            <input type="month" class="form-control {{$errors->first('expired') ? 'is-invalid' : ''}}" name="expired" value="{{old('expired')}}">
                                            @if ($errors->has('expired'))
                                                <p class="text-danger fw-light">{{$errors->first('expired')}}</p>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label for="exampleInputEmail1" class="form-label">CVC</label>
                                            <input type="number" class="form-control {{$errors->first('cvc') ? 'is-invalid' : ''}}" name="cvc" maxlength="3" value="{{old('cvc')}}" >
                                            @if ($errors->has('cvc'))
                                                <p class="text-danger fw-light">{{$errors->first('cvc')}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                <p class="text-center subheader mt-4">
                                    <img src="{{asset('images/ic_secure.svg')}}" alt=""> Your payment is secure and encrypted.
                                </p>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection