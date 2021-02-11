<!DOCTYPE html>
<html>
<head>
	<title>Stripe Payment Gateway Integration </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
</head>
<body>
  
<div class="container">
  
    <h1 style="text-align: center;">User's Balance: {{ number_format(request()->user()->balance, 2) }} </h1><br>
  
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading" >
                    <h3 class="panel-title" >Payment Details</h3>                  
                </div>
                <div class="panel-body">
  
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            {{-- <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> --}}
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
  
                    <form action="{{ route('stripe.withdraw') }}" method="post">
                        @csrf
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Amount</label> <input
                                    class='form-control' type="number" name="amount" value="{{ old('amount') }}" min="1" step=any>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-success btn-lg btn-block" type="submit">Withdraw Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
        
    </div>
      
</div>
  
</body>
  
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
</html>