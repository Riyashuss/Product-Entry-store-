<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\View\View;




class StudentController extends Controller

{
		 
	
    public function index(): View
{
    $user = auth()->user();

    if ($user && $user->role_id == 1) {
     
        $products = DB::table('products as pa')
            ->join('users as us', 'pa.user_id', '=', 'us.id')
            ->select([
                'pa.id',
                'pa.productname',
                'pa.price',
                'pa.quantity',
                'pa.user_id',
                'us.name',  
            ])
            ->get();
    } else {
      
        $products = DB::table('products as pa')
            ->join('users as us', 'pa.user_id', '=', 'us.id')
            ->where('pa.user_id', $user->id)
            ->select([
                'pa.id',
                'pa.productname',
                'pa.price',
                'pa.quantity',
                'pa.user_id',
                'us.name',
            ])
            ->get();
    }

    return view('products.index', compact('products'));
}


 
    public function create(): View
    {
        return view('products.create');
		
    }
	public function store(Request $request): RedirectResponse
{
	Log::info($request);
    // Validate the form data
    $validatedData = $request->validate([
        'productname' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'user_id' => 'required|exists:users,id', // Validate user_id is valid
    ]);
		
    // Create the product and associate it with the authenticated user
    Product::create([
        'productname' => $request->productname,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'user_id' => $request->user_id,  // Save user_id
    ]);
	
	
    return redirect('products')->with('message', 'Product created successfully!');
}

  
 /*  public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
       Product::create($input);
        return redirect('products')->with('message','product created Successfully');
    }*/


public function edit(string $id): View
{
    // Log::info("edit ID::::" . $id);
 
    $products = DB::table('products')->where('id', $id)->first(); 

    // Log::info("products::::" . json_encode($products));

    return view('products.edit')->with('products', $products);
}


	
   
//    public function update(Request $request, string $id): RedirectResponse
// {
//     // Find the product or fail if not found
//     $products = Product::find($id);

	
// 	 Product::update([
//         'productname' => $request->productname,
//         'price' => $request->price,
//         'quantity' => $request->quantity,
//         'user_id' => $request->user_id,  // Save user_id
// 		]);

//     // Redirect to a specific route or show page with a success message
//     return redirect('products')->with('message', 'Product updated successfully!');
// }

   
	
  public function update(Request $request, string $id): RedirectResponse
    {
        Log::info("update". $request);
        $products = Product::find($id);
        Log::info("productssss:::::". $products);
        $input = $request->all();
        $products->update($input);
        return redirect('products')->with('message','product edited successfully!');  
    }
	
	
    public function destroy(string $id): RedirectResponse
    {
      
        Product::destroy($id);
        return redirect('products')->with('flash_message', 'Product deleted!'); 
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}