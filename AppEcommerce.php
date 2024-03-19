

<?php

class AppEcommerce{
    public $cart = [];
        
        

    // AGGIUNTA AL CARRELLO
    public function addToCart($newProduct) {
        global $cart;
        $this->cart[] = $newProduct;
        return $this->cart;
    }
//rimozione carrello
 function findArrayElement($elementToFind, $array) {
    global $cart;
    $index = 0;
    foreach ($array as $e) {
        if ($e === $elementToFind) {
            return $index;
        }
        $index++;
    }
    return -1;
}

 function removeCart($index) {
    global $cart;
    if ($index === -1) {
        return -1;
    } else {
        unset($this->cart[$index]);
        return $this->cart;
    }
}

// Mostra il carrello
 function getCart() {
    global $cart;
    return $this->cart;
}


//incrementare il counter della quntità di prodotti nel carrello 
/* 
function increaseQuantity($product_id) {
    global $cart;
    if(isset($cart[$product_orderNumber])) {
        $cart[$product_orderNumber]['quantity'+1];
    }
}

////decrementa counter del prodotto 
function decreaseQuantity($product_id) {
    global $cart;
    if(isset($cart[$product_id]) && $cart[$product_id]['quantity'] > 0) {
        $cart[$product_orderNumber]['quantity']--;
    }
}?>
 */





?>