<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\Subscriber;
use App\Http\Requests\Admin\StoreSubscriberRequest;
use App\Http\Requests\Admin\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/subscribers/";
    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'subscriber', // route singular name
        'rpn' => 'subscribers', // route plural name
    ];
    public function index()
    {
        $this->data['rows'] = Subscriber::withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriberRequest $request)
    {
        $validated = $request->validated();
        $email = strtolower(trim($validated['email']));

        $existingSubscriber = Subscriber::withTrashed()->where('email', $email)->first();
        if ($existingSubscriber) {
            if ($existingSubscriber->trashed()) {
                $existingSubscriber->restore();
            }

            if (!$existingSubscriber->is_active) {
                $existingSubscriber->is_active = true;
                $existingSubscriber->save();
            }

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'You are already subscribed.',
                    'type' => 'success',
                ]);
            }

            return back()->with([
                'message' => 'You are already subscribed.',
                'alert-type' => 'success'
            ]);
        }

        Subscriber::create([
            'email' => $email,
            'is_active' => true,
        ]);

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Thanks for subscribing.',
                'type' => 'success',
            ], 201);
        }

        return back()->with([
            'message' => 'Thanks for subscribing.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber, $id)
    {
        if (!$this->data['row'] = Subscriber::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['rows'] = Subscriber::withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscriberRequest $request, Subscriber $Subscriber, $id)
    {
        Subscriber::where('id', $id)->update($request->only((new Subscriber())->getFillable()));
        return redirect()->route($this->data['rpn'])->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }


    public function trash($id)
    {
        DB::beginTransaction();
        try {
            Subscriber::findOrFail($id)->delete();
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
            Subscriber::withTrashed()->findOrFail($id)->restore();
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
            Subscriber::withTrashed()->findOrFail($id)->forceDelete();
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
