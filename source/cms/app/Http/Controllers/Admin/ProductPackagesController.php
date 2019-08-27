<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Session;


class ProductPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $productPackages = ProductPackage::orderBy('created_at', 'desc');

        $productPackages = $productPackages->paginate($perPage);

        $total = ProductPackage::count();

        return view('admin.product_packages.index', compact('productPackages', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.product_packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'shoe_category_id' => 'required'
        ]);

        $requestData = $request->all();

        $package = ProductPackage::create($requestData);

        //upload image
        if($request->hasFile('image'))
        {
            $this->changeImage($package->id, $request);
        }

        Session::flash('flash_message', 'Created A Product Package!');

        return redirect('admin/product-packages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $productPackage = ProductPackage::findOrFail($id);

        return view('admin.product_packages.show', compact('productPackage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $productPackage = ProductPackage::findOrFail($id);

        return view('admin.product_packages.edit', compact('productPackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'shoe_category_id' => 'required',
        ]);

        $requestData = $request->all();

        $product = ProductPackage::findOrFail($id);

        $product->update($requestData);
        if ($request->hasFile('image'))
        {
            $this->changeImage($product->id, $request);
        }

        Session::flash('flash_message', 'Updated Product Package!');

        return redirect('admin/product-packages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $productPackage = ProductPackage::findOrFail($id);
        if (!$productPackage->canDelete()) {

            Session::flash('flash_error', 'Can not delete this package');

        } else {
            $productPackage->delete();

            Session::flash('flash_message', 'Deleted A Product Package!');
        }

        return redirect('admin/product-packages');
    }

    public function getPackageDetails($id)
    {
        try {

            $packages = ProductPackage::join('shoe_categories', 'product_packages.shoe_category_id', 'shoe_categories.id')
                ->where('product_packages.id', $id)
                ->first(['product_packages.name as name', 'price', 'shoe_categories.name as category']);

            return response()->json($packages);

        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'success' => false,

            ]);
        }
    }

    /**
     * Upload Image to Product Feature
     *
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function changeImage($id, Request $request)
    {
        $package = ProductPackage::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $package->id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path(config('constants.PRODUCT_PACKAGE_FOLDER')), $photoName);

        // remove old file
        if (!empty($package->image)) {
            $oldFilePath = public_path(config('constants.PRODUCT_PACKAGE_FOLDER')) . '/' . $package->image;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update product feature image
        $package->image = $photoName;
        $package->save();

        return $package;
    }


}
