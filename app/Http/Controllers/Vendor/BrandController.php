<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class BrandController extends Controller
{
    public function getBrandPage()
    {
        return view('admin/brand/add-brands');
    }

    public function addBrand(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand_name_en' => 'required',
            'brand_name_er' => 'required',
            'brand_image' => 'required|mimes:jpeg,png,jpg|max:2048',
            'status' => 'accepted'
        ]);

        if ($validator->fails()) {
            return redirect('admin/add-brand')
                ->withErrors($validator)
                ->withInput();
        }

        $Brands = new \App\Brand;
        $Brands
            ->setTranslation('name', 'en', $request->brand_name_en)
            ->setTranslation('name', 'ar', $request->brand_name_er);
        if ($request->hasFile('brand_image')) {
            $image = $request->file('brand_image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('brand_images'), $new_name);
            $Brands->image = $new_name;
        }
        $Brands->status = $request->status;

        if ($Brands->save()) {
            return redirect('admin/show-brands');
        } else {
            return redirect()->back()->with('error', 'Something went wrong. Please try again');
        }
    }

    public function showAllBrands()
    {
        $brands = \App\Brand::paginate(10);
        return view('admin/brand/show-brands', compact('brands'));
    }

    public function showEditBrand($id)
    {
        $brands = \App\Brand::where('id', $id)->first();
        $unique_id = $id;
        return view('admin/brand/edit-brands', compact('brands', 'unique_id'));
    }

    public function updateBrands(Request $request)
    {
        if ($request->hasFile('brand_image')) {
            $validator = Validator::make($request->all(), [
                'brand_name_en' => 'required',
                'brand_name_er' => 'required',
                'brand_image' => 'required|mimes:jpeg,png,jpg|max:2048',
                //'status' =>'accepted'
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'brand_name_en' => 'required',
                'brand_name_er' => 'required'
            ]);
        }

        $url = "/admin/edit-brands/" . $request->unique_id;
        if ($validator->fails()) {
            return redirect($url)
                ->withErrors($validator)
                ->withInput();
        }

        $Brands = \App\Brand::where('id', $request->unique_id)->first();
        $Brands
            ->setTranslation('name', 'en', $request->brand_name_en)
            ->setTranslation('name', 'ar', $request->brand_name_er);
        if ($request->hasFile('brand_image')) {
            $image_path = public_path('brand_images') . '/' . $Brands->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $image = $request->file('brand_image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('brand_images'), $new_name);
            $Brands->image = $new_name;
        }
        $Brands->status = $request->status;

        if ($Brands->save()) {
            return redirect('admin/show-brands');
        } else {
            return redirect()->back()->with('error', 'Something went wrong. Please try again');
        }
    }

    public function deleteBrand($brand_id)
    {
        $brand = \App\Brand::where('id', $brand_id)->first();
        $brand->delete();
        $resp['status'] = "true";
        return $resp;
    }
}
