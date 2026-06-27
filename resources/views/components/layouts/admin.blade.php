<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">

    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>XStoreO</title>

    <x-admin.css />

    @yield('exhead');

</head>

<body>
    <?php /*
 * <x-admin.loader />
 */
    ?>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <x-admin.header />
        <div class="page-body-wrapper">
            <x-admin.sidebar />
            <div class="page-body">
                <x-admin.breadcrumb />
                <div class="container-fluid">

                    @if ($errors->any())
                        <div class="alert alert-light-danger" role="alert">
                            <span class="float-end text-danger custom-close-btn fs-5" data-bs-dismiss="alert"
                                aria-label="Close">x</span>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="txt-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{ $slot }}
                </div>
            </div>
            <x-admin.footer />
        </div>
    </div>

    <x-admin.js />

    @yield('exfooter')

    @if (Session::has('message'))
        <script>
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
                case 'info':
                    iziToast.info({
                        title: 'Info!',
                        message: "{{ Session::get('message') }}",
                        position: 'topRight'
                    });
                    break;
                case 'success':
                    iziToast.success({
                        title: 'Success!',
                        message: "{{ Session::get('message') }}",
                        position: 'topRight'
                    });
                    break;
                case 'warning':
                    iziToast.warning({
                        title: 'Warning!',
                        message: "{{ Session::get('message') }}",
                        position: 'topRight'
                    });
                    break;
                case 'error':
                    iziToast.error({
                        title: 'Error!',
                        message: "{{ Session::get('message') }}",
                        position: 'topRight'
                    });
                    break;
            }
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#title').on('keyup', function() {
                let title = $(this).val();
                let slug = title.toLowerCase()
                    .trim() // Remove extra spaces from start & end
                    .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
                    .replace(/\s+/g, '-') // Replace spaces with dashes
                    .replace(/-+/g, '-'); // Remove multiple dashes
                $('#slug').val(slug);
            });
        });
    </script>

</body>

</html>
