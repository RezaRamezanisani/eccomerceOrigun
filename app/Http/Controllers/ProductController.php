<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =  Product::with('category','brand')->latest()->get();
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.products',compact('products','categories','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->ajax()){


             $request->validate([
                'name'=>"required|string|regex:/^[\w\s\d]+$/u",
                'price'=>"required|integer|regex:/^[0-9]+$/",
                "discount"=>"nullable|integer|regex:/^[0-9]+$/",
                "category_id"=>"required|integer|not_in:0",
                "brand_id"=>"required|integer|not_in:0",
                "img"=>"nullable|image|mimes:jpg,png,jpeg|max:2500",
                "brand_img"=>"nullable|image|mimes:jpg,png,jpeg|max:2500",
                "description"=>"nullable|regex:/^[\w\s\d\.\,]+$/u|max:1000",
                 "num"=>"required|integer|regex:/^[0-9]+$/",

            ]);

            if($request->hasfile('img')){



                     $new_name_img = time().".".$request->file('img')->getClientOriginalExtension();

                    //  storage:link
                    $request->file('img')->storeAs("public/products",$new_name_img);

            }else{
                $new_name_img = "file_image_duetone.png";
            }
            if(is_null($request->description)){
                $request->description = "بدون توضیحات";
            }
            if(is_null($request->discount)){
                $request->discount = 0.00;
            }

            $arr_products = [
                'name'=>$request->name,
                'price'=> $request->price,
                "discount"=>$request->discount,
                "img"=>$new_name_img,
                "description"=>$request->description,
                'category_id'=>$request->category_id,
                'brand_id'=>$request->brand_id,
                "num"=>$request->num,
            ];
           $product =  Product::create($arr_products);
           $get_product = $product;
           $get_category = Category::where('id',$product->category_id)->first();
           $get_brand = Brand::where('id',$product->brand_id)->first();
           $get_product['category_name']=$get_category->name;
           $get_product['brand_name']=$get_brand->name;
           $get_product['brand_img']=$get_brand->brand_img;
            Image::make(public_path("storage/products/".$new_name_img))->resize(80,80)->save(public_path("storage/products/".$new_name_img),100);

            if($product){
                return response()->json(['status' => 200,'product'=>$product]);

            }else{
                return response()->json(['status' => 499]);

            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return response()->json(["status"=>200,"product"=>$product,"id"=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->ajax()){

            $product = Product::findOrFail($id);


            $request->validate([
               'name'=>"required|string|regex:/^[\w\s\d]+$/u",
               'price'=>"required|integer|regex:/^[0-9]+$/",
               "discount"=>"nullable|integer|regex:/^[0-9]+$/",
               "category_id"=>"required|integer|not_in:0",
               "brand_id"=>"required|integer|not_in:0",
               "img"=>"nullable|image|mimes:jpg,png,jpeg|max:2500",
               "brand_img"=>"nullable|image|mimes:jpg,png,jpeg|max:2500",
               "description"=>"nullable|regex:/^[\w\s\d\.\,]+$/u|max:1000",
                "num"=>"required|integer|regex:/^[0-9]+$/",


            ]);

           if($request->hasfile('img')){

                $img = $request->file('img');
                $new_name_img = time().".".$img->getClientOriginalExtension();
                $img->storeAs('public/products',$new_name_img);
                Image::make(public_path("storage/products/".$new_name_img))->resize(80,80)->save(public_path("storage/products/".$new_name_img),100);

                if(file_exists('storage/products/'.$product->img)){
                    Storage::delete('public/products/'.$product->img);
                }

           }else {
            $new_name_img = $product->img;
           }
           if(is_null($request->description)){
            $request->description = "بدون توضیحات";
            }
            if(is_null($request->discount)){
                $request->discount = 0.00;
            }

           $arr_product = [
                'name'=>$request->name,
                'price'=> $request->price,
                "discount"=>$request->discount,
                "img"=>$new_name_img,
                "description"=>$request->description,
                'category_id'=>$request->category_id,
                'brand_id'=>$request->brand_id,
                "num"=>$request->num,

           ];

            $product->update($arr_product);
            $get_product = $product;
            if($product){
                $get_category = Category::where('id',$product->category_id)->first();
                $get_brand = Brand::where('id',$product->brand_id)->first();
                $get_product['category_name']=$get_category->name;
                $get_product['brand_name']=$get_brand->name;
                $get_product['brand_img']=$get_brand->brand_img;
                return response()->json(['status'=>200,"product"=>$get_product]);

            }else{
                return response()->json(['status'=>499]);

            }

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
       $delete_complete =  $product->delete();
        if( $delete_complete ){

            return response()->json(["status"=>200,"product"=>$product->id]);
        }else{
            return response()->json(["status"=>499]);

        }
    }

    public function searchFoodAjax(Request $request){
    $request->validate([
        'search'=>'nullable|max:15|regex:/^[\s\w]+$/u'
    ]);
    if(! is_null($request->search)){
        $category = Category::all();
        // $products = Brand::Join('products','products.brand_id','brands.id')->get();
        $products = Product::with('brand')->where('name',"LIKE",'%'.$request->search.'%')->where('category_id',1)->get();
       
        
        // $products = Product::whereName($request->search)->get();
        // 
        // $products = Product::link('name',$request->search)->get();

        return response()->json($products);
      }
    }

   
}
