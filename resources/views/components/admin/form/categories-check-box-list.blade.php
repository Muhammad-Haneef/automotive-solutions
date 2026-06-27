<div>
    <label for="categories" class="mb-2">Select Categories</label>
    <div class="max-h-200 border p-2">
        @if (!empty($categories) && count($categories))
            <x-admin.form.checkbox-list ref="categories[]" :options="$categories" :selected="$selected" />
        @else
            <p>
                Please <a href="{{ url('/admin/categories') }}" target="_blank">add product
                    category</a> to select them.
            </p>
        @endif
    </div>
</div>
