<!DOCTYPE html>
<html lang="en">

<head>

@include('partials.meta')

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
 @include('partials.styles')

</head>

<body>

    @includeIf('partials.address',[
        'karim'=>'E-commerce'
    ])
    <!-- Navigation -->


    @includeWhen(true,'partials.navigation',[
        'headerText'=>''
    ])
    @includeIf('partials.address',[
        'karim'=>''
    ])




  <!-- Masthead -->
  @yield('content')


  @include('partials.call-to-action')
  <!-- Icons Grid -->

  <!-- Image Showcases -->


  <!-- Testimonials -->


  <!-- Call to Action -->






  <!-- Footer -->


@include('partials.footer-col')


@includewHEN(true,'partials.footer',[
    'footerText'=>' '
])
 @includeIf('partials.address',[
        'karim'=>'Allrights Reserved By Md.Abdul Karim(Assistent teacher:1995-2023)'
    ])
  <!-- Bootstrap core JavaScript -->
@include('partials.scripts')

</body>

</html>
