<?php


namespace Adelphia\Bitcoinode;
use App\Models\master_coin;

class BitcoinCall
{
    private $btc;
    public function __construct($coin_code = 'BTC')
    {
        $master_coin = master_coin::where('coin_code', $coin_code)->first();
        if($master_coin == null)
            abort(404);

        $username = $master_coin->coin_rpc_username;
        $password = $master_coin->coin_rpc_password;
        $host = $master_coin->coin_rpc_host;
        $port = $master_coin->coin_rpc_port;
        $url = $master_coin->coin_rpc_url;

        $this->btc = new Bitcoinode($username, $password, $host, $port, $url);

    }

    public function getinfo()
    {
        return $this->btc->getwalletinfo() ;
    }

    public function getbalance($account = '')
    {
        return $this->btc->getbalance($account);
    }

    public function listtransactions($account = '', $count = 10000, $from = 0)
    {
        return $this->btc->listtransactions($account, $count, $from);
    }

    public function getnewaddress($label)
    {
        $address['address'] = $this->btc->getnewaddress($label);
        $address['key'] = null;
        return $address;
    }

    public function sendtoaddress($address, $ammount)
    {
        return $this->btc->sendtoaddress($address, $ammount);
    }

    public function sendfrom($from_label, $to_address, $amount)
    {
        return $this->btc->sendfrom($from_label, $to_address, $amount);
    }
}