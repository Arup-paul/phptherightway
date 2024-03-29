<?php

declare(strict_types = 1);

namespace App\PaymentGateway\Paddle;


class Transaction
{
     private float $amount;
    public function __construct(
          float $amount,
    )
    {
       $this->amount = $amount;
    }

    public function copyFrom(Transaction $transaction){
         var_dump($transaction->amount);
    }

    public function getAmount(): float
    {
        return $this->amount;
    }


   public function process()
   {
       echo "Processing $" . $this->amount . ' Transaction';
   }

   private function generateReceipt(){

   }




}