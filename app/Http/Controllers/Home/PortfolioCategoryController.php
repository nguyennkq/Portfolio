<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function AdminPortfolioCategory(){
        $portfolio_category= PortfolioCategory::all();
        return view('admin.portfolio_category.portfolio_category_all', compact('portfolio_category'));
    }

    public function AddPortfolioCategory(){
        return view('admin.portfolio_category.portfolio_category_add');
    }

    public function StorePortfolioCategory(Request $request){
        $request->validate([
            'category_name'=>'required'
        ]);
        PortfolioCategory::insert([
            "category_name" => $request->category_name
        ]);

        $notification= array(
            "message"=> "Inserted Portfolio Category Successfully",
            "alert-type"=>"success"
        );

        return redirect()->route('admin.portfolio.category')->with($notification);
    }

    public function EditPortfolioCategory($id){
        $portfolio_category = PortfolioCategory::findOrFail($id);
        return view('admin.portfolio_category.portfolio_category_edit', compact('portfolio_category'));
    }

    public function UpdatePortfolioCategory(Request $request){
        $category_id= $request->id;
        PortfolioCategory::findOrFail($category_id)->update([
            "category_name"=>$request->category_name
        ]);

        $notification= array(
            "message"=> "Updated Portfolio Category Successfully",
            "alert-type"=>"success"
        );

        return redirect()->route('admin.portfolio.category')->with($notification);
    }

    public function DeletePortfolioCategory($id){
        PortfolioCategory::findOrFail($id)->delete();

        $notification= array(
            "message"=> "Deleted Portfolio Category Successfully",
            "alert-type"=>"success"
        );

        return redirect()->back()->with($notification);
    }
}
