public function approve_product($product_id) {
    // Retrieve the data from the productSignup model
    $productData = Temp_product::where('id', $product_id)->first();

    if ($productData) {
        // Create a new instance of the Finalproducts model
        $data = new products;

        // Assign the properties from the $productData object
        $data->product_title = $productData->product_title;
        $data->product_description = $productData->product_description;
        $data->price = $productData->price;
        $data->days = $productData->days;
        $data->discounted_price = $productData->discounted_price;
        $data->quantity = $productData->quantity;
        $data->catagory_id = $productData->catagory_id;
        $data->apparel_id = $productData->apparel_id;
        $data->vendor_name = $productData->vendor_name;
        $data->image = $productData->image;

        $data->save();
        $productData->delete();

        return redirect()->back()->with('message', 'product Approved successfully');
    } else {
        // Handle the case when the product data with the given ID is not found
        return redirect()->back()->with('error', 'product data not found');
    }
}