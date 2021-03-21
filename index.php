<?php
interface shop
{
    const apple = 100;
    const banana = 110;
    const watermelon = 379;
    const milk = 99;
}

class addGoods
{
    function addApple($a)
    {
        echo $a . 'Яблок ';
    }
    public function addBanana($a)
    {
        echo $a . 'Бананов ';
    }
    public function addWatermelon($a)
    {
        echo 'Арбузов ';
    }
    public function addMilk($a)
    {
        echo 'Молоко ';
    }
}
$addGoods = new addGoods;
class countPrice implements shop
{
    public function apple_count_price($a)
    {
        echo $a * shop::apple;
    }
    public function banana_count_price($a)
    {
        echo $a * shop::banana;
    }
    public function watermelon_count_price($a)
    {
        echo $a * shop::watermelon;
    }
    public function milk_count_price($a)
    {
        echo $a * shop::milk;
    }
}
$count = new countPrice;
class deliveryType
{
    public function byCourier()
    {
        echo 'Доставка курьером';
    }
    public function byPost()
    {
        echo 'Доставка почтой';
    }
}
$delivery = new deliveryType;
class userOrder
{
    public function finalOrder($addGoods, $count, $delivery)
    {
        echo "Заказ:" . '<br><br>';
        $addGoods->addApple(2);
        echo $count->apple_count_price(2) . ' рублей';
        echo '<br>';
        $addGoods->addBanana(6);
        echo $count->banana_count_price(6) . ' рублей';
        echo '<br>';
        $delivery->byPost();
    }
}
$order = new userOrder;
$order->finalOrder($addGoods, $count, $delivery);
