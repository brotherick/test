<?php

use Illuminate\Database\Seeder;
use App\Clients;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Clients();
        $client->name = "Edgar Jose";
        $client->nit = "1231321231231";
        $client->address = "Guatemala, zona 2";
        $client->save();

        $client = new Clients();
        $client->name = "Antonio Jose";
        $client->nit = "234234324";
        $client->address = "Guatemala, zona 1";
        $client->save();

        $client = new Clients();
        $client->name = "Angel Jose";
        $client->nit = "534532425";
        $client->address = "Guatemala, zona 5";
        $client->save();

        $client = new Clients();
        $client->name = "Marvin Jose";
        $client->nit = "12312312432";
        $client->address = "Guatemala, zona 4";
        $client->save();

        $client = new Clients();
        $client->name = "Jose Jose";
        $client->nit = "123123123-12";
        $client->address = "Guatemala, zona 6";
        $client->save();
    }
}
