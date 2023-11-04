<?php

namespace App\Http\Controllers;

use Chapa\Chapa\Facades\Chapa as Chapa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\catagories;
use App\Models\products;
use App\Models\cart;
use App\Models\Order;

class ChapaController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    protected $reference;

    public function __construct(){
        $this->reference = Chapa::generateReference();

    }
    public function initialize(Request $request)
    {
        //This generates a payment reference
        $reference = $this->reference;
        $user = Auth::user();

        $userid=$user->id;
        
        $userlog=cart::where('user_id','=',$userid)->get();
        
        
        if ($userlog->isEmpty()) {
            return redirect()->back()->with('message', 'Cart is empty. Please add product to cart first!');
        }   
       
        // Enter the details of the payment
        $data = [
            
            'amount' => $request->chapa,
            'email' => $user->email,
            'tx_ref' => $reference,
            'currency' => "ETB",
            'callback_url' => route('callback',[$reference]),
            'first_name' => $user->name,
            "customization" => [
                "title" => 'test',
                "description" => 'test'
            ]
        ];
        //   dd($data);
            
        
        $payment = Chapa::initializePayment($data);
            

        if ($payment['status'] !== 'success') {
            // notify something went wrong
            return  ;
        }

        return redirect($payment['data']['checkout_url']);
        
    }

 
    public function callback($reference)
    {
      
        $data = Chapa::verifyTransaction($reference);
        // dd($data);
        //if payment is successful
        if ($data['status'] ==  'success') {
            $user = Auth::user();
            $userid=$user->id;
            $test=cart::where('user_id','=',$userid)->get();
            foreach($test as $test)
            {
                $order = new order;
                $order->name=$test->name;
                $order->email=$test->email;
                $order->phone=$test->phone;
                $order->address=$test->address;
                $order->user_id=$test->user_id ;
                $order->pro_name=$test->pro_name;
                $order->pro_price=$test->pro_price;
                $order->pro_quantity=$test->pro_quantity;
                $order->pro_image=$test->pro_image;
                $order->pro_id=$test->pro_id;
                $order->payment_status='payment with chapa';
                $order->delivery_status='paid';

                //  dd($test);
                $order->save();

                $cartid=$test->id;
                $cart=cart::find($cartid);
                $cart->delete();
            }
   
            
             $order = order::where('user_id','=',$userid)->get();
             return view('home.order',compact('order'));
        }

        else{
            //oopsie something ain't right.
        }


    }
}
