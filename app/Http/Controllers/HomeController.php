<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Prodects;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function add_to_cart($id){
        $product_id = $id;

        // Get the authenticated user
        $user = Auth::user();

        // Retrieve the user's id
        $user_id = $user->id;

        // Create a new Cart instance
        $cart = new Cart;

        // Assign the user id and product id to the cart
        $cart->user_id = $user_id;
        $cart->prodects_id = $product_id; // Ensure the column name is correct

        // Save the cart entry
        $cart->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    public function prodect_details($id)
    {
        // Retrieve the product by its ID
        $product = Prodects::find($id);
    
        // Check if the product exists
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }
    
        // Pass the product data to the view
        return view('Home.prodect_details', compact('product'));
    }
    

    //==================================================================================
    public function home()
    {
        $prodect = Prodects::all(); // Fetch all products
        return view('Home.index', compact('prodect')); // Pass the data to the view
    }
//======================================================================================
public function login_home() {
    $prodect = Prodects::all(); 
 
    return view('auth.admin.admin', compact('prodect'));
}
public function count() {
    $prodect = Prodects::all(); 
    $user = Auth::user();
    $userid = $user->id;
    $count = Cart::where("user_id", $userid)->count();
    return view('Home.Header', compact('prodect', 'count'));
}

}