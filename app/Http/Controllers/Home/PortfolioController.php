<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Image;

class PortfolioController extends Controller
{
    public function AdminPortfolio(){
        $portfolio_all = Portfolio::all();
        return view('admin.portfolio.portfolio_all', compact('portfolio_all'));
    }

    public function AddPortfolio(){
        $category = PortfolioCategory::all();
        return view('admin.portfolio.portfolio_add', compact('category'));
    }

    public function StorePortfolio(Request $request){
        $request->validate([
            'portfolio_category_id'=>'required',
            'portfolio_title'=>'required',
            'portfolio_url'=>'required',
            'portfolio_description'=>'required',
        ]);
        $image = $request->file('portfolio_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(430,327)->save('upload/portfolio/'.$name_gen);

        $save_url = 'upload/portfolio/'.$name_gen;

        Portfolio::insert([
            'portfolio_category_id'=>$request->portfolio_category_id,
            'portfolio_title'=>$request->portfolio_title,
            'portfolio_image'=>$save_url,
            'portfolio_url'=>$request->portfolio_url,
            'portfolio_description'=>$request->portfolio_description,
        ]);


        $notification= array(
            "message" => "Portfolio Inserted Successfully",
            "alert-type" => "success"
        );

        return redirect()->route('admin.portfolio')->with($notification);
    }

    public function EditPortfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        $category = PortfolioCategory::all();
        return view('admin.portfolio.portfolio_edit', compact('portfolio','category'));
    }

    public function UpdatePortfolio(Request $request){
        $portfolio_id = $request->id;
        if($request->file('portfolio_image')){
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(430,327)->save('upload/portfolio/'.$name_gen);

            $save_url = 'upload/portfolio/'.$name_gen;
            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_category_id'=>$request->portfolio_category_id,
                'portfolio_title'=>$request->portfolio_title,
                'portfolio_image'=>$save_url,
                'portfolio_url'=>$request->portfolio_url,
                'portfolio_description'=>$request->portfolio_description,
            ]);


            $notification= array(
                "message" => "Portfolio Updated With Image Successfully",
                "alert-type" => "success"
            );

            return redirect()->route('admin.portfolio')->with($notification);

        }else {
            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_category_id'=>$request->portfolio_category_id,
                'portfolio_title'=>$request->portfolio_title,
                'portfolio_url'=>$request->portfolio_url,
                'portfolio_description'=>$request->portfolio_description,
            ]);

            $notification= array(
                "message" => "Portfolio Updated Without Image Successfully",
                "alert-type" => "success"
            );

            return redirect()->route('admin.portfolio')->with($notification);
        }
    }

    public function DeletePortfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        $img= $portfolio->portfolio_image;

        unlink($img);

        Portfolio::findOrFail($id)->delete();

        $notification= array(
            "message" => "Portfolio Deleted Successfully",
            "alert-type" => "success"
        );
        return redirect()->back()->with($notification);
    }

    public function DetailPortfolio($id){
        $portfolio_detail= Portfolio::findOrFail($id);
        $category = PortfolioCategory::findOrFail($id);
        return view('frontend.portfolio_detail', compact('portfolio_detail', 'category'));
    }

}
