<?php
//! Identifiers
/*
1. public
2. private
3. protected
 */
class Fund {
    private $fund;//? Only class er vitore access kora jabe but class er vitore theke access kora jebe nah

    function __construct( $initialFund ) {
        $this->fund = $initialFund;
    }
    public function addFund( $money ) {
        $this->fund += $money;
        $this -> deductFund(10);//? For Accessing private deduct method
        
    }
    private function deductFund( $money ) {
        $this->fund -= $money;
    }
    public function getTotal() {
        echo "Total Fund is {$this->fund}\n";

    }

}
$ourFund = new Fund( 100 );
$ourFund->getTotal();
$ourFund->addFund( 10 );
$ourFund->getTotal();
