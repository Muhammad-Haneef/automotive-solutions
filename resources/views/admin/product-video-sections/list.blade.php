<x-layouts.admin>
    <div class="row">
        <div class="col-xxl-12">
            <div class="bg-navbar arrow-tabs">
                <div class="card">
                    <div class="card-header">
                        <x-admin.product-edit-pills :active="$active" pid="{{$pid}}" />
                    </div>
                    <div class="card-body">

                        @include('admin.product-video-sections.form')

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <h5>Product Related Videos Sections</h5>
                                </div>
                                <div class="row default-according style-1" id="accordionoc">
                                    <div class="col-xl-12">
                                        @forelse ($rows as $row)

                                        <div class="card card{{$row->id}}">
                                            <div class="card-header">
                                                <h5>
                                                    <button class="btn btn-link collapsed ps-3" data-bs-toggle="collapse" data-bs-target="#collapseicon{{$row->id}}" aria-expanded="false" aria-controls="collapseicon2">
                                                        {{$row->title}}
                                                    </button>
                                                </h5>
                                            </div>
                                            <div class="collapse" id="collapseicon{{$row->id}}" data-bs-parent="#accordionoc">
                                                <div class="card-body">

                                                    <div class="py-2 text-center border border-info mb-3">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                @if($row->show_title)
                                                                <i class="icofont icofont-check-circled text-success"></i>
                                                                @else
                                                                <i class="icofont icofont-close-circled text-danger"></i>
                                                                @endif
                                                                Show Section Title
                                                            </div>
                                                            <div class="col-md-2">
                                                                @if($row->show_video_title)
                                                                <i class="icofont icofont-check-circled text-success"></i>
                                                                @else
                                                                <i class="icofont icofont-close-circled text-danger"></i>
                                                                @endif
                                                                Show Videos Title
                                                            </div>
                                                            <div class="col-md-2">
                                                                @if($row->show_description)
                                                                <i class="icofont icofont-check-circled text-success"></i>
                                                                @else
                                                                <i class="icofont icofont-close-circled text-danger"></i>
                                                                @endif Show Section Description
                                                            </div>
                                                            <div class="col-md-2">
                                                                @if($row->is_active)
                                                                <i class="icofont icofont-check-circled text-success"></i>
                                                                @else
                                                                <i class="icofont icofont-close-circled text-danger"></i>
                                                                @endif
                                                                Is Active
                                                            </div>
                                                            <div class="col-md-2">
                                                                Show {{$row->per_row}} Videos Per Row
                                                            </div>
                                                            <div class="col-md-2">
                                                                Section Sort By: {{$row->sort_by}}
                                                            </div>



                                                        </div>
                                                    </div>

                                                    <div class="py-3 border border-light">
                                                        <div class="row mb-3">
                                                            <div class="col-md-11">
                                                                <div class="px-3">
                                                                    {{$row->description}}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="fw-normal text-sm fw-light text-end" style="font-size: 10px;">

                                                                    <div class="common-align gap-2 justify-content">

                                                                        <i onclick="showAddVideoModal('<?= route('admin.create-product-video', [$pid]) ?>', <?= $pid ?>, <?= $row->id ?>)" class="icofont icofont-video-alt cursor-pointer"></i>

                                                                        <a class="square-white" href="{{route('admin.edit-'.$rsn, [$pid, $row->id])}}" data-toggle="tooltip" data-placement="left" title="Edit Record">
                                                                            <svg width="18" height="18">
                                                                                <use href="http://127.0.0.1:8000/assets/svg/icon-sprite.svg#edit-content"></use>
                                                                            </svg>
                                                                        </a>

                                                                        <span class="square-white trash-3"
                                                                            onclick="showDeleteConfirmation(`{{ route('admin.destroy-'.$rsn, [$pid, $row->id]) }}`);"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left"
                                                                            title="Delete Record">
                                                                            <svg width="18" height="18">
                                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}"></use>
                                                                            </svg>
                                                                        </span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="main-divider mt-3">
                                                                <div class="divider-body divider-body-2 divider-danger">
                                                                    <div class="divider-circle bg-light-danger">
                                                                        <i class="fa-solid fa-video txt-danger"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="table-responsive custom-scrollbar">
                                                                <table class="display table-striped border data-table_ table-sm" style="width: 100%;">
                                                                    <thead>
                                                                        <th class="col-1 text-center">Video</th>
                                                                        <th>Title/Caption</th>
                                                                        <th class="col-1 text-center">Sort By</th>
                                                                        <th class="col-1 text-center">Action</th>
                                                                    </thead>
                                                                    <tbody>
                                                                        @forelse ($row->videos as $v)
                                                                        <tr>
                                                                            <td class=" text-center">
                                                                                <a target="_blank" href="{{$v->url}}">
                                                                                    <i class="icofont icofont-video-alt cursor-pointer text-danger"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                {{$v->title}}
                                                                            </td>
                                                                            <td class="text-center">
                                                                                {{$v->sort_by}}
                                                                            </td>
                                                                            <td class=" text-center">

                                                                                <span id="videoRow<?= $v->id ?>" onclick="editVideo('<?= route('admin.update-product-video', [$pid, $v->id]) ?>', <?= $pid ?>, <?= $row->id ?>, <?= $v->id ?>)" data-video_url="{{$v->url}}" data-video_title="{{$v->title}}" data-video_sort_by="{{$v->sort_by}}">
                                                                                    <svg width="18" height="18">
                                                                                        <use href="http://127.0.0.1:8000/assets/svg/icon-sprite.svg#edit-content"></use>
                                                                                    </svg>
                                                                                </span>

                                                                                <span class="square-white trash-3"
                                                                                    onclick="showDeleteConfirmation(`{{ route('admin.destroy-product-video', [$pid, $v->id]) }}`);"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="left"
                                                                                    title="Delete Record">
                                                                                    <svg width="18" height="18">
                                                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}"></use>
                                                                                    </svg>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        @empty

                                                                        @endforelse
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="alert alert-light-danger" role="alert">
                                            Sorry! records not found.
                                        </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_video_modal" tabindex="-1" role="dialog" aria-labelledby="add_video_modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-toggle-wrapper text-start dark-sign-up">
                    <form method="post" id="modal_form" action=''>
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">
                                Add Video to this section
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <input name="product_id" id="modal_product_id" type="hidden" value="" />
                                <input name="product_video_section_id" id="midal_product_video_section_id" type="hidden" value="" />
                                <x-admin.form.input ref="title" title="Video Caption/Title" required=1 />
                                <x-admin.form.textarea ref="url" rows="2" title="Youtybe Video Embeded Code" required=1 />
                                <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by')}}" class="col-md-6" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-danger" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @section('exfooter')
    <x-admin.delete-confirmation-modal />

    <script>
        function showAddVideoModal(route, pid, section_id) {
            //alert("Product id "+pid);
            //alert("section_id "+section_id);
            $("#modal_form").attr('action', route);
            $("#modal_product_id").val(pid);
            $("#midal_product_video_section_id").val(section_id);
            $("#modal_form").find("#title").val('');
            $("#modal_form").find("#url").val('');
            $("#add_video_modal").modal('show');
        }

        $(document).ready(function() {
            $("#modal_form").submit(function(event) {
                event.preventDefault(); // Prevents the form from submitting

                var title = $(this).find("#title").val().trim();
                var url = $(this).find("#url").val().trim();

                if (title === '') {
                    iziToast.error({
                        title: 'Error!',
                        message: "Please enter video title",
                        position: 'topRight'
                    });
                    return false;
                }
                if (url === '') {
                    iziToast.error({
                        title: 'Error!',
                        message: "Please enter video url",
                        position: 'topRight'
                    });
                    return false;
                }

                // If validation passes, you can proceed with form submission via AJAX or manually
                this.submit(); // Uncomment this if you want to allow form submission after validation
            });
        });

        function editVideo(route, pid, section_id, rid) {
            $("#modal_form").attr('action', route);
            $("#modal_product_id").val(pid);
            $("#midal_product_video_section_id").val(section_id);

            var videoUrl = $("#videoRow"+rid).data('video_url');
            var videoTitle = $("#videoRow"+rid).data('video_title');
            var videoSortBy = $("#videoRow"+rid).data('video_sort_by');

            $("#modal_form").find("#title").val(videoTitle);
            $("#modal_form").find("#url").val(videoUrl);
            $("#modal_form").find("#sort_by").val(videoSortBy);

            $("#add_video_modal").modal('show');
        }
    </script>
    @endsection

</x-layouts.admin>