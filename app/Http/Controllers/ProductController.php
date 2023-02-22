<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Log;
use Session;
use Image;
use Throwable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at', 'desc')->paginate(10);
        return view('products_list')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create_products');
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
           
           $validated_data = $this->validate($request, [
                'product_name' => 'required',
                'product_description' => 'required',
                'product_image' => 'file',
                'product_price' => 'required',
                'category_id' => 'required'
            ]);
            // Upload file Method 1
            $uploadedFile = $request->file('product_image');

            //Display File Name
            $file_name = $uploadedFile->getClientOriginalName();

            //Display File Extension
            $file_extension = $uploadedFile->getClientOriginalExtension();

            //Display File Size
            $file_size = $uploadedFile->getSize();


            //Move Uploaded File
            $destinationPath = 'storage/images/product_images';

            $uploadedFileName = $file_name . $file_size . '.' . $file_extension;
            $uploadedFile->move($destinationPath, $uploadedFileName);
            //Resize image here
            // open an image file
            $resizedImg = Image::make('storage/images/product_images/' . $uploadedFileName);
            // now you are able to resize the instance
            $resizedImg->resize(200, 200);
            //open logo image to resize
            $pathToLogoToResize = Image::make('storage/images/product_images/logo.png');
            //Resize the logo image
            $pathToLogoToResize->resize(50, 50);
            //save the logo img
            $pathToLogoToResize->save('storage/images/product_images/logo.jpg');
            // and insert a watermark for example
            $resizedImg->insert('storage/images/product_images/logo.jpg');
            // finally we save the image as a new file
            $resizedImg->save('storage/images/product_images/' . $uploadedFileName);

            //End of upload file 

            //creating a new post
            $product = new Product;
            $product->product_name = $request->input('product_name');
            $product->product_description = $request->input('product_description');
            $product->product_price = $request->input('product_price');
            $product->product_quantity = $request->input('product_quantity');
            $product->product_location = $request->input('product_location');
            $product->user_id = $request->input('user_id');
            $product->category_id = $request->input('category_id');
            $product->product_image = $uploadedFileName;
            $product->save();
            Session::flash('success', 'The product has been added successfully');
            return redirect('/admin/routes');
        } catch (Throwable $th) {
            Log::error("Something went wrong!");
            Log::error($th->getMessage());
            throw $th;
            return redirect('/admin/routes');
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
        $product = Product::find($id);
        return view('single_product')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit_product')->with('product', $product);
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
        //validation
        $this->validate($request, [
            'product_name' => 'required',
            'product_description' => 'required',
            'product_image' => 'image|nullable|max:2048',
            'product_price' => 'required',
            'category_id' => 'required'
        ]);
        // Upload file Method 1
        $uploadedFile = $request->file('product_image');

        //Display File Name
        $file_name = $uploadedFile->getClientOriginalName();

        //Display File Extension
        $file_extension = $uploadedFile->getClientOriginalExtension();

        //Display File Size
        $file_size = $uploadedFile->getSize();


        //Move Uploaded File
        $destinationPath = 'storage/images/product_images';

        $uploadedFileName = $file_name . $file_size . '.' . $file_extension;
        $uploadedFile->move($destinationPath, $uploadedFileName);
        //Resize image here
        // open an image file
        $resizedImg = Image::make('storage/images/product_images/' . $uploadedFileName);
        // now you are able to resize the instance
        $resizedImg->resize(200, 200);
        //open logo image to resize
        $pathToLogoToResize = Image::make('storage/images/product_images/logo.png');
        //Resize the logo image
        $pathToLogoToResize->resize(50, 50);
        //save the logo img
        $pathToLogoToResize->save('storage/images/product_images/logo.jpg');
        // and insert a watermark for example
        $resizedImg->insert('storage/images/product_images/logo.jpg');
        // finally we save the image as a new file
        $resizedImg->save('storage/images/product_images/' . $uploadedFileName);

        //End of upload file 

        //creating a new post
        $product = Product::find($id);
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_price = $request->input('product_price');
        $product->product_quantity = $request->input('product_quantity');
        $product->product_location = $request->input('product_location');
        $product->user_id = $request->input('user_id');
        $product->category_id = $request->input('category_id');
        $product->product_image = $uploadedFileName;
        $product->save();
        Session::flash('success', 'The product has been added successfully');
        return redirect('/admin/routes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
