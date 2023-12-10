<?php
namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    //
    public function storeProducts(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'prod_images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $fileName = time() . '.' . $request->prod_images->extension();
        $request->prod_images->storeAs('public/images', $fileName);
        $items = new product;
        $items->title = $request->input('title');
        $items->price = $request->input('price');
        $items->description = $request->input('description');
        $items->prod_images = $fileName;
        $items->status='pending';
        $items->reject_reason='null';
        $items->user_id=Auth::user()->id;
        $items->save();
        return redirect('/dashboard')->with('success','Product Added');
    }
     
    public function viewProducts(){
        //$products = Product::all();
        $products = Product::with(['userProducts'])->where('user_id',Auth::user()->id)->get();
        return view('home',compact('products'));
    }
    public function productDetails($id){
        $data = product::where('id',$id)->get();
       return view('product_details',compact('data'));
    }

    public function approveStatus($id){
        product::where('id',$id)->update([
            'status'=>'Approved'
        ]);
        return redirect('/products')->with('success','Status updated');
    }

    public function rejectStatus(Request $req,$id){
        product::where('id',$id)->update([
            'status'=>'Rejected',
            'reject_reason'=>$req->reject_reason
        ]);
        return redirect('/products')->with('success','Status updated');

    }

}
