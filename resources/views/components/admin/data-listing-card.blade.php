<x-layouts.admin>
    {{ $before ?? '' }}
    <div class="card">
        {{ $header ?? '' }}

        <div class="card-body">
            @if(isset($head) || isset($body))
            <div class="table-responsive custom-scrollbar">
                <table class="display table-striped border data-table">
                    <thead>
                        <tr>
                            {{ $head ?? '' }}
                        </tr>
                    </thead>
                    <tbody>
                        {{ $body ?? '' }}
                    </tbody>
                </table>
            </div>
            @endif
            {{ $cardContent ?? '' }}
        </div>
    </div>
    {{ $after ?? '' }}
</x-layouts.admin>