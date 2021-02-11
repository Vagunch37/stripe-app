<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Operator;
use App\Models\Transaction;
use App\Models\Withdrawal;

use App\Http\Resources\User as UserResource;
use App\Http\Resources\Operator as OperatorResource;
use App\Http\Resources\Transaction as TransactionResource;
use App\Http\Resources\Withdrawal as WithdrawalResource;

class APIController extends Controller
{
    public function users()
    {
        return UserResource::collection(User::all());
    }

    public function operators()
    {
        return OperatorResource::collection(Operator::all());
    }

    public function transactions()
    {
        return TransactionResource::collection(Transaction::all());
    }

    public function withdrawals()
    {
        return WithdrawalResource::collection(Withdrawal::all());
    }
    
}
