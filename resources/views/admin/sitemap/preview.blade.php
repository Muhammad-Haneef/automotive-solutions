<x-layouts.admin>


    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h5>Sitemap Preview</h5>
                        <p class="text-muted">Total URLs: {{ count($urls) }}</p>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.download-sitemap') }}" method="POST">
                            @csrf

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="sitemap-table">
                                    <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="45%">Location (URL)</th>
                                            <th width="15%">Change Frequency</th>
                                            <th width="10%">Priority</th>
                                            <th width="15%">Last Modified</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($urls as $index => $url)
                                            <tr id="row-{{ $index }}">
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm url-input"
                                                        name="urls[{{ $index }}][loc]"
                                                        value="{{ $url['loc'] }}" placeholder="URL">
                                                </td>
                                                <td>
                                                    <select class="form-select form-select-sm"
                                                        name="urls[{{ $index }}][changefreq]">
                                                        <option value="always"
                                                            {{ $url['changefreq'] == 'always' ? 'selected' : '' }}>
                                                            Always
                                                        </option>
                                                        <option value="hourly"
                                                            {{ $url['changefreq'] == 'hourly' ? 'selected' : '' }}>
                                                            Hourly
                                                        </option>
                                                        <option value="daily"
                                                            {{ $url['changefreq'] == 'daily' ? 'selected' : '' }}>Daily
                                                        </option>
                                                        <option value="weekly"
                                                            {{ $url['changefreq'] == 'weekly' ? 'selected' : '' }}>
                                                            Weekly
                                                        </option>
                                                        <option value="monthly"
                                                            {{ $url['changefreq'] == 'monthly' ? 'selected' : '' }}>
                                                            Monthly
                                                        </option>
                                                        <option value="yearly"
                                                            {{ $url['changefreq'] == 'yearly' ? 'selected' : '' }}>
                                                            Yearly
                                                        </option>
                                                        <option value="never"
                                                            {{ $url['changefreq'] == 'never' ? 'selected' : '' }}>Never
                                                        </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control form-control-sm"
                                                        name="urls[{{ $index }}][priority]"
                                                        value="{{ $url['priority'] }}" min="0" max="1"
                                                        step="0.1" placeholder="0.0-1.0">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="urls[{{ $index }}][lastmod]"
                                                        value="{{ $url['lastmod'] }}" placeholder="Last Modified"
                                                        readonly>
                                                </td>
                                                <td class="text-center">
                                                    <span
                                                        class="square-white text-danger cursor-pointer trash-3  delete-row"
                                                        data-toggle="tooltip" data-placement="left"
                                                        title="Delete Record">
                                                        <svg width="18" height="18">
                                                            <use href="{{ assets('svg') }}trash1"></use>
                                                        </svg>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-3">
                                <a href="{{ route('admin.generate-sitemap') }}" class="btn btn-secondary">
                                    <i class="icofont icofont-refresh"></i> Regenerate
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="icofont icofont-download"></i> Download Sitemap
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.delete-row').forEach(btn => {
            btn.addEventListener('click', function() {
                if (confirm('Are you sure you want to remove this URL?')) {
                    this.closest('tr').remove();
                }
            });
        });

        // Prevent form submission if no URLs
        document.querySelector('form').addEventListener('submit', function(e) {
            const rowCount = document.querySelectorAll('tbody tr').length;
            if (rowCount === 0) {
                e.preventDefault();
                alert('Please keep at least one URL in the sitemap!');
            }
        });
    </script>

    <style>
        .table-responsive {
            max-height: 600px;
            overflow-y: auto;
        }

        .form-control-sm,
        .form-select-sm {
            font-size: 0.875rem;
        }
    </style>
</x-layouts.admin>
