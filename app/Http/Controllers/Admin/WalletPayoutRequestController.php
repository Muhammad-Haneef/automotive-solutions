<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreWalletPayoutRequestRequest;
use App\Http\Requests\Admin\UpdateWalletPayoutRequestRequest;
use App\Models\Admin\WalletPayoutRequest;
use Illuminate\Support\Facades\DB;

class WalletPayoutRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/wallet-payouts/';

    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'wallet-payout',  // route singular name
        'rpn' => 'wallet-payouts',  // route plural name
    ];

    public function index()
    {
        $this->data['rows'] = WalletPayoutRequest::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWalletPayoutRequestRequest $request)
    {
        WalletPayoutRequest::create($request->only((new WalletPayoutRequest())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(WalletPayoutRequest $walletPayoutRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WalletPayoutRequest $walletPayoutRequest, $id)
    {
        if (!$this->data['row'] = WalletPayoutRequest::find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWalletPayoutRequestRequest $request, WalletPayoutRequest $walletPayoutRequest, $id)
    {
        WalletPayoutRequest::where('id', $id)->update($request->only((new WalletPayoutRequest())->getFillable()));
        return redirect()->route('admin.' . $this->data['rpn'])->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        DB::beginTransaction();
        try {
            WalletPayoutRequest::findOrFail($id)->delete();
            DB::commit();
            return back()->with([
                'message' => 'Record has been deleted successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'An error occurred while deleting the record.',
                'alert-type' => 'error'
            ]);
        }
    }

    public function restore($id)
    {
        DB::beginTransaction();
        try {
            WalletPayoutRequest::withTrashed()->findOrFail($id)->restore();
            DB::commit();
            return back()->with([
                'message' => 'Record has been restored successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'Unable to restore record: ' . $e->getMessage(),
                'alert-type' => 'error'
            ]);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            WalletPayoutRequest::withTrashed()->findOrFail($id)->forceDelete();
            DB::commit();
            return back()->with([
                'message' => 'Record deleted successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'Unable to delete record: ' . $e->getMessage(),
                'alert-type' => 'error'
            ]);
        }
    }
}
