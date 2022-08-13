<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product = Product::take(10);
        $count_product = Product::count();
        $count_category = Category::count();
        $count_brand = Brand::count();
        $count_user = User::count();
        // $r = Product::orderBy('id',"desc")->get();
        // $product_table = Product::select('name','img')->orderBy('id','desc')->get();
        // $product_table = Product::with('category','brand')->latest()->get();
        // $product_table = Product::join('categories','categories.id','products.category_id')->join('brands','brands.id','products.brand_id')->get();
        $product_table = Product::with('brand','category')->take(10)->orderBy('id','desc')->get();
        $brands_star = Brand::take(5)->orderBy('id','desc')->get();
        $categories_star = Category::take(5)->orderBy('id','desc')->get();
        // $users = User::take(10)->orderBy('id','desc')->get(['name','email_phone','img']);
        $users = User::with('role')->take(10)->orderBy('id','desc')->get();
        
        // $product_table = Product::join('categories','categories.id','products.category_id')->join('brands','brands.id','products.brand_id')->get(['categories.name','brands.name']);
        
        // $count_order = Order::count();

        return  view("admin.dashboard",compact('count_product','count_category','count_brand','count_user','product_table','categories_star','brands_star','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
        return view('forms.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signupSubmit(Request $request)
    {
        if(is_numeric($request->email_phone)){
            $request->validate([
                "name"=>"required|string|min:3|regex:/[\w\s]+/u",
                "email_phone"=>"required|unique:users,email_phone|regex:/^[0-9]{11}+$/",
                "password"=>"required|string|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}/",
                "password_confirm"=>"required|same:password|string",
            ]);
        }else{
            $request->validate([
                "name"=>"required|string|min:3|regex:/[\w\s]+/u",
                "email_phone"=>"required|email|unique:users,email_phone|string",
                "password"=>"required|string|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}/",
                "password_confirm"=>"required|same:password|string",
            ]);
        }

         $user = User::create([
             "name"=>$request->name,
             "email_phone"=>$request->email_phone,
             "password"=>Hash::make($request->password),
             'role_id'=>"2",
         ]);
         if($user){
            return redirect()->route("login")->with("success_register","ثبت نام موفقیت آمیز بود.");
         }else{

             return back()->with("error_register","خطایی رخ داد.");
         }


    }

     public  function login(){
        return view("forms.login");
     }
     public function loginSubmit(Request $request){


             if(is_numeric($request->email_phone)){
                 $request->validate([

                     "email_phone"=>"required|regex:/^[0-9]{11}+$/",
                     "password"=>"required|string|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}/",

                 ]);
             }else{
                 $request->validate([

                     "email_phone"=>"required|email|string",
                     "password"=>"required|string|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}/",

                 ]);
             }

            $user=array_merge($request->only("email_phone","password"),["status"=>"active"]);

            if(Auth::attempt($user)){
                if(Auth::user()->role_id == 1){

                    return redirect()->intended("admin/dashboard")->with("wellcome","خوش آمدید");
                }else{

                    return redirect()->route("home")->with("wellcome","خوش آمدید");

                }
            }else{
              return back()->with("error_login","اطلاعات وارد شده اشتباه است");
            }
        }


     public function logout(){
         $cart = Session::get('cart');
        Session::flush();
        Auth::logout();
        Session::put('cart',$cart);
        return redirect()->route('home')->with("exit",'از سایت خارج شدید');
     }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user  = User::findOrFail($id);
        return view('admin.update-profile',compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if(is_numeric($request->email_phone)){
            $request->validate([
                'name'=>"required|string|regex:/^[\w\s\d]+$/u",
                "email_phone"=>"required|regex:/^[0-9]{11}+$/",
                "avatar"=>"nullable|max:2500|image|mimes:jpg,png,jpeg"
            ]);
        }else{
            $request->validate([
                'name'=>"required|string",
                "email_phone"=>"required|email",
                "avatar"=>"nullable|max:2500|image|mimes:jpg,png,jpeg",
            ]);
        }

        if($request->hasFile('avatar')){

            $avatar = $request->file('avatar');
            $ext_avatar = $avatar->getClientOriginalExtension();
            $new_name_avatar = time().".".$ext_avatar;
            $avatar->storeAs("public/upload/",$new_name_avatar);
            if($user->avatar !== "user.png"){
                Storage::delete('public/upload/'.$user->avatar);
            }

        }else{

            $new_name_avatar=$user->avatar;

        }
        $requests = [
            "name"=>$request->name,
            "email_phone"=>$request->email_phone,
            "avatar"=>$new_name_avatar,
        ];

//        dd($requests);
       $user->update($requests);
       return back()->with("success-update",'آپدیت موفقیت آمیز بود');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
