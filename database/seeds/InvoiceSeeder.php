<?php

use Illuminate\Database\Seeder;
use App\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "40";
      $invoice->client_id = "1";
      $invoice->created_at = now();
      $invoice->save();

      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "100";
      $invoice->client_id = "1";
      $invoice->created_at = now();
      $invoice->save();

      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "100";
      $invoice->client_id = "2";
      $invoice->created_at = now();
      $invoice->save();

      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "80";
      $invoice->client_id = "3";
      $invoice->created_at = now();
      $invoice->save();

      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "90";
      $invoice->client_id = "4";
      $invoice->created_at = now();
      $invoice->save();

      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "100";
      $invoice->client_id = "5";
      $invoice->created_at = now();
      $invoice->save();

      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "10";
      $invoice->client_id = "3";
      $invoice->created_at = now();
      $invoice->save();

      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "90";
      $invoice->client_id = "4";
      $invoice->created_at = now();
      $invoice->save();

      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "100";
      $invoice->client_id = "2";
      $invoice->created_at = now();
      $invoice->save();

      $invoice = new Invoice();
      $invoice->serie = "A";
      $invoice->monto = "100";
      $invoice->balance = "100";
      $invoice->client_id = "5";
      $invoice->created_at = now();
      $invoice->save();

    }
}
