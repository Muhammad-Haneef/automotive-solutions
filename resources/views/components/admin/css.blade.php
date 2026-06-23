<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">

@php
$csss = [

// BOOTSTRAP
'vendors/bootstrap.css',

// ICON
'fontawesome.css',
'vendors/icofont.css',
'vendors/themify.css',
//'vendors/flag-icon.css',
'vendors/feather-icon.css',

// SLIDER
'vendors/slick.css',
'vendors/slick-theme.css',

// EDITOR
'vendors/quill.snow.css',

// SCROLLBAR
'vendors/scrollbar.css',

// ANIMATION
'vendors/animate.css',

// DATATABLE
'vendors/jquery.dataTables.css',


// NOTIFICATIONS
'iziToast.min.css',

//THEME
'color-1.css',
'responsive.css',
'style.css',
'custom-style.css'

];
@endphp

@foreach ($csss as $css)
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/' . $css) }}" />
@endforeach