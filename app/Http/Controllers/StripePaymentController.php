<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Withdrawal;

class StripePaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function stripe()
    {
        $transactions = request()->user()->transactions;
        $withdrawals = request()->user()->withdrawals;
         
        
        // $transactions = Transaction::where('user_id', request()->user()->id)->orderBy("id","DESC")->get();
        return view('stripe', ['transactions'=>$transactions, 'withdrawals'=>$withdrawals]);
    }

    public function withdraw()
    {
        return view('withdraw');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {        
        // dd($request->all());
        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // if( Stripe\Charge::create ([
        //     "amount" => $request->amount * 100,
        //     "currency" => "usd",
        //     "source" => $request->stripeToken,
        //     "description" => $request->desc, 
        // ]) ) {
        //     request()->user()->balance += $request->amount;
        //     request()->user()->save();
        // }

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $amount = (float) $request->amount;
        if(
            $transaction = $stripe->charges->create([
            "amount" => $amount * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => $request->desc, 
          ])
        ) {
            $user = request()->user();

            $user->balance += $amount;
            $user->save();

            // $new_transaction = Transaction::create([
            //     'operator_id' => 1,
            //     'transaction_id' => $transaction->id,
            //     'amount' => $amount,
            //     // 'transaction_at' => time(),
            //     'transaction_at' => $transaction->created,
                
            // ]);

            $user->transactions()->create([
                'operator_id' => 1,
                'transaction_id' => $transaction->id,
                'amount' => $amount,
                // 'transaction_at' => time(),
                'transaction_at' => $transaction->created,
                
            ]);

            Session::flash('success', 'Payment successful!');
          
            return back();
        }
  

        // protected $fillable = [
        //     'operator_id',
        //     'transaction_id',
        //     'amount',
        //     'transaction_at',
        // ];
        
    }

    public function stripeWithdraw(Request $request)
    {       

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $user = request()->user();
        $amount = (float) $request->amount;
                
        if($user->balance >  $amount) {
            // $withdrawal = $stripe->payouts->create([
            //     "amount" => $amount * 100,
            //     "currency" => "usd",
            //     // 'method' => 'instant',
            //     // 'destination' => 'card_xyz',
            // ]);
            // dd($withdrawal);
            $user->balance -= $amount;
            $user->save();

            $user->withdrawals()->create([
                'operator_id' => 1,
                // 'transaction_id' => $withdrawal->id,
                'transaction_id' =>'wd_1IJaxKAGMiljVMuAJaolBhg5',
                'amount' => $amount,
                'transaction_at' => time(),
                // 'transaction_at' => $withdrawal->created,
                
            ]);
            

            Session::flash('success', 'Withdraw successful!');
            return back();

        } else {

            Session::flash('danger', 'Insufficient balance!');
            return back();
        }

        // if(
             
        // ) {
        //     request()->user()->balance -= $request->amount;
        //     request()->user()->save();
        //     Session::flash('success', 'Withdraw successful!');
        //     return back();
        // }
        
  
        
          
        
    }



    
}
