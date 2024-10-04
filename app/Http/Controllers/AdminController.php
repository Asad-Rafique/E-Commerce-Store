<?php
namespace App\Http\Controllers;
use App\Models\category;
use App\Models\Prodects;
use Illuminate\Http\Request;

class AdminController extends Controller
{    



    public function prodect_search(Request $Request){

        $search=$Request->search;
        $data=Prodects::where("NameProdect","LIKE","%".$search. "%")->paginate(3);
        return view("auth.admin.ViweProdect",compact("data"));

    }
//===========================================================================================================
     public function edit_prodect(Request $request ,$id){
          $data=Prodects::find($id);
          $data->NameProdect=$request->NameProdect;
          $data->DiscriptionProdect=$request->description;
          $data->PriceProdect=$request->price;
          $data->CategryProdect=$request->Category;
          $data->QuntetyProdect=$request->quantity;
         
          $images = $request->ImageProdect;
       if($images){
          $imagedata= time().".".$images->getClientOriginalExtension();
          $request->ImageProdect->move("products",$imagedata) ;  
         $data->ImageProdect=$imagedata;
       }
          $data->save();
          return redirect("ViweProdect");
         
     }
    
    public function Update_prodect($id){
        $data=Prodects::find($id);
        return view("auth.admin.Update_prodect",compact("data"));
    }
    //============================================================================================
    public function delete_prodect($id){
        $data=Prodects::find($id);
        $data->delete();
        toastr()->success('Prodect deleted successfully!');
         return redirect()->back();
   }
//=============================================================================================
public function ViweProdect(){
     $data=Prodects::paginate(3);
      return view("auth.admin.ViweProdect",compact("data"));
}
 //==========================================================================================================
public function SubmitProduct(Request $Request){
     $data=new Prodects();
     $data->NameProdect = $Request->NameProdect;
     $data->DiscriptionProdect = $Request->DiscriptionProdect;
     $data->PriceProdect = $Request->PriceProdect;
     $data->CategryProdect = $Request->CategryProdect;
     $data->QuntetyProdect = $Request->QuntetyProdect;

     $images = $Request->ImageProdect;
       if($images){
          $imagedata= time().".".$images->getClientOriginalExtension();
          $Request->ImageProdect->move("products",$imagedata) ;  
         $data->ImageProdect=$imagedata;
       }
    
     $data->save();
     toastr()->success('Prodect updated successfully!');
     return redirect()->back();
}
//=====================================================================================================
      public function AddProdect(){
        $data = category::all();
       return view("auth.admin.AddProdect",compact("data"));

      }
//==============================================================================================================
    public function UpdateCategory(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);
        $data = category::find($id);
        $data->name_category = $request->category;
        $data->save();
        toastr()->success('Category updated successfully!');
        return redirect()->route('category'); // Assuming you have a route named 'category.index'
    }
    //==================================================================================================================
    public function Edit($id)
    {
        $data = category::findOrFail($id);
        return view('auth.admin.EditCategory', compact('data'));
    }
    //===============================================================================================================
    public function DeletCatagory($id)
    {
        $category = Category::findOrFail($id);  // Find category by ID
        $category->delete();  // Delete the category
        return redirect()->back()->with('success', 'Category deleted successfully!');  // Redirect back with a success message
    }
    // ===========================================================================================================
    public function category()
    {
        $data = category::all();
        return view('auth.admin.category',compact("data"));
    }
    // ===============================================================================================================
    public function AddCategory(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);
        $category = new Category();
        $category->name_category = $request->category;
        $category->save();
        // Set success message for Toastr
        return redirect()->back()->with('success', 'Your Category has been added successfully!');
    }
}
