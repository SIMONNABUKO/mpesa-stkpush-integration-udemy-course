<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import the Intervention Image Manager Class
use Image;
use App\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('updated_at', 'desc')->paginate(6);
        return view('/admin/routes')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return the form page in view/admin/create_categories.blade.php
        return view('admin/create_categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //validation
           
            // $this->validate($request, [
            //     'category_name' => 'required',
            //     'category_description' => 'required',
            //     'category_image' => 'image|nullable|max:2048'
            // ]);
            // Upload file Method 1
            $uploadedFile = $request->file('category_image');

            //Display File Name
            $file_name = $uploadedFile->getClientOriginalName();

            //Display File Extension
            $file_extension = $uploadedFile->getClientOriginalExtension();

            //Display File Size
            $file_size = $uploadedFile->getSize();


            //Move Uploaded File
            $destinationPath = 'storage/images/category_images';

            $uploadedFileName = $file_name . $file_size . '.' . $file_extension;
            $uploadedFile->move($destinationPath, $uploadedFileName);
            //Resize image here
            // open an image file
            $resizedImg = Image::make('storage/images/category_images/' . $uploadedFileName);
            // now you are able to resize the instance
            $resizedImg->resize(200, 200);
            //open logo image to resize
            $pathToLogoToResize = Image::make('storage/images/category_images/logo.png');
            //Resize the logo image
            $pathToLogoToResize->resize(70, 70);
            //save the logo img
            $pathToLogoToResize->save('storage/images/category_images/logo.jpg');
            // and insert a watermark for example
            $resizedImg->insert('storage/images/category_images/logo.jpg');
            // finally we save the image as a new file
            $resizedImg->save('storage/images/category_images/' . $uploadedFileName);

            //End of upload file 

            //creating a new post
            $category = new Category;
            $category->category_name = $request->input('category_name');
            $category->category_description = $request->input('category_description');
            $category->category_image = $uploadedFileName;
            $category->save();
            Session::flash('success', 'The category has been added successfully');

            return redirect('/admin/routes');
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
            Log::error($e);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find category id
        $category = Category::find($id);
        return view('/admin/show_category')->with('category', $category);
    }

    public function display($id)
    {
        //find category id
        $products = Category::find($id)->products;
        $category = Category::find($id);
        return view('products_categorywise', compact(['category', 'products']));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get category ID and return it
        $category = Category::find($id);
        return view('/admin/edit_category')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            //validation
            $this->validate($request, [
                'category_name' => 'required',
                'category_description' => 'required',
                'category_image' => 'image|nullable|max:2048'
            ]);


            // Upload file Method 1
            $uploadedFile = $request->file('category_image');

            //Display File Name
            $file_name = $uploadedFile->getClientOriginalName();

            //Display File Extension
            $file_extension = $uploadedFile->getClientOriginalExtension();

            //Display File Size
            $file_size = $uploadedFile->getSize();


            //Move Uploaded File
            $destinationPath = 'storage/images/category_images';

            $uploadedFileName = $file_name . $file_size . '.' . $file_extension;
            $uploadedFile->move($destinationPath, $uploadedFileName);
            //Resize image here
            // open an image file
            $resizedImg = Image::make('storage/images/category_images/' . $uploadedFileName);
            // now you are able to resize the instance
            $resizedImg->resize(200, 200);
            //open logo image to resize
            $pathToLogoToResize = Image::make('storage/images/category_images/logo.png');
            //Resize the logo image
            $pathToLogoToResize->resize(70, 70);
            //save the logo img
            $pathToLogoToResize->save('storage/images/category_images/logo.jpg');
            // and insert a watermark for example
            $resizedImg->insert('storage/images/category_images/logo.jpg');
            // finally we save the image as a new file
            $resizedImg->save('storage/images/category_images/' . $uploadedFileName);

            //End of upload file 

            //creating a new post
            $category = Category::find($id);
            $category->category_name = $request->input('category_name');
            $category->category_description = $request->input('category_description');
            $category->category_image = $uploadedFileName;
            $category->save();
            Session::flash('success', 'The category has been updated successfully');
            return redirect('/admin/routes');
        } catch (\Exception $e) {
            Session::flash('success', 'The category has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find id and delete
        $category = Category::find($id);
        $category->delete();
        return back();
    }
}
