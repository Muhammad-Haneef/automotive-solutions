<x-admin.data-listing-card>

    <x-slot:before>
        <form method="post" action="{{ $row ? route('admin.update-' . $rsn, [$row->id]) : route('admin.store-' . $rsn) }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <x-admin.form.textarea ref="message" title="Display Message" rows=2 :value="$row->message ?? old('message')" required=1 />

                        <div class="col-md-3">
                            <label class="mb-1">Reward in</label>
                            <div class="input-group">
                                <input class="form-control" name="reward" id="reward" type="number" placeholder="reward" value="{{$row->reward ?? old('reward')}}" />
                                <span class="input-group-text p-0">
                                    <select class="form-select border-0 bg-transparent w-auto px-3  pe-5" name="reward_type" id="reward_type">
                                        <option value="amount" @selected(($row->reward_type ?? old('reward_type')) == "amount")>Amount</option>
                                        <option value="points" @selected(($row->reward_type ?? old('reward_type')) == "points")>Points</option>
                                    </select>
                                </span>
                            </div>
                            @error("reward")
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <x-admin.form.dropdown
                            ref="is_active"
                            title="Is Active"
                            :options="get_yes_no_options()"
                            selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-3" />

                        <div class="col-md-6 text-end">
                            <x-admin.form.submit-btn />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-slot:before>

    <x-slot:cardContent>
        <img class="img-fluid" src="{{asset('assets/images/referral-program-banner.webp')}}" />
    </x-slot:cardContent>

</x-admin.data-listing-card>