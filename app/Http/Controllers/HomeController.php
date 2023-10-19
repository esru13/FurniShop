<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\catagories;
use App\Models\products;
use App\Models\cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
         
        if($usertype == '1'){
            return view('admin/new.homi');
        }
        else{
            return view('home.userpage');
        }
       
    }
   
    public function index(){

        $product = products::all();
   
        return view('home.userpage');
    }
    public function link(){

        $product = products::all();
        $catagory = catagories::all();
        $latest = products::all()->take(-5);

        $sofa = products::where('pro_catagory','sofa')->get();
        $lamp = products::where('pro_catagory','lamp')->get();
        $table = products::where('pro_catagory','table')->get();
        $bed = products::where('pro_catagory','bed')->get();
        $chair = products::where('pro_catagory','chair')->get();
         
        return view('home.product',compact('product','sofa','lamp','latest',
                    'table','bed','chair','catagory'));
    }

    public function latest()
    {
        $product = products::all();
        $latest = products::all()->take(-5);
        return view('home.userpage',compact('latest'));
    }

    public function product_detail($id){

        $product = products::find($id);

        return view('home.product_detail',compact('product'));
    }
    public function add_cart(Request $request,$id){

        if(Auth::id())
        {
           $user=Auth::user();
           $product=products::find($id);
           
           $cart = new cart;

           $cart->name=$user->name;
           $cart->email=$user->email;
           $cart->phone=$user->phone;
           $cart->address=$user->address;
           $cart->user_id=$user->id;

           $cart->pro_name=$product->pro_name;
           $cart->pro_price=$product->pro_price;
           $cart->pro_image=$product->pro_image;
           $cart->pro_id=$product->id;

           $cart->pro_quantity=$request->quantity;

           $cart->save();

           return redirect()->back()->with('message', 'Product added successfully to the cart');

        }
        else{
            return redirect('login');
        }
    }

        public function show_cart()
        {
            if(Auth::id())
            {

            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();


            return view('home.cart',compact('cart'));  
            }
            else
            {
                return redirect('login');
            }
        }
        public function delete_cart($id){

            $cart = cart::find($id);

            $cart -> delete();

            return redirect()->back()->with('message', 'Item Deleted Successfully.');
        }
        public function contact(){
            
            return view('home.contact');
        }
        public function about(){
            
            return view('home.about_us');
        }

        public function cash_order(){

            $user = Auth::user();

            $userid=$user->id;

            $data=cart::where('user_id','=',$userid)->get();
            
            if ($data->isEmpty()) {
                return redirect()->back()->with('message', 'Cart is empty. Please add product to cart first!');
            }

            foreach($data as $data)
            {
                $order = new order;
                $order->name=$data->name;
                $order->email=$data->email;
                $order->phone=$data->phone;
                $order->address=$data->address;
                $order->user_id=$data->user_id ;
                $order->pro_name=$data->pro_name;
                $order->pro_price=$data->pro_price;
                $order->pro_quantity=$data->pro_quantity;
                $order->pro_image=$data->pro_image;
                $order->pro_id=$data->pro_id;

                $order->payment_status='cash on delivery';

                $order->delivery_status='processing';

                $order->save();

                $cartid=$data->id;
                $cart=cart::find($cartid);
                $cart->delete();

            }
            //return the order data to order.blade.php and redirect to it
            $order = order::where('user_id','=',$userid)->get();
            return view('home.order',compact('order'));
        }
        public function show_order(){

           if(Auth::id())
           {

            $data = Auth::user()->id;
            $order = Order::where('user_id','=',$data)->get();
            return view('home.order',compact('order'));
           }
           
           else{
                return redirect('login');
              }

        }
        public function delete_order($id){

            $order = Order::find($id);

            $order->delivery_status = "Cancelled Order";

            $order->save();

            return redirect()->back()->with('message', 'Order Cancelled Successfully.');
        }
        
    }

    
