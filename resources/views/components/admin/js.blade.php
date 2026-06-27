@php
$jss = [

// JQUERY    
'jquery.min.js',

// BOOTSTRAP
'bootstrap/bootstrap.bundle.min.js',

// ICONS
'icons/feather-icon/feather.min.js',
'icons/feather-icon/feather-icon.js',

// SCROLLBAR
'scrollbar/simplebar.min.js',
'scrollbar/custom.js',

// SIDEBAR
'sidebar-menu.js',

// SLIDER
'slick/slick.min.js',
'slick/slick.js',
'header-slick.js',

// EDITOR
'editors/quill.js',

// DATATABLES
'datatable/datatables/jquery.dataTables.min.js',
'datatable/datatables/dataTables.bootstrap5.js',

// NOTIFICATION
'iziToast.min.js',

// THEME
'config.js',
'script.js',
'script1.js',
//'theme-customizer/customizer.js',
'general.js'


];
@endphp

@foreach ($jss as $js)
<script src="{{ asset('assets/js/' . $js) }}"></script>
@endforeach