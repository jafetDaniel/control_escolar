<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="css/sb-admin-2.min.css" rel="stylesheet">
@include('layouts.header_student')
@include('students_pages.bienvenido', ['student'=> $student])
@include('layouts.footer')
