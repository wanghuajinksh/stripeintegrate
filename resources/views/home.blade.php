@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-3">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Checkout Detail</h3>
                    </div>                    
                </div>
                <div class="panel-body">  
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    <form role="form" action="{{ route('stripe') }}" method="post" class="require-validation" data-cc-on-file="false" id="payment-form">
                        @csrf  
                        <div class='form-row row'>
                            <div class='col-md-6 form-group'>
                                <label class='control-label'>Amount</label> 
                            </div>
                            <div class='col-md-6 form-group required'>
                                <input class='form-control' size='12' type='text'>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Check out</button>
                            </div>
                        </div>
                            
                    </form>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection
