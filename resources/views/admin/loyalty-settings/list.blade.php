<x-admin.data-listing-card>

    <x-slot:before>
        <form method="post" action="{{ $row ? route('admin.update-' . $rsn, [$row->id]) : route('admin.store-' . $rsn) }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <h6 class="mb-3">Earn Rate</h6>
                            <x-admin.form.input type="number" ref="earn_rate" title="Point" value="{{$row ? $row->earn_rate : old('earn_rate')}}" required=1 exinfo="How much amount is equivalent to how many points?" />
                        </div>
                        <div class="col-md-3">
                            <h6 class="mb-3">Conversion</h6>
                            <x-admin.form.input type="number" ref="redeem_rate" title="Point(s)" value="{{$row ? $row->redeem_rate : old('redeem_rate')}}" required=1 exinfo="How many points is equivalent to how much amount?" />
                        </div>
                        <div class="col-md-3">
                            <h6 class="mb-3">Validity</h6>
                            <x-admin.form.input type="number" ref="expiration_days" title="Expiration Days" value="{{$row ? $row->expiration_days : old('expiration_days')}}" required=1 exinfo="Days before points expire" />
                        </div>
                        <div class="col-md-3">
                            <h6 class="mb-3">Effectivness</h6>
                            <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()" selected="{{$row ? $row->is_active : old('is_active', 1)}}" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary mt-4">
                                <i class="fa-solid fa-plus pe-2"></i>
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-slot:before>

    <x-slot:cardContent>
        <img class="img-fluid" src="{{asset('assets/images/loyalty-program-banner.jpg')}}" />
    </x-slot:cardContent>

</x-admin.data-listing-card>