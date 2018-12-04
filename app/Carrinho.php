<?php

namespace App;

class Carrinho
{
    // blueprint to create my chart
    // and store the items
    // by ITEMS, I mean GROUP of products 

    // For example
    // If I have a bookstore here
    // I click "Add to cart" on Harry Potter book
    // And I click twice
    // I dont want to have to Harry Potter items there
    // I want to have a group of harry potter items
    // And IF I add other book as "A sonf of Ice and fire", or "Lord o' the rings"
    // Then I would have two items here
    // Harry potter - group
    // Song of ice and fire - group
    // And within each group I then still have the items
    // and the quantity and the price
    // but I want to group them
    // cause I want to present my shopping cart group
    // I dont need the items three times there
    // I only need a group of those items with the information
    // of how often it has been added on and so on
    public $items = null;
    // On the cart level
    // I also need my total quantity
    // And I'll set it to zero
    public $totalQty = 0;
    // And my total price
    // And I'll set it to zero as well
    public $totalPrice = 0;

    // The important thing about this cart
    // is I'll recreat this cart each time I access it
    // Whenever I add a new Item or 
    // Whenever I get the items
    // For that of course I need to pass the old cart to it
    // And recreat the cart basead on the old cart
    // Follow this approach to always have the correct state of the cart
    public function __construct($oldCart)
    {
        if($oldCart) 
        {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        } 
    }

    // I need a function that allows me to add a new item
    // It receives a ITEM and the ID of the associated item
    public function addItem($item, $id)
    {
    // The storedItem it the GROUP refered to
        $storedItem = [
            'qty'=>0,
            'price'=>$item->preco,
            'item' => $item 
        ];
    // So I will check if in the items
    // I already have in my cart if they exist
    // or it they are empty
    // If this is a new cart I of course wouldn't have any items on my cart
        if($this->items)
        {
    // I check if I already have this item
    // And if it exists I will
    // set the storedItem equal to  $this->item[$id]
            if(array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->preco * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->preco;
    }

}
